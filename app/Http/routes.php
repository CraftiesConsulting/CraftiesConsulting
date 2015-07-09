<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
//    Mail::raw('Laravel with Mailgun is easy!', function($message)
//    {
//        $message->to('alabamustapha@gmail.com');
//    });
    return view('pages.home');
});

Route::get('contact', function(){
   return view('pages.contact');
});

Route::post('contact', function(){
    $from = Input::get('email');
    $sender = Input::get('name');
    $body = Input::get('message');
    $data = array($from, $sender, $body);
//    Mail::send('emails.contact', $data, function($message)
//    {
//        $message->to('craftiesconsulting@gmail.com');
//
//    });

        Mail::raw('Laravel with Mailgun is easy!', function($message)
    {
        $message->to('info@craftiesconsulting.com')->cc('alabamustapha@gmail.com');
    });

    return Redirect::back();
});
