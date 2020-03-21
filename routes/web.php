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

Route::get('admin/users', 'UsersController@index')->name('user-index');
Route::get('admin/users/new', 'UsersController@create')->name('user-create');
Route::post('admin/users/new', 'UsersController@store');
Route::delete('admin/users/{id}', 'UsersController@destroy');

Route::get('admin/problems', 'ProblemsController@index')->name('problems-index');
Route::get('admin/problems/new', 'ProblemsController@create')->name('problems-create');
Route::post('admin/problems/new', 'ProblemsController@store');
