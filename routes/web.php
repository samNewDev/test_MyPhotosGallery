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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => 'true']);

Route::get('/home', 'HomeController@index')->name('home');

Route::post('image', 'ImageController@post');
Route::get('/home', 'ImageController@index');
Route::delete('image/{id}', 'ImageController@destroy');

Route::get('profile', 'UserController@profile')->name('users.profile');
Route::put('profile', 'UserController@edit')->name('users.edit');