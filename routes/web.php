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

Route::get('/confirm', 'contactController@index');

Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

Route::get('/articles', 'PostController@index');
Route::get('/articles/{post_name}', 'PostController@show')->name('showArticle');

Route::post('/articles/{post_name}/comment', 'CommentsController@store')->name('comment');

Route::get('/create', 'PostController@create');
Route::post('/create', 'PostController@store')->name('createArticle');

Route::get('/articles/{post_name}/edit', 'PostController@edit');
Route::patch('/articles/{post_name}', 'PostController@update')->name('editArticle');

Route::delete('/articles/{post_name}', 'PostController@destroy')->name('deleteArticle');



//Route::resource('projects', 'ProjectsController');


