<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Reservasi;
use App\Models\Sesi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create(Layanan $layanan)
    {
        $sesis = Sesi::all();
        return view('front.booking.create', compact('layanan', 'sesis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'layanan_id' => 'required|exists:layanans,id',
            'sesi_id' => 'required|exists:sesis,id',
            'tanggal' => 'required|date|after:today',
            'catatan' => 'nullable|string|max:500',
            'nama_bayi' => 'required|string|max:100',
            'umur_bayi' => 'required|numeric|min:0|max:60',
            'berat_bayi' => 'required|numeric|min:0|max:20',
            'tinggi_bayi' => 'required|numeric|min:0|max:100',
            'no_hp_ortu' => 'required|string|max:20',
        ]);

        $reservasi = Reservasi::create([
            'user_id' => Auth::id(),
            'layanan_id' => $validated['layanan_id'],
            'sesi_id' => $validated['sesi_id'],
            'tanggal' => $validated['tanggal'],
            'catatan' => $validated['catatan'],
            'nama_bayi' => $validated['nama_bayi'],
            'umur_bayi' => $validated['umur_bayi'],
            'berat_bayi' => $validated['berat_bayi'],
            'tinggi_bayi' => $validated['tinggi_bayi'],
            'no_hp_ortu' => $validated['no_hp_ortu'],
            'status' => 'pending',
            'status_pembayaran' => 'belum_bayar',
            'total_biaya' => 0,
        ]);

        return redirect()->route('booking.show', $reservasi)
            ->with('success', 'Reservasi berhasil dibuat!');
    }

    public function show(Reservasi $reservasi)
    {
        if (Auth::id() !== $reservasi->user_id) {
            abort(403);
        }

        $reservasi->load(['layanan', 'sesi']);
        return view('front.booking.show', compact('reservasi'));
    }

    public function index()
    {
        $reservasis = Reservasi::where('user_id', Auth::id())
            ->with(['layanan', 'sesi'])
            ->latest()
            ->paginate(10);

        return view('front.booking.index', compact('reservasis'));
    }

    public function cancel(Reservasi $reservasi)
    {
        if (Auth::id() !== $reservasi->user_id) {
            abort(403);
        }

        if ($reservasi->status !== 'pending') {
            return redirect()->back()
                ->with('error', 'Hanya reservasi yang masih pending yang dapat dibatalkan.');
        }

        $reservasi->update(['status' => 'cancelled']);

        return redirect()->route('booking.show', $reservasi)
            ->with('success', 'Reservasi berhasil dibatalkan.');
    }
} 