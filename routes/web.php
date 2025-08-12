<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\WebsiteController;
use App\Http\Controllers\Front\FirstGameController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Customer\CustomerDashboardController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('product-details/{slug}', [HomeController::class, 'product_details'])->name('product_details');
Route::get('update_ids_in_json_format', [HomeController::class, 'update_ids_in_json_format']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('media/delete/{id}', [WebsiteController::class, 'media_delete'])->name('media.delete');
});

Route::group(['middleware' => ['auth','is_Admin'], 'prefix' => 'admin'], function () {

    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Website Setting
    Route::get('website-setting', [WebsiteController::class, 'index'])->name('admin.website.setting');
    Route::post('website-setting/insert', action: [WebsiteController::class, 'insert'])->name('admin.website.setting.insert');

    //User Management
    Route::get('user', [EmployeeController::class, 'index'])->name('user.index');
    Route::post('user/store', [EmployeeController::class, 'store'])->name('user.store');
    Route::get('user/datatable', [EmployeeController::class, 'datatable'])->name('user.datatable');
    Route::get('user/edit_modal/{id}', [EmployeeController::class, 'edit_modal'])->name('user.edit_modal');
    Route::get('user/delete/{id}', [EmployeeController::class, 'delete'])->name('user.delete');
    Route::get('user/change_status/{id}', [EmployeeController::class, 'change_status'])->name('user.change_status');

    // home_slider
    Route::get('home_slider', [HomeSliderController::class, 'index'])->name('admin.home_slider');
    Route::get('home_slider/datatable', [HomeSliderController::class, 'datatable'])->name('admin.home_slider.datatable');
    Route::post('home_slider/insert', [HomeSliderController::class, 'insert'])->name('admin.home_slider.insert');
    Route::get('home_slider/edit', [HomeSliderController::class, 'edit'])->name('admin.home_slider.edit');
    Route::get('home_slider/delete/{id}', [HomeSliderController::class, 'delete'])->name('admin.home_slider.delete');
    Route::get('home_slider/status', [HomeSliderController::class, 'status'])->name('admin.home_slider.status');
});


Route::group(['middleware' => ['auth','is_Customer'], 'prefix' => 'customer'], function () {
    Route::get('dashboard', [CustomerDashboardController::class, 'dashboard'])->name('customer.dashboard');
    Route::get('account_details', [CustomerDashboardController::class, 'account_details'])->name('customer.account_details');
});

// Ajax Route
Route::get('ajax/login_modal', [AjaxController::class, 'login_modal'])->name('ajax.login_modal');
Route::get('ajax/register_modal', [AjaxController::class, 'register_modal'])->name('ajax.register_modal');
Route::get('ajax/get_attribute_values', [AjaxController::class, 'get_attribute_values'])->name('ajax.get_attribute_values');

//Front Page Route
Route::get('first-game', [FirstGameController::class, 'index'])->name('first_game.index');