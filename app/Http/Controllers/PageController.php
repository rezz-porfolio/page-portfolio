<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
public function index()
{
    $projectsResponse = Http::get('https://server-portfolio-gamma.vercel.app/api/projects');
    $textsResponse = Http::get('https://server-portfolio-gamma.vercel.app/api/text');

    $projects = $projectsResponse->successful()
        ? $projectsResponse->json()['data']
        : [];

    $texts = $textsResponse->successful()
        ? $textsResponse->json()['data']
        : [];

    return view("welcome", compact('projects', 'texts'));
}
}
