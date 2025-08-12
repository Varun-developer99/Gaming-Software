<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomeVideo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class HomeVideoController extends Controller
{
    public function index()
    {
        return view('admin.home_video.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $home_video = HomeVideo::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new HomeVideo)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $home_video = $home_video->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $home_video = $home_video->orderBy('id','desc')->paginate($numbers);

        return view('admin.home_video.datatable', compact('home_video'));
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
            $file->move(public_path().'/uploads/HomeVideo',$file_name);
            $input['img']= '/uploads/HomeVideo/'.$file_name;
            if(file_exists(public_path($request->old_img ?? ''))){
                unlink(public_path($request->old_img ?? ''));
            }
        }

        if($request->hasfile('video')){
            $random_file_name = rand(00000,99999);
            $file = $request->video;
            $file_name = 'video'.time() . $random_file_name . '.' . $file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/HomeVideo',$file_name);
            $input['video']= '/uploads/HomeVideo/'.$file_name;
            if(file_exists(public_path($request->old_video ?? ''))){
                unlink(public_path($request->old_video ?? ''));
            }
        }
        
        $home_video = HomeVideo::updateOrCreate(['id' => $input['id']],$input);

        $item = $home_video;
        $response['id'] = $item['id'];
        $response['html'] = view('admin.home_video.datatable_tr', compact('item'))->render();
        $response['message'] = 'Home Video Saved Successfully';
        
        return $response;
    }

    public function edit(Request $request)
    {
        $home_video = HomeVideo::find($request->id);
        return view('admin.home_video.ajax_edit', compact('home_video'));
    }

    public function delete(Request $request)
    {
        $home_video = HomeVideo::find($request->id)->delete();

        return redirect()->back()->with('danger','Home Video Deleted Successfully');
    }

    public function status($id)
    {
        $home_video = HomeVideo::find($id);
        if($home_video->status == 1){
            $home_video->status = 0;
        }else{
            $home_video->status = 1;
        }
        $home_video->save();

        return $home_video->status;
    }
}
