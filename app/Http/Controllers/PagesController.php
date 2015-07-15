<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function sendMail(Requests\ContactFormRequest $request){
        $sender_email = $request->input('email');
        $sender_name = $request->input('name');
        $message = $request->input('message_body');
        $data = array(
            'message_body'=> $message,
            'sender_name'=> $sender_name,
            'sender_email'=> $sender_email
        );
        Mail::send('emails.contact', $data, function ($message) use ($sender_email, $sender_name) {
            $message->from($sender_email, $sender_name);
            $message->to('craftiesconsulting@gmail.com')
                    ->cc('info@craftiesconsulting.com');
            $message->replyTo($sender_email);
        });

        return redirect('contact')
            ->with('message', 'Thanks for contacting us!');
    }



}
