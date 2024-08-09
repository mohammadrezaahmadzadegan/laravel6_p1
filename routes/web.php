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

use Illuminate\Support\Facades\Route;

Route::get('/admin','Admin\AdminController@index');
Route::get('/admin2','Admin\AdminController@index2');
Route::get('/admin3','Admin\AdminController@index3');
