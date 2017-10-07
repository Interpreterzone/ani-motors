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


    public static function changeEnvVariable($key, $old, $value){
        $path = base_path('.env');

        if(is_bool(env($key)))
        {
            $old = env($key)? 'true' : 'false';
        }

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                "$key=".$old, "$key=".$value, file_get_contents($path)
            ));
        }
    }
}
