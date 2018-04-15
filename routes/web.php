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

Auth::routes();

/**
 * Remove the next line if you want to allow self user registration
 */
Route::get('/register', 'Auth\LoginController@showLoginForm')->name('register');

/**
 * If your project has public website include you will need this public route for index
 * and you can add as many public routes as you need here
 *
 * Route::get('/', 'HomeController@index')->name('home');
 *
 */

Route::get('/', 'Admin\HomeController@index')->name('home');