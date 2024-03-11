<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    public function index()
    {
        $portfolioContent = 'This is the Portfolio content...';
        return view('about', ['aboutContent' => $portfolioContent]);
    }
}
