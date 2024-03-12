<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contactContent = 'This is the Contact content...';
        return view('contact', ['contactContent' => $contactContent]);
    }
}
