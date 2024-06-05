<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        //$bookings = Booking::where('tenant_id', Auth::id())->get();
        $pageTitle ='View Booking';
        $bookings = Booking::all();
        return view('penyewa.view-booking', compact('pageTitle','bookings'));
    }

    // public function store(Request $request, $id)
    // {
    //     $kos = Kos::findOrFail($id);

    //     $booking = new Booking();
    //     $booking->tenant_id = Auth::id();
    //     $booking->kos_id = $kos->id;
    //     $booking->status = 'pending';
    //     $booking->save();

    //     return redirect()->route('penyewa.view-booking')->with('success', 'Kos booked successfully.');
    // }
}
