<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

class LayananController extends Controller
{
    public function show(Layanan $layanan)
    {
        $otherLayanans = Layanan::where('id', '!=', $layanan->id)
            ->where('kategori_id', $layanan->kategori_id)
            ->take(3)
            ->get();

        return view('front.layanan.show', compact('layanan', 'otherLayanans'));
    }
} 