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

Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/client', 'ClientController@index');
    Route::post('/client', 'ClientController@store');

    Route::get('/employee', 'EmployeeController@index');
    Route::post('/employee', 'EmployeeController@store');

    Route::get('/expense', 'ExpenseController@index');

    Route::get('/income', 'IncomeController@index');

    Route::get('/project', 'ProjectController@index');

    Route::get('/payroll', 'PayRollController@index');

    Route::get('/dt/employees', 'DataTablesController@getEmployees')->name('get.employees');
    Route::get('/dt/clients', 'DataTablesController@getClients')->name('get.clients');
});
