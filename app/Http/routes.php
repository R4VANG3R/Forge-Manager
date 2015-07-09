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

// Dashboard
Route::get('/', 'Dashboard\DashboardController@ShowIndex');

Route::resource('/dashboard/resource', 'Dashboard\DashboardController@GetResourceUsage');
Route::resource('/dashboard/players', 'Dashboard\DashboardController@GetConcurrentPlayers');

// Console
Route::get('/console', 'Console\ConsoleController@ShowIndex');