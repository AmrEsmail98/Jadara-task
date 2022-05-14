<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaypalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});
Route::group(['middleware' => ['auth'] ], function() {
    Route::get('products',[ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create',[ProductController::class, 'create'])->name('products.create');
    Route::get('/products/{product}',[ProductController::class, 'show'])->name('products.show');
    Route::post('/products',[ProductController::class, 'store'])->name('products.store');
    Route::delete('/products/{product}',[ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/{product}/edit',[ProductController::class, 'edit'])->name('products.edit');
    Route::PUT('/products/{product}',[ProductController::class, 'update'])->name('products.update');

});
Auth::routes();

Route::get('createpaypal',[PaypalController::class,'createpaypal'])->name('createpaypal');
Route::get('processPaypal',[PaypalController::class,'processPaypal'])->name('processPaypal');
Route::get('processSucees',[PaypalController::class,'processSucees'])->name('processSucees');
Route::get('processCancel',[PaypalController::class,'processCancel'])->name('processCancel');
Route::get('/home', [ProductController::class, 'index'])->name('home');
