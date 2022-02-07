@extends('layouts.temp')
@section('title')
Edit Data Nasabah
@endsection()
@section('content')
<div class="card">
    <div class="card-header">
        Identitas Nasabah
    </div>
    <div class="card-body">
        <form action="{{ url('nasabahCabang/'.$formulir->id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            @method('put')
        <div class="form-group">
            Nama Lengkap
            <input type="text" name="nama" class="form-control" value="{{$formulir->identitas_nasabah->nama}}">
        </div>
        <div class="form-group">
            Jenis Kelamin
            <select name="jenis_kelamin" class="form-control">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki" @if($formulir->identitas_nasabah->jenis_kelamin == 'Laki-laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if($formulir->identitas_nasabah->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            Nama Ibu Kandung
            <input type="text" name="nama_ibu" class="form-control" value="{{$formulir->identitas_nasabah->nama_ibu}}">
        </div>
        <div class="form-group">
            Status Kependudukan
            <select name="status_kependudukan" class="form-control">
                <option value="">Pilih Status Kependudukan</option>
                <option value="Penduduk (WNI)" @if($formulir->identitas_nasabah->status_kependudukan == 'Penduduk (WNI)') selected @endif>Penduduk (WNI)</option>
                <option value="Bukan Penduduk (WNA)"  @if($formulir->identitas_nasabah->status_kependudukan == 'Bukan Penduduk (WNI)') selected @endif>Bukan Penduduk (WNA)</option>
            </select>
        </div>
        <div class="form-group">
            Tempat Lahir
            <input type="text" name="tempat_lahir" class="form-control" value="{{$formulir->identitas_nasabah->tempat_lahir}}">
        </div>
        <div class="form-group">
            Tanggal Lahir
            <input type="date" name="tanggal_lahir" class="form-control" value="{{$formulir->identitas_nasabah->tanggal_lahir}}">
        </div>
        <div class="form-group">
            No KTP
            <input type="text" name="no_ktp" class="form-control" value="{{$formulir->identitas_nasabah->no_ktp}}">
        </div>
        <div class="form-group">
            NPWP
            <input type="text" name="npwp" class="form-control" value="{{$formulir->identitas_nasabah->npwp}}">
        </div>
        <div class="form-group">
            Alamat
            <textarea name="alamat" class="form-control">{{$formulir->identitas_nasabah->alamat}}</textarea>
        </div>
        <div class="form-group">
            No HP
            <input type="text" name="no_hp" class="form-control" value="{{$formulir->identitas_nasabah->no_hp}}">
        </div>
        <div class="form-group">
            Bertindak Sebagai
            <input type="text" name="bertindak_sebagai" class="form-control" value="{{$formulir->identitas_nasabah->bertindak_sebagai}}">
        </div>
        <div class="form-group">
            Tujuan Pembukaan Rekening
            <input type="text" name="tujuan_buka_rekening" class="form-control" value="{{$formulir->identitas_nasabah->tujuan_buka_rekening}}">
        </div>
        <div class="form-group">
            Zakat
            <input type="text" name="zakat" class="form-control" value="{{$formulir->identitas_nasabah->zakat}}">
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">Produk Yang Dibuka</div>
    <div class="card-body">
        <div class="form-group">
            Jenis Simpanan
            <select name="jenis_simpanan" class="form-control">
                <option value="">Pilih Jenis Simpanan</option>
                <option value="Simpanan Wadiah" @if($formulir->jenis_simpanan->jenis_simpanan == 'Simpanan Wadiah') selected @endif>Simpanan Wadiah</option>
                <option value="Simpanan Mudharabah" @if($formulir->jenis_simpanan->jenis_simpanan == 'Simpanan Mudharabah') selected @endif>Simpanan Mudharabah</option>
            </select>
        </div>
        <div class="form-group">
            Jenis Tabungan
            <input type="text" name="jenis_tabungan" class="form-control" value="{{$formulir->jenis_simpanan->jenis_tabungan}}">
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">Data Nasabah Perorangan</div>
    <div class="card-body">
        @if ($formulir->nasabah_perorang == null)
        Data Kosong
        @else
        <div class="form-group">
            Sumber Penghasilan
            <input type="text" name="sumber_penghasilan" class="form-control" value="{{$formulir->nasabah_perorang->sumber_penghasilan}}">
        </div>
        <div class="form-group">
            Nama Tempat Kerja
            <input type="text" name="nama_tempat_kerja" class="form-control" value="{{$formulir->nasabah_perorang->nama_tempat_kerja}}">
        </div>
        <div class="form-group">
            Jabatan
            <input type="text" name="jabatan" class="form-control" value="{{$formulir->nasabah_perorang->jabatan}}">
        </div>
        <div class="form-group">
            Bidang Usaha
            <input type="text" name="bidang_usaha" class="form-control" value="{{$formulir->nasabah_perorang->bidang_usaha}}">
        </div>
        <div class="form-group">
            Alamat Perusahaan
            <input type="text" name="alamat_perusahaan" class="form-control" value="{{$formulir->nasabah_perorang->alamat_perusahaan}}">
        </div>
        <div class="form-group">
            Pekerjaan
            <input type="text" name="pekerjaan" class="form-control" value="{{$formulir->nasabah_perorang->pekerjaan}}">
        </div>
        <div class="form-group">
            Pendidikan
            <select class="form-control" name="pendidikan">
              <option value="">Pilih Pendidikan</option>
              <option value="SD" @if($formulir->nasabah_perorang->pendidikan == 'SD') selected @endif>SD</option>
              <option value="SMP/MTS" @if($formulir->nasabah_perorang->pendidikan == 'SMP/MTS') selected @endif>SMP/MTS</option>
              <option value="SMA/SMK" @if($formulir->nasabah_perorang->pendidikan == 'SMA/SMK') selected @endif>SMA/SMK</option>
              <option value="Sarjana" @if($formulir->nasabah_perorang->pendidikan == 'Sarjana') selected @endif>Sarjana</option>
              <option value="Pasca Sarjana" @if($formulir->nasabah_perorang->pendidikan == 'Pasca Sarjana') selected @endif>Pasca Sarjana</option>
              <option value="Paket A" @if($formulir->nasabah_perorang->pendidikan == 'Paket A') selected @endif>Paket A</option>
              <option value="Paket B" @if($formulir->nasabah_perorang->pendidikan == 'Paket B') selected @endif>Paket B</option>
              <option value="Paket C" @if($formulir->nasabah_perorang->pendidikan == 'Paket C') selected @endif>Paket C</option>
            </select>
        </div>
        <div class="form-group">
            Agama
            <select class="form-control" name="agama">
              <option value="">Pilih Agama</option>
              <option value="Islam" @if($formulir->nasabah_perorang->agama == 'Islam') selected @endif>Islam</option>
              <option value="Kristen" @if($formulir->nasabah_perorang->agama == 'Kristen') selected @endif>Kristen</option>
              <option value="Hindu" @if($formulir->nasabah_perorang->agama == 'Hindu') selected @endif>Hindu</option>
              <option value="Budha" @if($formulir->nasabah_perorang->agama == 'Budha') selected @endif>Budha</option>
              <option value="Konghucu" @if($formulir->nasabah_perorang->agama == 'Konghucu') selected @endif>Konghucu</option>
            </select>
        </div>
        <div class="form-group">
            Penghasilan
            <select class="form-control" id="nasabah_penghasilan" name="penghasilan">
              <option value="">Pilih Penghasilan</option>
              <option value=" < Rp. 5 jt" @if($formulir->nasabah_perorang->penghasilan == '< Rp. 5 jt') selected @endif> &#8804 Rp. 5 jt</option>
              <option value=" < Rp. 10 jt" @if($formulir->nasabah_perorang->penghasilan == '< Rp. 10 jt') selected @endif> &#8804 Rp. 10 jt</option>
              <option value=" < Rp. 15 jt" @if($formulir->nasabah_perorang->penghasilan == '< Rp. 15 jt') selected @endif> &#8804 Rp. 15 jt</option>
              <option value=" > Rp. 15 jt" @if($formulir->nasabah_perorang->penghasilan == '> Rp. 15 jt') selected @endif> > Rp. 15 jt</option>
            </select>
        </div>
    </div>
        @endif
</div>
<div class="card">
    <div class="card-header">Data Nasabah Badan</div>
    <div class="card-body">
        @if ($formulir->nasabah_badan == null)
            Data Kosong
        @else
            <div class="form-group">
                Nama Badan Usaha
                <input type="text" name="nama_badan_usaha" class="form-control" value="{{$formulir->nasabah_badan->nama_badan_usaha}}">
            </div>
            <div class="form-group">
                Bentuk Usaha
                <input type="text" name="bentuk_usaha" class="form-control" value="{{$formulir->nasabah_badan->bentuk_usaha}}">
            </div>
            <div class="form-group">
                Jenis Usaha
                <input type="text" name="jenis_usaha" class="form-control" value="{{$formulir->nasabah_badan->jenis_usaha}}">
            </div>
            <div class="form-group">
                Izin Usaha
                <input type="text" name="izin_usaha" class="form-control" value="{{$formulir->nasabah_badan->izin_usaha}}">
            </div>
            <div class="form-group">
                Alamat Pemilik
                <input type="text" name="alamat_pemilik" class="form-control" value="{{$formulir->nasabah_badan->alamat_pemilik}}">
            </div>
            <div class="form-group">
                NPWP 
                <input type="text" name="npwp_pemilik" class="form-control" value="{{$formulir->nasabah_badan->npwp_pemilik}}">
            </div>
            <div class="form-group">
                Sumber Dana
                <input type="text" name="sumber_dana" class="form-control" value="{{$formulir->nasabah_badan->sumber_dana}}">
            </div>
            <div class="form-group">
                Omzet
                <input type="text" name="omzet" class="form-control" value="{{$formulir->nasabah_badan->omzet}}">
            </div>
            <div class="form-group">
                <label>Pengurus</label>
                1
                <input type="text" name="pengurus1" class="form-control" value="{{$formulir->nasabah_badan->pengurus1}}">
                <label>Pengurus</label>
                2
                <input type="text" name="pengurus2" class="form-control" value="{{$formulir->nasabah_badan->pengurus2}}">
                <label>Pengurus</label>
                3
                <input type="text" name="pengurus3" class="form-control" value="{{$formulir->nasabah_badan->pengurus3}}">
                <label>Pengurus</label>
                4
                <input type="text" name="pengurus4" class="form-control" value="{{$formulir->nasabah_badan->pengurus4}}">
                
            </div>
        @endif
    </div>
    <div class="card-footer">
        {{-- <div class="form-group">
            Foto/Scan KTP
            <input type="file" name="file" value="{{$formulir->files->name}}">
        </div> --}}
        <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i>Edit</button>
        <a href="{{ url('nasabahCabang/'.Auth::user()->id_cabang) }}" class="btn btn-secondary" title=""><i class="fa fa-undo"></i>Kembali</a>
        </form>
    </div>
</div>
@endsection
