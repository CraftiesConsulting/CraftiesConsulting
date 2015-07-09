<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function sendMail(Request $request){
        $sender_email = $request->input('email');
        $sender_name = $request->input('name');
        $message = $request->input('message');

        Mail::send('emails.contact', ['body', $message], function ($message) use ($sender_email, $sender_name) {
            $message->from($sender_email, $sender_name);
            $message->to('craftiesconsulting@gmail.com')
                    ->cc('alabamustapha@gmail.com')
                    ->cc('info@craftiesconsulting.com');
            $message->replyTo($sender_email);
        });

        return Redirect::back()->with('message', "We will get back shortly");
    }



}
