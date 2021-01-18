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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard/overview', [App\Http\Controllers\DashboardController::class, 'overview'])->name('overview');

Route::get('/dashboard/setting', [App\Http\Controllers\DashboardController::class, 'settings'])->name('settings');
Route::post('/othersettings', [App\Http\Controllers\DashboardController::class, 'othersettings'])->name('othersettings');
Route::post('/passwordchange', [App\Http\Controllers\DashboardController::class, 'passwordchange'])->name('passwordchange');

Route::get('/dashboard/activity', [App\Http\Controllers\DashboardController::class, 'activity'])->name('activity');
Route::get('/dashboard/deposit', [App\Http\Controllers\DashboardController::class, 'deposit'])->name('deposit');
Route::get('/dashboard/withdraw', [App\Http\Controllers\DashboardController::class, 'withdraw'])->name('withdraw');
Route::post('/dashboard/withdrawdone', [App\Http\Controllers\DashboardController::class, 'withdrawdone'])->name('withdrawdone');

Route::get('/message/{id}', [App\Http\Controllers\DashboardController::class, 'usernotification'])->name('usernotification');

Route::get('/support', [App\Http\Controllers\DashboardController::class, 'support'])->name('support');
Route::post('/supportsent', [App\Http\Controllers\DashboardController::class, 'supportsent'])->name('support');
Route::post('/paypalrequest', [App\Http\Controllers\DashboardController::class, 'paypalrequest'])->name('paypalrequest');
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'contacted'])->name('contacted');


Route::get('/customer-service', [App\Http\Controllers\HomeController::class, 'customerservice'])->name('customerservice');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/datacenters', [App\Http\Controllers\HomeController::class, 'datacenter'])->name('datacenter');
Route::get('/privacy', [App\Http\Controllers\HomeController::class, 'policy'])->name('policy');

// Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
// Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
// Route::post('password/reset', 'Auth\PasswordController@reset');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
