<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class AuthController extends Controller
{
    public function getSignup(){
      return view('auth.signup');
    }

    public function postSignup(Request $request){
      $this->validate($request, [
        'email'        => 'required|unique:users|email|max:255',
        'username'     => 'required|unique:users|alpha_dash|max:20',
        'password'     => 'required|min:6'
      ]);

      $users = new User;

      $users->email    = $request->email;
      $users->username = $request->username;
      $users->password = bcrypt($request->password);

      $users->save();

      return redirect()->route('home')->with('info', 'U have created your account and you can now sign in');

    }


    public function getSignin(){
      return view('auth.signin');
    }

}
