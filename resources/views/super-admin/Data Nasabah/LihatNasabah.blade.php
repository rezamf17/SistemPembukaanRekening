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
    <div class="card-header">Data Nasabah Perorang</div>
    <div class="card-body">
        <table class="table">
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
           <tr>
               <th></th>
               <td></td>
           </tr>
        </table>
    </div>
</div>
@endsection
