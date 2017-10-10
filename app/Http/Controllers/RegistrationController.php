<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Http\Controllers\CoreController;

class RegistrationController extends Controller
{
    /**
     * Default function
     */

    public function index(){
        return redirect('/');
    }

    /**
     * Singup page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function singup(){
        return view('client.pages.register');
    }

    /**
     * Login page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(){
        return view('client.pages.login');
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function validateUser(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $data = User::all()->where('email', '=', $email);
        if ($data->isEmpty()) {
            return redirect('/client/login');
        } else {

            foreach ($data as $user) {
                if ($user->password == $password) {
                    return redirect('/admin');
                } else
                    return redirect('/client/login');
            }
        }

    }


    /**
     * Register new user
     *
     * @return Redirect to home
     */
    public function store(Request $request)
    {

        /**
         * validation rules
         */
        $this->validate(request(), [
            'first_name' => 'filled',
            'phone' => 'filled|digits:11',
            'email' => 'email|unique:users,email',
            'password' => 'filled|max:10|min:8',
        ]);

        /**
         * random hash string
         */
        $confirmation_code = str_random(30);

        $user = new User();
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->permissions = null;
        $user->activation_code = $confirmation_code;
        $user->activated_at = Carbon::now()->toDateTimeString();
        $user->last_login = Carbon::now()->toDateTimeString();
        $user->persist_code = null;
        $user->reset_password_code = null;
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->phone = $request->input('phone');
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->updated_at = Carbon::now()->toDateTimeString();
        $user->save();



        // TODO:: conformation email sending
        $data = array('confirmation_code'=> $confirmation_code);


        CoreController::sendMail($type = 'html', $template = 'email.verify', $data, $to
            = $request->get('email'), $subject = 'Verify Eamil Address');

        return redirect('/login')->with('alert-info', 'Verify your email address check inbox.');
    }


    /**
     * Verify user registration
     *
     * @param $confirmation_code
     * @return Redirect to admin
     */
    public function confirm($confirmation_code)
    {
        if (!$confirmation_code) {
            throw new InvalidConfirmationCodeException;
        }

        /**
         * update verify
         */
        $user = DB::table('users')
            ->where('activation_code', $confirmation_code)
            ->update(
                ['activated' => 1, 'activation_code' => null]
            );;

        if (!$user) {
            throw new InvalidConfirmationCodeException;
        }

        return redirect('/admin');
    }
}
