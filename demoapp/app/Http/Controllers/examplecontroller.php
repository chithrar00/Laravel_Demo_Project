<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class examplecontroller extends Controller
{
    public function homepage() {
        return view('homepage');
    }
    public function aboutpage() {
        return view('single-post');
    }
}
