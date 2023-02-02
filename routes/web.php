<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('dashboard', function () {
    return view('admin.index');
});

Route::get('persediaan-bahan', function () {
    return view('admin.persediaan-bahan.index');
});

Route::get('persediaan-bahan/add', function () {
    return view('admin.persediaan-bahan.input');
});

Route::get('buffer-stock', function () {
    return view('admin.buffer-stock.index');
});

Route::get('buffer-stock/detail', function () {
    return view('admin.buffer-stock.detail');
});
