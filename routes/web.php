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
    return view('client.index');
});


Route::get('/client/register', function () {
    return view('client.register');
});

Route::get('/master', function () {
    return view('master.index');
});


Route::get('/admin', function () {
    return view('crud.index');
});
