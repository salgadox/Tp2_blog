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
    return view('welcome');
});*/



/*Excercice 2.1 */
Route::get('/', 'HomeController@index');

Route::get('/confirm', 'contactController@index')->middleware('auth');

Route::get('/contact', 'ContactController@create')->middleware('auth');
Route::post('/contact', 'ContactController@store')->middleware('auth');

Route::get('/articles', 'PostController@index')->middleware('auth');
Route::get('/articles/{post_name}', 'PostController@show')->name('showArticle')->middleware('auth');

Route::post('/articles/{post_name}/comment', 'CommentsController@store')->name('comment')->middleware('auth');

Route::get('/create', 'PostController@create')->middleware('auth');
Route::post('/create', 'PostController@store')->name('createArticle')->middleware('auth');

Route::get('/articles/{post_name}/edit', 'PostController@edit')->name('edit')->middleware('auth');
Route::patch('/articles/{post_name}', 'PostController@update')->name('editArticle')->middleware('auth');

Route::delete('/articles/{post_name}', 'PostController@destroy')->name('deleteArticle')->middleware('auth');



//Route::resource('projects', 'ProjectsController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
