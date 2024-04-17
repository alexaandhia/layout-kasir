<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.admindash');
});

Route::get('/admin-product', function () {
    return view('admin.product');
});

Route::get('/create-product', function () {
    return view('admin.create-product');
});

Route::get('/admin-transaction', function () {
    return view('admin.transaction');
});

Route::get('/admin-users', function () {
    return view('admin.users');
});

Route::get('/add-user', function () {
    return view('admin.add-user');
});

Route::get('/cashier', function () {
    return view('cashier.cashierdash');
});

Route::get('/cashier-products', function () {
    return view('cashier.products');
});

Route::get('/cashier-transaction', function () {
    return view('cashier.transaction');
});

Route::get('/cashier-add', function () {
    return view('cashier.add');
});

Route::get('/cashier-create', function () {
    return view('cashier.create');
});

Route::get('/login', function () {
    return view('login');
});
