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

Route::post('/sign_up', 'UsersController@store');
Route::get('/people', 'UsersController@index');
Route::get('/profile/{user}', 'UsersController@show');
/*
*
*
*
{
	"name": "Miguel Angel",
	"email":"maiki112@gmail.com",
	"password": "123456789",
	"employment": "tecnico",
	"date_of_birth": "2020-02-19",
	"highest_degree_of_studies":"college"
}
*/
Route::post('/make_post', 'PostController@store');
Route::get('/index', 'PostController@index');
Route::get('/post/{post}', 'PostController@show');
/*
*
*
{
	"title":"hola mundo 2",
	"description":"Esta es la segunda publicacion",
	"user_id": "2"
}
*/