<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            "name" => "Asyifa Maulana",
            "sib" =>"Gits.id",
            "hoby" => "Bermain Game",
            "univ" =>"Universitas Singaperbangsa Karawang",
            "image" => "profile.jpg",
            "active" => 'about',
        ]);
    }
}
