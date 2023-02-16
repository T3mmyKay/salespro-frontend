<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', static fn() => view('welcome')
);

Route::as('auth.')->group(function () {
    Route::view('/register', 'auth.register')->name('register');

    Route::view('/login', 'auth.login')->name('login');

    Route::view('/forgot-password', 'auth.forgotpassword')->name('forgot-password');
});


Route::middleware(['auth-session'])->group(function () {

    Route::view('/dashboard', 'pages.dashboard')->name('dashboard');

    Route::view('/affiliates', 'pages.affiliates')->name('affiliates');

    Route::view('/customers', 'pages.customers')->name('customers');

    Route::view('/profile', 'pages.profile')->name('profile');

    Route::view('/staffs', 'pages.staffs')->name('staffs');

    Route::view('/suppliers', 'pages.suppliers')->name('suppliers');

    Route::view('/businesses', 'pages.businesses')->name('businesses');

    Route::view('/restock-items', 'pages.restock-items')->name('restock-items');

    Route::view('/sales', 'pages.sales')->name('sales');

    Route::view('/customer-profile', 'pages.customer-profile')->name('customer-profile');

    Route::view('/product-categories', 'pages.product-categories')->name('product-categories');

    Route::view('/return-from-customer', 'pages.return_customer')->name('return-from-customer');

    Route::view('/return-to-supplier', 'pages.return_supplier')->name('return-to-supplier');

    Route::view('/staff-profile', 'pages.staff-profile')->name('staff-profile');

    Route::view('/stock-details', 'pages.stock-details')->name('stock-details');

    Route::view('/stocking', 'pages.stocking')->name('stocking');

    Route::view('/stock-items', 'pages.stock-items')->name('stock-items');

    Route::view('/stock-order', 'pages.stock-order')->name('stock-order');

    Route::view('/unstocking', 'pages.unstock')->name('unstocking');

    Route::view('/unstock-items', 'pages.unstock-items')->name('unstock-items');

});

Route::controller(AuthController::class)->group(static function () {
    Route::post('/log-session', 'sessionLoginInfomation');
    Route::get('/logout', 'sessionLogout')->name('logout');
});
