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
//top page
Route::get('/top','ItemsController@index');

//items find keyword
Route::get('/items/find','ItemsController@search');

//show item detail
Route::get('/item/{id}','ItemsController@show');

//Route::resource('items', 'ItemsController')->only(['index']);

//----------

Route::get('register_form',function(){
    return view('auth/register_form');
});
//rewrite
Route::get('/login_form', function () {
    return view('auth/login_form');
});
//rewrite
Route::get('/select_register', function () {
    return view('auth/select_register');
});
//----------


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
