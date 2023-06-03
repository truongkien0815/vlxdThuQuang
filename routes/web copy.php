<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MyController;
use App\http\Controllers\DocumentController;
use App\http\Controllers\TypeController;
use App\http\Controllers\ProductController;




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

// Route::get('/admin/ss', function () {
//     return view('/admin/product_add');
// });
Route::get('/addproduct', [ProductController::class, 'create']);
Route::get('/addtype', [TypeController::class, 'create']);

Route::get('/', [MyController::class, 'index']);
Route::resource('/product', MyController::class);
Route::resource('/document', DocumentController::class);
Route::resource('/type', TypeController::class);
Route::get('/result', [MyController::class, 'sort']);
Route::get('/admin/products', [ProductController::class, 'index_admin']);
Route::resource('/admin/product', ProductController::class);
Route::get('posts/{id}/edit', 'ProductController@edit');
// Route::get('/admin/products/edit/{name?}', [ProductController::class, 'edit']);




Route::get('/{name?}', [MyController::class, 'web']);