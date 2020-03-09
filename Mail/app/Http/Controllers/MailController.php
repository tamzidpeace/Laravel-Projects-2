<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendMail()
    {
        $details = [
            'title' => 'Mail from Arafat',
            'body' => 'This is for testing email using smtp'
        ];
       
        \Mail::to('tamjedpeace@gmail.com')->send(new \App\Mail\MyTestMail($details));
       
        dd("Email is Sent.");
    }
}
