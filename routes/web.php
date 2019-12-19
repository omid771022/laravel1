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
Auth::routes();
Route::get('/','indexControlller@index');
Route::get('/posts','postController@index');
Route::get('/orders','OrderConroller@orders');
/////////////////////////////////////////////////
/// route catgories
Route::get('/categories','CatgoryController@categories')->name('categories');
Route::get('/show/{catgory}','CatgoryController@show')->name('show');
Route::get('/categories/create','CatgoryController@create')->name('create')->middleware('auth');
Route::get('/categries/edit/{catgory}','CatgoryController@edit')->name('edit');
Route::get('/categries/destroy/{catgory}','CatgoryController@destroy')->name('destroy');
Route::post('/categries/store','CatgoryController@store')->name('store');
Route::put('/categries/update/{catgory}','CatgoryController@update')->name('update');
