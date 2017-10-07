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
    return view('client.pages.register');
});


Route::get('/client/login', function () {
    return view('client.pages.login');
});

Route::get('/master', function () {
    return view('master.index');
});


Route::get('/admin', function () {
    return view('crud.pages.index');
});

Route::get('/admin/blank', function () {
    return view('crud.pages.blank');
});


Route::get('/send', 'MailController@registration_mail');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);

Route::get('register/new/user','RegistrationController@store');


Route::get('/db', function (){
        // Make call to application...
    try {
        DB::connection()->getPdo();
        echo '<center><b>Database connection sussfully connected!</b></center>';
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration.");
    }
});