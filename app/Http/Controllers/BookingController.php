<?php


namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        return view('booking');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'package' => 'required|string|max:255',
            'pax' => 'required|integer',
            'car' => 'required|string|max:255',
            'payment' => 'required|string|max:255',
        ]);

        Booking::create($validatedData);

        return redirect()->back()->with('success', "Success, we'll process your booking");
    }
}

