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

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Route::get('/',function() {
//     return DB::select('SELECT * FROM products');
//    $r = product::all();
//    return $r;
// });

//Route::resource('products', ProductController::class);
Route::resource('products', 'ProductController');
Route::get('trash',['uses'=>'ProductController@trash','as'=>'products.trash']);
Route::get('finalDelete',['uses'=>'ProductController@finalDelete','as'=>'products.finalDelete']);
Route::get('/export','ProductController@export')->name('products.export');
Route::delete('/finalremoval/{product?}','ProductController@finalremoval')->name('products.finalremoval');

Route::get('/recovery/{product?}','ProductController@recovery')->name('products.recovery');
