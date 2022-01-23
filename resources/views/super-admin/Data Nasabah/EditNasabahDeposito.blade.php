@extends('layouts.temp')
@section('title')
Edit Data Nasabah Deposito
@endsection()
@section('content')
<div class="card">
    <div class="card-header">Data Deposito Nasabah</div>
    <div class="card-body">
        <form action="{{ url('rekeningDeposito/'.$deposito->id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            @method('put')
        <div class="form-group">
            Atas Nama
            <input type="text" name="atas_nama" class="form-control" value="{{$deposito->atas_nama}}">
        </div>
        <div class="form-group">
            No Rekening Pemilik
            <input type="text" name="no_rekening_pemilik" class="form-control" value="{{$deposito->no_rekening_pemilik}}">
        </div>
        <div class="form-group">
            Nominal Setoran
            <input type="text" name="nominal_setoran" class="form-control" value="{{$deposito->nominal_setoran}}">
        </div>
        <div class="form-group">
            Mata Uang
            <input type="text" name="mata_uang" class="form-control" value="{{$deposito->mata_uang}}">
        </div>
        <div class="form-group">
            Jangka Waktu
            <select name="jangka_waktu" class="form-control" required>
              <option value="">Pilih Jangka Waktu</option>
              <option value="1 Bulan" @if($deposito->jangka_waktu == '1 Bulan') selected @endif>1 Bulan</option>
              <option value="3 Bulan" @if($deposito->jangka_waktu == '3 Bulan') selected @endif>3 Bulan</option>
              <option value="6 Bulan" @if($deposito->jangka_waktu == '6 Bulan') selected @endif>6 Bulan</option>
              <option value="12 Bulan" @if($deposito->jangka_waktu == '12 Bulan') selected @endif>12 Bulan</option>
            </select>
        </div>
        <div class="form-group">
            Pembiayaan Bagi Hasil
            <select name="pembayaran_bagi_hasil" class="form-control" required>
              <option value="">Pilih Pembayaran Bagi Hasil</option>
              <option value="Dibukukan pada Tabungan" @if($deposito->pembayaran_bagi_hasil == 'Dibukukan pada Tabungan') selected @endif>Dibukukan pada Tabungan</option>
              <option value="Dibayar pada cabang / Bank" @if($deposito->pembayaran_bagi_hasil == 'Dibayar pada cabang / Bank') selected @endif>Dibayar pada cabang / Bank</option>
            </select>
        </div>
        <div class="form-group">
            Perpanjang Otomatis
            <input type="text" name="perpanjang_otomatis" class="form-control" value="{{$deposito->perpanjang_otomatis}}">
        </div>
        <div class="form-group">
            Ahli Waris
            <input type="text" name="ahli_waris" class="form-control" value="{{$deposito->ahli_waris}}">
        </div>
        <div class="form-group">
            Hubungan Dengan Ahli Waris
            <input type="text" name="hubungan_dgn_ahli_waris" class="form-control" value="{{$deposito->hubungan_dgn_ahli_waris}}">
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Identitas Nasabah
    </div>
    <div class="card-body">
            @if ($deposito->identitas_nasabah == null)
                Data Kosong
            @else

        <div class="form-group">
            Nama Lengkap
            <input type="text" name="nama" class="form-control" value="{{$deposito->identitas_nasabah->nama}}">
        </div>
        <div class="form-group">
            Jenis Kelamin
            <select name="jenis_kelamin" class="form-control">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki" @if($deposito->identitas_nasabah->jenis_kelamin == 'Laki-laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if($deposito->identitas_nasabah->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            Nama Ibu Kandung
            <input type="text" name="nama_ibu" class="form-control" value="{{$deposito->identitas_nasabah->nama_ibu}}">
        </div>
        <div class="form-group">
            Status Kependudukan
            <select name="status_kependudukan" class="form-control">
                <option value="">Pilih Status Kependudukan</option>
                <option value="Penduduk (WNI)" @if($deposito->identitas_nasabah->status_kependudukan == 'Penduduk (WNI)') selected @endif>Penduduk (WNI)</option>
                <option value="Bukan Penduduk (WNA)"  @if($deposito->identitas_nasabah->status_kependudukan == 'Bukan Penduduk (WNI)') selected @endif>Bukan Penduduk (WNA)</option>
            </select>
        </div>
        <div class="form-group">
            Tempat Lahir
            <input type="text" name="tempat_lahir" class="form-control" value="{{$deposito->identitas_nasabah->tempat_lahir}}">
        </div>
        <div class="form-group">
            Tanggal Lahir
            <input type="date" name="tanggal_lahir" class="form-control" value="{{$deposito->identitas_nasabah->tanggal_lahir}}">
        </div>
        <div class="form-group">
            No KTP
            <input type="text" name="no_ktp" class="form-control" value="{{$deposito->identitas_nasabah->no_ktp}}">
        </div>
        <div class="form-group">
            NPWP
            <input type="text" name="npwp" class="form-control" value="{{$deposito->identitas_nasabah->npwp}}">
        </div>
        <div class="form-group">
            Alamat
            <textarea name="alamat" class="form-control">{{$deposito->identitas_nasabah->alamat}}</textarea>
        </div>
        <div class="form-group">
            No HP
            <input type="text" name="no_hp" class="form-control" value="{{$deposito->identitas_nasabah->no_hp}}">
        </div>
        <div class="form-group">
            Bertindak Sebagai
            <input type="text" name="bertindak_sebagai" class="form-control" value="{{$deposito->identitas_nasabah->bertindak_sebagai}}">
        </div>
        <div class="form-group">
            Tujuan Pembukaan Rekening
            <input type="text" name="tujuan_buka_rekening" class="form-control" value="{{$deposito->identitas_nasabah->tujuan_buka_rekening}}">
        </div>
        <div class="form-group">
            Zakat
            <input type="text" name="zakat" class="form-control" value="{{$deposito->identitas_nasabah->zakat}}">
        </div>
            @endif
    </div>
</div>
<div class="card">
    <div class="card-header">Produk Yang Dibuka</div>
    <div class="card-body">
        @if ($deposito->jenis_simpanan == null)
            Data Kosong
        @else
        <div class="form-group">
            Jenis Simpanan
            <select name="jenis_simpanan" class="form-control">
                <option value="">Pilih Jenis Simpanan</option>
                <option value="Simpanan Wadiah" @if($deposito->jenis_simpanan->jenis_simpanan == 'Simpanan Wadiah') selected @endif>Simpanan Wadiah</option>
                <option value="Simpanan Mudharabah" @if($deposito->jenis_simpanan->jenis_simpanan == 'Simpanan Mudharabah') selected @endif>Simpanan Mudharabah</option>
            </select>
        </div>
        <div class="form-group">
            Jenis Tabungan
            <input type="text" name="jenis_tabungan" class="form-control" value="{{$deposito->jenis_simpanan->jenis_tabungan}}">
        </div>
        @endif
    </div>
</div>
<div class="card">
    <div class="card-header">Data Nasabah Perorangan</div>
    <div class="card-body">
        @if ($deposito->nasabah_perorang == null)
        Data Kosong
        @else
        <div class="form-group">
            Sumber Penghasilan
            <input type="text" name="sumber_penghasilan" class="form-control" value="{{$deposito->nasabah_perorang->sumber_penghasilan}}">
        </div>
        <div class="form-group">
            Nama Tempat Kerja
            <input type="text" name="nama_tempat_kerja" class="form-control" value="{{$deposito->nasabah_perorang->nama_tempat_kerja}}">
        </div>
        <div class="form-group">
            Jabatan
            <input type="text" name="jabatan" class="form-control" value="{{$deposito->nasabah_perorang->jabatan}}">
        </div>
        <div class="form-group">
            Bidang Usaha
            <input type="text" name="bidang_usaha" class="form-control" value="{{$deposito->nasabah_perorang->bidang_usaha}}">
        </div>
        <div class="form-group">
            Alamat Perusahaan
            <input type="text" name="alamat_perusahaan" class="form-control" value="{{$deposito->nasabah_perorang->alamat_perusahaan}}">
        </div>
        <div class="form-group">
            Pekerjaan
            <input type="text" name="pekerjaan" class="form-control" value="{{$deposito->nasabah_perorang->pekerjaan}}">
        </div>
        <div class="form-group">
            Pendidikan
            <select class="form-control" name="pendidikan">
              <option value="">Pilih Pendidikan</option>
              <option value="SD" @if($deposito->nasabah_perorang->pendidikan == 'SD') selected @endif>SD</option>
              <option value="SMP/MTS" @if($deposito->nasabah_perorang->pendidikan == 'SMP/MTS') selected @endif>SMP/MTS</option>
              <option value="SMA/SMK" @if($deposito->nasabah_perorang->pendidikan == 'SMA/SMK') selected @endif>SMA/SMK</option>
              <option value="Sarjana" @if($deposito->nasabah_perorang->pendidikan == 'Sarjana') selected @endif>Sarjana</option>
              <option value="Pasca Sarjana" @if($deposito->nasabah_perorang->pendidikan == 'Pasca Sarjana') selected @endif>Pasca Sarjana</option>
              <option value="Paket A" @if($deposito->nasabah_perorang->pendidikan == 'Paket A') selected @endif>Paket A</option>
              <option value="Paket B" @if($deposito->nasabah_perorang->pendidikan == 'Paket B') selected @endif>Paket B</option>
              <option value="Paket C" @if($deposito->nasabah_perorang->pendidikan == 'Paket C') selected @endif>Paket C</option>
            </select>
        </div>
        <div class="form-group">
            Agama
            <select class="form-control" name="agama">
              <option value="">Pilih Agama</option>
              <option value="Islam" @if($deposito->nasabah_perorang->agama == 'Islam') selected @endif>Islam</option>
              <option value="Kristen" @if($deposito->nasabah_perorang->agama == 'Kristen') selected @endif>Kristen</option>
              <option value="Hindu" @if($deposito->nasabah_perorang->agama == 'Hindu') selected @endif>Hindu</option>
              <option value="Budha" @if($deposito->nasabah_perorang->agama == 'Budha') selected @endif>Budha</option>
              <option value="Konghucu" @if($deposito->nasabah_perorang->agama == 'Konghucu') selected @endif>Konghucu</option>
            </select>
        </div>
        <div class="form-group">
            Penghasilan
            <select class="form-control" id="nasabah_penghasilan" name="penghasilan">
              <option value="">Pilih Penghasilan</option>
              <option value=" < Rp. 5 jt" @if($deposito->nasabah_perorang->penghasilan == '< Rp. 5 jt') selected @endif> &#8804 Rp. 5 jt</option>
              <option value=" < Rp. 10 jt" @if($deposito->nasabah_perorang->penghasilan == '< Rp. 10 jt') selected @endif> &#8804 Rp. 10 jt</option>
              <option value=" < Rp. 15 jt" @if($deposito->nasabah_perorang->penghasilan == '< Rp. 15 jt') selected @endif> &#8804 Rp. 15 jt</option>
              <option value=" > Rp. 15 jt" @if($deposito->nasabah_perorang->penghasilan == '> Rp. 15 jt') selected @endif> > Rp. 15 jt</option>
            </select>
        </div>
    </div>
        @endif
</div>
<div class="card">
    <div class="card-header">Data Nasabah Badan</div>
    <div class="card-body">
        @if ($deposito->nasabah_badan == null)
            Data Kosong
        @else
            <div class="form-group">
                Nama Badan Usaha
                <input type="text" name="nama_badan_usaha" class="form-control" value="{{$deposito->nasabah_badan->nama_badan_usaha}}">
            </div>
            <div class="form-group">
                Bentuk Usaha
                <input type="text" name="bentuk_usaha" class="form-control" value="{{$deposito->nasabah_badan->bentuk_usaha}}">
            </div>
            <div class="form-group">
                Jenis Usaha
                <input type="text" name="jenis_usaha" class="form-control" value="{{$deposito->nasabah_badan->jenis_usaha}}">
            </div>
            <div class="form-group">
                Izin Usaha
                <input type="text" name="izin_usaha" class="form-control" value="{{$deposito->nasabah_badan->izin_usaha}}">
            </div>
            <div class="form-group">
                Alamat Pemilik
                <input type="text" name="alamat_pemilik" class="form-control" value="{{$deposito->nasabah_badan->alamat_pemilik}}">
            </div>
            <div class="form-group">
                NPWP 
                <input type="text" name="npwp_pemilik" class="form-control" value="{{$deposito->nasabah_badan->npwp_pemilik}}">
            </div>
            <div class="form-group">
                Sumber Dana
                <input type="text" name="sumber_dana" class="form-control" value="{{$deposito->nasabah_badan->sumber_dana}}">
            </div>
            <div class="form-group">
                Omzet
                <input type="text" name="omzet" class="form-control" value="{{$deposito->nasabah_badan->omzet}}">
            </div>
            <div class="form-group">
                <label>Pengurus</label>
                1
                <input type="text" name="pengurus1" class="form-control" value="{{$deposito->nasabah_badan->pengurus1}}">
                <label>Pengurus</label>
                2
                <input type="text" name="pengurus2" class="form-control" value="{{$deposito->nasabah_badan->pengurus2}}">
                <label>Pengurus</label>
                3
                <input type="text" name="pengurus3" class="form-control" value="{{$deposito->nasabah_badan->pengurus3}}">
                <label>Pengurus</label>
                4
                <input type="text" name="pengurus4" class="form-control" value="{{$deposito->nasabah_badan->pengurus4}}">
                
            </div>
        @endif
    </div>
    <div class="card-footer">
        {{-- <div class="form-group">
            Foto/Scan KTP
            <input type="file" name="file" value="{{$deposito->files->name}}">
        </div> --}}
        <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i>Edit</button>
        <a href="{{ url('nasabah') }}" class="btn btn-secondary" title=""><i class="fa fa-undo"></i>Kembali</a>
        </form>
    </div>
</div>
@endsection
