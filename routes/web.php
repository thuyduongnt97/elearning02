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

Route::prefix('lesson')->group(function() {
    Route::get('list', 'LessonController@getList')->name('list_lesson');

    Route::get('add', 'LessonController@getAdd')->name('add_lesson');
    Route::post('add', 'LessonController@postAdd')->name('add_lesson');

    Route::get('edit/{id}', 'LessonController@getEdit')->name('edit_lesson');
    Route::post('edit/{id}', 'LessonController@postEdit')->name('edit_lesson');

    Route::get('delete/{id}', 'LessonController@getDelete')->name('delete_lesson');
});

Route::prefix('subject')->group(function() {
    Route::get('list', 'SubjectController@getList')->name('list_subject');

    Route::get('add', 'SubjectController@getAdd')->name('add_subject');
    Route::post('add', 'SubjectController@postAdd')->name('add_subject');

    Route::get('edit/{id}', 'SubjectController@getEdit')->name('edit_subject');
    Route::post('edit/{id}', 'SubjectController@postEdit')->name('edit_subject');

    Route::get('delete/{id}', 'SubjectController@getDelete')->name('delete_subject');
});

Route::prefix('question')->group(function() {
    Route::get('list', 'QuestionController@getList')->name('list_question');

    Route::get('add', 'QuestionController@getAdd')->name('add_question');
    Route::post('add', 'QuestionController@postAdd')->name('add_question');

    Route::get('download', 'QuestionController@getDown')->name('download');
});

Route::prefix('pato')->group(function() {
    Route::get('home', 'FrontendController@home')->name('home');
});
