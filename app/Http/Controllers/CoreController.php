<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreController extends Controller
{
    public static function sendMail($type = 'html', $template = 'email.welcome', $data_array = array('name'=>"Ani Motors"), $to, $subject){

        \Mail::send([$type => $template ], $data_array, function($message) use (&$to, &$subject)  {
            // Set the receiver and subject of the mail.
            $message->to($to)
                ->subject($subject)
                ->from(__('config.send_from'), 'We Care About You!');
        });
    }
}
