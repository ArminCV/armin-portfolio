<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homeContent = 'This is Home content...';
        return view('home', ['homeContent' => $homeContent]);
    }
}
