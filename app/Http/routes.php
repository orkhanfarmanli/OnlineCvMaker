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

Route::get('/select', 'selectController@select');
Route::get('/template', 'templateController@template');
Route::get('/test', 'templateController@test');
Route::post('/template', 'templateController@insertEducation');
Route::post('/workcreate', 'workController@insertWork');
Route::get('/', function () {
    return view('index');
});

Route::auth();

Route::get('/home', 
function () {
    return view('welcome');
});
