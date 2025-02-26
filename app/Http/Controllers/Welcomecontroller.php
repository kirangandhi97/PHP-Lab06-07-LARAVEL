<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $message = "Laravel makes web development enjoyable!";
        return view('welcome', compact('message'));
    }
}