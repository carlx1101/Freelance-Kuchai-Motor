<?php

namespace App\Http\Controllers;

use App\Mail\BookingInvoice;
use App\Models\Booking;
use App\Models\Motorcycle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {

        // Retrieve all booking records
        $bookings = Booking::all();

        // Pass the bookings data to the view
        return view('admin.bookings.index', ['bookings' => $bookings]);
    }

    public function store(Request $request)
    {

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'datetime' => 'required',
            'phone_number' => 'nullable',
            'message' => 'required',
            'motorcycle_id' => 'required'

        ]);

        $booking = Booking::create($validatedData);

        if ($booking) {
            // Get motorcycle details
            $data = $booking->with('motorcycle')->first();

            // Send Email Notification
            Mail::to($request->email)->send(new BookingInvoice($data));
            // Redirect or respond as needed
            return redirect()->back()->with('success', 'Booking made successfully!');
        }
    }

    public function markAsResolved(Request $request, $id)
    {
        // Find the booking record by ID
        $booking = Booking::find($id);

        if (!$booking) {
            return back()->with('error', 'Booking not found');
        }

        // Toggle the booking status
        $booking->status = $booking->status === 'Active' ? 'Resolved' : 'Active';
        $booking->save();

        return back()->with('success', 'Booking status updated');
    }
}
