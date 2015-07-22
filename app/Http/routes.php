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

Route::get('/', 'PagesController@index');
Route::get('contact', 'PagesController@contact');
Route::get('yibc', 'PagesController@yibc');
Route::get('yibc_download', 'PagesController@yibc_download');
Route::post('contact', 'PagesController@sendMail');

