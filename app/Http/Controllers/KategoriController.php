<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    // Ini untuk lihat semua data
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kategoris = Kategori::all();
        $kategoris = Kategori::paginate(5);
        // $kategoris = Kategori::select('id', 'judul_kategori', 'kode_kategori')->paginate(2);
        return view('halaman/kategori-buku', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.tambah-kategori-buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // untuk save data
    public function store(Request $request)
    {
        Kategori::create([
          'judul_kategori' => $request->judul_kategori,
          'kode_kategori' => $request->kode_kategori,
        ]);
        return redirect()->route('kategori.index')->with('toast_success', 'Data Kategori Berhasil Ditambah');
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
        $editkategori = Kategori::find($id);
        return view('halaman/edit-kategori-buku',compact('editkategori'));
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
        $upkategori = Kategori::find($id);
        $upkategori->update($request->all());
        return redirect()->route('kategori.index')->with('toast_success', 'Data Kategori Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delkategori = Kategori::find($id);
        $delkategori->delete();
        return back()->with('toast_info', 'Data Buku Berhasil Dihapus');
    }
}
