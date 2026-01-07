<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $response = Http::post(
            'http://localhost:3000/api/email',
            $validated
        );

        if ($response->failed()) {
            return back()->with('error', 'Failed to send message.');
        }

        return back()->with('success', 'Your message has been sent.');
    }
}
