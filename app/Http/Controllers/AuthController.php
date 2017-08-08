<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller
{
    public function getSignup(){
      return view('auth.signup');
    }

    public function postSignup(Request $request){
      $this->validate($request, [
        'email'    => 'required|unique:users|email|max:255',
        'user'     => 'required|unique:users|alpha_dash|max:20',
        'password' => 'required|min:6'
      ]);

      $users = new User;

      $users->email    = $request->email;
      $users->username = $request->username;
      $users->password = bcrypt($request->password);

      return redirect()->route('home')->with('info', 'U have created your account and you can now sign in');



    }
}
