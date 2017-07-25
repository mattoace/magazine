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

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', 'MainController@index');
Route::resource('cat','MainController');
Route::resource('post','PostController');
Route::resource('comments','CommentsController');
Route::resource('items','ArticlesController');
Route::get('kendo', function () {  
	 return View::make('back.kendo');
});
Route::get('admin', function () {  
	 return View::make('back.index');
});

Route::get('asave', 'ArticlesController@articlesave');
Route::get('adestroy', 'ArticlesController@articledestroy');
Route::get('acreate', 'ArticlesController@articlecreate');


Route::get('categories', function () {  
	 return View::make('back.categories');
});
Route::get('dashboard', function () {  
	 return View::make('back.dashboard');
});

Route::get('articles', function () {  
	 return View::make('back.articles');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
