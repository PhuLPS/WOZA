<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('product', 'ProductController@index');
// Route::get('product', 'Api/ProductController@index');
// Route::get('product', 'ProductController@index');
Route::get('product', 'App\Http\Controllers\Api\ProductController@index');
Route::get('product/{id}', 'App\Http\Controllers\Api\ProductController@show');
Route::post('product', 'App\Http\Controllers\Api\ProductController@store');
Route::put('product/{id}', 'App\Http\Controllers\Api\ProductController@update');
Route::delete('product/{id}', 'App\Http\Controllers\Api\ProductController@destroy');
Route::get('productByCatagory/{catagory_id}', 'App\Http\Controllers\Api\ProductController@findProductsByCatagory');
