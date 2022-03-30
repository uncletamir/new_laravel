<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
      return view('halaman.halaman-satu');
    }

    public function halamansatu()
    {
      return view('halaman.halaman-satu');
    }

    public function halamandua()
    {
      return view('halaman.halaman-dua');
    }
    public function databuku()
    {
      return view('halaman.data-buku');
    }
}
