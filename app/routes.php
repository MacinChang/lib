<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


 //测试
 Route::get('/try', 'UserController@tryLogin');
 Route::get('/logout', 'UserController@tryLogout');
 Route::get('/add', 'BookController@getAdd');

//绑定model
Route::model('book','Book');
Route::model('user','User');
Route::model('record','Record');

Route::any('/addbook','BookController@addBook');
Route::get('/delbook','BookController@delBook');

Route::group(['prefix' => 'admin', 'before' => 'checkAdmin'], function()
{
	//管理员路由
});


Route::get('/login','UserController@showLogin');

Route::group(['prefix' => '', 'before' => 'checkUser'], function()
{
	Route::get('/','HomeController@getIndex');

	Route::get('/s', 'HomeController@getSearch');
	Route::get('/r', 'HomeController@getRecord');

	Route::get('/book/{bId}', ['as' => 'book.index', 'uses' => 'BookController@showBook']);

});



 View::composer('home', function($view){
 	$view -> pro_books = Book::orderBy('id', 'desc') -> take(5) -> get();
});


















