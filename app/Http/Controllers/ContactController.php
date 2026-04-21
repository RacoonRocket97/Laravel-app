<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function index() {
        return view('contact');
    }

    public function send(Request $request) {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to('admin@sting.com')->send(
            new ContactMail($data['name'], $data['email'], $data['message'])
        );

        return back()->with('success', 'Your message has been sent!');
    }
}