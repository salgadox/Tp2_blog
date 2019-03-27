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
Route::get('/contact', 'HomeController@contact');
Route::get('/articles', 'HomeController@articles');
Route::get('/articles/{post_name}', 'HomeController@show');

//Route::resource('projects', 'ProjectsController');


