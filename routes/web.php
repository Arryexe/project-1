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


// Route Company
Route::get('/home', 'HomeController@index')->name('home');
Route::get('companies', 'CompanyController@index');
Route::get('companies/create', 'CompanyController@create');
Route::post('companies', 'CompanyController@store');
Route::get('companies/{id}', 'CompanyController@show');

Route::get('companies/{id}/edit', 'CompanyController@edit');
Route::patch('companies/{id}', 'CompanyController@update');

Route::delete('companies/{id}', 'CompanyController@destroy');

// Route Employees
Route::get('employees', 'EmployeeController@index');
Route::get('employees/insert', 'EmployeeController@insert');
Route::post('employees', 'EmployeeController@store');
Route::get('employees/{id}', 'EmployeeController@show');

Route::get('employees/{id}/change', 'EmployeeController@change');
Route::patch('employees/{id}', 'EmployeeController@update');

Route::delete('employees/{id}', 'EmployeeController@destroy');