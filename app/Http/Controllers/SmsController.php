<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index(){
        foreach($numbers as $number) {
            $client->message()->send([
                'to' => $number,
                'from' => NEXMO_FROM,
                'text' => 'Your message'
            ]);
        }
        Nexmo::message()->send(
            [

              'to'=> '263778405957',
              'from'=> 'Ngonidzashe',
              'text' => 'You have a new patient request in your location, check it out'
            ]
            );

            //return view('patients.index');
            echo "Message was send successfully to a doctor";
    }
}
