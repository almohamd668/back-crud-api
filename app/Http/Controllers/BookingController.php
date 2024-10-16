<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    function myBookings(Request $request) {
       return $request->all();
        // return "my Booking";
    }
}
