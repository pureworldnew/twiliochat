<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Log;

class TwilioController extends Controller
{
    public function send(Request $request){
        $sid    = "ACbad198140433710a4e6a6bdfc880e1ec";
        $token  = "3127232a68128082edcc3d16f1b651f2";
        $twilio = new Client($sid, $token); 

        $message = $twilio->messages
                        ->create("whatsapp:+923055705456", // to
                                [
                                    "from" => "whatsapp:+14155238886",
                                    "body" => $request->all()['items']
                                ]
                        );

        print($message->sid);
    }
}
