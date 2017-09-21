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

Route::get('/admin', 'Admin\AdminController@index');
Route::resource('/admin/category', 'Admin\CategoryController');
Route::resource('/admin/article', 'Admin\ArticleController');
Route::get('/admin/search', 'Admin\ArticleController@search')->name('admin.search');


Route::get('/', 'MainController@index');

Route::get('search/', 'MainController@search')->name('main.search');

Route::get('/{category}', 'MainController@category');

Route::get('/{category}/{id}', 'MainController@show');
