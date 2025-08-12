<?php

namespace App\Http\Controllers\Admin;

use App\Models\ShopByBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class ShopByBrandController extends Controller
{
    public function index()
    {
        return view('admin.shop_by_brand.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $shop_by_brand = ShopByBrand::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new ShopByBrand)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $shop_by_brand = $shop_by_brand->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $shop_by_brand = $shop_by_brand->orderBy('id','desc')->paginate($numbers);

        return view('admin.shop_by_brand.datatable', compact('shop_by_brand'));
    }

    public function insert(Request $request)
    {
        $input = $request->all();

        $input['created_by_id'] = auth()->user()->id;
        $input['status'] = $request->status ?? 0;

        if($request->hasfile('img')){
            $random_file_name = rand(00000,99999);
            $file = $request->img;
            $file_name = 'img'.time() . $random_file_name . '.' . $file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/ShopByBrand',$file_name);
            $input['img']= '/uploads/ShopByBrand/'.$file_name;
            if(file_exists(public_path($request->old_img ?? ''))){
                unlink(public_path($request->old_img ?? ''));
            }
        }

        $shop_by_brand = ShopByBrand::updateOrCreate(['id' => $input['id']],$input);

        $item = $shop_by_brand;
        $response['id'] = $item['id'];
        $response['html'] = view('admin.shop_by_brand.datatable_tr', compact('item'))->render();
        $response['message'] = 'Shop By Brand Saved Successfully';
        
        return $response;
    }

    public function edit(Request $request)
    {
        $shop_by_brand = ShopByBrand::find($request->id);
        return view('admin.shop_by_brand.ajax_edit', compact('shop_by_brand'));
    }

    public function delete(Request $request)
    {
        $shop_by_brand = ShopByBrand::find($request->id)->delete();

        return redirect()->back()->with('danger','Shop By Brand Deleted Successfully');
    }

    public function status($id)
    {
        $shop_by_brand = ShopByBrand::find($id);
        if($shop_by_brand->status == 1){
            $shop_by_brand->status = 0;
        }else{
            $shop_by_brand->status = 1;
        }
        $shop_by_brand->save();

        return $shop_by_brand->status;
    }
}
