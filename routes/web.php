<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\BookController;


Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/catalog', [BookController::class, 'catalog'])->name('catalog');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/favorites', [BookController::class, 'favorites'])->name('favorites');
Route::get('/cart', [BookController::class, 'cart'])->name('cart');

