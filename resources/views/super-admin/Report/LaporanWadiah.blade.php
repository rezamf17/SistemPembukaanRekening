<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Wadiah</title>
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
			background-color: #ffbb00;
			color: white;
    		margin-bottom: 7px;
		}
		th{
			text-align: left;
            padding-right: 15px;
            font-weight: lighter;
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
			background-color: #ffbb00;
			color: white;
			/*padding: 5px;*/
			font-size: 15px;
			text-align: center;
		}
		.card-body{
			font-size: 12px;
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
			text-align: left;
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
        .left{
        	text-align: left;
        }
	</style>
</head>
<body>
<header>
	<div class="gambar">
		<img src="{{public_path("/style/img/bprslogo.png")}}" alt="">
		{{-- <img src="../style/img/bprslogo1.png" alt="" style=" width: 150px; margin-bottom: -10px;">	 --}}
	</div>
	<div class="judul">
		<h3>AKAD WAD'IAH YAD DHAMANAH</h3>
	</div>
</header>
{{-- <div class="left">
	<div class="card-header">
	<div class="gambar">
		<img src="../style/img/bprslogo1.png" alt="">
	</div>
		<div class="judul">
		<h3>AKAD WAD'IAH YAD DHAMANAH</h3>
	</div>
	</div>
</div> --}}
<div class="card">
	<div class="card-body">
		No. CIF *)     : ......................... <br>
		Nomor Rekening : .........................
	</div>
</div>
<div class="card">
	<div class="card-header"></div>
</div>
<div class="card-body">
Bersama ini, saya selaku NASABAH permohonan pembukaan rekening tabungan dengan Akad Wadi'ah Yad Dhamanah Kepada BPRS ALMASOEM Cabang {{$formulir->cabang->nama_cabang}} (Selanjutnya disebut BANK) dengan rincian sebagai berikut:
</div>
<div class="card">
	<div class="card-header"> <h4>DATA NASABAH</h4></div>
	<div class="card-body">
		
		<table>
			<tr>
				<th>Nama</th>
				<td>{{$formulir->identitas_nasabah->nama}}</td>
			</tr>
			<tr>
				<th>Jenis Tabungan</th>
				<td>{{$formulir->jenis_simpanan->jenis_tabungan}}</td>
			</tr>
			<tr>
				<th>Tempat, Tanggal Lahir</th>
				<td>{{$formulir->identitas_nasabah->tempat_lahir}}, {{$formulir->identitas_nasabah->tanggal_lahir}}</td>
			</tr>
			<tr>
				<th>KTP/Paspor</th>
				<td>{{$formulir->identitas_nasabah->no_ktp}}</td>
			</tr>
			<tr>
				<th>Alamat Rumah</th>
				<td>{{$formulir->identitas_nasabah->alamat}}</td>
			</tr>
			<tr>
				<th>Pemotongan Zakat atas Bonus</th>
				<td>{{$formulir->identitas_nasabah->zakat}}</td>
			</tr>
		</table>
	</div>
</div>
<div class="card">
	<div class="card-header">
		<h4>AKAD WADI'AH YAD DHAMANAH</h4>
	</div>
	<div class="card-body">
		<p>Dengan menandatangani Aplikasi ini, saya menyetujui syarat-syarat dan ketentuan-ketentuan pada akad Tabungan Wadiah (Selanjutnya disebut Akad) sebagai berikut :</p>
		<p>1. Nasabah dengan ini bermaksud untuk menitipkan dana pada BANK dan Bank bersedia menerima penitipan dan mengelola dana dari NASABAH yang diadministrasikan dalam bentuk rekening Tabungan Wadiah atas nama NASABAH pada BANK dan mematuhi semua peraturan dan ketentuan yang ditetapkan oleh BANK</p>
		
		<p>2. Nasabah memberikan persetujuan/izin kepada BANK untuk mengelola dana yang dititipkan pada BANK. Dan digunakan serta diambil manfaatnya oleh BANK sesuai dengan prinsip Wadi'ah Yad Dhamanah.</p>
		
		<p>3. NASABAH Setuju bahwa keuntungan dan manfaat yang diterima dan penitipan dana tersebut menjadi hak BANK. Dan atas pertimbangan BANK, BANK dapat memberikan BONUS atas simpanan wadiah tersebut kepada Nasabah.</p>
		
		<p>4. Sehubungan dengan simpanan dengan Akad Wadiah tersebut, BANK sewaktu-waktu dapat memberikan BONUS dengan tidak diperjanjikan sebelumnya.</p>
		
		<p>5. Dana yang terdapat pada rekening NASABAH dapat diambil/ditarik oleh NASABAH setiap saat baik sebagian maupun seluruhnya dan BANK menjamin pengembalian dana NASABAH tersebut sesuai dengan ketentuan yang berlaku.</p>
		<p>6. NASABAH setuju untuk memberikan data pribadinya untuk tujuan komersil lainnya, serta data simpanan di Tabungan Wadiah kepada perusahaan Pihak Ketiga yang diitunjukan oleh BANK mauppun perusahaan yang bekerjasama dengan BANK.</p>
		
		<p>7. NASABAH dengan ini tunduk dan terikat pada Syarat dan Ketentuan Khusus Tabungan Wadiah dan peraturan lain yang berlaku pada BANK, Bankk Indonesia,OJK dan fatwa Dewan Syariah Nasional Majelis Ulama Indonesia (DSN-MUI) yang merupakan satu kesatuan dan bagian yang tidak terpisahkan dari akad ini.</p>
		
		<p>8. Atas simpanan Wadiah tersebut BANK tidak mengenakan potongan biaya Administrasi pemeliharaan rekening, sedangkan potongan lainnya seperti pajak atas bonus yang diterima maka berlaku ketentuan Undang-undang yang berlaku.</p>
		
		<p>Akad ini berlaku sejak tanggal dibukanya rekening Tabungan dan/atau Deposito Mudharabah sampai dengan tanggal berakhirnya Akad atau yang disebabkan oleh penutupan rekening tersebut atas sebab apapun dan/atau sebab lainnya yang diatur dalam ketentuan produk yang telah disepakati BANK dan NASABAH, termasuk diantaranya adalah sebab yang diatur dalam hukum dan sebab kabar (force majeure). Akad ini merupakan satu kesatuan dan bagian yang tidak dapat terpisah dengan Costumer Information File (CIF)</p>
	</div>
</div>
<div class="ttd1">
   Nasabah
    </div>

    <div class="ttd2">
     BPRS ALMASOEM 
    </div>
     <div class="ttd3">
   {{$formulir->identitas_nasabah->nama}}
    </div>

    <div class="ttd4">
     ............. 
    </div>
</body>
</html>