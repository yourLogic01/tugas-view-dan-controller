<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view("home", [
            "image" => "pro.jpg",
            'title'=>'home',
        'active' => 'home'
        ]);
    }
}
