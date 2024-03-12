<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutContent = 'This is the About me content...';
        return view('about', ['aboutContent' => $aboutContent]);
    }
}
