<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/form', function () {
    return view('form');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/project/create', 'App\Http\Controllers\ProjectController@create');
Route::post('/project/store', 'App\Http\Controllers\ProjectController@store')->name('store');

Route::get('/project/index', 'App\Http\Controllers\ProjectController@index')->name('index');

