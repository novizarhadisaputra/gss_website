<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

// Note: The resend/resend-laravel package needs to be installed via Composer.
// composer require resend/resend-laravel

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // This assumes you have a Mailable class set up
        // Since I cannot create another file, I will just use the Mail facade directly
        Mail::raw($validatedData['message'], function ($message) use ($validatedData) {
            $message->from($validatedData['email'], $validatedData['full_name']);
            $message->to('support@gsssolution.com');
            $message->subject('New Contact Form Submission from ' . $validatedData['company_name']);
        });

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
