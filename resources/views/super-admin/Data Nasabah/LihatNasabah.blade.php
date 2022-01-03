@extends('layouts.temp')
@section('title')
Lihat Data Nasabah
@endsection()
@section('content')
<div class="card">
    <div class="card-header">
        Data Nasabah
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" >
                <tr>
                    <th>Nama</th>
                    <td>{{$formulir->identitas_nasabah->nama}}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{$formulir->identitas_nasabah->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <td>{{$formulir->identitas_nasabah->nama_ibu}}</td>
                </tr>
                <tr>
                    <th>Status Kependudukan</th>
                    <td>{{$formulir->identitas_nasabah->status_kependudukan}}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{$formulir->identitas_nasabah->tempat_lahir}}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{$formulir->identitas_nasabah->tanggal_lahir}}</td>
                </tr>
                <tr>
                    <th>No KTP</th>
                    <td>{{$formulir->identitas_nasabah->no_ktp}}</td>
                </tr>
                <tr>
                    <th>Masa Berlaku KTP</th>
                    <td>{{$formulir->identitas_nasabah->masa_berlaku}}</td>
                </tr>
                <tr>
                    <th>NPWP</th>
                    <td>{{$formulir->identitas_nasabah->npwp}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{$formulir->identitas_nasabah->alamat}}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{$formulir->identitas_nasabah->no_hp}}</td>
                </tr>
                <tr>
                    <th>Bertindak Sebagai</th>
                    <td>{{$formulir->identitas_nasabah->no_hp}}</td>
                </tr>
                <tr>
                    <th>Tujuan Buka Rekening</th>
                    <td>{{$formulir->identitas_nasabah->tujuan_buka_rekening}}</td>
                </tr>
                <tr>
                    <th>Jenis Simpanan</th>
                    <td>{{$formulir->identitas_nasabah->jenis_simpanan}}</td>
                </tr>
                <tr>
                    <th>Pemotongan Zakat</th>
                    <td>{{$formulir->identitas_nasabah->zakat}}</td>
                </tr>
                <tr>
                    <th>Foto/Scan KTP</th>
                    <td><img src="{{ asset('storage/'.$formulir->files->name) }}" alt=""></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">Data Produk Yang Dibuka</div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Jenis Simpanan</th>
                <td>{{$formulir->jenis_simpanan->jenis_simpanan}}</td>
            </tr>
            <tr>
                <th>Jenis Tabungan</th>
                <td>{{$formulir->jenis_simpanan->jenis_tabungan}}</td>
            </tr>
        </table>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">Data Nasabah Perorang</div>
    <div class="card-body">
        <table class="table">
            @if ($formulir->nasabah_perorang == null)
            <tr>
                <th>Sumber Penghasilan</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Nama Tempat Kerja</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Bidang Usaha</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Alamat Perusahaan</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Penghasilan</th>
                <td>-</td>
            </tr>
            @else
            <tr>
                <th>Sumber Penghasilan</th>
                <td>{{$formulir->nasabah_perorang->sumber_penghasilan}}</td>
            </tr>
            <tr>
                <th>Nama Tempat Kerja</th>
                <td>{{$formulir->nasabah_perorang->nama_tempat_kerja}}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>{{$formulir->nasabah_perorang->jabatan}}</td>
            </tr>
            <tr>
                <th>Bidang Usaha</th>
                <td>{{$formulir->nasabah_perorang->bidang_usaha}}</td>
            </tr>
            <tr>
                <th>Alamat Perusahaan</th>
                <td>{{$formulir->nasabah_perorang->alamat_perusahaan}}</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>{{$formulir->nasabah_perorang->pekerjaan}}</td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>{{$formulir->nasabah_perorang->pendidikan}}</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>{{$formulir->nasabah_perorang->agama}}</td>
            </tr>
            <tr>
                <th>Penghasilan</th>
                <td>{{$formulir->nasabah_perorang->penghasilan}}</td>
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
            @if ($formulir->nasabah_badan == null)
            <tr>
             <th>Nama Badan Usaha</th>
             <td>-</td>
         </tr>
         <tr>
             <th>Bentuk Usaha</th>
             <td>-</td>
         </tr>
         <tr>
             <th>Jenis Usaha</th>
             <td>-</td>
         </tr>
         <tr>
             <th>Izin Usaha</th>
             <td>-</td>
         </tr>
         <tr>
             <th>Alamat Pemilik</th>
             <td>-</td>
         </tr>
         <tr>
             <th>NPWP Pemilik</th>
             <td>-</td>
         </tr>
         <tr>
             <th>Sumber Dana</th>
             <td>-</td>
         </tr>
         <tr>
             <th>Omzet</th>
             <td>-</td>
         </tr>
         <tr>
             <th>Pengurus</th>
             <td>-</td>
         </tr>
         <tr>
             <th></th>
             <td>-</td>
         </tr>
         <tr>
             <th></th>
             <td>-</td>
         </tr>
         <tr>
             <th></th>
             <td>-</td>
         </tr>
         @else

         <tr>
             <th>Nama Badan Usaha</th>
             <td>{{$formulir->nasabah_badan->nama_badan_usaha}}</td>
         </tr>
         <tr>
             <th>Bentuk Usaha</th>
             <td>{{$formulir->nasabah_badan->bentuk_usaha}}</td>
         </tr>
         <tr>
             <th>Jenis Usaha</th>
             <td>{{$formulir->nasabah_badan->jenis_usaha}}</td>
         </tr>
         <tr>
             <th>Izin Usaha</th>
             <td>{{$formulir->nasabah_badan->izin_usaha}}</td>
         </tr>
         <tr>
             <th>Alamat Pemilik</th>
             <td>{{$formulir->nasabah_badan->alamat_pemilik}}</td>
         </tr>
         <tr>
             <th>NPWP Pemilik</th>
             <td>{{$formulir->nasabah_badan->npwp_pemilik}}</td>
         </tr>
         <tr>
             <th>Sumber Dana</th>
             <td>{{$formulir->nasabah_badan->sumber_dana}}</td>
         </tr>
         <tr>
             <th>Omzet</th>
             <td>{{$formulir->nasabah_badan->omzet}}</td>
         </tr>
         <tr>
             <th>Pengurus</th>
             <td>1. {{$formulir->nasabah_badan->pengurus1}}</td>
         </tr>
         <tr>
             <th></th>
             <td>2. {{$formulir->nasabah_badan->pengurus2}}</td>
         </tr>
         <tr>
             <th></th>
             <td>3. {{$formulir->nasabah_badan->pengurus3}}</td>
         </tr>
         <tr>
             <th></th>
             <td>4 .{{$formulir->nasabah_badan->pengurus4}}</td>
         </tr>
         @endif
     </table>
 </div>
</div>
@endsection
