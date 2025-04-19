<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use App\Models\Reservasi;
use App\Models\Sesi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function checkDateAvailability(Request $request)
    {
        $request->validate([
            'date' => 'required|date'
        ]);

        $date = Carbon::parse($request->date);
        
        // Check if date is in the past
        if ($date->isPast()) {
            return response()->json(['available' => false]);
        }

        // Check if date is a holiday
        $isHoliday = Holiday::whereDate('tanggal', $date)->exists();
        if ($isHoliday) {
            return response()->json(['available' => false]);
        }

        // Check if date is a weekend
        if ($date->isWeekend()) {
            return response()->json(['available' => true]);
        }

        // Check if date is Friday (special case)
        if ($date->dayOfWeek === 5) { // 5 is Friday
            return response()->json(['available' => true]);
        }

        // For weekdays
        return response()->json(['available' => true]);
    }

    public function checkSessionAvailability(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'session_id' => 'required|exists:sesis,id'
        ]);

        $date = Carbon::parse($request->date);
        $sessionId = $request->session_id;

        // Get the session
        $session = Sesi::findOrFail($sessionId);

        // Check if date is valid
        if ($date->isPast() || Holiday::whereDate('tanggal', $date)->exists()) {
            return response()->json(['available' => false]);
        }

        // Get existing reservations for this date and session
        $existingReservations = Reservasi::whereDate('tanggal', $date)
            ->where('sesi_id', $sessionId)
            ->whereIn('status', ['pending', 'confirmed'])
            ->count();

        // Determine max patients based on day type
        $maxPatients = $date->isWeekend() ? 2 : 1;

        // Check if session is available
        $isAvailable = $existingReservations < $maxPatients;

        return response()->json(['available' => $isAvailable]);
    }
} 