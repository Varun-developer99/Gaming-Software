<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attribute;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AttributeValue;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class AttributeController extends Controller
{
    public function index()
    {
        return view('admin.attribute.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $attribute = Attribute::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new Attribute)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $attribute = $attribute->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $attribute = $attribute->orderBy('id','desc')->paginate($numbers);

        return view('admin.attribute.datatable', compact('attribute'));
    }

    public function insert(Request $request)
    {
        if(Attribute::whereNotIn('id',[$request->id])->where('name',$request->name)->where('deleted_at',null)->first())
        {
            return 'Name Already Exist';
        }else{
            $input = $request->all();
            $input['created_by_id'] = auth()->user()->id;
            $input['input_type'] = 'select';
            $input['slug'] = Str::slug($request->name);;
            $input['status'] = $request->status ?? 0;

            $item = Attribute::updateOrCreate(['id' => $input['id']],$input);

            foreach ($request->attribute_values as $key => $value) {
                $value['created_by_id'] = auth()->user()->id;
                $value['attribute_id'] = $item->id;
                $value['status'] = 1;
                AttributeValue::updateOrCreate(['id' => $value['id']],$value);
            }

            $response['id'] = $item->id;
            $response['message'] = 'Attribute Saved Successfully';
            $response['html'] = view('admin.attribute.datatable_tr', compact('item'))->render();
            return $response;
        }
    }

    public function edit(Request $request)
    {
        $attribute = Attribute::find($request->id);
        return view('admin.attribute.ajax_edit', compact('attribute'));
    }

    public function delete(Request $request)
    {
        $attribute = Attribute::find($request->id)->delete();

        return redirect()->back()->with('danger','Attribute Deleted Successfully');
    }

    public function status($id)
    {
        $attribute = Attribute::find($id);
        if($attribute->status == 1){
            $attribute->status = 0;
        }else{
            $attribute->status = 1;
        }
        $attribute->save();

        return $attribute->status;
    }
}
