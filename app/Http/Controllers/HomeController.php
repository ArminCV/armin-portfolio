<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homeContent = 'Home Page';
        return view('home', ['homeContent' => $homeContent]);
    }
}
