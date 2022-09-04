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

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/project/create', 'App\Http\Controllers\ProjectController@create');
Route::post('/project/store', 'App\Http\Controllers\ProjectController@store')->name('store');

Route::get('/project/index', 'App\Http\Controllers\ProjectController@index')->name('index');

Route::get('/project/show/{id}', 'App\Http\Controllers\ProjectController@show')->name('show');

Route::get('/project/edit/{id}', 'App\Http\Controllers\ProjectController@edit')->name('edit');
Route::post('/project/update/{id}', 'App\Http\Controllers\ProjectController@update')->name('update');