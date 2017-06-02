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
//     return view('test');
// });

Auth::routes();
// Home page
Route::get('/', 'HomeController@index')->name('home');

// News page
Route::get('/news', 'NewsController@index')->name('news.main');

// Tour Dates page
Route::get('/tour', 'TourDatesController@index')->name('tourDates.main');

// Music page
Route::get('/music', 'MusicController@index')->name('music.main');

// Music page
Route::get('/band', 'BandController@index')->name('band.main');

// Merch Store page
Route::get('/store', 'MerchStoreController@index')->name('store.main');
Route::get('/store/create', 'MerchStoreController@create')->middleware('isAdmin')->name('store.create');
Route::post('/store/create/add', 'MerchStoreController@createNewProduct')->middleware('isAdmin')->name('store.add');
Route::get('/store/product/{id}', 'MerchStoreController@showSingleProduct')->name('store.singleProduct');
Route::get('/store/product/{id}/form', 'MerchStoreController@getFormToUpdate')->middleware('isAdmin')->name('store.form');
Route::post('/store/product/{id}/update', 'MerchStoreController@updateProduct')->middleware('isAdmin')->name('store.update');
Route::get('/store/product/{id}/delete', 'MerchStoreController@deleteProduct')->middleware('isAdmin')->name('store.delete');
// Cart page
Route::get('/cart', 'CartController@showCart')->middleware('auth')->name('cart.main');
Route::get('/cart/add/{id}', 'CartController@addItem')->middleware('auth')->name('cart.add');
Route::get('/cart/delete/{id}', 'CartController@deleteCart')->middleware('auth')->name('cart.delete');
Route::post('/cart/update/{id}', 'CartController@cartUpdate')->middleware('auth')->name('cart.update');
Route::post('/cartAjax', 'CartController@addProductAjax')->name('cart.ajax');

//Admin panel page
Route::get('/admin', 'AdminController@index')->middleware('isAdmin')->name('admin.main');

// User page
Route::get('/profile', 'UserController@index')->middleware('auth')->name('user.main');

// Dev test blade
// Route::get('/test', 'Demo@test')->name('test');

// Social login
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider')->name("fb.auth");
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

