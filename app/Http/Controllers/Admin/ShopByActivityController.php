<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ShopByActivity;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class ShopByActivityController extends Controller
{
    public function index()
    {
        return view('admin.shop_by_activity.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $shop_by_activity = ShopByActivity::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new ShopByActivity)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $shop_by_activity = $shop_by_activity->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $shop_by_activity = $shop_by_activity->orderBy('id','desc')->paginate($numbers);

        return view('admin.shop_by_activity.datatable', compact('shop_by_activity'));
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
            $file->move(public_path().'/uploads/ShopByActivity',$file_name);
            $input['img']= '/uploads/ShopByActivity/'.$file_name;
            if(file_exists(public_path($request->old_img ?? ''))){
                unlink(public_path($request->old_img ?? ''));
            }
        }

        $shop_by_activity = ShopByActivity::updateOrCreate(['id' => $input['id']],$input);

        $item = $shop_by_activity;
        $response['id'] = $item['id'];
        $response['html'] = view('admin.shop_by_activity.datatable_tr', compact('item'))->render();
        $response['message'] = 'Shop By Activity Saved Successfully';
        
        return $response;
    }

    public function edit(Request $request)
    {
        $shop_by_activity = ShopByActivity::find($request->id);
        return view('admin.shop_by_activity.ajax_edit', compact('shop_by_activity'));
    }

    public function delete(Request $request)
    {
        $shop_by_activity = ShopByActivity::find($request->id)->delete();

        return redirect()->back()->with('danger','Shop By Activity Deleted Successfully');
    }

    public function status($id)
    {
        $shop_by_activity = ShopByActivity::find($id);
        if($shop_by_activity->status == 1){
            $shop_by_activity->status = 0;
        }else{
            $shop_by_activity->status = 1;
        }
        $shop_by_activity->save();

        return $shop_by_activity->status;
    }
}
