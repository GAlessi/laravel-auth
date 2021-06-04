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


Auth::routes();


Route::get('/home', 'GuestController@home')
    -> name('home');

Route::get('/home/pilot/{id}', 'GuestController@showPilot')
    -> name ('show');

Route::get('/car/create', 'UserController@createCar')
    -> name('createCar');
Route::post('/car/store', 'UserController@storeCar')
    -> name('storeCar');

Route::get('edit/car/{id}', 'UserController@editCar')
    -> name('editCar');
Route::post('update/car/{id}', 'UserController@updateCar')
    -> name('updateCar');

Route::get('destroy/{id}', 'UserController@destroy')
    -> name('destroy');
