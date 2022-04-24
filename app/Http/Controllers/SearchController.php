<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
// use Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $input = null;
      // $input = request()->all();
      // $cari = Buku::where('judul_buku','like','%'.$input.'%')->first();
      // return view('peminjaman.pengajuan-peminjaman', compact('cari'));
    }

    public function search(Request $request)
    {
      if($request->ajax()) {
        $output="";
        $bukus= Buku::where('judul_buku','LIKE','%'.$request->search."%")->get();
        if($bukus){
          foreach ($bukus as $key => $buku) {
            $output.='<tr>'/
            '<td>'.$buku->id.'</td>'.
            '<td>'.$buku->judul_buku.'</td>'.
            '<td>'.$buku->pengarang_buku.'</td>'.
            '</tr>';
          }
        }
      }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
