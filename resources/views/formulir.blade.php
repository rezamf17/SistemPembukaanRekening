@extends('layouts.FormTemplate')
@section('content')
<div class="card">
  <form action="{{ url('/') }}" method="post" onsubmit="return confirm('Anda yakin sudah mengisi data dengan benar?')" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
  <div class="card-header text-center text-white bg-primary">
    <img src="{{asset('style/img/bprslogo.png')}}" class="img-fluid" alt="Responsive image">
    <h3 class="text-center">APLIKASI PEMBUKAAN REKENING</h3>
  </div>
  <div class="card-body">
    <div class="text-center">
    <label>Pilih Jenis Rekening</label> <br>
    <a href="#" class="btn btn-primary btn-lg text-center">REKENING TABUNGAN</a>
    <a href="{{ url('/deposito') }}" class="btn btn-secondary btn-lg text-center">REKENING DEPOSITO</a> <br>
    </div>
    <label>Pilihan Kantor Cabang </label>
    <select name="id_cabang" class="form-select">
      <option value="">Pilih Kantor Cabang</option>
      <option value="1">Arcamanik</option>
      <option value="2">Cianjur</option>
      <option value="3">Garut</option>
      <option value="4">Jatiwangi</option>
      <option value="5">Kopo</option>
      <option value="6">Majalaya</option>
      <option value="7">Rancaekek</option>
    </select>
    <div class="text-center">
      <label>Silahkan Pilih Kategori Nasabah</label> <br>
      <button onclick="nasabah()" type="button" class="btn btn-primary">Rekening Nasabah Perorangan</button>
      <button onclick="badan()" type="button" class="btn btn-danger">Rekening Nasabah Badan</button>
      <p id="status"></p>
    </div>
  </div>
  <div class="card-header text-white bg-primary">
    <h5>A. IDENTITAS NASABAH</h5>
  </div>
  <div class="row">
    <div class="col-6">
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
  </div>
 
<div class="card-header text-white bg-primary">
  <h5>B. PRODUK YANG DIBUKA</h5>
</div>
<div class="card-body">
  <label>Jenis Simpanan</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="jenis_simpanan" value="Simpanan Wadiah" id="simpanan_wadiah">
    <label class="form-check-label" for="flexRadioDefault1">
      Simpanan Wadiah
    </label>
    <div class="form-group">
      <label>Jenis Tabungan</label> <br>
      <div class="form-check">
        <input type="radio" name="jenis_tabungan" class="form-check-input" id="wadiah1" value="Reguler/Umum">
        Tabungan Ma'soem IB
      </div>
      <div class="form-check">
        <input type="radio" name="jenis_tabungan" class="form-check-input" id="wadiah2" value="Tabungan Ma'soem SimPel IB (Simpanan Pelajar)">
        Tabungan Ma'soem SimPel IB (Simpanan Pelajar)
      </div>
      <div class="form-check">
        <input type="radio" name="jenis_tabungan" class="form-check-input" id="wadiah3" value="Payroll">
        Payroll 
      </div>
    </div>
  </div> <br>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="jenis_simpanan" value="Simpanan Mudharabah" id="simpanan_mudharabah">
    <label class="form-check-label" for="flexRadioDefault2">
      Simpanan Mudharabah
    </label>
    <div class="form-group">
      <label>Jenis Tabungan</label> <br>
      <div class="form-check">
        <input type="radio" name="jenis_tabungan" class="form-check-input" id="mudharabah1" value="Tabungan Ma'soem Haji IB">
        Tabungan Ma'soem Haji IB 
      </div>
      <div class="form-check">
        <input type="radio" name="jenis_tabungan" class="form-check-input" id="mudharabah2" value="Deposito Ma'soem Qurban IB">
        Tabungan Ma'soem Qurban IB
      </div>
      <div class="form-check">
        <input type="radio" name="jenis_tabungan" class="form-check-input" id="mudharabah2" value="Deposito Ma'soem Masa Depan IB">
        Tabungan Ma'soem Masa Depan IB
      </div>
    </div>
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
    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_bentuk1" value="PT" required>
    <label class="form-check-label" for="flexRadioDefault2">
      PT
    </label>
  </div>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_bentuk2" value="CV/RM" required>
    <label class="form-check-label" for="flexRadioDefault1">
      CV/RM
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_bentuk3" value="Yayasan" required>
    <label class="form-check-label" for="flexRadioDefault2">
      Yayasan
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_bentuk4" value="Lembaga Keuangan" required>
    <label class="form-check-label" for="flexRadioDefault2">
      Lembaga Keuangan
    </label>
  </div>
  <div class="form-row">
    <input class="form-check-input" type="radio" name="bentuk_usaha" id="badan_bentuk5" required>
    <label class="form-check-label" for="flexRadioDefault2">
      Lainnya
    </label>
    <div class="col-6">
      <input type="text" name="bentuk_usaha" class="form-control" id="badan_bentuk6" required>
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
 <div class="form-group">
      <label>Pemotongan Zakat atas Bonus</label> <br>
      <div class="form-check">
        <input type="radio" name="zakat" class="form-check-input" id="zakat" value="2.5%">
        Ya = 2,5% <br>
        Angka Lainnya 
        <input type="radio" name="zakat" class="form-check-input" id="zakat3"> 
        <input type="text" name="zakat" class="zakat" id="zakat1" placeholder="....">
      </div>

      <div class="form-check">
        <input type="radio" name="zakat" class="form-check-input" id="zakat2" value="Tidak">
        Tidak
      </div>
  </div>

  </div>
  <div class="card-header text-white bg-primary">
    <h5>G. UPLOAD DOKUMEN</h5>
  </div>
   <div class="card-body">
     <div class="form-group">
    <label for="exampleFormControlFile1">Upload/Unggah Foto/Scan KTP Asli</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
    </div>
</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

@include('sweetalert::alert')
@endsection