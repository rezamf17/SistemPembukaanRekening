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
