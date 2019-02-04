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

Route::get('/category', 'CategoriesController@index')->name('category');
Route::get('/sub_category', 'CategoriesController@getSub')->name('sub_category');

Route::get('/product', 'ProductController@index')->name('product');
Route::get('/add_product', 'ProductController@addProduct')->name('add_product');

Route::get('/user', 'UserController@index')->name('user');
