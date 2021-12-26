@extends('layouts.FormTemplate')
@section('content')
<div class="card">
  <div class="card-header text-center text-white bg-primary">
    <img src="{{asset('style/img/bprs.png')}}" class="img-fluid" alt="Responsive image">
    <h3 class="text-center">APLIKASI PEMBUKAAN REKENING DEPOSITO</h3>
  </div>

  <div class="card-header text-white bg-primary">
    <h5>A. STATUS NASABAH</h5>
  </div>
  <div class="card-body">
    <div class="text-center">
  <br> <h5> Silahkan Pilih Kategori Nasabah </h5>
<div class="text-center">
    <a href="{{ url('/') }}" class="btn btn-primary btn-lg text-center">REKENING TABUNGAN</a>
    <a href="{{ url('/deposito') }}" class="btn btn-secondary btn-lg text-center">REKENING DEPOSITO</a> <br>
    </div>
  </div>
        <br><label>Apakah Anda Sudah Memiliki Rekening Bank BPRS ALMASOEM ?</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault1">
        YA
      </label>
      <label>Nomor Rekening</label>
      <input type="text" name="" class="form-control"> 
      <label>Atas Nama</label>
      <input type="text" name="" class="form-control">  
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault2">
        TIDAK
      </label>
    </div>
    </div>
<div class="card-body">
    <label>Pilihan Kantor Cabang </label>
    <select name="kantor_cabang" class="form-select">
      <option value="">Pilih Kantor Cabang</option>
      <option value="1">Arcamanik</option>
      <option value="2">Cianjur</option>
      <option value="3">Garut</option>
      <option value="4">Jatiwangi</option>
      <option value="5">Kopo</option>
      <option value="6">Majalaya</option>
      <option value="7">Rancaekek</option>
    </select>
  <label>Pilih Jenis Rekening</label> <br>
    <button onclick="nasabah()" type="button" class="btn btn-primary">Rekening Nasabah Perorangan</button>
    <button onclick="badan()" type="button" class="btn btn-danger">Rekening Nasabah Badan</button>
    <p id="status"></p>
</div>

  <br><div class="card-header text-white bg-primary">
    <h5>A. IDENTITAS NASABAH</h5>
  </div>
  <div class="card-body">
    <div class="form-group">
      <div class="row">
        <div class="col-6">
      <label  style="margin-bottom: 10px;">Nama Lengkap</label>
      <input type="text" name="nama" class="form-control">
    </div>
      <div class="col-6">
            
    <label  style="margin-bottom: 10px;">Jenis Kelamin</label>
        <div class="row">
          <div class="col-4">

    <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
      <label class="form-check-label" for="flexRadioDefault1">
        Laki-laki
      </label>
          </div>
    </div>
    <div class="col-3">
      
    <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
      <label class="form-check-label" for="flexRadioDefault2">
        Perempuan
      </label>
    </div>
      </div>
        </div>
      </div>

    <div class="form-group">
      <div class="row">
        <div class="col-6">
     <label  style="margin-bottom: 10px;">Nama Jelas Ibu Kandung</label>
      <input type="text" name="nama_ibu" class="form-control">
    </div>

      <div class="col-6">
            
    <label  style="margin-bottom: 10px;">Status Kependudukan</label>
        <div class="row">
          <div class="col-4">

    <div class="form-check">
      <input class="form-check-input" type="radio" name="status_kependudukan" value="Penduduk (WNI)">
      <label class="form-check-label" for="flexRadioDefault1">
        Penduduk (WNI)
      </label>
          </div>
    </div>
    <div class="col-5">
      
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status_kependudukan" value="Bukan Penduduk (WNA)">
      <label class="form-check-label" for="flexRadioDefault2">
        Bukan Penduduk (WNA)
      </label>
    </div>
      </div>
        </div>
      </div>

    <div class="form-group">
    <div class="row">
    <div class="col-6">
    <label  style="margin-bottom: 10px;">Tempat Lahir</label>
      <input type="text" name="tempat_lahir" class="form-control">
    <div>
     <label  style="margin-bottom: 10px;">Tanggal Lahir </label> <br>
      <input type="date" name="tanggal_lahir" class="form-control">
    </div>
    </div>

    <div class="form-group">
    <div class="form-group">
    <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px;">Nomor KTP</label>
      <input type="number" name="no_ktp" class="form-control">
    </div>
    
    <div class="form-group">
    <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px;">NPWP</label>
      <input type="number" name="npwp" class="form-control">
    </div>
    
    <div class="form-group">
     <div class="row">
    <div class="col-6"> 
    <label style="margin-bottom: 10px;">Alamat</label>
      <textarea name="alamat" class="form-control"></textarea>  
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Telepon/No. HP</label>
      <input type="number" name="no_hp" class="form-control">
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-6">
    <label>Dalam Hal Ini Bertindak Sebagai</label>
      <div class="form-check">
      <input class="form-check-input" type="radio" name="bertindak_sebagai" value="Diri Sendiri" id="bertindak1">
      <label class="form-check-label" for="flexRadioDefault1">
        Diri Sendiri
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="bertindak_sebagai" id="bertindak2">
      <label class="form-check-label" for="flexRadioDefault2">
        Jika mewakili, Hubungan dengan Nasabah adalah yang mewakili sebagai
      </label>
      <select name="bertindak_sebagai" class="form-select" id="bertindak3">
      <option value="">Pilih Hubungan Dengan Nasabah</option>
      <option value="Ahli Waris">Ahli Waris</option>
      <option value="Orang tua">Orang tua</option>
      <option value="Anak">Anak</option>
      <option value="Suami/Istri">Suami/Istri</option>
      <option value="Saudara">Saudara</option>
     </select>
    </div>

    <label>Tujuan Pembukaan Rekening</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="tujuan_buka_rekening" value="Saving" id="buka1">
      <label class="form-check-label" for="flexRadioDefault1">
        Saving
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="tujuan_buka_rekening" value="Jaga-jaga" id="buka2">
      <label class="form-check-label" for="flexRadioDefault2">
        Jaga-jaga
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="tujuan_buka_rekening" value="Transaksi Bisnis" id="buka3">
      <label class="form-check-label" for="flexRadioDefault2">
        Transaksi Bisnis
      </label>
    </div>
    <div class="form-row">
      <div class="col-6">
        <input class="form-check-input" type="radio" name="tujuan_buka_rekening" id="buka4">
        <label class="form-check-label" for="flexRadioDefault2">
        Lainnya
      </label>
        <input class="form-control" type="input" name="tujuan_buka_rekening" placeholder="Lainnya..." id="buka_rekening_lainnya">   
      </div>
    </div>
  </div>
</div>

<div class="card-header text-white bg-primary">
  <h5>B. PRODUK YANG DIBUKA</h5>
</div>
<div class="card-body">
  <label>Jenis Simpanan</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="jenis_simpanan" value="Simpanan Wadiah">
    <label class="form-check-label" for="flexRadioDefault1">
      Simpanan Wadiah
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="jenis_simpanan" value="Simpanan Mudharabah">
    <label class="form-check-label" for="flexRadioDefault2">
      Simpanan Mudharabah
    </label>
  </div>
</div>

{{-- zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz --}}
<div class="card-header text-white bg-primary">
  <h5>C. DATA NASABAH PERORANGAN</h5>
</div>
<div class="card-body">
  <label>Sumber Penghasilan</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_penghasilan1" name="sumber_penghasilan" value="Hasil Usaha">
    <label class="form-check-label" for="flexCheckDefault">
      Hasil Usaha
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_penghasilan2" name="sumber_penghasilan" value="Hasil Investasi">
    <label class="form-check-label" for="flexCheckDefault">
      Hasil Investasi
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_penghasilan3" name="sumber_penghasilan" value="Orang Tua">
    <label class="form-check-label" for="flexCheckDefault">
      Orang Tua
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_penghasilan4" name="sumber_penghasilan" value="Gaji">
    <label class="form-check-label" for="flexCheckDefault">
      Gaji
    </label>
  </div>
  <div class="form-row">
    <input class="form-check-input" type="radio" id="nasabah_penghasilan5" name="sumber_penghasilan">
    <label class="form-check-label" for="flexCheckDefault">
      Lainnya
    </label>
    <div class="col-6">
      <input class="form-control" type="input" name="sumber_penghasilan" placeholder="Lainnya..." id="nasabah_penghasilan6"> 
    </div>
  </div>
  <div class="form-group">
    <label>Nama Tempat Kerja</label>
    <input type="text" class="form-control" id="nasabah_tempat_kerja" name="nama_tempat_kerja">
  </div>
  <div class="form-group">
    <label>Jabatan</label>
    <input type="text" class="form-control" id="nasabah_jabatan" name="jabatan">
  </div>
  <div class="form-group">
    <label>Bidang Usaha</label>
    <input type="text" class="form-control" id="nasabah_usaha" name="bidang_usaha">
  </div>
  <div class="form-group">
    <label>Alamat Perusahaan</label>
    <textarea class="form-control" id="nasabah_alamat" name="alamat_perusahaan"></textarea>
  </div>
  <label>Pekerjaan</label>
  <div class="form-check">
    <input class="form-check-input" type="radio"  id="nasabah_pekerjaan1" name="pekerjaan" value="Pelajar / Mahasiswa">
    <label class="form-check-label" for="flexRadioDefault1">
      Pelajar / Mahasiswa
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_pekerjaan2" name="pekerjaan" value="Ibu Rumah Tangga">
    <label class="form-check-label" for="flexRadioDefault2">
      Ibu Rumah Tangga
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_pekerjaan3" name="pekerjaan" value="Karyawan Swasta">
    <label class="form-check-label" for="flexRadioDefault1">
      Karyawan Swasta
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio"  id="nasabah_pekerjaan4" name="pekerjaan" value="POLRI / TNI">
    <label class="form-check-label" for="flexRadioDefault2">
      POLRI / TNI
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_pekerjaan5" name="pekerjaan" value="Pejabat Negara">
    <label class="form-check-label" for="flexRadioDefault1">
      Pejabat Negara
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio"  id="nasabah_pekerjaan6" name="pekerjaan" value="Pensiunan">
    <label class="form-check-label" for="flexRadioDefault2">
      Pensiunan
    </label>
  </div>
   <div class="form-check">
    <input class="form-check-input" type="radio"  id="nasabah_pekerjaan7" name="pekerjaan" value="Pegawai Negeri">
    <label class="form-check-label" for="flexRadioDefault1">
      Pegawai Negeri
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_pekerjaan8" name="pekerjaan" value="Wiraswasta">
    <label class="form-check-label" for="flexRadioDefault2">
      Wiraswasta
    </label>
  </div>
  <div class="form-row">
    <input class="form-check-input" type="radio" id="nasabah_pekerjaan9" name="pekerjaan">
    <label class="form-check-label" for="flexRadioDefault2">
      Lainnya
    </label>
    <div class="col-6">
      <input class="form-control" type="input" name="pekerjaan" placeholder="Lainnya..." id="nasabah_pekerjaan10">
    </div>
  </div>
  <div class="form-group">
    <label>Pendidikan</label>
    <select class="form-select" id="nasabah_pendidikan" name="pendidikan">
      <option value="">Pilih Pendidikan</option>
      <option value="SD">SD</option>
      <option value="SMP/MTS">SMP/MTS</option>
      <option value="SMA/SMK">SMA/SMK</option>
      <option value="Sarjana">Sarjana</option>
      <option value="Pasca Sarjana">Pasca Sarjana</option>
      <option value="Paket A">Paket A</option>
      <option value="Paket B">Paket B</option>
      <option value="Paket C">Paket C</option>
    </select>
  </div>
  <div class="form-group">
  <label>Agama</label>
    <select class="form-select" id="nasabah_agama" name="agama">
      <option value="">Pilih Agama</option>
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
      <option value="Konghucu">Konghucu</option>
    </select>
  </div>
  <div class="form-group">
    <label>Penghasilan</label>
    <select class="form-select" id="nasabah_penghasilan" name="penghasilan">
      <option value="">Pilih Penghasilan</option>
      <option value=" < Rp. 5 jt"> &#8804 Rp. 5 jt</option>
      <option value=" < Rp. 10 jt"> &#8804 Rp. 10 jt</option>
      <option value=" < Rp. 15 jt"> &#8804 Rp. 15 jt</option>
      <option value=" > Rp. 15 jt"> > Rp. 15 jt</option>
    </select>
  </div>
</div>



{{-- zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz --}}
<div class="card-header text-white bg-primary"><h5>D. DATA NASABAH BADAN</h5></div>
<div class="card-body">
  <label>Bentuk Usaha</label>
<div class="form-check">
    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_bentuk1" value="PT">
    <label class="form-check-label" for="flexRadioDefault2">
      PT
    </label>
  </div>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_bentuk2" value="CV/RM">
    <label class="form-check-label" for="flexRadioDefault1">
      CV/RM
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_bentuk3" value="Yayasan">
    <label class="form-check-label" for="flexRadioDefault2">
      Yayasan
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_bentuk4" value="Lembaga Keuangan">
    <label class="form-check-label" for="flexRadioDefault2">
      Lembaga Keuangan
    </label>
  </div>
  <div class="form-row">
    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_bentuk5">
    <label class="form-check-label" for="flexRadioDefault2">
      Lainnya
    </label>
    <div class="col-6">
      <input type="text" name="bentuk_usaha" class="form-control" id="badan_bentuk6">
    </div>
  </div>
  <div class="form-group">
    <label>Nama Badan Usaha</label>
    <input type="text" name="nama_badan_usaha" class="form-control" id="badan_nama">
  </div>
  <div class="form-group">
    <label>Jenis Usaha</label>
    <input type="text" name="jenis_usaha" class="form-control" id="badan_jenis">
  </div>
  <div class="form-group">
    <label>Izin Usaha / No. SIUP</label>
    <input type="text" name="izin_usaha" class="form-control" id="badan_izin">
  </div>
  <div class="form-group">
    <label>Alamat Pemilik</label>
    <textarea name="alamat_pemilik" class="form-control" id="badan_alamat"></textarea>
  </div>
  <div class="form-group">
    <label>NPWP</label>
    <input type="number" name="npwp_pemilik" class="form-control" id="badan_npwp">
  </div>
  <label>Sumber Dana</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="sumber_dana" id="badan_sumber_dana" value="Hasil Usaha">
    <label class="form-check-label" for="flexRadioDefault2">
      Hasil Usaha
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="sumber_dana" id="badan_hasil_investasi" value="Hasil Investasi">
    <label class="form-check-label" for="flexRadioDefault2">
      Hasil Investasi
    </label>
  </div>
  <div class="form-row">
    <input class="form-check-input" type="radio" name="sumber_dana" id="sumber_dana_lainnya">
    <label class="form-check-label" for="flexRadioDefault2">
      Lainnya
    </label>
    <div class="col-6">
      <input type="text" name="sumber_dana" id="sumber_dana_lainnya_text" class="form-control" placeholder="Lainnya..">
    </div>
  </div>

  <div class="form-group">
    <label>Omzet</label>
    <input type="text" name="omzet" class="form-control" id="badan_omzet">
  </div>
  <div class="form-group">
    <label>Pengurus</label>
    <ul class="list-group">
      <li class="list-group-item">1. <input type="text" name="pengurus1" class="form-control" id="badan_pengurus1"></li>
      <li class="list-group-item">2. <input type="text" name="pengurus2" class="form-control" id="badan_pengurus2"></li>
      <li class="list-group-item">3. <input type="text" name="pengurus3" class="form-control" id="badan_pengurus3"></li>
      <li class="list-group-item">4. <input type="text" name="pengurus4" class="form-control" id="badan_pengurus4"></li>
    </ul>
  </div>
</div>

<div class="card-header text-white bg-primary">
    <h5>E. PEMBUKAAN DEPOSITO</h5>
  </div>
  <div class="card-body">
    <div class="form-group">
      <div class="row">
    <div class="col-6">
      <label style="margin-bottom: 10px">Nominal Setoran</label>
      <input type="text" name="" placeholder="Rp. ..." class="form-control">
    </div>

  <div class="form-group">
    <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Mata Uang</label>
    <input type="text" name="" class="form-control">
  </div>

  <div class="form-group">
    <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Jangka Waktu</label>
    <select name="" class="form-select">
      <option value="">Pilih Jangka Waktu</option>
      <option value="">1 Bulan</option>
      <option value="">3 Bulan</option>
      <option value="">6 Bulan</option>
      <option value="">12 Bulan</option>
    </select>
  </div>

  <div class="form-group">
    <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Pembayaran Bagi Hasil</label>
    <select name="" class="form-select">
      <option value="">Pilih Pembayaran Bagi Hasil</option>
      <option value="">Dibukukan pada Tabungan</option>
      <option value="">Dibayar pada cabang / Bank</option>
    </select>

    Nomor Rekening Pembayaran Bagi Hasil
    <input type="number" name="" class="form-control">
  
    <label style="margin-bottom: 10px">Perpanjang Otomatis</label>
     <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
      Ya
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
      Tidak
  </div>
  <div class="form-group">
    <label style="margin-bottom: 10px">Ahli Waris</label>
    <input type="text" name="" class="form-control">
  </div>
  <div class="form-group">
    <label style="margin-bottom: 10px">Hubungan Dengan Ahli Waris</label>
    <input type="text" name="" class="form-control">
  </div>
  </div>
  </div>

</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
@endsection