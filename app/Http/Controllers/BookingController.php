<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Movie;
use App\Models\Showtime;
use App\Models\Ticket;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings','movies'));
    }

    public function create()
    {
        $movies = Movie::all();
        return view('bookings.create', compact('movies',));
    }

    public function store(Request $request)
{
    //...

    $booking = new Booking();
    $booking->movie_title = $request->input('movie_title');
    $booking->showtime = $request->input('showtime');
    $booking->seat_type = $request->input('seat_type');
    $booking->quantity = $request->input('quantity');
    $booking->total_price = $this->calculateTotalPrice($request->input('seat_type'), $request->input('quantity'));
    $booking->save();

    // Create multiple tickets for this booking


    return redirect()->route('payment.index')->with('success', 'Booking successful!');
}

    private function calculateTotalPrice($seatType, $quantity)
    {
        if ($seatType == 'Economy') {
            return $quantity * 10.00;
        } elseif ($seatType == 'Premium') {
            return $quantity * 20.00;
        } elseif ($seatType == 'VIP') {
            return $quantity * 30.00;
        }
    }
}