<?php

use Illuminate\Support\Facades\Route;


use App\http\Controllers\MyController;
use App\http\Controllers\DocumentController;
use App\http\Controllers\TypeController;
use App\http\Controllers\ProtypeController;
use App\http\Controllers\HomeController;
use App\http\Controllers\PostController;
use App\http\Controllers\ContactController;
use App\http\Controllers\UserController;


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

Route::get('/page-guest', [HomeController::class,'showPageGuest']);

Route::get('/page-admin', 'HomeController@showPageAdmin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/addpost', [PostController::class, 'addpost']);

Route::get('/ind', [PostController::class, 'ind']);

Route::get('/type_option/{name?}', [TypeController::class, 'show_type']);
Route::post('/addcontactnew', [ContactController::class, 'story']);


Route::resource('/post', PostController::class);
Route::resource('/contact', ContactController::class);
Route::get('/addcontact', [ContactController::class, 'addcontact']);

Route::resource('/user', UserController::class);

Route::resource('/protype', ProtypeController::class);

Route::get('/addproduct', [ProductController::class, 'create']);
Route::get('/addtype', [TypeController::class, 'create']);
Route::get('/addprotype', [ProtypeController::class, 'create']);
Route::get('/adddocument', [DocumentController::class, 'create']);
Route::get('/adduser', [UserController::class, 'create']);



Route::get('/', [MyController::class, 'index']);
Route::get('/sanpham', [MyController::class, 'listsp']);
Route::get('/gioithieu', [MyController::class, 'gioithieu']);
Route::get('/tuyendung', [MyController::class, 'tuyendung']);
Route::get('/lienhe', [MyController::class, 'lienhe']);
Route::get('/dichvu0', [MyController::class, 'dichvu']);
Route::get('/tintuc', [MyController::class, 'tintuc']);


Route::get('/page_document', [DocumentController::class, 'index_tailieu']);

// Route::resource('/admindocument', DocumentController::class);


Route::resource('/post', PostController::class);

Route::resource('/protype', ProtypeController::class);

Route::resource('/product', MyController::class);
Route::resource('/document', DocumentController::class);
Route::resource('/type', TypeController::class);
Route::get('/result', [MyController::class, 'sort']);
Route::get('/admin/products', [ProductController::class, 'index_admin']);
Route::resource('/admin/product', ProductController::class);
Route::get('posts/{id}/edit', 'ProductController@edit');
// Route::get('/admin/products/edit/{name?}', [ProductController::class, 'edit']);




Route::get('/{name?}', [MyController::class, 'web']);



// Route::get('/', function () {
//     return view('welcome');
// });


