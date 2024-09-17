<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EVoucherController;
use App\Http\Controllers\ECouponController;
use App\Http\Controllers\PromotionController;

Route::get('/', function () {
    return view('home');
});

// E-Voucher routes
Route::get('/e-voucher/create', [EVoucherController::class, 'create'])->name('e-voucher.create');
Route::post('/e-voucher', [EVoucherController::class, 'store'])->name('e-voucher.store');

// E-Coupon routes
Route::get('/e-coupon/create', [ECouponController::class, 'create'])->name('e-coupon.create');
Route::post('/e-coupon', [ECouponController::class, 'store'])->name('e-coupon.store');

// Promotion routes
Route::get('/promotion/create', [PromotionController::class, 'create'])->name('promotion.create');
Route::post('/promotion', [PromotionController::class, 'store'])->name('promotion.store');