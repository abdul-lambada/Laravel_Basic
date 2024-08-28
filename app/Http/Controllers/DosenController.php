<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        // return "Ini Adalah Controller Dosen Dengan method index";
        $nama = 'Dosen Name';

        $sks = ['Logika Maematika', 'Kalkulus', 'Pem. Web'];
        return view('biodata', ['nama' => $nama, 'matkul' => $sks]);
    }
}
