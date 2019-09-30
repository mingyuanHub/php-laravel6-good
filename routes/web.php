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

Route::get('/test','IndexController@test');

Route::match(['get', 'post'], 'hello', 'HelloController@test');

Route::group(['prefix' => 'hello'], function () {
    Route::get('test1', 'HelloController@test1');
    Route::get('test2', 'HelloController@test2');  
    Route::post('test3', 'HelloController@test3');
});

Route::group(['namespace' => 'good', 'prefix' => 'hello'], function () {
    Route::get('nice1', 'HelloController@nice1');
    Route::get('nice2', 'HelloController@nice2');
});

Route::get('show/{id}', 'UserController@show');

Route::get('showPro', 'ShowProfile');

