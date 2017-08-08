<?php

namespace App\Http\Controllers;

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

      dd('mad');

    }
}
