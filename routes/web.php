<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\admin\CategoryAdminController;
use App\Http\Controllers\admin\OderController;
use App\Http\Controllers\admin\PayOnlineController;
use App\Http\Controllers\admin\ProductAdmintController;
use App\Http\Controllers\client\CarController;
use App\Http\Controllers\client\LoginController;
use App\Http\Controllers\client\ProductClientController;
use App\Http\Controllers\client\RegisterController;
use App\Http\Controllers\thanhToanController;
use App\Http\Controllers\VNPayController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductClientController::class, 'index']);

Route::resource('products-admin', ProductAdmintController::class)->middleware('checkLogin');
Route::resource('products-client', ProductClientController::class);

Route::resource('category-admin', CategoryAdminController::class);

Route::resource('account-admin', \App\Http\Controllers\Admin\AccountController::class);

route::get('register', [RegisterController::class, 'register'])->name('register');
route::post('post-register', [RegisterController::class, 'postRegister'])->name('postRegister');

route::get('login', [LoginController::class, 'login'])->name('login');
route::post('post-login', [LoginController::class, 'postLogin'])->name('postLogin');

route::get('logout', [LoginController::class, 'logout'])->name('logout');

route::resource('car', CarController::class);
route::resource('thanh-toan', thanhToanController::class);
route::get('oder-success', [CarController::class, 'oderSuccess'])->name('oderSuccess');

Route::get('/vnpay', [VNPayController::class, 'createPayment'])->name('vnpay.create');
Route::get('/vnpay-return', [VNPayController::class, 'returnPayment'])->name('vnpay.return');

route::resource('oder',OderController::class);