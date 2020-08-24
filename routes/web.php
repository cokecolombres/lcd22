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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','Front\CategoryController@index')->name('welcome');
Route::get('/news','Front\NewsController@index')->name('news');
Route::get('/blog','Front\BlogController@index')->name('blog');
Route::get('/foro','Front\ForoController@index')->name('foro');
Route::get('/help','Front\HelpController@index')->name('help');
Route::get('/category','Front\Category2Controller@index')->name('category');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');