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
     * Display the specified resource.
     *
     *
     *@return Response
     */
    public function validateUser(Request $request)
    {
    $email=$request->input('email');
    $password=$request->input('password');
    $data = User::all()->where('email','=',$email);
        //$this->student=Student::all()->where('user_id','=',$user)->first();
        if ($data->isEmpty()) {
            return redirect('/client/login');
        }
        else{

            foreach ($data as $user) {
                if ($user->password == $password) {
                    return redirect('/admin');
                }
                else
                    return redirect('/client/login');

            }


        }
  // return    response()->json($data);

   // var_dump($email);

    //die();


    }


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

        $new_user= new User();
             $new_user->user_name = ' ';
            $new_user->first_name = $request->input('first_name');
            $new_user->last_name = $request->input('last_name');
            $new_user->phone_number = $request->input('phone');
            $new_user->email = $request->input('email');
            $new_user->password = $request->input('password');
            $new_user->user_engaged_from = 'null';
            $new_user->referral_code = 'null';
            $new_user->confirmed = 0;
            $new_user->confirmation_code = $confirmation_code;
            $new_user->remember_token = $confirmation_code;
            $new_user->save();

        /**
         * sending email
         */
       /* \Mail::send(['html' => 'email.verify'], $data, function($message) {
            $message->to($new_user->email, 'raoasifraza')
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
