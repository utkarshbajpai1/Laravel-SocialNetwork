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

// home controller
Route::get('/', [
  "uses" => "HomeController@index",
  "as"   => "home"
]);

//authentication controller

Route::get('/signup', [
  'uses' => 'AuthController@getSignup',
  'as'   => 'auth.signup'
]);

Route::post('/signup', [
  'uses' => 'AuthController@postSignup',
  'as'   => 'auth.signup'
]);
