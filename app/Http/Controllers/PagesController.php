<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function index(){
        return view('pages.home')->with('active', 'home');
    }

    public function contact(){
        return view('pages.contact')->with('active', 'contact');
    }

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
            $message->to('info@craftiesconsulting.com')
                    ->cc('craftiesconsulting@gmail.com');
            $message->replyTo($sender_email);
        });

        return redirect('contact')
            ->with('message', 'Thanks for contacting us!');
    }
}
