<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailProjectController extends Controller
{
    /**
     * Display the portfolio details page.
     *
     * @return \Illuminate\View\View
     */
    public function portfolioDetails($id)
    {
        $response = Http::get('https://server-portfolio-gamma.vercel.app/api/project-id', [
            'id' => $id
        ]);

        $project = $response->successful()
            ? $response->json()['data']
            : null;

        return view('detailProject', compact('project'));
    }
}
