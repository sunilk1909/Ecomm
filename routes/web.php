<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
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

    //admin 

    

    Route::get('/removeProduct', 'AdminController@index')->middleware('can:admin');
    Route::get('/removeProduct/{id}', 'AdminController@removeProduct')->middleware('can:admin');
    Route::get('/makeProduct', function () { return view('makeProduct'); })->middleware('can:admin');
    Route::POST('/makeProduct', 'AdminController@store')->middleware('can:admin');
    Route::POST('/message', 'ContactController@store');
    Route::get('/message', 'ContactController@index')->middleware('can:admin');
    //cart controller
    Route::get('/shop', 'ProductController@index');
    Route::get('/addToCart', 'ProductController@addToCart')->middleware('auth');
    Route::get('/shoppingcart', 'ProductController@cart')->middleware('auth');
    Route::get('/remove', 'ProductController@removeFromCart')->middleware('auth');
        // wish list controller
    Route::get('/wishToCart/{product_id}', 'WishlistController@wishToCart')->middleware('auth');
    Route::get('/wishlist', 'WishlistController@Wishlist')->middleware('auth');
    Route::get('/addToWishList', 'WishlistController@likes')->middleware('auth');
    Route::get('/unlike/{product_id}', 'WishlistController@unlike')->middleware('auth');
    Route::get('/logout', 'HomeController@logout')->name('logout');


//Route::get('/home', function () { return view('index'); })->name('home');
//Route::get('/blog', function () { return view('blog'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/checkout', function () { return view('check_out'); })->middleware('auth');
Route::get('/try', function () { return view('try'); });






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
