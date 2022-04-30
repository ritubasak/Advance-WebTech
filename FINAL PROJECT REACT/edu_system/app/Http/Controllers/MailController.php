<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title'=> 'You have received a configuration mail from Ritu Basak',
            'body' => 'Hi! Welcome to education platform'
    ];
    Mail::to("ritubsk70@gmail.com")->send(new TestMail($details));
    return "Email sent successfully!";
    }
}
