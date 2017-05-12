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
Route::get('message', function () {
    return view('message');
});
Route::get('us', function () {
    return view('aboutUs');
});
Route::get('contacts', function () {
    return view('contacts');
});
// Route::get('/', ['user' => "HomeController@index", 'as'=> 'home']);
// Route::get('message/{id}/edit', ['uses' => HomeController@edit', ['as' => message.edit]);