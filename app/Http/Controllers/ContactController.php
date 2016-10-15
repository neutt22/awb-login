<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Mail\ContactedUs;
use App\Mail\EmailReceived;

class ContactController extends Controller
{

    public function postSendMessage(Request $request)
    {

      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:10',
      ]);

      // For Login Admin
      Mail::to('admin@loginsvc.com')
          ->queue(new ContactedUs($request->name, $request->email, $request->message));

      // System acknowledgement to the sender
      Mail::to($request->email)
          ->queue(new EmailReceived($request->name));

      return view('contact-us')
            ->withMessage('Thank you for contacting us! We will get back to you immediately.');
    }
}
