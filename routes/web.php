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

Route::get('', 'HomeController@index');
Route::post('', 'PelamarController@store')->name('pelamarStore');

Route::group(['namespace' => 'Auth'], function () {
  Route::get('login', 'LoginController@showLoginForm');
  Route::post('login', 'LoginController@login')->name('login');
  Route::get('logout', 'LoginController@logout')->name('logout');
});

Route::group(['middleware' => 'auth'], function () {
  Route::get('home', 'HomeController@home')->name('home');
});
