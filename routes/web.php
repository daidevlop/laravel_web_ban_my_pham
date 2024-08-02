<?php

use App\Http\Controllers\admin\CategoryAdminController;
use App\Http\Controllers\admin\ProductAdmintController;
use App\Http\Controllers\client\CarController;
use App\Http\Controllers\client\LoginController;
use App\Http\Controllers\client\ProductClientController;
use App\Http\Controllers\client\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductClientController::class,'index']);

Route::resource('products-admin', ProductAdmintController::class)->middleware('checkLogin');
Route::resource('products-client', ProductClientController::class);

Route::resource('category-admin',CategoryAdminController::class);

route::get('register', [RegisterController::class,'register'])->name('register');
route::post('post-register', [RegisterController::class,'postRegister'])->name('postRegister');

route::get('login', [LoginController::class,'login'])->name('login');
route::post('post-login', [LoginController::class,'postLogin'])->name('postLogin');
route::get('logout', [LoginController::class,'logout'])->name('logout');

route::resource('car', CarController::class);
route::get('oder-success', [CarController::class,'oderSuccess'])->name('oderSuccess');

