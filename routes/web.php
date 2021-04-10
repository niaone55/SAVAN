<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;



Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home')->name('home');
Route::view('products', 'product')->name('product');
Route::view('store', 'store');
Route::post('store', 'AccountController@formulaire')->name('modal');
Route::post('store', 'AccountController@traitement')->name('modal');
Route::get('store', 'AccountController@liste')->name('store');

