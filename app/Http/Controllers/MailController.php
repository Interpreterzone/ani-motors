<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class MailController extends Controller
{
    function registration_mail(){
        $data = array('name'=>"Ani Motors");
        // Path or name to the blade template to be rendered
        $template_path = 'email.welcome';

        \Mail::send(['text'=> $template_path ], $data, function($message) {
            // Set the receiver and subject of the mail.
            $message->to('raoasifraz1@gmail.com', 'Customer')
                ->subject('Pending registration')
                ->from(__('config.send_from'), 'We Care About You!');
        });

        return view('email.welcome');
    }
}
