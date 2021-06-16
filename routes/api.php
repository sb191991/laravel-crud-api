<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Get all employees
Route::get('employees', 'App\Http\Controllers\EmployeeController@getEmployee');

//Get specific employee detail
Route::get('employee/{id}', 'App\Http\Controllers\EmployeeController@getEmployeeById');

//add Employee
Route::post('addEmployee', 'App\Http\Controllers\EmployeeController@addEmployee');