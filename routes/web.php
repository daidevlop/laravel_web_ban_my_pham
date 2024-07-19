<?php


use App\Http\Controllers\admin\ProductAdmintController;
use App\Http\Controllers\client\ProductClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layouts.master');
});

Route::resource('products-admin', ProductAdmintController::class);

Route::resource('products-client', ProductClientController::class);