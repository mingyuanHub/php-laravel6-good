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
// Route::get("hello/{id}", "\App\Http\Controllers\Hello\HelloController@foo")->where("id", "[0-9]+");
// 
// Route::get("test2", function () {
// 	return "adfasdfa";
// });
// 
// Route::get("hello", "HelloController@hello");
// Route::post("hello", "HelloController@hello");
// Route::match(['get','post'],'hello','HelloController@hello');

Route::group(['prefix' => 'hello'], function () {
    Route::get('test1', 'HelloController@test1');
    Route::get('test2', 'HelloController@test2');  
    Route::post('test3', 'HelloController@test3');
});
// Route::any('hello','HelloController@hello');


// Route::get('hello/{age}', function ($age) {
// 		return $age;
// });
// 
// Route::get('hello/{age}', 'HelloController@hello');

// Route::get('hello/{name}/{age}', 'HelloController@hello')->where(["age"=>"[0-9]+", "name" => "[a-z]+"]);

// Route::get('hello/{name?}', 'HelloController@hello');

// Route::get('hello', "HelloController@hello")->name('hello');

// Route::get('foo', "HelloController@hello")->middleware(checkRoute::class);

// Route::group(['namespace' => 'good', 'prefix' => 'hello'], function () {
//     Route::get('nice1', 'HelloController@nice1');
//     Route::get('nice2', 'HelloController@nice2');
//路由组
// Route::group(["prefix" => "hello"], function () {
// 	Route::get('nice', 'HelloController@nice');
// 	Route::get('good', 'HelloController@good');
// });

// Route::namespace("Home")->group(function () {
// 	Route::get('nice', 'HelloController@nice');
// 	Route::get('good', 'HelloController@good');
// });

Route::get('showPro', 'ShowProfile');
//路由前缀
// Route::name("Hello.")->namespace("Hello")->group(function () {
// 	Route::get("foo",  'HelloController@foo')->name("foo");
// });
// 
Route::get('user/{id}', 'UserController@show');

Route::post('file', 'FileController@file');

Route::get('testv', function () {
	return view('test', [
		'list' => [1,2,3]
	])->with('name', 'fff');
});

Route::get('master', 'A1008Controller@master');
