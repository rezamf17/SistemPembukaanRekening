@extends('layouts.FormTemplate')
@section('content')
<div class="card">
	<div class="card-header text-center text-white bg-info">
		<img src="{{asset('style/img/bprs.png')}}" class="img-fluid" alt="Responsive image">
		<h3 class="text-center">AKAD MUDHARABAH MUTLAQAH</h3>
	</div>
	<div class="card-body">
		Bersama ini, saya selaku NASABAH mengajukan permohonan pembukaan rekening tabunga dengan Akad Mudharabah Mutlaqah Kepada BPRS ALMASOEM Cabang ...
 		(Selanjutnya disebut BANK) dengan rincian sebagai berikut:
	</div>
	<div class="card-header text-center text-white bg-info"><h4>DATA NASABAH</h4></div>
	<div class="card-body">
		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" name="" class="form-control">	
		</div>
		<div class="form-group">
			<label>Jenis Tabungan</label> <br>
			<div class="form-check">
				<input type="radio" name="zakat" class="form-check-input">
				Tabungan Mudharabah <input type="text" name="" class="tanggal-lahir">
			</div>
			<div class="form-check">
				<input type="radio" name="zakat" class="form-check-input">
				Deposito Mudharabah
			</div>
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
			<label>No. KTP/Password</label>
			<input type="number" name="" class="form-control">
			Masa Berlaku KTP/Password
			<input type="date" name="" class="form-control">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="" class="form-control"></textarea>
			RT
			<input type="number" name="" class="tanggal-lahir">
			RW
			<input type="number" name="" class="tanggal-lahir"> <br>
			Desa/Kelurahan
			<input type="text" name="" class="form-control">
			Kecamatan
			<input type="text" name="" class="form-control">
			Kota/Kabupaten
			<input type="text" name="" class="form-control">
			Provinsi
			<input type="text" name="" class="form-control">
		</div>
		<div class="form-group">
			<label>Pemotongan Zakat atau Bonus</label> <br>
			<input type="radio" name="zakat" class="form-check-input">
			Ya = 2.5% atau 
			<input type="text" name="" class="tanggal-lahir">
			<input type="radio" name="zakat" class="form-check-input">
			Tidak
		</div>
	</div>
	<div class="card-header text-center text-white bg-info">
		<h4>AKAD MUDHARABAH MUTLAQAH</h4>
	</div>
	<div class="card-body">
		<p>Dengan menandatangani Aplikasi ini, saya menyetujui syarat-syarat dan ketentuan-ketentuan pada akad Tabungan Mudharabah Mutlaqah (Selanjutnya disebut Akad) sebagai berikut :</p>
		
		<p>1. Nasabah (Shahibul Maal) dengan ini bermaksud untuk menempatkan dana kepada BANK (Mudharib) dan BANK bersedia memanfaatkan dan mengelola dana NASABAH yang diadministrasikan dalam bentuk Rekening Tabungan dan/atau Deposito atas nama NASABAH pada BANK dan mamatuhi semua peraturan dan ketentuan yang ditetapkan oleh BANK.</p>

		<p>2. NASABAH memberikan persetujuan/ijin kepada BANK untuk mengelola dana yang diinvestasikan pada BANK dan digunakan serta diambil manfaatnya oleh BANK sesuai dengan prinsip Mudharabah Mutlaqah tanpa batasan apapun dan digunakan sesuai prinsip syariah.</p>

		<p>3. NASABAH dan BANK sepakat bahwa NASABAH hanya dapat melakukan penarikan dana sesuai dengan ketentuan yang berlaku pada BANK dan sepakat untuk berbagi hasil atas dana NASABAH yang ditempatkan tersebut dengan Nisbah bagi hasil sebesar
		<input type="text" name="" class="tanggal-lahir"> 
		% (terbilang 
		<input type="text" name="" class="tanggal-lahir"> 
		 persen) untuk Nasabah sebesar 
		 <input type="text" name="" class="tanggal-lahir"> 
		% (terbilang
		<input type="text" name="" class="tanggal-lahir">  
		 persen) untuk BANK yang akan dihitung, dibukukan, dan dibagikan secara bulanan berdasarkan prinsip distribusi bagi hasil.</p>

		 <p>4. Ketentuan Nisbah bagi hasil tersebut di atas berlaku sampai dengan adanya perubahan nisbah bagi hasil yang disepakati antara BANK dan NASABAH</p>

		 <p>5. NASABAH setuju untuk memberikan data pribadinya untuk tujuan komersil lainnya, serta data disimpan di Tabungan dan/atau Deposito Mudharabah kepada pihak ketiga yang ditunjuk oleh BANK maupun perusahaan yang bekerjasama dengan BANK.</p>

		 <p>6. NASABAH dengan ini tunduk terikat pada Syariat dan Ketentuan UMUM Rekening BPRS ALMASOEM dan peraturan lain yang berlaku pada BANK, Bank Indonesia, OJK dan Dewan Fatwa Syariah Nasional Majelis Ulama Indonesia (DSN-MUI) yang merupakan satu kesatuan dan bagian yang tidak terpisahkan dan Akad.</p>

		 <p>7. Bank sebagai Mudharib menutup biaya operasional yang bersumber dari / menggunakan nisbah yang menjadi haknya Bank.</p>

		 <p>Akad ini berlaku sejak tanggal dibukanya rekening Tabungan dan/atau Deposito Mudharabah sampai dengan tanggal berakhirnya Akad atau yang disebabkan oleh penutupan rekening tersebut atas sebab apapun dan/atau sebab lain yang diatur dalam ketentuan produk yang telah disepakati BANK dan NASABAH, termasuk diantaranya adalah sebab yang diatur dalam hukum dan sebab kabar (force majeure). Akad ini merupakan satu kesatuan dan bagian yang tidak terpisah dengan Costumer Information File (CIF)</p>
	</div>
	<div class="card-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
@endsection