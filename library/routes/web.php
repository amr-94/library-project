<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\ViewName;

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

// Route::get('/', function () {

//     return view('welcome');
// })->name("hello");


// Route::view("url","view page",data)

// Route::get('contact',function(){
//     return View('contact',data) ;
// });

// Route::view('contact-us','contact',["page_title"=>"contacts us","content"=>"amr"]);
// Route::get('/', function (){
//     return View("frontend.index");
// });
// Route::get('/home','librarycontroller@index')->name('home');
Route::get('author_page', 'librarycontroller@author_page');
Route::get('author/{id}','librarycontroller@show')->name('author.show');
Route::get('book/{id}', 'bookController@show');

Route::get('books', 'bookController@books')->name('books');
Route::get('novels', 'novelController@novels');
Route::get('novel/{id}', 'novelController@show');
Route::get('dashbord', 'libraryController@dashbord');
// Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('posts', 'PostController@index')->name('posts');
Route::get('book/destroy/{bookId}', 'bookController@destroy');
Route::get('novel/destroy/{novelId}', 'novelController@destroy');
Route::get('author_page/destroy/{authorlId}', 'libraryController@destroy');
Route::get('user/destroy/{userlId}', 'RegistrationController@destroy');




Route::get('search','librarycontroller@search');

Route::resource('backend', 'addbookController');

Route::resource('booksbackend', 'addbookController');

Route::resource('authorsbackend', 'addauthorController');

Route::resource('novelsbackend', 'addnovelController');


// route::get('list','authorsController@list');

// Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('register', 'RegistrationController@create');
// Route::post('register', 'RegistrationController@store');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashbord', 'libraryController@dashbord');
});
Route::group(['middleware' => 'auth'], function () {
    Route::resource('authorsbackend', 'addauthorController');
});
Route::group(['middleware' => 'auth'], function () {
    Route::resource('booksbackend', 'addbookController');
});
Route::group(['middleware' => 'auth'], function () {
    Route::resource('novelsbackend', 'addnovelController');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashbord', 'libraryController@dashbord');
});
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('register', 'RegistrationController@create');
// });


