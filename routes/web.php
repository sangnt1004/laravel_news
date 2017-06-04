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
Route::get('index','NewController@index')->name('index');
Route::get('detail/{id}','NewController@detail')->name('detail');
Route::get('list','NewController@list')->name('list');
Route::get('add','NewController@add')->name('add');
Route::post('add','NewController@create')->name('create');
Route::get('edit/{id}','NewController@edit')->name('edit');
Route::post('edit/{id}','NewController@update')->name('update');
Route::get('delete/{id}','NewController@delete')->name('delete');

Route::get('ajax/{page}','AjaxController@getDataIndex')->name('getDataIndex'); 
