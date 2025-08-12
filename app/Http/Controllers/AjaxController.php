<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Models\AttributeValue;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    function login_modal(Request $request)
    {
        return view('front.ajax.login_modal');
    }
    function register_modal(Request $request)
    {
        return view('front.ajax.register_modal');
    }
    function get_attribute_values(Request $request)
    {
        $attributes = Attribute::whereIn('id',($request->attribute_ids ?? []))->get();

        return view('admin.ajax.get_attribute_values', compact('attributes'));
    }
}
