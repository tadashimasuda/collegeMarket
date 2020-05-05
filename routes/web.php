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

Route::get('/top','ItemsController@index');

Route::get('/search_items', function () {
    return view('search_items');
});
Route::get('/login_form', function () {
    return view('auth/login_form');
});


Route::get('/', function () {
    return view('welcome');
});

Route::resource('items', 'ItemsController')->only(['index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
