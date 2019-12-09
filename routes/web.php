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

    // Home
    Route::get('/home', 'HomeController@index')->name('home');

    // Client
    Route::get('/client', 'ClientController@index');
    Route::post('/client', 'ClientController@store');

    // Employee
    Route::get('/employee', 'EmployeeController@index');
    Route::post('/employee', 'EmployeeController@store');

    // Expense
    Route::get('/expense', 'ExpenseController@index');
    Route::post('/expense', 'ExpenseController@store');

    // Income
    Route::get('/income', 'IncomeController@index');
    Route::post('/income', 'IncomeController@store');

    // Project
    Route::get('/project', 'ProjectController@index');

    // Payroll
    Route::get('/payroll', 'PayRollController@index');

    // DataTable
    Route::get('/dt/employees', 'DataTablesController@getEmployees')->name('get.employees');
    Route::get('/dt/clients', 'DataTablesController@getClients')->name('get.clients');
    Route::get('/dt/expenses', 'DataTablesController@getExpenses')->name('get.expenses');
    Route::get('/dt/incomes', 'DataTablesController@getIncomes')->name('get.incomes');
});
