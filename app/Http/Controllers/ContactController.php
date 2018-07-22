<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Request;
use App\Mail\ContactMail;
use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;



class ContactController extends Controller
{
    
    public function create()
    {
        return view('messages.contact');
    }

   
    public function show(Message $message)
    {
        
    }

    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
    {
        Mail::to('awtomeiddia.enquiries@gmail.com')->send(new ContactMail($message));
        return redirect()->back()->with('status', 'We\'ve got your message! We will be in touch shortly');
    }

  
}
