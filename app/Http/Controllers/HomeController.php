<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

class HomeController extends Controller
{
    public function index()
    {
        $layanans = Layanan::with('kategori')->get();
        return view('front.home', compact('layanans'));
    }
} 