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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ReservaController@index');
Route::get('/form', 'FormController@index');
Route::post('/save', 'FormController@store');
Route::get('/data', 'FormController@ajax_reservas');
Route::get('/mesas', 'FormController@ajax_mesas');