<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingsController extends Controller
{
    public function Submit(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',

        ]);
        // Creating Booking Record
        $booking = new Booking();
        $booking->email = $request->input('email');
        $booking->title = $request->input('title');
        $booking->firstName = $request->input('firstName');
        $booking->lastName = $request->input('lastName');
        $booking->address = $request->input('address');
        $booking->roomQty = $request->input('roomsQty');
        $booking->guest = $request->input('guest');
        $booking->senior = $request->input('senior');

        // Save Record
        $booking->save();

        // Redirect
        return redirect('/');
    }
}
