<?php

namespace App\Http\Controllers;

use App\User;
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
        $newuser= new User();
             $newuser->user_name=' ';
            $newuser->first_name=$request->input('first_name');
            $newuser->last_name=$request->input('last_name');
            $newuser->phone_number=$request->input('phone');
            $newuser->email=$request->input('email');
            $newuser->password=$request->input('password');
            $newuser->user_engaged_from='null';
            $newuser->referral_code='null';
            $newuser->confirmed=0;
            $newuser->confirmation_code=$confirmation_code;
            $newuser->remember_token=$confirmation_code;
            $newuser->save();

        /**
         * sending email
         */
       /* \Mail::send(['html' => 'email.verify'], $data, function($message) {
            $message->to($newuser->email, 'raoasifraza')
                ->subject('Verify your email address')
                ->from(__('config.send_from'));
        });*/

        return  \redirect('/client/login');
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
