<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------ --------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/','/home' );
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-to-cart/{product}',[CartController::class,"add"])->name('cart.add');

Route::get('/cart',[CartController::class,"index"])->name('cart.index')->middleware('auth');

Route::get('/cart/destroy{itemId}',[CartController::class,"destroy"])->name('cart.destroy')->middleware('auth');

Route::get('/cart/update{itemId}',[CartController::class,"update"])->name('cart.update')->middleware('auth');

Route::get('/cart/cart.checkout',[CartController::class,"checkout"])->name('cart.checkout')->middleware('auth');

Route::resource('orders', OrderController::class)->middleware('auth');










Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
