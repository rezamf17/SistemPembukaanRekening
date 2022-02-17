@extends('layouts.temp')
@section('title')
Lihat Data Nasabah Deposito
@endsection()
@section('content')
<div class="card">
    <div class="card-header">
        Data Deposito Nasabah Deposito
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
               <tr>
                   <th>Atas Nama</th>
                   <td>{{$deposito->atas_nama}}</td>
               </tr>
               <tr>
                   <th>No Rekening Pemilik</th>
                   <td>{{$deposito->no_rekening_pemilik}}</td>
               </tr>
               <tr>
                   <th>Mata Uang</th>
                   <td>{{$deposito->mata_uang}}</td>
               </tr>
               <tr>
                   <th>Jangka Waktu</th>
                   <td>{{$deposito->jangka_waktu}}</td>
               </tr>
               <tr>
                   <th>Pembayaran Bagi Hasil</th>
                   <td>{{$deposito->pembayaran_bagi_hasil}}</td>
               </tr>
               <tr>
                   <th>No Rekening Bagi Hasil</th>
                   <td>{{$deposito->no_rek_bagi_hasil}}</td>
               </tr>
               <tr>
                   <th>Perpanjang Otomatis</th>
                   <td>{{$deposito->perpanjang_otomatis}}</td>
               </tr>
               <tr>
                   <th>Ahli Waris</th>
                   <td>{{$deposito->ahli_waris}}</td>
               </tr>
               <tr>
                   <th>Hubungan Dengan Ahli Waris</th>
                   <td>{{$deposito->hubungan_dgn_ahli_waris}}</td>
               </tr>
            </table>
        </div>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">Data Identitas Nasabah</div>
    <div class="card-body">
        @if ($deposito->id_identitas_nasabah == null)
            Data Kosong
        @else
        <table class="table" >
                <tr>
                    <th>Nama</th>
                    <td>{{$deposito->identitas_nasabah->nama}}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{$deposito->identitas_nasabah->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <td>{{$deposito->identitas_nasabah->nama_ibu}}</td>
                </tr>
                <tr>
                    <th>Status Kependudukan</th>
                    <td>{{$deposito->identitas_nasabah->status_kependudukan}}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{$deposito->identitas_nasabah->tempat_lahir}}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{$deposito->identitas_nasabah->tanggal_lahir}}</td>
                </tr>
                <tr>
                    <th>No KTP</th>
                    <td>{{$deposito->identitas_nasabah->no_ktp}}</td>
                </tr>
                <tr>
                    <th>Masa Berlaku KTP</th>
                    <td>{{$deposito->identitas_nasabah->masa_berlaku}}</td>
                </tr>
                <tr>
                    <th>NPWP</th>
                    <td>{{$deposito->identitas_nasabah->npwp}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{$deposito->identitas_nasabah->alamat}}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{$deposito->identitas_nasabah->no_hp}}</td>
                </tr>
                <tr>
                    <th>Bertindak Sebagai</th>
                    <td>{{$deposito->identitas_nasabah->no_hp}}</td>
                </tr>
                <tr>
                    <th>Tujuan Buka Rekening</th>
                    <td>{{$deposito->identitas_nasabah->tujuan_buka_rekening}}</td>
                </tr>
                <tr>
                    <th>Pemotongan Zakat</th>
                    <td>{{$deposito->identitas_nasabah->zakat}}</td>
                </tr>
                <tr>
                    <th>Foto/Scan KTP</th>
                    <td><img src="{{ asset('storage/'.$deposito->files->name) }}" style="width: 350px;"></td>
                </tr>
            </table>
        @endif
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">Data Nasabah Perorang</div>
    <div class="card-body">
        <table class="table">
            @if ($deposito->nasabah_perorang == null)
            Data Kosong
            @else
            <tr>
                <th>Sumber Penghasilan</th>
                <td>{{$deposito->nasabah_perorang->sumber_penghasilan}}</td>
            </tr>
            <tr>
                <th>Nama Tempat Kerja</th>
                <td>{{$deposito->nasabah_perorang->nama_tempat_kerja}}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>{{$deposito->nasabah_perorang->jabatan}}</td>
            </tr>
            <tr>
                <th>Bidang Usaha</th>
                <td>{{$deposito->nasabah_perorang->bidang_usaha}}</td>
            </tr>
            <tr>
                <th>Alamat Perusahaan</th>
                <td>{{$deposito->nasabah_perorang->alamat_perusahaan}}</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>{{$deposito->nasabah_perorang->pekerjaan}}</td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>{{$deposito->nasabah_perorang->pendidikan}}</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>{{$deposito->nasabah_perorang->agama}}</td>
            </tr>
            <tr>
                <th>Penghasilan</th>
                <td>{{$deposito->nasabah_perorang->penghasilan}}</td>
            </tr>
            @endif 
        </table>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">
        Data Nasabah Badan
    </div>
    <div class="card-body">
        <table class="table">
        @if ($deposito->nasabah_badan == null)
            Data Kosong
        @else
         <tr>
             <th>Nama Badan Usaha</th>
             <td>{{$deposito->nasabah_badan->nama_badan_usaha}}</td>
         </tr>
         <tr>
             <th>Bentuk Usaha</th>
             <td>{{$deposito->nasabah_badan->bentuk_usaha}}</td>
         </tr>
         <tr>
             <th>Jenis Usaha</th>
             <td>{{$deposito->nasabah_badan->jenis_usaha}}</td>
         </tr>
         <tr>
             <th>Izin Usaha</th>
             <td>{{$deposito->nasabah_badan->izin_usaha}}</td>
         </tr>
         <tr>
             <th>Alamat Pemilik</th>
             <td>{{$deposito->nasabah_badan->alamat_pemilik}}</td>
         </tr>
         <tr>
             <th>NPWP Pemilik</th>
             <td>{{$deposito->nasabah_badan->npwp_pemilik}}</td>
         </tr>
         <tr>
             <th>Sumber Dana</th>
             <td>{{$deposito->nasabah_badan->sumber_dana}}</td>
         </tr>
         <tr>
             <th>Omzet</th>
             <td>{{$deposito->nasabah_badan->omzet}}</td>
         </tr>         
         <tr>
             <th>Pengurus</th>
             <td>1. {{$deposito->nasabah_badan->pengurus1}}</td>
         </tr>
         <tr>
             <th></th>
             <td>2. {{$deposito->nasabah_badan->pengurus2}}</td>
         </tr>
         <tr>
             <th></th>
             <td>3. {{$deposito->nasabah_badan->pengurus3}}</td>
         </tr>
         <tr>
             <th></th>
             <td>4 .{{$deposito->nasabah_badan->pengurus4}}</td>
         </tr>
         @endif
     </table>
     <div class="card-footer">
         <a href="{{ url('laporanDeposito/'.$deposito->id) }}" title="Report PDF" class="btn btn-danger"><i class="fa fa-print"></i>Buat Laporan PDF</a>
         
         <a href="{{ url('rekeningDeposito') }}" title="Kembali" class="btn btn-secondary"><i class="fa fa-undo"></i>Kembali</a>
     </div>
 </div>
</div>
@endsection
