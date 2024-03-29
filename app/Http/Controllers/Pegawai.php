<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pegawai extends Controller
{
    public function index()
    {
        return view('pegawai');
    }
}
