<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

class Contact extends Controller
{
     function index(){
        return view('frontend.contact');
    }

    function store(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
       Mail::to('adamibndasd7@gmail.com')->send(new ContactFormMail($data));
       return redirect('contact')->with('status', 'Terima kasih, kami sudah menerima email anda.');
    }
    
}
