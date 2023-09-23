<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function index()
    {
        $campus_name = "Universitas Singaperbangsa Karawang";
        $detai_campus = "Universitas Singaperbangsa Karawang (Bahasa Indonesia: Universitas Singaperbangsa Karawang) adalah universitas pertama yang didirikan di Karawang. Didirikan pada tanggal 2 Februari 1982. Nama universitas ini diambil dari nama Raden Adipati Singaperbangsa, pendiri Karawang pada masa pemerintahan Sultan Agung dari Mataram. Pada tanggal 6 Oktober 2014, UNSIKA menjadi universitas negeri.";
        $image_campus = "UNSIKA.jpg";

        $data["name"] = $campus_name;
        $data["detail"] = $detai_campus;
        $data["image"] = $image_campus;
        $data["title"] = "Campus";
        $data["active"] = "campus";

        return view("campus", $data);
    }
}
