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
        Schema::table('users', function (Blueprint $table) {
            $table->string('logo')->nullable()->after('show_password');
            $table->string('background_colour')->nullable()->after('logo');
            $table->string('domain')->nullable()->after('background_colour');
            $table->integer('points')->default(0)->after('domain');
            $table->string('department_id')->nullable()->after('points');
            $table->string('category_id')->nullable()->after('department_id');
            $table->string('sub_admin_id')->nullable()->after('category_id');
            $table->integer('status')->default(1)->after('sub_admin_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['logo', 'background_colour', 'domain', 'points', 'department_id', 'category_id', 'sub_admin_id', 'status']);
        });
    }
};
