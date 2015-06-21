<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Pages */
Route::get( '/' , 'BaseController@index');
Route::get( 'about' , 'PageController@page_about' );
Route::get( 'news' , 'PageController@page_news' );
Route::get( 'fixtures' , 'PageController@page_fixtures' );
Route::get( 'results' , 'PageController@page_results' );
/* End Pages */ 


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
