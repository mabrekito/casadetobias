<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function Submit(Request $request){
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',
        ]);
        // Create New Message
        $booking = new Message;
        $booking ->email = $request->input('name');
        $booking ->email = $request->input('email');
        $booking ->message = $request->input('message');
        // Save Message
        $booking->save();

        //Redirect
        return redirect('/');
    }
}
