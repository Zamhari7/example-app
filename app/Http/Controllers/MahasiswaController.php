<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = \App\Models\Mahasiswa::All();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menangkap Data Yang Diinput
        $nbi = $request->get('nbi');
        $nama_mhs = $request->get('nama_mhs');
        //Menyimpan data kedalam tabel
        $save_mhs = new \App\Models\Mahasiswa;
        $save_mhs->nbi = $nbi;
        $save_mhs->nama_mhs = $nama_mhs;
        $save_mhs->save();
        return redirect()->route('mahasiswa.index');
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
        $mhs_edit = \App\Models\Mahasiswa::findOrFail($id);
        return view('edit', ['mahasiswa' => $mhs_edit]);
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
        $mhs = \App\Models\Mahasiswa::findOrFail($id);
        $mhs->nama_mhs = $request->get('nama_mhs');
        $mhs->nbi = $request->get('nbi');
        $mhs->save();
        return redirect()->route('mahasiswa.index', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = \App\Models\Mahasiswa::findOrFail($id);
        $mhs->delete();
        return redirect()->route('mahasiswa.index');
    }

    public function generate()
    {
        $mhs = \App\Models\Mahasiswa::All();
        $pdf = PDF::loadview('mahasiswa_pdf', ['mahasiswa' => $mhs]);
        return $pdf->stream();
    }
}
