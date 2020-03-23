<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/problems', 'ProblemsController@index');
Route::get('/problems/{id}', 'ProblemsController@show');

Route::get('admin/users', 'UsersController@index');
Route::get('admin/users/new', 'UsersController@create')->name('user-create');
Route::post('admin/users/new', 'UsersController@store');
Route::delete('admin/users/{id}', 'UsersController@destroy');

Route::get('admin/teams', 'TeamsController@index');
Route::delete('admin/teams/{id}', 'TeamsController@destroy');
Route::get('admin/teams/new', 'TeamsController@create')->name('team-create');
Route::post('admin/teams/new', 'TeamsController@store');

Route::get('admin/events/{id}/teams', 'TeamsController@index');

