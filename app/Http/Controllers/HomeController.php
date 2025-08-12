<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductVariant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function product_details(Request $request)
    {   
        $products = Product::all(); // Fetch all products
        return view('product_details', compact('products'));
    }

    public function update_ids_in_json_format()
    {
        $product = Product::get();

        foreach ($product as $key => $item) {
            $product_variant = ProductVariant::where('product_id',$item->id)->first();
            $item->shop_by_body_part_ids = $product_variant->shop_by_body_part_ids;
            $item->shop_by_activity_ids = $product_variant->shop_by_activity_ids;
            $item->shop_by_daily_support_ids = $product_variant->shop_by_daily_support_ids;
            $item->shop_by_brand_ids = $product_variant->shop_by_brand_ids;
            $item->save();
        }

        // $product_variant = ProductVariant::get();
        // foreach ($product_variant as $key => $item) {
        //     $item->shop_by_body_part_ids = json_encode([$item->shop_by_body_part_ids]);
        //     $item->shop_by_activity_ids = json_encode([$item->shop_by_activity_ids]);
        //     $item->shop_by_daily_support_ids = json_encode([$item->shop_by_daily_support_ids]);
        //     $item->shop_by_brand_ids = json_encode([$item->shop_by_brand_ids]);
        //     $item->save();
        // }

        dd('Done');
    }
}
