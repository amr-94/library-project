<?php

use App\Http\Controllers\AddauthorController;
use App\Http\Controllers\AddbookController;
use App\Http\Controllers\AddnovelController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('author_page', [LibraryController::class, 'author_page'])->name('author_page');
Route::get('author/{id}', [LibraryController::class, 'show'])->name('author.show');
Route::get('book/{id}', [BookController::class, 'show'])->name('book.show');

Route::get('books', [BookController::class, 'books'])->name('books');
Route::get('novels', [NovelController::class, 'novels'])->name('novels');
Route::get('novel/{id}', [NovelController::class, 'show'])->name('novel.show');
Route::get('dashbord', [LibraryController::class, 'dashbord']);
Route::get('book/destroy/{bookId}', [BookController::class, 'destroy'])->name('book.destroy');
Route::get('novel/destroy/{novelId}', [NovelController::class, 'destroy'])->name('novel.destroy');
Route::get('author_page/destroy/{authorlId}', [LibraryController::class, 'destroy'])->name('author.destroy');
Route::get('user/destroy/{userlId}', [RegistrationController::class, 'destroy'])->name('user.destroy');

Route::get('search', [LibraryController::class, 'search']);

// Route::resource('backend', 'AddbookController');

// Route::resource('booksbackend', 'AddbookController');

// Route::resource('authorsbackend', 'AddauthorController');

// Route::resource('novelsbackend', 'AddnovelController');

Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [SessionsController::class, 'create'])->name('login');
Route::post('login', [SessionsController::class, 'store']);
Route::get('logout', [SessionsController::class, 'destroy']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashbord', [LibraryController::class, 'dashbord']);
    Route::resource('authorsbackend', AddauthorController::class);
    Route::resource('booksbackend', AddbookController::class);
    Route::resource('novelsbackend', AddnovelController::class);
    Route::get('dashbord', [LibraryController::class, 'dashbord']);
});
