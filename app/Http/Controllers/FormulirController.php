<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdentitasNasabah;
use App\Models\NasabahPerorang;
use App\Models\NasabahBadan;
use App\Models\Formulir;
use App\Models\File;
use App\Models\Cabang;
use App\Models\JenisSimpanan;

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
        // return $request;
        $nama = $request->nama;
        $jenis_tabungan = $request->jenis_tabungan;
        $cabang = $request->id_cabang;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $no_ktp = $request->no_ktp;
        $alamat = $request->alamat;
        $zakat = $request->zakat;
        $identitas = new IdentitasNasabah;
        $identitas->nama = $nama;
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
        $identitas->zakat = $request->zakat;
        if ($request->nama == null) {
            
        }else{
            $identitas->save();
        }

        $jenis_simpanan = new JenisSimpanan;
        $jenis_simpanan->jenis_simpanan = $request->jenis_simpanan;
        $jenis_simpanan->jenis_tabungan = $jenis_tabungan;
        $jenis_simpanan->save();

        $perorang = new NasabahPerorang;
        $perorang->sumber_penghasilan = $request->sumber_penghasilan;
        $perorang->nama_tempat_kerja = $request->nama_tempat_kerja;
        $perorang->jabatan = $request->jabatan;
        $perorang->bidang_usaha = $request->bidang_usaha;
        $perorang->alamat_perusahaan = $request->alamat_perusahaan;
        $perorang->pekerjaan = $request->pekerjaan;
        $perorang->pendidikan = $request->pendidikan;
        $perorang->agama = $request->agama;
        $perorang->penghasilan = $request->penghasilan;
        if ($request->sumber_penghasilan == null) {
            
        }else{
            $perorang->save();
        }

        $badan = new NasabahBadan;
        $badan->bentuk_usaha = $request->bentuk_usaha;
        $badan->nama_badan_usaha = $request->nama_badan_usaha;
        $badan->jenis_usaha = $request->jenis_usaha;
        $badan->izin_usaha = $request->izin_usaha;
        $badan->alamat_pemilik = $request->alamat_pemilik;
        $badan->npwp_pemilik = $request->npwp_pemilik;
        $badan->sumber_dana = $request->sumber_dana;
        $badan->omzet = $request->omzet;
        $badan->pengurus1 = $request->pengurus1;
        $badan->pengurus2 = $request->pengurus2;
        $badan->pengurus3 = $request->pengurus3;
        $badan->pengurus4 = $request->pengurus4;
        if ($request->bentuk_usaha == null) {
            
        }else{
            $badan->save();
        }

        $file = new File;
        $file->name = $request->file('file')->store('ktp');
        $file->save();

        $formulir = new Formulir;
        $formulir->id_cabang = $request->id_cabang;
        $formulir->id_jenis_simpanan = $jenis_simpanan->id;
        $formulir->id_identitas_nasabah = $identitas->id;
        $formulir->id_nasabah_perorang = $perorang->id;
        $formulir->id_nasabah_badan = $badan->id;
        $formulir->id_files = $file->id;
        $formulir->save();

        if ($request->jenis_simpanan == "Simpanan Wadiah") {
            return view('wadiah', compact('nama', 'jenis_tabungan', 'cabang', 'tempat_lahir', 'tanggal_lahir', 'no_ktp', 'alamat', 'zakat'));
        }
        if ($request->jenis_simpanan == "Simpanan Mudharabah") {
             return view('mudharabah', compact('nama', 'jenis_tabungan', 'cabang', 'tempat_lahir', 'tanggal_lahir', 'no_ktp', 'alamat', 'zakat'));
        }
        // return $badan;
        // return $perorang;
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
