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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'HomeController@products')->name('products');
Route::get('product/{id}','HomeController@product')->name('product');
Route::get('/add_product', 'HomeController@add_product')->name('add_product');
Route::get('/save_product', 'HomeController@save_product')->name('save_product');
Route::get('/update_product/{id}', 'HomeController@update_product')->name('update_product');
Route::get('/update_product_save/{id}', 'HomeController@update_product_save')->name('update_product_save');
Route::get('/delete_product/{id}', 'HomeController@delete_product')->name('delete_product');

Route::get('/parties', 'HomeController@parties')->name('parties');
Route::get('/party/{id}', 'HomeController@party')->name('party');
