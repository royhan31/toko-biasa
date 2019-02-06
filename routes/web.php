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

Route::get('/category/categories', 'CategoriesController@index')->name('category.categories');
Route::post('/category/categories', 'CategoriesController@addCategory')->name('category.addcategory');
Route::get('/category/{id}/edit', 'CategoriesController@editCategory')->name('editcategory');
Route::patch('/category/{id}/edit', 'CategoriesController@updateCategory')->name('updatecategory');

Route::get('/category/sub_category', 'SubCategoriesController@index')->name('category.sub_category');
Route::post('/category/sub_category', 'SubCategoriesController@addSub')->name('category.addsub');

Route::get('/product/product', 'ProductController@index')->name('product.product');
Route::get('/product/add_product', 'ProductController@addProduct')->name('product.add_product');

Route::get('/customer/user', 'UserController@index')->name('customer.user');

Route::get('/order/order', 'OrderController@index')->name('order.order');
Route::get('/order/detail', 'OrderController@detail')->name('order.detail');
