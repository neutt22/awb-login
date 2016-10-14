<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Mail\ContactedUs;

class ContactController extends Controller
{

    public function postSendMessage(Request $request)
    {

      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:10',
      ]);

      Mail::to($request->email)
          ->send(new ContactedUs());

      return 'your sending an email';
    }
}
