<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/create',[ProductController::class,'create'])->name('create');
Route::get('/show',[ProductController::class,'show'])->name('show');
Route::post('/store',[ProductController::class,'store'])->name('product.store');
Route::get('/welcome',[ProductController::class,'welcome'])->name('product.welcome');
Route::get('/edit/{product}',[ProductController::class,'edit'])->name('edit');
Route::any('/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');
Route::any('/product/{product}',[ProductController::class,'update'])->name('product.update');
Route::any('/product/{id}',[ProductController::class,'update'])->name('product.update');

