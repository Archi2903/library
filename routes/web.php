<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Admin
$groupData = [
    'namespace' => 'Admin',
    'prefix' => 'admin/library',
];

Route::group($groupData, function () {
    Route::resource('books', 'BookController')
        ->names('library.admin.books');
});
Route::group($groupData, function () {
    Route::resource('authors', 'AuthorController')
        ->names('library.admin.authors');
});

Route::group(['prefix' => 'books'], function () {
    Route::resource('library', 'BookController')->names('books');
});
Route::group(['prefix' => 'authors'], function () {
    Route::resource('library', 'AuthorController')->names('authors');
});
