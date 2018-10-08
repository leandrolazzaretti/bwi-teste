<?php

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
    return view('index');
})->name('index');

Route::get('/background', function () {
    return view('background');
})->name('background');

Route::get('/whoweare', function () {
    return view('who_we_are');
})->name('who_we_are');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/ourvalues', function () {
    return view('our_values');
})->name('our_values');

Route::get('/products', function () {
    return view('products');
})->name('products');
