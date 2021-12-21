@extends('layouts.FormTemplate')
@section('content')
<div class="card">
  <div class="card-header text-center text-white bg-primary">
    <img src="{{asset('style/img/bprs.png')}}" class="img-fluid" alt="Responsive image">
    <h3 class="text-center">APLIKASI PEMBUKAAN REKENING</h3>
  </div>
  <form action="{{ url('/') }}" method="post" accept-charset="utf-8">
    @csrf
  <div class="card-body">
    <label>Pilihan Kantor Cabang </label>
    <select name="id_cabang" class="form-select" required>
      <option value="">Pilih Kantor Cabang</option>
      <option value="1">Arcamanik</option>
      <option value="2">Cianjur</option>
      <option value="3">Cipacing</option>
      <option value="4">Garut</option>
      <option value="5">Jatiwangi</option>
      <option value="6">Kopo</option>
      <option value="7">Kulalet</option>
      <option value="8">Majalaya</option>
      <option value="9">Rancaekek</option>
    </select>
    <label>Pilih Jenis Rekening</label> <br>
    <button onclick="nasabah()" type="button" class="btn btn-primary">Rekening Nasabah Perorangan</button>
    <button onclick="badan()" type="button" class="btn btn-danger">Rekening Nasabah Badan</button>
    <p id="status"></p>
  </div>
  <div class="card-header text-white bg-primary">
    <h5>A. IDENTITAS NASABAH</h5>
  </div>
  <div class="card-body">
    <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" class="form-control">
    </div>
    <label>Jenis Kelamin</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
      <label class="form-check-label" for="flexRadioDefault1">
        Laki-laki
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
      <label class="form-check-label" for="flexRadioDefault2">
        Perempuan
      </label>
    </div>
    <div class="form-group">
      <label>Nama Jelas Ibu Kandung</label>
      <input type="text" name="nama_ibu" class="form-control">
    </div>
    <label>Status Kependudukan</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status_kependudukan" value="Penduduk (WNI)">
      <label class="form-check-label" for="flexRadioDefault1">
        Penduduk (WNI)
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status_kependudukan" value="Bukan Penduduk (WNA)">
      <label class="form-check-label" for="flexRadioDefault2">
        Bukan Penduduk (WNA)
      </label>
    </div>
    <div class="form-group">
      <label>Tempat Lahir</label>
      <input type="text" name="tempat_lahir" class="form-control">
    </div>
    <div >
      <label>Tanggal Lahir</label> <br>
      <input type="date" name="tanggal_lahir" class="form-control">
    </div>
    <div class="form-group">
      <label>Nomor KTP</label>
      <input type="number" name="no_ktp" class="form-control">
    </div>
    <div class="form-group">
      <label>NPWP</label>
      <input type="number" name="npwp" class="form-control">
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <textarea name="alamat" class="form-control"></textarea>  
    </div>
    <div class="form-group">
      <label>Telepon/No. HP</label>
      <input type="number" name="no_hp" class="form-control">
    </div>
    <div class="form-group">
      <label>Dalam Hal Ini Bertindak Sebagai</label>
      <input type="text" name="bertindak_sebagai" class="form-control">
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
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<div class="card-header text-white bg-primary">
  <h5>C. DATA NASABAH PERORANGAN</h5>
</div>
<div class="card-body">
  <label>Sumber Penghasilan</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_penghasilan1" name="sumber_penghasilan">
    <label class="form-check-label" for="flexCheckDefault">
      Hasil Usaha
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_penghasilan2" name="sumber_penghasilan">
    <label class="form-check-label" for="flexCheckDefault">
      Hasil Investasi
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_penghasilan3" name="sumber_penghasilan">
    <label class="form-check-label" for="flexCheckDefault">
      Orang Tua
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="nasabah_penghasilan4" name="sumber_penghasilan">
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
    <input type="text" name="" class="form-control" id="nasabah_tempat_kerja">
  </div>
  <div class="form-group">
    <label>Jabatan</label>
    <input type="text" name="" class="form-control" id="nasabah_jabatan">
  </div>
  <div class="form-group">
    <label>Bidang Usaha</label>
    <input type="text" name="" class="form-control" id="nasabah_usaha">
  </div>
  <div class="form-group">
    <label>Alamat Perusahaan</label>
    <textarea name="" class="form-control" id="nasabah_alamat"></textarea>
  </div>
  <label>Pekerjaan</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="nasabah_pekerjaan1">
    <label class="form-check-label" for="flexRadioDefault1">
      Pelajar / Mahasiswa
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="nasabah_pekerjaan2">
    <label class="form-check-label" for="flexRadioDefault2">
      Ibu Rumah Tangga
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="nasabah_pekerjaan3">
    <label class="form-check-label" for="flexRadioDefault1">
      Karyawan Swasta
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="nasabah_pekerjaan4">
    <label class="form-check-label" for="flexRadioDefault2">
      POLRI / TNI
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="nasabah_pekerjaan5">
    <label class="form-check-label" for="flexRadioDefault1">
      Pejabat Negara
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="nasabah_pekerjaan6">
    <label class="form-check-label" for="flexRadioDefault2">
      Pensiunan
    </label>
  </div>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="nasabah_pekerjaan7">
    <label class="form-check-label" for="flexRadioDefault1">
      Pegawai Negeri
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="nasabah_pekerjaan8">
    <label class="form-check-label" for="flexRadioDefault2">
      Wiraswasta
    </label>
  </div>
  <div class="form-row">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="nasabah_pekerjaan9">
    <label class="form-check-label" for="flexRadioDefault2">
      Lainnya
    </label>
  </div>
  <div class="form-group">
    <label>Pendidikan</label>
    <select name="" class="form-select" id="nasabah_pendidikan">
      <option value="">Pilih Pendidikan</option>
      <option value="">SD</option>
      <option value="">SMP/MTS</option>
      <option value="">SMA/SMK</option>
      <option value="">Sarjana</option>
      <option value="">Pasca Sarjana</option>
      <option value="">Paket A</option>
      <option value="">Paket B</option>
      <option value="">Paket C</option>
    </select>
  </div>
  <div class="form-group">
  <label>Agama</label>
    <select name="" class="form-select" id="nasabah_agama">
      <option value="">Pilih Agama</option>
      <option value="">Islam</option>
      <option value="">Kristen</option>
      <option value="">Hindu</option>
      <option value="">Budha</option>
      <option value="">Konghucu</option>
    </select>
  </div>
  <div class="form-group">
    <label>Penghasilan</label>
    <select name="" class="form-select" id="nasabah_penghasilan">
      <option value="">Pilih Penghasilan</option>
      <option value=""> &#8804 Rp. 5 jt</option>
      <option value=""> &#8804 Rp. 10 jt</option>
      <option value=""> &#8804 Rp. 15 jt</option>
      <option value=""> > Rp. 15 jt</option>
    </select>
  </div>
</div>
<div class="card-header text-white bg-primary"><h5>D. DATA NASABAH BADAN</h5></div>
<div class="card-body">
  <label>Bentuk Usaha</label>
<div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="badan_bentuk1">
    <label class="form-check-label" for="flexRadioDefault2">
      PT
    </label>
  </div>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="badan_bentuk2">
    <label class="form-check-label" for="flexRadioDefault1">
      CV/RM
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="badan_bentuk3">
    <label class="form-check-label" for="flexRadioDefault2">
      Yayasan
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="badan_bentuk4">
    <label class="form-check-label" for="flexRadioDefault2">
      Lembaga Keuangan
    </label>
  </div>
  <div class="form-group">
    <label>Nama Badan Usaha</label>
    <input type="text" name="" class="form-control" id="badan_nama">
  </div>
  <div class="form-group">
    <label>Jenis Usaha</label>
    <input type="text" name="" class="form-control" id="badan_jenis">
  </div>
  <div class="form-group">
    <label>Izin Usaha / No. SIUP</label>
    <input type="text" name="" class="form-control" id="badan_izin">
  </div>
  <div class="form-group">
    <label>Alamat Pemilik</label>
    <textarea name="" class="form-control" id="badan_alamat"></textarea>
  </div>
  <div class="form-group">
    <label>NPWP</label>
    <input type="number" name="" class="form-control" id="badan_npwp">
  </div>
  <label>Sumber Dana</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="badan_sumber_dana">
    <label class="form-check-label" for="flexRadioDefault2">
      Hasil Usaha
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="badan_hasil_investasi">
    <label class="form-check-label" for="flexRadioDefault2">
      Hasil Investasi
    </label>
  </div>
  <div class="form-group">
    <label>Omzet</label>
    <input type="text" name="" class="form-control" id="badan_omzet">
  </div>
  <div class="form-group">
    <label>Pengurus</label>
    <ul class="list-group">
      <li class="list-group-item">1. <input type="text" name="" class="form-control" id="badan_pengurus1"></li>
      <li class="list-group-item">2. <input type="text" name="" class="form-control" id="badan_pengurus2"></li>
      <li class="list-group-item">3. <input type="text" name="" class="form-control" id="badan_pengurus3"></li>
      <li class="list-group-item">4. <input type="text" name="" class="form-control" id="badan_pengurus4"></li>
    </ul>
  </div>
</div>
  <div class="card-header text-white bg-primary">
    <h5>F. PERNYATAAN NASABAH</h5>
  </div>
  <div class="card-body">
    Dengan ini nasabah menyatakan : <br>

<p>1. Nasabah bertanggungjawab sepenuhnya atas data dan keterangan yang diberikan dan membebaskan PT. BPRS ALMASOEM dari segala tuntutan dan/atau gugatan dalam bentuk apapun dan dari pihak manapun termasuk dari nasabah, sehubungan dengan pengisian Formulir Pembukaan Rekening</p>

<p>2. PT.BPRS ALMASOEM telah memberikan penjelasan yang cukup mengenai karakteristik produk diantaranya tenggat, resiko dan biaya-biaya yang melekat dan nasabah telah membaca, mengerti dan menyetujui isi ketentuan-ketentuan dan klasifikasi yang terkait dengan produk yang nasabah ajukan seperti tertuang dalam syarat dan ketentuan pembukaan rekening beserta syarat dan ketentuan pemohon.</p>

<p>3. Memberikan kuasa kepada Bank yang tidak dapat dibatalkan secara sepihak oleh nasabah sesuai ketentuan undang-undang hukum pidana untuk: <br>
a. Mendebit rekening tersebut dalam rangka pembayaran maupun beban yang timbul dari produk maupun kontraknya <br>
b. Melakukan pemblokiran rekening jika diindikasi telah terjadi penyalahgunaan rekening dan/atau oleh sebab-sebab lainnya</p>

<p>4. Tunduk pada syarat dan ketentuan yang berlaku pada BANK sebagaimana yang tertuang berserta segala perubahannya yang merupakan bagian dan menjadi satu kesatuan yang tidak terjelaskan dari Formulir Aplikasi ini.</p>

  </div>
  <div class="card-header text-white bg-primary">
    <h5>G. UPLOAD DOKUMEN</h5>
  </div>
   <div class="card-body">
     <div class="form-group">
    <label for="exampleFormControlFile1">Upload/Unggah Foto/Scan KTP Asli</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <div class="form-group">
    <label for="exampleFormControlFile1">Upload/Unggah Selfie Dengan KTP Asli</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
   </div>
</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
@include('sweetalert::alert')
@endsection