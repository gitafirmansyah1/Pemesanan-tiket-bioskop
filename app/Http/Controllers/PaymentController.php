<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Booking; // assume you have a Booking model
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $booking = Booking::all();
        return view('payment.index', compact('booking'));
    }
    
    public function create()
{
    $user = Auth::user();
    $bookings = $user->bookings; // assuming you have a bookings relationship on the User model
    return view('tickets.index', compact('bookings'));
}

    public function store(Request $request, $bookingId)
    {
        $booking = Booking::find($bookingId);

        // Create a new payment instance
        $payment = new Payment();
        $payment->amount = $booking->total_price; // set amount to total_price from booking
        $payment->payment_method = $request->input('payment_method');
        $payment->payment_status = 'pending';
        $payment->booking_id = $bookingId; // assume you have a booking_id field in the payments table

        // Save the payment to the database
        $payment->save();

        // Redirect to a success page or display a success message
        return redirect()->route('home')->with('success', 'Payment created successfully!');
    }
}