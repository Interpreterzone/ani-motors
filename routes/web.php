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

use Illuminate\Mail\Mailer;


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


Route::get('/send', function (){
    $data = array('name'=>"Ani Motors");
    // Path or name to the blade template to be rendered
    $template_path = 'email.welcome';

    Mail::send(['text'=> $template_path ], $data, function($message) {
        // Set the receiver and subject of the mail.
        $message->to('raoasifraz1@gmail.com', 'Customer')
            ->subject('Pending registration')
            ->from('2fsdevelopers@gmail.com','We care about you');
    });

    return "Successfully send";
});