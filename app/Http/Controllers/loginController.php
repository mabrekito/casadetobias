<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;

class loginController extends Controller
{
  public function getData(){
    return view('/register');
  }
  public function Submit(Request $request){
      $this->validate($request, [
          'firstName' => 'required',
          'lastName' => 'required',
          'address' => 'required',
          'username' => 'required',
          'password' => 'required',
          'userType' => 'required'
      ]);

      // Create New Message
      $login = new login;
      $login ->firstName = $request->input('firstName');
      $login ->lastName = $request->input('lastName');
      $login ->address = $request->input('address');
      $login ->username = $request->input('username');
      $login ->password = $request->input('password');
      $login ->userType = $request->input('userType');

      // Save Message
      $login->save();

      //Redirect
      return redirect('/login');
  }
}
