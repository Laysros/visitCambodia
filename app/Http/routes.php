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

Route::get('/', 'WelcomeController@index');
Route::get('/index', 'WelcomeController@index');
Route::get('popular', 'PagesController@popular');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('city', 'PagesController@city');
Route::get('city1', 'PagesController@city1');

Route::get('detail', 'PagesController@detail');
Route::get('placesOfCity', 'PagesController@placesOfCity');

Route::get('index1', 'HomeController@index1');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
