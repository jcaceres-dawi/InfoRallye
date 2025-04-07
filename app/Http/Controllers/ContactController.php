<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        ContactMessage::create([
            'title' => $request->title,
            'message' => $request->message,
        ]);

        Mail::to(env('MAIL_USERNAME'))->send(new ContactMessageMail($validated['title'], $validated['message']));

        return redirect()->route('contact.index')->with('success', '¡Tu mensaje ha sido enviado con éxito!');
    }
}
