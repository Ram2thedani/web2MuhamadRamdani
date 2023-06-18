<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\ProductsController@index');
Route::get('create', 'App\Http\Controllers\ProductsController@create');
Route::post('simpan', 'App\Http\Controllers\ProductsController@simpan');
Route::get('{id}/edit', 'App\Http\Controllers\ProductsController@edit');
Route::put('edit/{id}', 'App\Http\Controllers\ProductsController@update');
Route::delete('destroy/{id}', 'App\Http\Controllers\ProductsController@destroy');
