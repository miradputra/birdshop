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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('auth.login');
});
Route::get('index', function () {
    return view('frontend.index');
});

Route::get('contact', function () {
    return view('frontend.contact');
});

Route::get('categoryproduk', function () {
    return view('frontend.category');
});
Route::get('single-product', function () {
    return view('frontend.single-product');
});
Route::get('kacer', function () {
    return view('frontend.kacer');
});
Route::get('anis', function () {
    return view('frontend.anis');
});
Route::get('murai', function () {
    return view('frontend.murai');
});
Route::get('kenari', function () {
    return view('frontend.kenari');
});
Route::get('biji', function () {
    return view('frontend.biji');
});
Route::get('voer', function () {
    return view('frontend.voer');
});
Route::get('ebod', function () {
    return view('frontend.ebod');
});
Route::get('oriq', function () {
    return view('frontend.oriq');
});
Route::get('blog', function () {
    return view('frontend.blog');
});
Route::get('single-blog', function () {
    return view('frontend.single-blog');
});
Route::get('cart', function () {
    return view('frontend.cart');
});
Route::get('checkout', function () {
    return view('frontend.checkout');
});



Auth::routes();
Route::group(['middleware' => ['auth', 'role:admin']], function () {
});
Route::resource('/role', 'RoleController')->except([
    'create', 'show', 'edit', 'update'
]);
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::resource('/category', 'ControllerCategory')->except(['create', 'show']);
Route::resource('/product', 'ProductController')->except(['show']); //BAGIAN INI KITA TAMBAHKAN EXCETP KARENA METHOD SHOW TIDAK DIGUNAKAN
Route::get('/product/bulk', 'ProductController@massUploadForm')->nameRoute::post('/product/bulk', 'ProductController@massUpload')->name('product.saveBulk');('product.bulk'); //TAMBAHKAN ROUTE INI


Route::get('/home', 'HomeController@index')->name('home');
