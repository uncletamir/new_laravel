<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Auth;
use Session;

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
    Session::flush();
    return redirect('login');
  }
}
