<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
     * Attempt to login
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function login(Request $request){

        $email = $request->get('email');
        $password = $request->get('password');

        $fetchUser = User::select('id', 'email','password')->where('email', $email)->first();

        /**
         * if user attempt with correct credential
         *
         * it will be redirect to admin section
         *
         */
        if(sizeof($fetchUser) > 0){
            if(Hash::check($password, $fetchUser['password'])){

                // TODO: Session encryption method
                $request->session()->put('user', $fetchUser['email']);
                return redirect('/admin');
            }
        }else{
            return redirect('/login')->with('alert-danger', __('errors.wrongCredential'));
        }

        /**
         * return to login
         */
        return redirect('/login')->with('alert-danger', __('errors.wrongCredential'));
    }


    /**
     * Flush the session
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     */

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
