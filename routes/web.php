<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [BookController::class, 'index']);
Route::get('/book/{id}', [BookController::class, 'detail'])->name('book.detail');
Route::get('/category/{id}', [CategoryController::class, 'detail'])->name('category.detail');
Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher.index');
Route::get('/publisher/{id}', [PublisherController::class, 'detail'])->name('publisher.detail');
Route::get('/contact', [BookController::class, 'contact'])->name('contact');

