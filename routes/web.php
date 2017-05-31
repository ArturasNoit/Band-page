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

Route::get('/', function () {
    return view('test');
});

Auth::routes();
// Home page
Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/store/product', 'MerchStoreController@showSingleProduct')->name('store.singleProduct');

// Cart page
Route::get('/cart', 'CartController@index')->name('cart.main');

//Admin panel page
Route::get('/admin', 'AdminController@index')->name('admin.main');

//Admin panel page
Route::get('/profile', 'UserController@index')->name('user.main');

// Dev test blade
Route::get('/test', 'Demo@test')->name('test');

// Social login
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider')->name("fb.auth");
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

