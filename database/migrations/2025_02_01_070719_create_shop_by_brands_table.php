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
        Schema::create('shop_by_brands', function (Blueprint $table) {
            $table->id();
            $table->text('created_by_id')->nullable();
            $table->text('name')->nullable();
            $table->text('img')->nullable();
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
        Schema::dropIfExists('shop_by_brands');
    }
};
