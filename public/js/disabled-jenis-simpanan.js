const wadiah = document.getElementById("simpanan_wadiah");
const mudharabah = document.getElementById("simpanan_mudharabah");
const w1 = document.getElementById('wadiah1');
const w2 = document.getElementById('wadiah2');
const w3 = document.getElementById('wadiah3');
const w4 = document.getElementById('wadiah4');
const m1 = document.getElementById('mudharabah1');
const m2 = document.getElementById('mudharabah2');
wadiah.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		m1.disabled = true;
	 		m2.disabled = true;
	 		w1.disabled = false;
	 		w2.disabled = false;
	 		w3.disabled = false;
	 		w4.disabled = false;
	 	})
mudharabah.addEventListener("change", (e) => {
	 		const value = e.currentTarget.value;
	 		w1.disabled = true;
	 		w2.disabled = true;
	 		w3.disabled = true;
	 		w4.disabled = true;
	 		m1.disabled = false;
	 		m2.disabled = false;
	 	})