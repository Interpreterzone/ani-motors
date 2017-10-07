<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller
{
    /**
     * Register new user
     *
     * @return Redirect to home
     */
    public function store(Request $request)
    {

        /**
         * random hash string
         */
        $confirmation_code = str_random(30);

        $data = array('confirmation_code'=> $confirmation_code);

        /**
         * Register in db
         */
        DB::table('users')->insert(
            [
                'user_name' => '',
                'first_name' => $request->input('client[first_name]'),
                'last_name' => $request->input('client[last_name]'),
                'phone_number' => $request->input('client[phone]'),
                'email' => $request->input('client[email]'),
                'password' => $request->input('client[password]'),
                'user_engaged_from' => 'null',
                'referral_code' => 'null',
                'confirmed' => 0,
                'confirmation_code' => $confirmation_code,
                'remember_token' => $confirmation_code,
            ]
        );

        /**
         * sending email
         */
        //\Mail::send(['html' => 'email.verify'], $data, function($message) {
        //    $message->to('raoasifraz1@gmail.com', 'raoasifraza')
        //        ->subject('Verify your email address')
        //        ->from(__('config.send_from'));
        //});

        return redirect('/');
    }


    /**
     * Verify user registration
     *
     * @param $confirmation_code
     * @return Redirect to admin
     */
    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        /**
         * update verify
         */
        $user = DB::table('users')
            ->where('confirmation_code', $confirmation_code)
            ->update(
            ['confirmed' => 1, 'confirmation_code' => '']
        );;

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        return redirect('/admin');
    }
}
