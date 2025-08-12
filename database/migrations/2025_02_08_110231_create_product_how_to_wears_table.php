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
        Schema::create('product_how_to_wears', function (Blueprint $table) {
            $table->id();
            $table->string('created_by_id')->nullable();
            $table->text('product_id')->nullable();
            $table->text('vimeo_link')->nullable();
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_how_to_wears');
    }
};
