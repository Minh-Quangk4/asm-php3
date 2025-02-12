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
    return view('layouts.index');
})->name('home');

Route::get('/shop', function () {
    return view('layouts.shop');
})->name('shop');

Route::get('/', function () {
    return view('layouts.index');
})->name('home');

Route::get('/adda', function () {
    return view('layouts.adda');
})->name('adda');
