	function nasabah() {
	  	document.getElementById("badan_nama").disabled = true;
		document.getElementById("badan_bentuk1").disabled = true;
		document.getElementById("badan_bentuk2").disabled = true;
		document.getElementById("badan_bentuk3").disabled = true;
		document.getElementById("badan_bentuk4").disabled = true;
		document.getElementById("badan_jenis").disabled = true;
		document.getElementById("badan_izin").disabled = true;
		document.getElementById("badan_alamat").disabled = true;
		document.getElementById("badan_npwp").disabled = true;
		document.getElementById("badan_sumber_dana").disabled = true;
		document.getElementById("badan_hasil_investasi").disabled = true;
		document.getElementById("badan_omzet").disabled = true;
		document.getElementById("badan_pengurus1").disabled = true;
		document.getElementById("badan_pengurus2").disabled = true;
		document.getElementById("badan_pengurus3").disabled = true;
		document.getElementById("badan_pengurus4").disabled = true;
		document.getElementById("nasabah_tempat_kerja").disabled = false;
		document.getElementById("nasabah_penghasilan").disabled = false;
		document.getElementById("nasabah_penghasilan1").disabled = false;
		document.getElementById("nasabah_penghasilan2").disabled = false;
		document.getElementById("nasabah_penghasilan3").disabled = false;
		document.getElementById("nasabah_penghasilan4").disabled = false;
		document.getElementById("nasabah_penghasilan5").disabled = false;
		document.getElementById("nasabah_tempat_kerja").disabled = false;
		document.getElementById("nasabah_jabatan").disabled = false;
		document.getElementById("nasabah_usaha").disabled = false;
		document.getElementById("nasabah_alamat").disabled = false;
		document.getElementById("nasabah_pekerjaan1").disabled = false;
		document.getElementById("nasabah_pekerjaan2").disabled = false;
		document.getElementById("nasabah_pekerjaan3").disabled = false;
		document.getElementById("nasabah_pekerjaan4").disabled = false;
		document.getElementById("nasabah_pekerjaan5").disabled = false;
		document.getElementById("nasabah_pekerjaan6").disabled = false;
		document.getElementById("nasabah_pekerjaan7").disabled = false;
		document.getElementById("nasabah_pekerjaan8").disabled = false;
		document.getElementById("nasabah_pekerjaan9").disabled = false;
		document.getElementById("nasabah_pendidikan").disabled = false;
		document.getElementById("nasabah_agama").disabled = false;
	  	document.getElementById("status").textContent = 'Jenis Rekening Perorangan Dipilih';
	}

	function badan() {
	  document.getElementById("badan_nama").disabled = false;
		document.getElementById("badan_bentuk1").disabled = false;
		document.getElementById("badan_bentuk2").disabled = false;
		document.getElementById("badan_bentuk3").disabled = false;
		document.getElementById("badan_bentuk4").disabled = false;
		document.getElementById("badan_jenis").disabled = false;
		document.getElementById("badan_izin").disabled = false;
		document.getElementById("badan_alamat").disabled = false;
		document.getElementById("badan_npwp").disabled = false;
		document.getElementById("badan_sumber_dana").disabled = false;
		document.getElementById("badan_hasil_investasi").disabled = false;
		document.getElementById("badan_omzet").disabled = false;
		document.getElementById("badan_pengurus1").disabled = false;
		document.getElementById("badan_pengurus2").disabled = false;
		document.getElementById("badan_pengurus3").disabled = false;
		document.getElementById("badan_pengurus4").disabled = false;
		document.getElementById("nasabah_tempat_kerja").disabled = true;
		document.getElementById("nasabah_penghasilan").disabled = true;
		document.getElementById("nasabah_penghasilan1").disabled = true;
		document.getElementById("nasabah_penghasilan2").disabled = true;
		document.getElementById("nasabah_penghasilan3").disabled = true;
		document.getElementById("nasabah_penghasilan4").disabled = true;
		document.getElementById("nasabah_penghasilan5").disabled = true;
		document.getElementById("nasabah_tempat_kerja").disabled = true;
		document.getElementById("nasabah_jabatan").disabled = true;
		document.getElementById("nasabah_usaha").disabled = true;
		document.getElementById("nasabah_alamat").disabled = true;
		document.getElementById("nasabah_pekerjaan1").disabled = true;
		document.getElementById("nasabah_pekerjaan2").disabled = true;
		document.getElementById("nasabah_pekerjaan3").disabled = true;
		document.getElementById("nasabah_pekerjaan4").disabled = true;
		document.getElementById("nasabah_pekerjaan5").disabled = true;
		document.getElementById("nasabah_pekerjaan6").disabled = true;
		document.getElementById("nasabah_pekerjaan7").disabled = true;
		document.getElementById("nasabah_pekerjaan8").disabled = true;
		document.getElementById("nasabah_pekerjaan9").disabled = true;
		document.getElementById("nasabah_pendidikan").disabled = true;
		document.getElementById("nasabah_agama").disabled = true;
	  	document.getElementById("status").textContent = 'Jenis Rekening Badan Dipilih';
	}

const buka_rekening1 = document.getElementById("buka1");
const buka_rekening2 = document.getElementById("buka2");
const buka_rekening3 = document.getElementById("buka3");
const buka_rekening4 = document.getElementById("buka4");
const buka_lainnya = document.getElementById("buka_rekening_lainnya");
buka_lainnya.addEventListener("input", (e) => {
	 		const value = e.currentTarget.value;
	 		buka_rekening1.disabled = true;
	 		buka_rekening2.disabled = true;
	 		buka_rekening3.disabled = true;

	 		if (value == "") {
	 			buka_rekening1.disabled = false;
		 		buka_rekening2.disabled = false;
		 		buka_rekening3.disabled = false;
	 		}
	 	})
buka_rekening1.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		buka_lainnya.disabled = true;
	 	})
buka_rekening2.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		buka_lainnya.disabled = true;
	 	})
buka_rekening3.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		buka_lainnya.disabled = true;
	 	})
buka_rekening4.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		buka_lainnya.disabled = false;
	 	})