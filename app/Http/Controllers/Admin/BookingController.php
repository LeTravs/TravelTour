<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::paginate(10);

        return view('admin.bookings.index', compact('bookings'));
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
    
        return redirect()->route('admin.bookings.index')->with([
            'message' => 'Booking deleted successfully.',
            'alert-type' => 'success'
        ]);
    }
    
}

