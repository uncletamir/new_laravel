<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orang;

class OrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getallorang = Orang::paginate(10);
        return view('halaman.orang',compact('getallorang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('halaman.tambah-orang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Orang::create([
          'nama'=>$request->nama,
          'umur'=>$request->umur,
        ]);

        return redirect()->route('orang.index')->with('toast_success', 'Data Orang Berhasil Ditambah');
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
        $getorang = Orang::find($id);
        return view('halaman.edit-orang',compact('getorang'));
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
        $getorang = Orang::find($id);
        $getorang->update($request->all());
        // $getorang->update([
        //   'nama'=>$request->nama,
        //   'umur'=>$request->umur,
        // ]);

        return redirect()->route('orang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getorang = Orang::find($id);
        $getorang->delete();
        return back()->with('toast_warning', 'Data Orang Berhasil Dihapus');
    }
}
