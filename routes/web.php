<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\TitleController;

use App\http\Controllers\MyController;
use App\http\Controllers\DocumentController;
use App\http\Controllers\TypeController;
use App\http\Controllers\ProtypeController;
use App\http\Controllers\HomeController;
use App\http\Controllers\PostController;
use App\http\Controllers\ContactController;
use App\http\Controllers\UserController;
use App\http\Controllers\PhoneController;
use App\http\Controllers\SliderController;
use App\http\Controllers\FootController;
use App\http\Controllers\PaymentsController;
use App\Http\Controllers\DetailsController;

use App\Http\Controllers\ItemController;





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


Route::get('/slide', function () {
    return view('/slide');
});

Route::post('/lienhe_sdt', 'App\Http\Controllers\ContactController@lienhe_sdt');


Route::get('date', [DetailsController::class,'index_data']);


Route::resource('/item', 'App\Http\Controllers\ItemController');

Route::get('/data', 'App\Http\Controllers\TypeController@index_data');

Route::get('/sort_type', 'App\Http\Controllers\MyController@sort_type');
Route::post('/da_nhan/{name?}', 'App\Http\Controllers\DetailsController@update_chuaxuly');
Route::post('/xacnhan/{name?}', 'App\Http\Controllers\DetailsController@update_hoanthanh');
Route::resource('/detail', 'App\Http\Controllers\DetailsController');
Route::resource('/payment', 'App\Http\Controllers\PaymentsController');
Route::get('/createpayment', 'App\Http\Controllers\MyController@createpayment')->name('createpayment');

Route::get('/checkout', 'App\Http\Controllers\MyController@checkout')->name('checkout');

Route::get('/carts/{action?}/{product_id?}', 'App\Http\Controllers\MyController@carts')->name('carts');
Route::get('/timkiem', 'App\Http\Controllers\MyController@sort_get');

Route::get('/baohanh', 'App\Http\Controllers\MyController@baohanh');
Route::get('/giaohang', 'App\Http\Controllers\MyController@giaohang');

Route::get('/addfooter', 'App\Http\Controllers\BookController@addfooter');

Route::resource('/foot', 'App\Http\Controllers\BookController');

Route::get('/page-guest', [HomeController::class,'showPageGuest']);

Route::get('/page-admin', 'HomeController@showPageAdmin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/addtitle', 'App\Http\Controllers\TitleController@addtitle');

Route::get('/addpost', 'App\Http\Controllers\PostController@addpost');

Route::get('/ind', 'App\Http\Controllers\PostController@ind');

Route::get('/type_option/{name?}', 'App\Http\Controllers\TypeController@show_type');
Route::get('/type_item/{name?}', 'App\Http\Controllers\TypeController@show_item');


Route::post('/addcontactnew', 'App\Http\Controllers\ContactController@story');

Route::resource('/title', 'App\Http\Controllers\TitleController');

Route::resource('/post', 'App\Http\Controllers\PostController');
Route::resource('/contact', 'App\Http\Controllers\ContactController');
Route::get('/addcontact', 'App\Http\Controllers\ContactController@addcontact');

Route::resource('/user', 'App\Http\Controllers\UserController');
Route::resource('/phone', 'App\Http\Controllers\PhoneController');

Route::resource('/menu', 'App\Http\Controllers\MenuController');

Route::resource('/protype', 'App\Http\Controllers\ProtypeController');

Route::get('/addproduct', 'App\Http\Controllers\ProductController@create');
Route::get('/addtype', 'App\Http\Controllers\TypeController@create');
Route::get('/addprotype', 'App\Http\Controllers\ProtypeController@create');
Route::get('/adddocument', 'App\Http\Controllers\DocumentController@create');
Route::get('/adduser', 'App\Http\Controllers\UserController@create');
Route::get('/additem', 'App\Http\Controllers\ItemController@create');



Route::get('/', 'App\Http\Controllers\MyController@index');
Route::get('/sanpham', 'App\Http\Controllers\MyController@index_product');
Route::get('/gioithieu', 'App\Http\Controllers\MyController@gioithieu');
Route::get('/tuyendung', 'App\Http\Controllers\MyController@tuyendung');
Route::get('/lienhe', 'App\Http\Controllers\MyController@lienhe');
Route::get('product/lienhe', 'App\Http\Controllers\MyController@lienhe');

Route::get('/dichvu0', 'App\Http\Controllers\MyController@dichvu');
Route::get('/tintuc', 'App\Http\Controllers\MyController@tintuc');
Route::get('/bangbaogia', 'App\Http\Controllers\MyController@bangbaogia');




Route::get('/page_document', 'App\Http\Controllers\DocumentController@index_tailieu');

// Route::resource('/admindocument', DocumentController::class);


Route::resource('/post', 'App\Http\Controllers\PostController');

Route::get('/addslider', 'App\Http\Controllers\SliderController@addslider');

Route::resource('/slider', 'App\Http\Controllers\SliderController');

Route::resource('/protype', 'App\Http\Controllers\ProtypeController');



Route::resource('/product', 'App\Http\Controllers\MyController');
Route::resource('/document', 'App\Http\Controllers\DocumentController');


Route::resource('/type', 'App\Http\Controllers\TypeController');
Route::get('/result', 'App\Http\Controllers\MyController@sort');



Route::get('/admin/products', 'App\Http\Controllers\ProductController@index_admin');
Route::resource('/admin/product', 'App\Http\Controllers\ProductController');
Route::get('posts/{id}/edit', 'ProductController@edit');
// Route::get('/admin/products/edit/{name?}', [ProductController::class, 'edit']);




Route::get('/{name?}', 'App\Http\Controllers\MyController@web');




// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/register', 'App\Http\Controllers\MyController@index');