<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('login', [
    'middleware' => 'guest', 'as' => 'login', 'uses' => 'LoginController@loginGet'
]);

Route::post('login', [
   'middleware' => 'guest', 'uses' => 'LoginController@loginPost'
]);

Route::get('logout', [
    'middleware' => 'auth', 'as' => 'logout', 'uses' => 'LoginController@logout'
]);


Route::get('stu/home', [
    'as' => 'stu_home', 'uses' => 'Stu\StudentController@home'
]);
Route::get('stu/edit', [
    'as' => 'stu_edit', 'uses' => 'Stu\StudentController@edit'
]);
Route::post('stu/update', [
    'as' => 'stu_update', 'uses' => 'Stu\StudentController@update'
]);