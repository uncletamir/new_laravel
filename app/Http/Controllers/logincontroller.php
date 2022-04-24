<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

/**
 *
 */
class logincontroller extends Controller
{

  public function postlogin(Request $request)
  {
    if (Auth::attempt($request->only('email','password'))){
      return view('halaman.halaman-satu');
    }

    return back();
  }

  public function logout(Request $request)
  {
    Auth::logout();
    return redirect('login');
  }
}
