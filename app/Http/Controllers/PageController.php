<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        // Ambil data dari Node.js API
        $response = Http::get('http://localhost:3000/api/projects');

        $projects = $response->successful()
            ? $response->json()['data']
            : [];

        // Kirim data ke view welcome.blade.php
        return view("welcome", compact('projects'));
    }
}
