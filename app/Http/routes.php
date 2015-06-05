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



Route::get('/', 'DataController@index');
Route::get('index', 'DataController@index');
Route::get('popular', 'DataController@popular');
Route::get('contact', 'ContactUsController@contact');
Route::get('city', 'DataController@city');
Route::get('city1', 'PagesController@city1');
Route::get('placesOfCity', 'DataController@placesOfCity');
Route::get('city+{name}', 'DataController@getPlaceByCity');
Route::get('tag_{name}', 'DataController@getPlacesByTag');
Route::get('/{name}', 'DataController@getDetail');




Route::get('places', 'DataController@getPlaces');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
