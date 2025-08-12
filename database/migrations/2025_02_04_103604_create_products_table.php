<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('created_by_id')->nullable();
            $table->text('shop_by_body_part_id')->nullable();
            $table->text('shop_by_activity_id')->nullable();
            $table->text('shop_by_daily_support_id')->nullable();
            $table->text('shop_by_brand_id')->nullable();
            $table->text('name')->nullable();
            $table->text('mrp_price')->nullable();
            $table->text('sale_price')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->text('attribute_ids')->nullable();
            $table->text('attribute_value_ids')->nullable();
            $table->text('enable_product_benefits')->nullable();
            $table->text('enable_product_features')->nullable();
            $table->text('enable_how_to_wear')->nullable();
            $table->text('enable_faq')->nullable();
            $table->text('faq_ids')->nullable();
            $table->text('is_featured')->nullable();
            $table->text('status')->nullable();
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
