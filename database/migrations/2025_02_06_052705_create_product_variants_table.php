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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->string('created_by_id')->nullable();
            $table->text('shop_by_body_part_id')->nullable();
            $table->text('shop_by_activity_id')->nullable();
            $table->text('shop_by_daily_support_id')->nullable();
            $table->text('shop_by_brand_id')->nullable();
            $table->text('product_id')->nullable();
            $table->longText('attribute_value_ids')->nullable();
            $table->text('variant_name')->nullable();
            $table->text('mrp_price')->nullable();
            $table->text('sale_price')->nullable();
            $table->text('sku')->nullable();
            $table->text('status')->nullable();
            $table->text('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
