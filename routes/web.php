<?php
namespace App\Http\Controllers;
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




Route::get('/todos', 'App\Http\Controllers\TodosController@index')->name('index');
Route::get('todos/create', 'App\Http\Controllers\TodosController@create')->name('create');
Route::post('/todos', 'App\Http\Controllers\TodosController@store')->name('store');
Route::put('/todos/{id}/update', 'App\Http\Controllers\TodosController@update')->name('update');
Route::get('/todos/{id}/edit', 'App\Http\Controllers\TodosController@edit')->name('edit');
Route::get('/todos/{id}/delete', 'App\Http\Controllers\TodosController@destroy')->name('delete');
Route::get('/todos/{id}/complete', 'App\Http\Controllers\TodosController@complete')->name('complete');
Route::get('/todos/{id}', 'App\Http\Controllers\TodosController@show')->name('show');

