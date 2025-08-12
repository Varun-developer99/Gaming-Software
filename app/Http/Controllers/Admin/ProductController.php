<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductVariant;
use App\Models\ProductFeatures;
use App\Models\ProductHowToWear;
use App\Models\ProductVariantImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use App\Models\ProductAdditionalInformation;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $product = Product::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new Product)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $product = $product->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }

        $product = $product->orderBy('id','desc')->paginate($numbers);

        return view('admin.product.datatable', compact('product'));
    }

    public function add()
    {
        return view('admin.product.add_edit');
    }

    public function insert(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:products,name,'.$request->id,
        ]);

        $input = $request->all();

        $input['created_by_id'] = auth()->user()->id;
        $input['slug'] = Str::slug($input['name']);
        $input['shop_by_body_part_ids'] = json_encode($request->shop_by_body_part_ids ?? []);
        $input['shop_by_activity_ids'] = json_encode($request->shop_by_activity_ids ?? []);
        $input['shop_by_daily_support_ids'] = json_encode($request->shop_by_daily_support_ids ?? []);
        $input['shop_by_brand_ids'] = json_encode($request->shop_by_brand_ids ?? []);
        $input['attribute_ids'] = json_encode($request->attribute_ids ?? []);
        $input['attribute_value_ids'] = json_encode($request->attribute_value_ids ?? []);
        $input['enable_product_benefits'] = $request->enable_product_benefits ?? 0;
        $input['enable_product_features'] = $request->enable_product_features ?? 0;
        $input['enable_how_to_wear'] = $request->enable_how_to_wear ?? 0;
        $input['faq_ids'] = json_encode($request->faq_ids ?? []);
        $input['enable_faq'] = $request->enable_faq ?? 0;
        $input['is_featured'] = $request->is_featured ?? 0;
        $input['status'] = $request->status ?? 0;

        $product = Product::updateOrCreate(['id' => $input['id']],$input);

        if($request->hasFile('main_img')) {
            $product->clearMediaCollection('main_img');
            $product->addMultipleMediaFromRequest(['main_img'])->each(function ($fileAdder) {
                $fileAdder->toMediaCollection('main_img');
            });
        }
        if($request->hasFile('gallery_img')) {
            $product->addMultipleMediaFromRequest(['gallery_img'])->each(function ($fileAdder) {
                $fileAdder->toMediaCollection('gallery_img');
            });
        }
        if($request->hasFile('product_benefits_img')) {
            $product->addMultipleMediaFromRequest(['product_benefits_img'])->each(function ($fileAdder) {
                $fileAdder->toMediaCollection('product_benefits_img');
            });
        }

        $product_variant_ids = [];
        foreach (($request->product_variants ?? []) as $key => $product_variants) {
            $product_variants['created_by_id'] = auth()->user()->id;
            $product_variants['shop_by_body_part_id'] = $product->shop_by_body_part_id;
            $product_variants['shop_by_activity_id'] = $product->shop_by_activity_id;
            $product_variants['shop_by_daily_support_id'] = $product->shop_by_daily_support_id;
            $product_variants['shop_by_brand_id'] = $product->shop_by_brand_id;
            $product_variants['product_id'] = $product->id;
            $product_variants['status'] = $product_variants['status'] ?? 0;
            $product_variant_ids[] = ProductVariant::updateOrCreate(['product_id' => $product_variants['product_id'], 'attribute_value_ids' => $product_variants['attribute_value_ids']],$product_variants)->id;
        }
        ProductVariant::where('product_id', $product->id)->whereNotIn('id', $product_variant_ids)->delete();

        foreach (($request->variant_images ?? []) as $key => $variant_images) {
            if(($variant_images['img'] ?? '') != ''){
                $new_variant_images = [];
                foreach (($variant_images['img'] ?? []) as $key => $file) {
                    $random_file_name = rand(00000,99999);
                    $file_name = 'img'.time() . $random_file_name . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path().'/uploads/ProductVariantImage',$file_name);

                    $new_variant_images['img'] = '/uploads/ProductVariantImage/'.$file_name;
                    $new_variant_images['created_by_id'] = auth()->user()->id;
                    $new_variant_images['product_id'] = $product->id;
                    $new_variant_images['attribute_value_id'] = $variant_images['attribute_value_id'];
                    ProductVariantImage::create($new_variant_images);
                }
            }
        }

        $product_additional_information_ids = [];
        foreach (($request->product_info ?? []) as $key => $product_info) {
            $product_info['created_by_id'] = auth()->user()->id;
            $product_info['product_id'] = $product->id;
            $product_additional_information = ProductAdditionalInformation::updateOrCreate(['id' => $product_info['id']],$product_info);
            $product_additional_information_ids[] = $product_additional_information->id;
        }
        ProductAdditionalInformation::where('product_id', $product->id)->whereNotIn('id', $product_additional_information_ids)->delete();

        $product_features_ids = [];
        foreach (($request->product_features ?? []) as $key => $product_features) {
            $product_features['created_by_id'] = auth()->user()->id;
            $product_features['product_id'] = $product->id;
            if(($product_features['img'] ?? '') != ''){
                $random_file_name = rand(00000,99999);
                $file = $product_features['img'];
                $file_name = 'img'.time() . $random_file_name . '.' . $file->getClientOriginalExtension();
                $file->move(public_path().'/uploads/ProductFeatures',$file_name);
                $product_features['img']= '/uploads/ProductFeatures/'.$file_name;
                if(file_exists(public_path($product_features['old_img'] ?? '#'))){
                    unlink(public_path($product_features['old_img'] ?? '#'));
                }
            }
            $product_features_ids[] = ProductFeatures::updateOrCreate(['id' => $product_features['id']],$product_features)->id;
        }
        ProductFeatures::where('product_id', $product->id)->whereNotIn('id', $product_features_ids)->delete();

        $how_to_wear_ids = [];
        foreach (($request->how_to_wear ?? []) as $key => $how_to_wear) {
            $how_to_wear['created_by_id'] = auth()->user()->id;
            $how_to_wear['product_id'] = $product->id;
            $how_to_wear_ids[] = ProductHowToWear::updateOrCreate(['id' => $how_to_wear['id']],$how_to_wear)->id;
        }
        ProductHowToWear::where('product_id', $product->id)->whereNotIn('id', $how_to_wear_ids)->delete();


        return redirect()->route('admin.product.edit',$product->id)->with('success','Product Saved Successfully');
    }

    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        return view('admin.product.add_edit', compact('product'));
    }

    public function delete(Request $request)
    {
        $product = Product::find($request->id)->delete();

        return redirect()->back()->with('danger','Product Deleted Successfully');
    }

    public function status($id)
    {
        $product = Product::find($id);
        if($product->status == 1){
            $product->status = 0;
        }else{
            $product->status = 1;
        }
        $product->save();

        return $product->status;
    }

    public function ajax_product_variants(Request $request)
    {
        $attribute_value_ids  = [];
        foreach (($request->attribute_value_ids ?? []) as $key => $value) {
            $attribute_value_ids[] = $value;
        }
        $combinations = $this->generate_combination($attribute_value_ids);

        return view('admin.product.ajax_product_variants', compact('combinations','request'));
    }

    public function generate_combination($arrays, $i=0)
    {
        if (!isset($arrays[$i])) {
            return array();
        }
        if ($i == count($arrays) - 1) {
            $result = array();
            foreach ($arrays[$i] as $v) {
                $result[][] = $v;
            }
            return $result;
        }

        // get combinations from subsequent arrays
        $tmp = $this->generate_combination($arrays, $i + 1);

        $result = array();

        // concat each array from tmp with each element from $arrays[$i]
        foreach ($arrays[$i] as $v) {
            foreach ($tmp as $t) {
                $result[] = is_array($t) ? array_merge(array($v), $t) : array($v, $t);
            }
        }

        return $result;
    }

    function delete_variant_img($id)
    {
        ProductVariantImage::find($id)->delete();

        return redirect()->back()->with('danger','Product Variant Image Deleted Successfully');
    }
}
