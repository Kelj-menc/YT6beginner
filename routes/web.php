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


Route::get('/test', 'App\Http\Controllers\HelloController@test');
Route::get('/about', 'App\Http\Controllers\HelloController@about');

Route::get('/service', 'App\Http\Controllers\ServiceController@index');
Route::post('/service', 'App\Http\Controllers\ServiceController@store');
            //ja dodajem ovde controller.
            //koji sam napraio i @ funkcija koju hocu da past
            //VAZNO od laravela 8 ovde moras full path da dodas
            //a ne ko pre samo ime novog controlora

Route::get('/customers', 'App\Http\Controllers\CustomerController@index');
Route::get('/customers/create', 'App\Http\Controllers\CustomerController@create');
Route::post('/customers', 'App\Http\Controllers\CustomerController@store');
Route::get('/customers/{customer}', 'App\Http\Controllers\CustomerController@show');
