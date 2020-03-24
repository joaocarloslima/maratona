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

Route::get('/problems', 'ProblemsController@list');
Route::get('/problems/{id}', 'ProblemsController@show');

Route::get('admin/users', 'UsersController@index')->name('user-index');
Route::get('admin/users/new', 'UsersController@create')->name('user-create');
Route::post('admin/users/new', 'UsersController@store');
Route::delete('admin/users/{id}', 'UsersController@destroy');
Route::get('admin/users/{id}', 'UsersController@edit')->name('user-edit');
Route::put('admin/users/{id}', 'UsersController@update')->name('user-update');
Route::post('admin/users/{id}', 'UsersController@resetPass')->name('reset-pass');

Route::get('admin/teams', 'TeamsController@index')->name('teams-index');
Route::delete('admin/teams/{id}', 'TeamsController@destroy');
Route::get('admin/teams/new', 'TeamsController@create')->name('team-create');
Route::post('admin/teams/new', 'TeamsController@store');

Route::get('admin/problems', 'ProblemsController@index')->name('problems-index');
Route::get('admin/problems/new', 'ProblemsController@create')->name('problems-create');
Route::post('admin/problems/new', 'ProblemsController@store');
Route::delete('admin/problems/{id}', 'ProblemsController@destroy');
Route::get('admin/problems/{id}/edit', 'ProblemsController@edit')->name('problem-edit');
Route::put('admin/problems/{id}', 'ProblemsController@update')->name('problem-update');;

Route::get('admin/events', 'EventsController@index')->name('events-index');
Route::get('admin/events/new', 'EventsController@create')->name('event-create');
Route::post('admin/events/new', 'EventsController@store');
Route::delete('admin/events/{id}', 'EventsController@destroy');
