<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = Buku::with('kategori')->get();
        return view('halaman.data-buku', compact('books'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('halaman.tambah-buku', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Buku::create([
          'kode_id' => $request->id,
          'judul_buku' => $request->judul_buku,
          'pengarang_buku' => $request->pengarang_buku,
          'penerbit_buku' => $request->penerbit_buku,
          'jml_buku' => $request->jml_buku,
        ]);

        // return Redirect::back()->withErrors(['msg' => 'The Message']);
        return redirect()->route('buku.index')->with('toast_success', 'Data Buku Berhasil Ditambah');
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

        $kategoris = Kategori::all();
        $editbuku = Buku::findorfail($id);
        return view('halaman/edit-buku',compact('editbuku', 'kategoris'));
        // return view('halaman.edit-buku');
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
        $upbuku = Buku::find($id);
        $upbuku->update($request->all());
        return redirect()->route('buku.index')->with('toast_success', 'Data Buku Berhasil Dirubah');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $delbuku = Buku::find($id);
      $delbuku->delete();
      return back()->with('toast_info', 'Data Buku Berhasil Dihapus');

    }
}
