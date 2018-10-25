<?php

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

/*
Googles web api

/User/
/User/Register/
/User/Login/
/User/Other-users/

Imdbs web api

/Movies/
/Movies/Movie-lists/
/Movies/My-movies-list/
/Movies/Movie-lists/{id}
/Movies/All-users-lists/{id}
*/

Route::get("User", "UserListsController@Index");
Route::get('/{any}', 'MovieListsController@Index')->where('any', '.*');


