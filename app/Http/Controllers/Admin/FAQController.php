<?php

namespace App\Http\Controllers\Admin;

use App\Models\FAQ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FAQController extends Controller
{
    public function index()
    {
        return view('admin.faq.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $faq = FAQ::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new FAQ)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $faq = $faq->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $faq = $faq->orderBy('id','desc')->paginate($numbers);

        return view('admin.faq.datatable', compact('faq'));
    }

    public function insert(Request $request)
    {
        $input = $request->all();

        $input['created_by_id'] = auth()->user()->id;
        $input['status'] = $request->status ?? 0;

        $faq = FAQ::updateOrCreate(['id' => $input['id']],$input);

        $item = $faq;
        $response['id'] = $item['id'];
        $response['html'] = view('admin.faq.datatable_tr', compact('item'))->render();
        $response['message'] = 'Shop By Activity Saved Successfully';
        
        return $response;
    }

    public function edit(Request $request)
    {
        $faq = FAQ::find($request->id);
        return view('admin.faq.ajax_edit', compact('faq'));
    }

    public function delete(Request $request)
    {
        $faq = FAQ::find($request->id)->delete();

        return redirect()->back()->with('danger','Shop By Activity Deleted Successfully');
    }

    public function status($id)
    {
        $faq = FAQ::find($id);
        if($faq->status == 1){
            $faq->status = 0;
        }else{
            $faq->status = 1;
        }
        $faq->save();

        return $faq->status;
    }
}
