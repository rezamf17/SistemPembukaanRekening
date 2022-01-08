<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Data Nasabah</title>
	<link rel="stylesheet" href="">
	<style>
		body{
			font-family: sans-serif;
		}
		h3{
			display: inline-block;
			text-align: center;
		}
		header{
			background-color: #0909d6;
			color: white;
    		margin-bottom: 7px;
		}
		th{
			text-align: left;
            padding-right: 15px;
		}
		td{
			text-align: left;
			margin-left: 20px;
		}
		img{
			width: 100px;
			display: inline-block;
		}
		.card-header{
			background-color: #0909d6;
			color: white;
			padding: 5px;
			font-size: 12px;
		}
		.card-body{
			font-size: 10px;
			text-align: left;
			margin-left: 8px;
			text-align: left;
		}
		.judul{
			text-align: center;
			display: inline-block;
		}
		.gambar{
			display: inline-block;
			/*width: 100px;*/
		}
        .ttd1{
          margin-top: 15px;
          text-align: center;
          margin-right: 60%;
          font-size: 12px;
        }
        .ttd2{
          margin-top: -16px;
          margin-left: 55%;
          text-align: center;
          font-size: 12px;
        }
        .ttd3{
          margin-top: 42px;
          text-align: center;
          margin-right: 60%;
          font-size: 12px;
        }
        .ttd4{
          margin-top: -16px;
          margin-left: 55%;
          text-align: center;
          font-size: 12px;
        }
	</style>
</head>
<body>
<header>
	<div class="gambar">
		<img src="{{public_path("/style/img/bprslogo.png")}}" alt="">
		{{-- <img src="../style/img/bprslogo1.png" alt="" style=" width: 150px; margin-bottom: -10px;"> --}}	
	</div>
	<div class="judul">
		<h3>APLIKASI PEMBUKAAN REKENING & PENGKINIAN DATA</h3>
	</div>
</header><!-- /header -->
	<div class="card">
    <div class="card-header">
        A. IDENTITAS NASABAH
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" >
                @if ($deposito->identitas_nasabah == null)
                <tr>
                    <th>Nama</th>
                    <td>-</td>
                    <th>Jenis Kelamin</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Nama Ibu Kandung</th>
                    <td>-</td>
                    <th>Status Kependudukan</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>-</td>
                    <th>Tanggal Lahir</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>No KTP</th>
                    <td>-</td>
                    <th>NPWP</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>-</td>
                    <th>No HP</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Bertindak Sebagai</th>
                    <td>-</td>
                    <th>Tujuan Buka Rekening</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Pemotongan Zakat</th>
                    <td>-</td>
                </tr>
                @else
                <tr>
                    <th>Nama</th>
                    <td>{{$deposito->identitas_nasabah->nama}}</td>
                    <th>Jenis Kelamin</th>
                    <td>{{$deposito->identitas_nasabah->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <th>Nama Ibu Kandung</th>
                    <td>{{$deposito->identitas_nasabah->nama_ibu}}</td>
                    <th>Status Kependudukan</th>
                    <td>{{$deposito->identitas_nasabah->status_kependudukan}}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{$deposito->identitas_nasabah->tempat_lahir}}</td>
                    <th>Tanggal Lahir</th>
                    <td>{{$deposito->identitas_nasabah->tanggal_lahir}}</td>
                </tr>
                <tr>
                    <th>No KTP</th>
                    <td>{{$deposito->identitas_nasabah->no_ktp}}</td>
                    <th>NPWP</th>
                    <td>{{$deposito->identitas_nasabah->npwp}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{$deposito->identitas_nasabah->alamat}}</td>
                    <th>No HP</th>
                    <td>{{$deposito->identitas_nasabah->no_hp}}</td>
                </tr>
                <tr>
                    <th>Bertindak Sebagai</th>
                    <td>{{$deposito->identitas_nasabah->bertindak_sebagai}}</td>
                    <th>Tujuan Buka Rekening</th>
                    <td>{{$deposito->identitas_nasabah->tujuan_buka_rekening}}</td>
                </tr>
                <tr>
                    <th>Pemotongan Zakat</th>
                    <td>{{$deposito->identitas_nasabah->zakat}}</td>
                </tr>
                @endif
                
            </table>
        </div>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">B. PRODUK YANG DIBUKA</div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Jenis Simpanan</th>
                <td>{{$deposito->jenis_simpanan->jenis_simpanan}}</td>
            </tr>
            <tr>
                <th>Jenis Tabungan</th>
                <td>{{$deposito->jenis_simpanan->jenis_tabungan}}</td>
            </tr>
        </table>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">C. DATA NASABAH PERORANGAN</div>
    <div class="card-body">
        <table class="table">
            @if ($deposito->nasabah_perorang == null)
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
        D. DATA NASABAH BADAN
    </div>
    <div class="card-body">
        <table class="table">
            @if ($deposito->nasabah_badan == null)
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
 </div>
</div>
<div class="card">
    <div class="card-header">
        E. KHUSUS DEPOSITO
    </div>
    <div class="card-body">
        <table>
            <tr>
                <th>Atas Nama</th>
                <td>{{$deposito->atas_nama}}</td>
            </tr>
            <tr>
                <th>Nomor Rekening</th>
                <td>{{$deposito->no_rekening_pemilik}}</td>
            </tr>
            <tr>
                <th>Nominal Setoran</th>
                <td>{{$deposito->nominal_setoran}}</td>
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
                <th>Nomor Rekening Bagi Hasil</th>
                <td>{{$deposito->no_rek_bagi_hasil}}</td>
            </tr>
            <tr>
                <th>Diperpanjang Otomatis</th>
                <td>{{$deposito->perpanjang_otomatis}}</td>
            </tr>
            <tr>
                <th>Ahli Waris</th>
                <td>{{$deposito->ahli_waris}}</td>
            </tr>
            <tr>
                <th>Hubungan Dengan Ahli Waris</th>
                <td>{{$deposito->hubungan_dgn_ahli_waris}}</</td>
            </tr>
            
        </table>
    </div>
</div>
<div class="card">
 <div class="card-header">
    F. PERNYATAAN NASABAH
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
</div>
 <div class="ttd1">
   Nasabah
    </div>

    <div class="ttd2">
     BPRS ALMASOEM 
    </div>
     <div class="ttd3">
    ................
    </div>

    <div class="ttd4">
      <b>.............</b> 
    </div>
</body>
</html>