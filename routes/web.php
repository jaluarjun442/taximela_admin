<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EntryMasterController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('customers', App\Http\Controllers\CustomerController::class);
    Route::resource('entries', App\Http\Controllers\EntryMasterController::class);
    Route::resource('products', App\Http\Controllers\ProductController::class);
});

