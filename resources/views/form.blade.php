@extends('layouts.FormTemplate')
@section('content')

  <div class="card-header text-center text-white bg-primary">
    <img src="{{asset('style/img/bprs.png')}}" class="img-fluid" alt="Responsive image">
    <h3 class="text-center">APLIKASI PEMBUKAAN REKENING TABUNGAN DAN DEPOSITO</h3>
  </div>
  <div class="card-body">
  <div class="text-center">
<br> <h4><b>SILAHKAN PILIH JENIS REKENING</h4>
<button type="button" class="btn btn-primary btn-lg">REKENING TABUNGAN</button>
<button type="button" class="btn btn-secondary btn-lg">REKENING DEPOSITO</button>
</div>
</div>

    <div class="card-header">
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
    <div class="text-center">
  <br> <h5> Silahkan Pilih Kategori Nasabah </h5>
<button type="button" class="btn btn-primary">Nasabah Perorangan</button>
<button type="button" class="btn btn-secondary">Nasabah Badan</button>
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
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault1">
        Laki-laki
      </label>
          </div>
    </div>
    <div class="col-3">
      
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
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
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault1">
        Penduduk (WNI)
      </label>
          </div>
    </div>
    <div class="col-5">
      
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
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
      <input type="date" name="" class="form-control">
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
    <br><label>Dalam Hal Ini Bertindak Sebagai</label>
      <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault1">
        Diri Sendiri
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault2">
        Jika mewakili, Hubungan dengan Nasabah adalah yang mewakili sebagai
      </label>
      <select name="" class="form-select" id="nasabah_mewakili">
      <option value="">Pilih Hubungan Dengan Nasabah</option>
      <option value="">Ahli Waris</option>
      <option value="">Orang tua</option>
      <option value="">Anak</option>
      <option value="">Suami/Istri</option>
      <option value="">Saudara</option>
      <option value="">Lainnya</option>
     </select>
    </div>

    <div>
    <br><label>Tujuan Pembukaan Rekening</label>
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
</div>

<div class="card-header text-white bg-primary">
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

<div class="card-header text-white bg-primary">
  <h5>C. DATA NASABAH PERORANGAN</h5>
</div>
<div class="card-body">
  <label style="margin-bottom: 10px">Sumber Penghasilan</label>
  <div class="form-check">

      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault1">
        Hasil Usaha
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault2">
        Hasil Investasi
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault2">
        Gaji
      </label>
      </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault2">
        Orangtua
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault2">
        Lainnya
      </label>
    </div>
  <div class="form-group">
     <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Nama Tempat Kerja</label>
    <input type="text" name="" class="form-control" id="nasabah_tempat_kerja">
  </div>
  <div class="form-group">
     <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Jabatan</label>
    <input type="text" name="" class="form-control" id="nasabah_jabatan">
  </div>
  <div class="form-group">
     <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Bidang Usaha</label>
    <input type="text" name="" class="form-control" id="nasabah_usaha">
  </div>
  <div class="form-group">
     <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Alamat Perusahaan</label>
    <textarea name="" class="form-control" id="nasabah_alamat"></textarea>
  </div>
  </div>
  <label style="margin-bottom: 10px">Pekerjaan</label>
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
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="nasabah_pekerjaan9">
    <label class="form-check-label" for="flexRadioDefault2">
      Lainnya
    </label>
  </div>
  <div class="form-group">
     <div class="row">
    <div class="col-6">
   <br> <label>Pendidikan</label>
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
     <div class="row">
    <div class="col-6">
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
     <div class="row">
    <div class="col-6">
    <select name="" class="form-select" id="nasabah_penghasilan">
      <option value="">Pilih Penghasilan</option>
      <option value=""> &#8804 Rp. 5 jt</option>
      <option value=""> &#8804 Rp. 10 jt</option>
      <option value=""> &#8804 Rp. 15 jt</option>
      <option value=""> > Rp. 15 jt</option>
    </select>
  </div>
</div>

<br><div class="card-header text-white bg-primary"><h5>D. DATA NASABAH BADAN</h5></div>
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
     <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Nama Badan Usaha</label>
    <input type="text" name="" class="form-control" id="badan_nama">
  </div>
  <div class="form-group">
    <label style="margin-bottom: 10px">Jenis Usaha</label>
     <div class="row">
    <div class="col-6">
    <input type="text" name="" class="form-control" id="badan_jenis">
  </div>
  <div class="form-group">
     <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Izin Usaha / No. SIUP / NIB</label>
    <input type="text" name="" class="form-control" id="badan_izin">
  </div>
  <div class="form-group">
     <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">Alamat Pemilik</label>
    <textarea name="" class="form-control" id="badan_alamat"></textarea>
  </div>
  <div class="form-group">
     <div class="row">
    <div class="col-6">
    <label style="margin-bottom: 10px">NPWP</label>
    <input type="number" name="" class="form-control" id="badan_npwp">
  </div>
  <label>Sumber Dana</label>
   <div class="row">
    <div class="col-6">
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
    <label style="margin-bottom: 10px">Pengurus</label>
    <ul class="list-group">
      <li class="list-group-item">1. <input type="text" name="" class="form-control" id="badan_pengurus1"></li>
      <li class="list-group-item">2. <input type="text" name="" class="form-control" id="badan_pengurus2"></li>
      <li class="list-group-item">3. <input type="text" name="" class="form-control" id="badan_pengurus3"></li>
      <li class="list-group-item">4. <input type="text" name="" class="form-control" id="badan_pengurus4"></li>
    </ul>
    <br>
  </div>
</div>
  
 <br> <div class="card-header text-white bg-primary">
    <h5>E. PERNYATAAN NASABAH</h5>
  </div>
  <div class="card-body">
    Dengan ini nasabah menyatakan : <br>

<p>1. Nasabah bertanggungjawab sepenuhnya atas data dan keterangan yang diberikan dan membebaskan PT. BPRS ALMASOEM dari segala tuntutan dan/atau gugatan dalam bentuk apapun dan dari pihak manapun termasuk dari nasabah, sehubungan dengan pengisian Formulir Pembukaan Rekening</p>

<p>2. PT.BPRS ALMASOEM telah memberikan penjelasan yang cukup mengenai karakteristik produk diantaranya tenggat, resiko dan biaya-biaya yang melekat dan nasabah telah membaca, mengerti dan menyetujui isi ketentuan-ketentuan dan klasifikasi yang terkait dengan produk yang nasabah ajukan seperti tertuang dalam syarat dan ketentuan pembukaan rekening beserta syarat dan ketentuan pemohon.</p>

<p>3. Memberikan kuasa kepada Bank yang tidak dapat dibatalkan secara sepihak oleh nasabah sesuai ketentuan undang-undang hukum pidana untuk: <br>
a. Mendebit rekening tersebut dalam rangka pembayaran maupun beban yang timbul dari produk maupun kontraknya <br>
b. Melakukan pemblokiran rekening jika diindikasi telah terjadi penyalahgunaan rekening dan/atau oleh sebab-sebab lainnya</p>

<p>4. Tunduk pada syarat dan ketentuan yang berlaku pada BANK sebagaimana yang tertuang berserta segala perubahannya yang merupakan bagian dan menjadi satu kesatuan yang tidak terjelaskan dari Formulir Aplikasi ini.</p>

<div class="form-group">
      <label>Pemotongan Zakat atas Bonus</label> <br>
      <div class="form-check">
        <input type="radio" name="zakat" class="form-check-input">
        Ya = 2,5% atau <input type="text" name="" class="zakat">
      </div>

      <div class="form-check">
        <input type="radio" name="zakat" class="form-check-input">
        Tidak
      </div>
  </div>

  <div class="card-header text-white bg-primary">
    <h5>F. UPLOAD DOKUMEN</h5>
  </div>
   <div class="card-body">
     <div class="form-group">
    <label for="exampleFormControlFile1">Upload/Unggah Foto/Scan KTP Asli</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>

</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
@endsection