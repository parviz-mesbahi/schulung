<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontaktController extends Controller
{
    public function showForm()
    {
        return view('kontakt');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'string|max:20',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::send('kontakt', $details, function ($message) use ($details) {
            $message->to('info@maxabit.de')
                ->subject('New Contact Form Submission');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
