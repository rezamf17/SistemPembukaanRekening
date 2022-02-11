const pekerjaan1 = document.getElementById("nasabah_pekerjaan1");
const pekerjaan2 = document.getElementById("nasabah_pekerjaan2");
const pekerjaan3 = document.getElementById("nasabah_pekerjaan3");
const pekerjaan4 = document.getElementById("nasabah_pekerjaan4");
const pekerjaan5 = document.getElementById("nasabah_pekerjaan5");
const pekerjaan6 = document.getElementById("nasabah_pekerjaan6");
const pekerjaan7 = document.getElementById("nasabah_pekerjaan7");
const pekerjaan8 = document.getElementById("nasabah_pekerjaan8");
const pekerjaan9 = document.getElementById("nasabah_pekerjaan9");
const pekerjaan10 = document.getElementById("nasabah_pekerjaan10");

pekerjaan10.addEventListener("input", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan1.disabled = true;
	 		pekerjaan2.disabled = true;
	 		pekerjaan3.disabled = true;
	 		pekerjaan4.disabled = true;
	 		pekerjaan5.disabled = true;
	 		pekerjaan6.disabled = true;
	 		pekerjaan7.disabled = true;
	 		pekerjaan8.disabled = true;

	 		if (value == "") {
	 			pekerjaan1.disabled = false;
		 		pekerjaan2.disabled = false;
		 		pekerjaan3.disabled = false;
		 		pekerjaan4.disabled = false;
		 		pekerjaan5.disabled = false;
		 		pekerjaan6.disabled = false;
		 		pekerjaan7.disabled = false;
		 		pekerjaan8.disabled = false;
	 		}
	 	})
pekerjaan1.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan10.disabled = true;
	 	})
pekerjaan2.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan10.disabled = true;
	 	})
pekerjaan3.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan10.disabled = true;
	 	})
pekerjaan4.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan10.disabled = true;
	 	})
pekerjaan5.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan10.disabled = true;
	 	})
pekerjaan6.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan10.disabled = true;
	 	})
pekerjaan7.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan10.disabled = true;
	 	})
pekerjaan7.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan10.disabled = true;
	 	})
pekerjaan8.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan10.disabled = true;
	 	})
pekerjaan9.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		pekerjaan10.disabled = false;
	 	})
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
const penghasilan1 = document.getElementById("nasabah_penghasilan1");
const penghasilan2 = document.getElementById("nasabah_penghasilan2");
const penghasilan3 = document.getElementById("nasabah_penghasilan3");
const penghasilan4 = document.getElementById("nasabah_penghasilan4");
const penghasilan5 = document.getElementById("nasabah_penghasilan5");
const penghasilan6 = document.getElementById("nasabah_penghasilan6");

penghasilan6.addEventListener("input", (e) => {
	 		const value = e.currentTarget.value;
	 		penghasilan1.disabled = true;
	 		penghasilan2.disabled = true;
	 		penghasilan3.disabled = true;
	 		penghasilan4.disabled = true;
	 		if (value == "") {
	 			penghasilan1.disabled = false;
		 		penghasilan2.disabled = false;
		 		penghasilan3.disabled = false;
		 		penghasilan4.disabled = false;
	 		}
	 	})
penghasilan1.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		penghasilan6.disabled = true;
	 	})
penghasilan2.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		penghasilan6.disabled = true;
	 	})
penghasilan3.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		penghasilan6.disabled = true;
	 	})
penghasilan4.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		penghasilan6.disabled = true;
	 	})
penghasilan5.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		penghasilan6.disabled = false;
	 	})

const bertindak1 = document.getElementById("bertindak1");
const bertindak2 = document.getElementById("bertindak2");
const bertindak3 = document.getElementById("bertindak3");

bertindak1.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		bertindak3.disabled = true;
	 	})
bertindak2.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		bertindak3.disabled = false;
	 	})

const zakat = document.getElementById("zakat");
const zakat1 = document.getElementById("zakat1");
const zakat2 = document.getElementById("zakat2");

zakat.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		zakat1.disabled = true;
	 	})
zakat2.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		zakat1.disabled = true;
	 	})
zakat3.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		zakat1.disabled = false;
	 	})