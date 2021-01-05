<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::domain('{subdomain}.'.config('app.short_url'))->group(function () {

    Route::get('/',  [App\Http\Controllers\ProductsController::class, 'index'])->name('products.index');

});

// Route::domain(config('app.short_url').'.{subdomain}')->group(function () {

//     Route::get('/',  [App\Http\Controllers\ProductsController::class, 'index'])->name('products.index');

// });

Route::get('/products/show/{row}',[App\Http\Controllers\ProductsController::class, 'show'])->name('products.show');
Route::get('/featured', [App\Http\Controllers\ProductsController::class, 'featured'])->name('featured');
Route::post('/cart', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
Route::get('/cartitems', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{product}',  [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');

Route::patch('/cart/{product}', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/billing', [App\Http\Controllers\CartController::class, 'billing'])->name('cart.billing');
// Route::get('/products/{subdomain}', [App\Http\Controllers\ProductsController::class, 'index'])->name('products.index');

Route::post('/pay', 'CheckoutController@initialize')->name('pay');
Route::get('/rave/callback', 'CheckoutController@callback')->name('callback');

Route::get('/transactions', 'CheckoutController@flutterwavelist')->name('t');
