<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreController extends Controller
{
    /**
     * Send new email
     *
     * @param string $type
     *
     * @param string $template
     *
     * @param array $data_array
     *
     * @param $to
     *
     * @param $subject
     */

    public static function sendMail($type = 'html', $template = 'email.welcome', $data_array = array('name'=>"Ani Motors"), $to, $subject){

        \Mail::send([$type => $template ], $data_array, function($message) use (&$to, &$subject)  {
            // Set the receiver and subject of the mail.
            $message->to($to)
                ->subject($subject)
                ->from(__('config.send_from'), 'We Care About You!');
        });
    }


    /**
     * Env file writing via command line
     * @param $key
     *
     * @param $old
     *
     * @param $value
     */

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
