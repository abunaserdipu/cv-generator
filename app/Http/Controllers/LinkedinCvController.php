<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LinkedinService;

class LinkedinCvController extends Controller
{
    public function index()
    {
        return view('linkedin.form');
    }

    public function generate(Request $request, LinkedinService $linkedinService)
    {
        $request->validate([
            'linkedin_url' => 'required|url'
        ]);

        $profileData = $linkedinService->fetchProfile($request->linkedin_url);

        return view('linkedin.cv', compact('profileData'));
    }
}
