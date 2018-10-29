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

Route::get('/Home', function () { return view('homepage');});
Route::get('/Home/{slug}', 'HeroController@show');
Route::get('/Hero', 'HeroController@index');


Route::get('test/register', array('uses'=>'HeroController@create'));

Auth::routes();
