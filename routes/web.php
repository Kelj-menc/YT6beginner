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

Route::get('/about', 'App\Http\Controllers\HelloController@about');
Route::get('/services', 'App\Http\Controllers\HelloController@services');
            //ja dodajem ovde controller.
            //koji sam napraio i @ funkcija koju hocu da past
            //VAZNO od laravela 8 ovde moras full path da dodas
            //a ne ko pre samo ime novog controlora