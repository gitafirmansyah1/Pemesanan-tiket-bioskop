<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Movie;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $booking = Booking::all();
        $movie = Movie::all();

        return view('tickets.index', compact('booking', 'movie'));
    }
}
