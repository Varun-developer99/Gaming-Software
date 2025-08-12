<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ShopByBodyPart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class ShopByBodyPartController extends Controller
{
    public function index()
    {
        return view('admin.shop_by_body_part.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $shop_by_body_part = ShopByBodyPart::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new ShopByBodyPart)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $shop_by_body_part = $shop_by_body_part->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $shop_by_body_part = $shop_by_body_part->orderBy('id','desc')->paginate($numbers);

        return view('admin.shop_by_body_part.datatable', compact('shop_by_body_part'));
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
            $file->move(public_path().'/uploads/ShopByBodyPart',$file_name);
            $input['img']= '/uploads/ShopByBodyPart/'.$file_name;
            if(file_exists(public_path($request->old_img ?? ''))){
                unlink(public_path($request->old_img ?? ''));
            }
        }

        $shop_by_body_part = ShopByBodyPart::updateOrCreate(['id' => $input['id']],$input);

        $item = $shop_by_body_part;
        $response['id'] = $item['id'];
        $response['html'] = view('admin.shop_by_body_part.datatable_tr', compact('item'))->render();
        $response['message'] = 'Shop By Body Part Saved Successfully';
        
        return $response;
    }

    public function edit(Request $request)
    {
        $shop_by_body_part = ShopByBodyPart::find($request->id);
        return view('admin.shop_by_body_part.ajax_edit', compact('shop_by_body_part'));
    }

    public function delete(Request $request)
    {
        $shop_by_body_part = ShopByBodyPart::find($request->id)->delete();

        return redirect()->back()->with('danger','Shop By Body Part Deleted Successfully');
    }

    public function status($id)
    {
        $shop_by_body_part = ShopByBodyPart::find($id);
        if($shop_by_body_part->status == 1){
            $shop_by_body_part->status = 0;
        }else{
            $shop_by_body_part->status = 1;
        }
        $shop_by_body_part->save();

        return $shop_by_body_part->status;
    }
}
