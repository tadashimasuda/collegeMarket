<?php

use App\Http\Controllers\ItemsController;
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

//item like middleware
Route::get('/item/like/{id}','UserLikesController@create');

//item like middleware
Route::get('/item/unlike/{id}','UserLikesController@delete');

//show item detail
Route::get('/item/show/{id}/','ItemsController@show');
//item comment
Route::post('/comment','CommentsController@create');
//show userpage
Route::get('/user/{id}','UsersController@index');
//show create item page middleware
Route::get('/item/register','ItemsController@register');
//create item middleware
Route::post('/item/register','ItemsController@create');
//purchase item
Route::put('/item/buy','ItemsController@itemBuy');

//------route message 
//item massage space
// Route::get('/messages','MessagesController@index');
Route::resource('messages', 'messagesController')->only(['index','store']);

////show edit page middleware
// Route::get('/item/edit','ItemsController@edit');
// //edit item
// Route::put('/item/update','ItemsController@update');


Route::resource('items', 'ItemsController')->only(['index','edit','update']);

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
