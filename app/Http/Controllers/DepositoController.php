<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdentitasNasabah;
use App\Models\NasabahPerorang;
use App\Models\NasabahBadan;
use App\Models\Formulir;
use App\Models\Deposito;
use App\Models\JenisSimpanan;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deposito = Deposito::all();
        return view ('super-admin.Data Nasabah.DataNasabahDeposito', compact('deposito'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deposito = Deposito::where('id', $id)->first();
        return view('super-admin.Data Nasabah.LihatNasabahDeposito', compact('deposito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deposito = Deposito::where('id', $id)->first();
        return view('super-admin.Data Nasabah.EditNasabahDeposito', compact('deposito'));
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
        $deposito = Deposito::find($id);
        $nama = $request->nama;
        $jenis_tabungan = $request->jenis_tabungan;
        $cabang = $request->id_cabang;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $no_ktp = $request->no_ktp;
        $alamat = $request->alamat;
        $zakat = $request->zakat;
        $identitas = IdentitasNasabah::find($deposito->id_identitas_nasabah);
        if ($request->nama == null) {
            
        }else{
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
            $identitas->save();
        }

        $jenis_simpanan = JenisSimpanan::find($deposito->id_jenis_simpanan);
        $jenis_simpanan->jenis_simpanan = $request->jenis_simpanan;
        $jenis_simpanan->jenis_tabungan = $jenis_tabungan;
        $jenis_simpanan->save();

        $perorang = NasabahPerorang::find($deposito->id_nasabah_perorang);
        if ($request->sumber_penghasilan == null) {
            
        }else{
            $perorang->sumber_penghasilan = $request->sumber_penghasilan;
            $perorang->nama_tempat_kerja = $request->nama_tempat_kerja;
            $perorang->jabatan = $request->jabatan;
            $perorang->bidang_usaha = $request->bidang_usaha;
            $perorang->alamat_perusahaan = $request->alamat_perusahaan;
            $perorang->pekerjaan = $request->pekerjaan;
            $perorang->pendidikan = $request->pendidikan;
            $perorang->agama = $request->agama;
            $perorang->penghasilan = $request->penghasilan;
            $perorang->save();
        }

        $badan = NasabahBadan::find($deposito->id_nasabah_badan);
        if ($request->bentuk_usaha == null) {
            
        }else{
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
            $badan->save();
        }

        // $file = File::find($formulir->id_files);
        // if ($file->name == null) {
        
        // }else{
        //     $file->name = $request->file('file')->store('ktp');
        //     $file->save();
        // }
        $deposito->atas_nama = $request->atas_nama;
        $deposito->no_rekening_pemilik = $request->no_rekening_pemilik;
        $deposito->nominal_setoran = $request->nominal_setoran;
        $deposito->mata_uang = $request->mata_uang;
        $deposito->jangka_waktu = $request->jangka_waktu;
        $deposito->pembayaran_bagi_hasil = $request->pembayaran_bagi_hasil;
        $deposito->perpanjang_otomatis = $request->perpanjang_otomatis;
        $deposito->ahli_waris = $request->ahli_waris;
        $deposito->hubungan_dgn_ahli_waris = $request->hubungan_dgn_ahli_waris;

        $deposito->id_jenis_simpanan = $jenis_simpanan->id;
        if ($deposito->id_identitas_nasabah == null) {
            
        }else{
            $deposito->id_identitas_nasabah = $identitas->id;
        }
        if ($deposito->id_nasabah_perorang == null) {
            
        }elseif($deposito->id_nasabah_perorang != null){
            $deposito->id_nasabah_perorang = $perorang->id;
        }
        if ($deposito->id_nasabah_badan == null) {
            
        }else{
            $deposito->id_nasabah_badan = $badan->id;
        }
        $deposito->id_files = $deposito->id_files;
        $deposito->save();

        return redirect('rekeningDeposito')->with('success', 'Data Berhasil Diedit!');
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
