<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Home;
use App\Models\about;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
     function index(){
          $home = Home::all();
        $about = about::all();
        return view('frontend.contact',[
        'about' => $about,
            'home' => $home,]);
    }

    function store(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
       Mail::to('f518d0d256253a@gmail.com')->send(new ContactFormMail($data));
       return redirect('contact')->with('status', 'Terima kasih, kami sudah menerima email anda.');
    }
    
}
