@extends('layouts.FormTemplate')
@section('content')
<div class="card">
	<div class="card-header text-center text-white bg-warning">
		<img src="{{asset('style/img/bprslogo.png')}}" class="img-fluid" alt="Responsive image">
		<h3 class="text-center">AKAD WADI'AH YAD DHAMANAH</h3>
	</div>
	<div class="card-body">
		Bersama ini, saya selaku NASABAH permohonan pembukaan rekening tabungan dengan Akad Wadi'ah Yad Dhamanah Kepada BPRS ALMASOEM Cabang
		@if ($cabang == 1)
			Arcamanik
		@elseif($cabang == 2)
			Cianjur
		@elseif($cabang == 3)
			Garut
		@elseif($cabang == 4)
			Jatiwangi
		@elseif($cabang == 5)
			Kopo
		@elseif($cabang == 6)
			Majalaya
		@elseif($cabang == 7)
			Rancaekek
		@endif
		(Selanjutnya disebut BANK) dengan rincian sebagai berikut:
	</div>
	<div class="card-header text-center text-white bg-warning"><h4>DATA NASABAH</h4></div>
	<div class="card-body">
		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" name="nama" class="form-control" value="{{$nama}}">	
		</div>
		<div class="form-group">
			<label>Jenis Tabungan</label> <br>
			<input type="text" name="jenis_tabungan" class="form-control" value="{{$jenis_tabungan}}">	
		</div>
		<div class="form-group">
			<label>Tempat Lahir</label>
			<input type="text" name="jenis_tabungan" class="form-control" value="{{$tempat_lahir}}">
			
		</div>
		<div >
			<label>Tanggal Lahir</label> <br>
			<input type="text" name="jenis_tabungan" class="form-control" value="{{$tanggal_lahir}}">
		</div>
		<div class="form-group">
			<label>No. KTP/Password</label>
			<input type="number" name="" class="form-control" value="{{$no_ktp}}">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="" class="form-control">{{$alamat}}</textarea>
		</div>
		<div class="form-group">
			<label>Pemotongan Zakat atau Bonus</label> <br>
			<input type="text" name="zakat" class="form-control" value="{{$zakat}}">
		</div>
	</div>
	<div class="card-header text-center text-white bg-warning">
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
	<div class="card-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
@include('sweetalert::alert')
@endsection