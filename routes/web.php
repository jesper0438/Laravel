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
Route::get('about', function () {
    return view('about');
});
Route::get('videos', function () {
    return view('videos');
});
Route::get('register', function () {
    return view('register');
});
Route::get('menu', function () {
    return view('menu');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource ( 'tasks', 'TasksController');
