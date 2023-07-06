<?php

use App\Http\Controllers\BookController;
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

Route::get('/book-list', [BookController::class, 'index'])->name('/book-list');
Route::get('/book-details/{id}', [BookController::class, 'show'])->name('/book-details');
Route::get('/add-book', [BookController::class, 'create'])->name('/add-book');
Route::post('/store-book', [BookController::class, 'store'])->name('/store-book');
Route::get('/edit-book/{id}', [BookController::class, 'edit'])->name('/edit-book');
Route::post('/update-book/{id}', [BookController::class, 'update'])->name('/update-book');
Route::get('/delete-book/{id}', [BookController::class, 'destroy'])->name('/delete-book');
Route::get('/search-book', [BookController::class, 'search'])->name('/search-book');
Route::get('/generate-pdf', [BookController::class, 'generatePdf'])->name('/generate-pdf');
