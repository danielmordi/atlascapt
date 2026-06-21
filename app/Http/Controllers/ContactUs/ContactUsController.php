<?php

namespace App\Http\Controllers\ContactUs;

use Illuminate\Http\Request;
use App\Models\ContactUs\ContactUs;
use App\Http\Controllers\Controller;
use App\Mail\ContactUs as MailContactUs;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
      $subject = "Contact form!";
      $contact = ContactUs::create([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $subject,
        'message' => $request->message
      ]);

      Mail::to('cloudcryptomines@gmail.com')->send(new MailContactUs($contact));

      return redirect()->back()->with('success', "Thanks for filling out the form!");
    }
}
