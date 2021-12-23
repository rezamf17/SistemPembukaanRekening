const bentuk1 = document.getElementById("badan_bentuk1");
const bentuk2 = document.getElementById("badan_bentuk2");
const bentuk3 = document.getElementById("badan_bentuk3");
const bentuk4 = document.getElementById("badan_bentuk4");
const bentuk5 = document.getElementById("badan_bentuk5");
const bentuk6 = document.getElementById("badan_bentuk6");

bentuk6.addEventListener("input", (e) => {
	 		const value = e.currentTarget.value;
	 		bentuk1.disabled = true;
	 		bentuk2.disabled = true;
	 		bentuk3.disabled = true;
	 		bentuk4.disabled = true;

	 		if (value == "") {
	 			bentuk1.disabled = false;
		 		bentuk2.disabled = false;
		 		bentuk3.disabled = false;
		 		bentuk4.disabled = false;
	 		}
	 	})
bentuk1.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		bentuk6.disabled = true;
	 	})
bentuk2.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		bentuk6.disabled = true;
	 	})
bentuk3.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		bentuk6.disabled = true;
	 	})
bentuk4.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		bentuk6.disabled = true;
	 	})
bentuk5.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		bentuk6.disabled = false;
	 	})

const sumber1 = document.getElementById("badan_sumber_dana");
const sumber2 = document.getElementById("badan_hasil_investasi");
const sumber3 = document.getElementById("sumber_dana_lainnya");
const sumber4 = document.getElementById("sumber_dana_lainnya_text");

sumber4.addEventListener("input", (e) => {
	 		const value = e.currentTarget.value;
	 		sumber1.disabled = true;
	 		sumber2.disabled = true;

	 		if (value == "") {
	 			sumber1.disabled = false;
	 			sumber2.disabled = false;
	 		}
	 	})
sumber1.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		sumber4.disabled = true;
	 	})
sumber2.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		sumber4.disabled = true;
	 	})
sumber3.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		sumber4.disabled = false;
	 	})
