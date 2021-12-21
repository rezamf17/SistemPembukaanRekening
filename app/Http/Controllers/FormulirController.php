<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdentitasNasabah;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulir');
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
        $identitas = new IdentitasNasabah;
        $identitas->id_cabang = $request->id_cabang;
        $identitas->nama = $request->nama;
        $identitas->jenis_kelamin = $request->jenis_kelamin;
        $identitas->nama_ibu = $request->nama_ibu;
        $identitas->status_kependudukan = $request->status_kependudukan;
        $identitas->tempat_lahir = $request->tempat_lahir;
        $identitas->tanggal_lahir = $request->tanggal_lahir;
        $identitas->no_ktp = $request->no_ktp;
        $identitas->npwp = $request->npwp;
        $identitas->alamat = $request->alamat;
        $identitas->no_hp = $request->no_hp;
        $identitas->bertindak_sebagai = $request->bertindak_sebagai;
        $identitas->tujuan_buka_rekening = $request->tujuan_buka_rekening;
        // $identitas->save();
        if ($request->jenis_simpanan == "Simpanan Wadiah") {
            return redirect('/wadiah')->with('success', 'Berhasil');
        }
        if ($request->jenis_simpanan == "Simpanan Mudharabah") {
            return redirect('/mudharabah')->with('success', 'Berhasil');
        }
        // return $request;
        // return $identitas;
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
