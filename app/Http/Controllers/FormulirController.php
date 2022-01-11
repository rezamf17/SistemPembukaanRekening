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
use Illuminate\Support\Facades\Validator;

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
        $rules = [
            'id_cabang' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'nama_ibu' => 'required',
            'status_kependudukan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_ktp' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'bertindak_sebagai' => 'required',
            'tujuan_buka_rekening' => 'required',
            'zakat' => 'required',
            'file' => 'required|image'
        ];

        $messages = [
            'nama.required' => 'Nama tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'nama_ibu.required' => 'Nama Ibu Kandung tidak boleh kosong',
            'status_kependudukan.required' => 'Status Kependudukan tidak boleh kosong',
            'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
            'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
            'no_ktp.required' => 'Nomor KTP tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'no_hp.required' => 'Nomor HP tidak boleh kosong',
            'bertindak_sebagai.required' => 'Bertindak Sebagai tidak boleh kosong',
            'tujuan_buka_rekening.required' => 'Tujuan Buka Rekening tidak boleh kosong',
            'zakat.required' => 'Zakat tidak boleh kosong',
            'file.required' => 'Foto/Scan KTP harus diupload',
            'file.image' => 'Foto/Scan KTP harus berformat gambar'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
         return redirect('/')->with('warning', $validator->errors()->first());
        }

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
