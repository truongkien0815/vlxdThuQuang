<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\DetailsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/type/story', 'App\Http\Controllers\TypeController@story');
Route::post('/product/showe',  'App\Http\Controllers\DetailsController@showe');
Route::post('/product/search', 'App\Http\Controllers\ProductController@search');
Route::post('/product/search_type', 'App\Http\Controllers\ProductController@search_type');

