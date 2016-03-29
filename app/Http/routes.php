<?php

/*
|--------------------------------------------------------------------------
| KPMG Cloud AR - Content Management System version 1.0.0
|--------------------------------------------------------------------------
|
|
*/

// user registration - view 
Route::get('register', 'Auth\AuthController@getRegister');

// user registration - controller 
Route::post('register', 'Auth\AuthController@postRegister');

// user login - view
Route::get('/', 'Auth\AuthController@getLogin');
// user login - controller
Route::post('/', 'Auth\AuthController@postLogin');

// user logout - view / controller
Route::get('logout', 'Auth\AuthController@getLogout');

// dashboard - view 
Route::get('dashboard', 'dashboard@index');

