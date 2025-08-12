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
        Schema::create('product_additional_information', function (Blueprint $table) {
            $table->id();
            $table->string('created_by_id')->nullable();
            $table->text('product_id')->nullable();
            $table->text('name')->nullable();
            $table->text('value')->nullable();
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_additional_information');
    }
};
