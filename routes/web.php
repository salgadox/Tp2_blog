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

Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

Route::get('/articles', 'PostController@index');
Route::get('/articles/{post_name}', 'PostController@show');

//Route::resource('projects', 'ProjectsController');


