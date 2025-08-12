<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomeSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class HomeSliderController extends Controller
{
    public function index()
    {
        return view('admin.home_slider.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $home_slider = HomeSlider::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new HomeSlider)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $home_slider = $home_slider->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $home_slider = $home_slider->orderBy('id','desc')->paginate($numbers);

        return view('admin.home_slider.datatable', compact('home_slider'));
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
            $file->move(public_path().'/uploads/HomeSlider',$file_name);
            $input['img']= '/uploads/HomeSlider/'.$file_name;
            if(file_exists(public_path($request->old_img ?? ''))){
                unlink(public_path($request->old_img ?? ''));
            }
        }
        if($request->hasfile('mobile_img')){
            $random_file_name = rand(00000,99999);
            $file = $request->mobile_img;
            $file_name = 'mobile_img'.time() . $random_file_name . '.' . $file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/HomeSlider',$file_name);
            $input['mobile_img']= '/uploads/HomeSlider/'.$file_name;
            if(file_exists(public_path($request->old_mobile_img ?? ''))){
                unlink(public_path($request->old_mobile_img ?? ''));
            }
        }

        $home_slider = HomeSlider::updateOrCreate(['id' => $input['id']],$input);

        $item = $home_slider;
        $response['id'] = $item['id'];
        $response['html'] = view('admin.home_slider.datatable_tr', compact('item'))->render();
        $response['message'] = 'Home Slider Saved Successfully';
        
        return $response;
    }

    public function edit(Request $request)
    {
        $home_slider = HomeSlider::find($request->id);
        return view('admin.home_slider.ajax_edit', compact('home_slider'));
    }

    public function delete(Request $request)
    {
        $home_slider = HomeSlider::find($request->id)->delete();

        return redirect()->back()->with('danger','Home Slider Deleted Successfully');
    }

    public function status($id)
    {
        $home_slider = HomeSlider::find($id);
        if($home_slider->status == 1){
            $home_slider->status = 0;
        }else{
            $home_slider->status = 1;
        }
        $home_slider->save();

        return $home_slider->status;
    }
}
