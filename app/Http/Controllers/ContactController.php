<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

// Note: The resend/resend-laravel package needs to be installed via Composer.
// composer require resend/resend-laravel

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request)
    {
        $validatedData = $request->validated();

        Mail::to('support@gsssolution.com')->send(new ContactFormMail($validatedData));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
