<?php

use App\Http\Controllers\admin\ProductAdmintController;
use App\Http\Controllers\client\LoginController;
use App\Http\Controllers\client\ProductClientController;
use App\Http\Controllers\client\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductClientController::class,'index']);

Route::resource('products-admin', ProductAdmintController::class);

Route::resource('products-client', ProductClientController::class);

route::get('register', [RegisterController::class,'register'])->name('register');
route::post('post-register', [RegisterController::class,'postRegister'])->name('postRegister');

route::get('login', [LoginController::class,'login'])->name('login');