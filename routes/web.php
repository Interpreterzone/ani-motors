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

//Login
Route::POST('validateUser','RegistrationController@validateUser');

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

Route::get('/send', 'MailController@registration_mail');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);


Route::POST('register','RegistrationController@store');




Route::get('/db', function (){
        // Make call to application...
    try {
        DB::connection()->getPdo();
        echo '<center><b>Database connection sussfully connected!</b></center>';
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration.");
    }
});


Route::get('/admin/hire_rates&charges', function (){
    return view('crud.pages.hire_rates&charges');
});

Route::get('/admin/non_regulated', function (){
    return view('crud.pages.non_regulated');
});
Route::get('/admin/hirer_details', function (){
    return view('crud.pages.hirer_details');
});
Route::get('/admin/licence_details', function (){
    return view('crud.pages.licence_details');
});