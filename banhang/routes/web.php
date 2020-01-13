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
Route::get('/trangchu','PageController@getIndex');
Route::get('/loaisanpham','PageController@getLoaisanpham');
Route::get('/chitiet/{id}','PageController@getChitiet');
Route::get('/lienhe','PageController@getLienhe');
Route::get('/gioithieu','PageController@getGioithieu');
Route::get('/gioithieu2','PageController@getGioithieu');