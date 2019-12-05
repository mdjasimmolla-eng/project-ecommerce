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


Route::get('/admin','adminController@index');

Route::get('/bootstrapElement', 'adminController@bootstrap');

Route::get('/cards','adminController@cards');

Route::get('/widgets', 'adminController@widgets');

Route::get('/charts', 'adminController@charts');

Route::get('/formComponent', 'adminController@formComponent');

Route::get('/formCoustom', 'adminController@formCoustom');

Route::get('/formSample', 'adminController@formSample');

Route::get('/formNotification', 'adminController@formNotification');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
