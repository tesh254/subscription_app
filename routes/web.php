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

// Site routes
Route::get('/', 'SiteController@showHome');

// Authentication routes
Route::auth();
Route::get('logout', 'Auth\LoginController@logout');

// Subscription form
Route::get('subscribe', 'SubscribeController@showSubscribe');
Route::post('subscribe', 'SubscribeController@processSubscribe');

// Site routes
Route::get('{slug}', 'SiteController@showPost');