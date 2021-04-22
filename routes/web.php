<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\StorageController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('test', 'StorageController@sum');

Route::view('home', 'home')->name('home');
Route::view('products', 'product')->name('product');
Route::view('store', 'store');
Route::post('store', 'AccountController@formulaire')->name('modal');
Route::post('store', 'AccountController@traitement')->name('modal');
//  Route::post('store',[AccountController::class, 'show']);
Route::view('pg2', 'pg2');
Route::post('pg2', 'RegisterController@register')->name('pg2');
Route::get('pg2', 'RegisterController@formulaire');
Route::get('pg1', 'connexionController@formulaire');
Route::post('pg1', 'connexionController@traitement')->name('pg1');
Route::get('products', 'StorageController@stock')->name('products');
// Route::get('product', 'StorageController@sum')->name('products');
Route::get('store', 'StorageController@affiche')->name('store'); 




