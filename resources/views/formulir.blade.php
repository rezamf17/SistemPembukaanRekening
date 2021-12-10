@extends('layouts.FormTemplate')
@section('content')
<div class="card">
  <div class="card-header text-center">
    <img src="{{asset('style/img/bprs.png')}}" class="img-fluid" alt="Responsive image">
    <h3 class="text-center">APLIKASI PEMBUKAAN REKENING</h3>
  </div>
  <div class="card-body">
    <label>Pilihan Kantor Cabang </label>
    <select name="kantor_cabang" class="form-select">
      <option value="">Pilih Kantor Cabang</option>
      <option value="1">Arcamanik</option>
      <option value="1">Cianjur</option>
      <option value="1">Cipacing</option>
      <option value="1">Garut</option>
      <option value="1">Jatiwangi</option>
      <option value="1">Kopo</option>
      <option value="1">Kulalet</option>
      <option value="1">Majalaya</option>
      <option value="1">Rancaekek</option>
    </select>
  </div>
  <div class="card-header">
    <h5>A. IDENTITAS NASABAH</h5>
  </div>
  <div class="card-body">
    <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" class="form-control">
    </div>
    <label>Jenis Kelamin</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault1">
        Laki-laki
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
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
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault1">
        Penduduk (WNI)
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
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
      <div class="d-inline">
        <label>DD</label>
        <input type="number" pattern="[0-9]*" maxlength="2" size="2" class="tanggal-lahir" />
      </div>
      /
      <div class="d-inline">
        <label>MM</label>
        <input type="number" pattern="[0-9]*" maxlength="2" size="2" class="tanggal-lahir" />
      </div>
      /
      <div class="d-inline">
        <label>YYYY</label>
        <input type="number" pattern="[0-9]*" maxlength="4" size="4" class="tahun-lahir" />
      </div>
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
      <input type="text" name="bertindak" class="form-control">
    </div>
    <label>Tujuan Pembukaan Rekening</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault1">
        Saving
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault2">
        Jaga-jaga
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault2">
        Transaksi Bisnis
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault2">
        Lainnya
      </label>
    </div>
  </div>
<div class="card-header">
  <h5>B. PRODUK YANG DIBUKA</h5>
</div>
<div class="card-body">
  <label>Jenis Simpanan</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault1">
      Simpanan Wadiah
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      Simpanan Mudharabah
    </label>
  </div>
</div>
<div class="card-header">
  <h5>C. DATA NASABAH PERORANGAN</h5>
</div>
<div class="card-body">
  <label>Sumber Penghasilan</label>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="">
    <label class="form-check-label" for="flexCheckDefault">
      Hasil Usaha
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="">
    <label class="form-check-label" for="flexCheckDefault">
      Hasil Investasi
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="">
    <label class="form-check-label" for="flexCheckDefault">
      Orang Tua
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="">
    <label class="form-check-label" for="flexCheckDefault">
      Gaji
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="">
    <label class="form-check-label" for="flexCheckDefault">
      Lainnya
    </label>
  </div>
  <div class="form-group">
    <label>Nama Tempat Kerja</label>
    <input type="text" name="" class="form-control">
  </div>
  <div class="form-group">
    <label>Jabatan</label>
    <input type="text" name="" class="form-control">
  </div>
  <div class="form-group">
    <label>Bidang Usaha</label>
    <input type="text" name="" class="form-control">
  </div>
  <div class="form-group">
    <label>Alamat Perusahaan</label>
    <textarea name="" class="form-control"></textarea>
  </div>
  <label>Pekerjaan</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault1">
      Pelajar / Mahasiswa
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      Ibu Rumah Tangga
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault1">
      Karyawan Swasta
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      POLRI / TNI
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault1">
      Pejabat Negara
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      Pensiunan
    </label>
  </div>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault1">
      Pegawai Negeri
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      Wiraswasta
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      Lainnya
    </label>
  </div>
  <div class="form-group">
    <label>Pendidikan</label>
    <select name="" class="form-select">
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
    <select name="" class="form-select">
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
    <select name="" class="form-select">
      <option value="">Pilih Penghasilan</option>
      <option value=""> &#8804 Rp. 5 jt</option>
      <option value=""> &#8804 Rp. 10 jt</option>
      <option value=""> &#8804 Rp. 15 jt</option>
      <option value=""> > Rp. 15 jt</option>
    </select>
  </div>
  <div class="form-group">
    <select name="" class="form-select">
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
      option
    </select>
  </div>
</div>

<div class="card-header"><h5>D. DATA NASABAH BADAN</h5></div>
<div class="card-body">
  <label>Bentuk Usaha</label>
<div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      PT
    </label>
  </div>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault1">
      CV/RM
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      Yayasan
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      Lembaga Keuangan
    </label>
  </div>
  <div class="form-group">
    <label>Nama Badan Usaha</label>
    <input type="text" name="" class="form-control">
  </div>
  <div class="form-group">
    <label>Jenis Usaha</label>
    <input type="text" name="" class="form-control">
  </div>
  <div class="form-group">
    <label>Izin Usaha / No. SIUP</label>
    <input type="text" name="" class="form-control">
  </div>
  <div class="form-group">
    <label>Alamat Pemilik</label>
    <textarea name="" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label>NPWP</label>
    <input type="number" name="" class="form-control">
  </div>
  <label>Sumber Dana</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      Hasil Usaha
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault2">
      Hasil Investasi
    </label>
  </div>
  <div class="form-group">
    <label>Omzet</label>
    <input type="text" name="" class="form-control">
  </div>
  <div class="form-group">
    <label>Pengurus</label>
    <ul class="list-group">
      <li class="list-group-item">1. <input type="text" name="" class="form-control"></li>
      <li class="list-group-item">2. <input type="text" name="" class="form-control"></li>
      <li class="list-group-item">3. <input type="text" name="" class="form-control"></li>
      <li class="list-group-item">4. <input type="text" name="" class="form-control"></li>
    </ul>
  </div>
</div>
  <div class="card-header">
    <h5>E. KHUSUS DEPOSITO</h5>
  </div>
  <div class="card-body">
    <div class="form-group">
      <label>Nominal Setoran</label>
      <input type="text" name="" placeholder="Rp. ..." class="form-control">
    </div>
  <div class="form-group">
    <label>Mata Uang</label>
    <input type="text" name="" class="form-control">
  </div>
  <div class="form-group">
    <label>Jangka Waktu</label>
    <select name="" class="form-select">
      <option value="">Pilih Jangka Waktu</option>
      <option value="">1 Bulan</option>
      <option value="">3 Bulan</option>
      <option value="">6 Bulan</option>
      <option value="">12 Bulan</option>
    </select>
  </div>
  <div class="form-group">
    <label>Pembayaran Bagi Hasil</label>
    <select name="" class="form-control">
      <option value="">Pilih Pembayaran Bagi Hasil</option>
      <option value="">Dibukukan pada Tabungan</option>
      <option value="">Dibayar pada cabang/ Bank</option>
    </select>
    Nomor Rekening Pembayaran Bagi Hasil
    <input type="number" name="" class="form-control">
    <label>Perpanjang Otomatis</label>
     <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
      Ya
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault">
      Tidak
  </div>
  <div class="form-group">
    <label>Ahli Waris</label>
    <input type="text" name="" class="form-control">
  </div>
  <div class="form-group">
    <label>Hubungan Dengan Ahli Waris</label>
    <input type="text" name="" class="form-control">
  </div>
  </div>
  </div>
  <div class="card-header">
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
  <div class="card-header">
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
@endsection