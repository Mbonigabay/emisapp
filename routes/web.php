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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users', 'HomeController@getUsers')->name('get.users');

Route::get('/client', 'ClientController@index');

Route::get('/employee', 'EmployeeController@index');

Route::get('/expense', 'ExpenseController@index');

Route::get('/income', 'IncomeController@index');

Route::get('/project', 'ProjectController@index');
