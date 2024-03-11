<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    public function index()
    {
        return view('portfolio');
    }
}
