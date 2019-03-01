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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('user')->group(function() {
    Route::get('list', 'UserController@getList')->name('list_user');

    Route::get('add', 'UserController@getAdd')->name('add_user');
    Route::post('add', 'UserController@postAdd')->name('add_user');

    Route::get('edit/{id}', 'UserController@getEdit')->name('edit_user');
    Route::post('edit/{id}', 'UserController@postEdit')->name('edit_user');

    Route::get('delete/{id}', 'UserController@getDelete')->name('delete_user');
});
