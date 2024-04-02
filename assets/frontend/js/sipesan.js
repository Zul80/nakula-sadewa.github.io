$(document).ready(function () {
	var root = window.location.origin + "/";

	setTimeout(function () {
		$(".hide-it").addClass("fadeOutUpBig");
	}, 5000);
});

function showTotal() {
	var panjang = $("#panjang").val();
	var lebar = $("#lebar").val();
	var bahan = $("#bahan").val();
	var jumlah = $("#jumlah").val();
	var luas = parseFloat(panjang) * parseFloat(lebar);
	var total = 0;
	var html = "";
	if (bahan === "Biasa") {
		total = luas * jumlah * 20000;
		html =
			"" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
		$("#total").html(html);
	} else if (bahan === "Menengah") {
		total = luas * jumlah * 30000;
		html =
			"" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
		$("#total").html(html);
	} else if (bahan === "Bagus") {
		total = luas * jumlah * 35000;
		html =
			"" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
		$("#total").html(html);
	}
}

function showTotalStiker() {
	var panjang = $("#panjang").val();
	var lebar = $("#lebar").val();
	var bahan = $("#bahan").val();
	var jumlah = $("#jumlah").val();
	var luas = parseFloat(panjang) * parseFloat(lebar);
	var total = 0;
	var html = "";
	if (bahan === "biasa") {
		total = luas * jumlah * 75000;
		html =
			"" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
		$("#total").html(html);
	} else if (bahan === "bagus") {
		total = luas * jumlah * 95000;
		html =
			"" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
		$("#total").html(html);
	}
}

function showTotalKartu() {
	var bahan = $("#bahan").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";
	if (bahan === "biasa") {
		total = jumlah * 35000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (bahan === "bagus") {
		total = jumlah * 45000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
}

function showTotalBrosur() {
	var bahan = $("#bahan").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";
	if (bahan === "hvs") {
		total = jumlah * 500000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (bahan === "konstruk") {
		total = jumlah * 750000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
}

function showTotalA4brosur() {
	var satuanlaminasi = $("satuanLaminasi").val();
	var satuanlipat = $("satuanLipat").val();
	var bahan = $("#bahan").val();
	var sisi = $("#sisi").val();
	var laminasi = $("#laminasi").val();
	var lipat = $("#lipat").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";

	if (bahan === "HVS 100") {
		if (sisi === "1 Muka" && lipat === "Tanpa Lipat") {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 380000;
		} else if (sisi === "1 Muka" && lipat === "Lipat") {
			satuanLipat.value = "Rp. 50.000";
			total = jumlah * 430000;
		}
		if (sisi === "2 Muka" && lipat === "Tanpa Lipat") {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 760000;
		} else if (sisi === "2 Muka" && lipat === "Lipat") {
			satuanLipat.value = "Rp. 50.000";
			total = jumlah * 810000;
		}
	}

	if (bahan === "Art Paper 120") {
		if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 400000;
		} else if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			total = jumlah * 450000;
		}
		if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 800000;
		} else if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			total = jumlah * 850000;
		}
	}
	if (bahan === "Art Paper 150") {
		if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 420000;
		} else if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			total = jumlah * 470000;
		}
		if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 840000;
		} else if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			total = jumlah * 890000;
		}
	}

	if (bahan === "Art Carton 210") {
		if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 550000;
		} else if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 600000;
		} else if (
			sisi === "1 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 125.000";
			total = jumlah * 675000;
		} else if (
			sisi === "1 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			satuanLaminasi.value = "Rp. 125.000";
			total = jumlah * 725000;
		}
		if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 1100000;
		} else if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 1150000;
		} else if (
			sisi === "2 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 250.000";
			total = jumlah * 1350000;
		} else if (
			sisi === "2 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			satuanLaminasi.value = "Rp. 250.000";
			total = jumlah * 1400000;
		}
	}

	html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
	$("#total").html(html);
}
function showTotalA5brosur() {
	var satuanlaminasi = $("satuanLaminasi").val();
	var satuanlipat = $("satuanLipat").val();
	var bahan = $("#bahan").val();
	var sisi = $("#sisi").val();
	var laminasi = $("#laminasi").val();
	var lipat = $("#lipat").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";

	if (bahan === "HVS 100") {
		if (sisi === "1 Muka" && lipat === "Tanpa Lipat") {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 190000;
		} else if (sisi === "1 Muka" && lipat === "Lipat") {
			satuanLipat.value = "Rp. 25.000";
			total = jumlah * 215000;
		}
		if (sisi === "2 Muka" && lipat === "Tanpa Lipat") {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 380000;
		} else if (sisi === "2 Muka" && lipat === "Lipat") {
			satuanLipat.value = "Rp. 25.000";
			total = jumlah * 405000;
		}
	}

	if (bahan === "Art Paper 120") {
		if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 200000;
		} else if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			total = jumlah * 225000;
		}
		if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 400000;
		} else if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			total = jumlah * 425000;
		}
	}
	if (bahan === "Art Paper 150") {
		if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 210000;
		} else if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			total = jumlah * 235000;
		}
		if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 420000;
		} else if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			total = jumlah * 445000;
		}
	}

	if (bahan === "Art Carton 210") {
		if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 280000;
		} else if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 330000;
		} else if (
			sisi === "1 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 125.000";
			total = jumlah * 405000;
		} else if (
			sisi === "1 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			satuanLaminasi.value = "Rp. 125.000";
			total = jumlah * 455000;
		}
		if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 560000;
		} else if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 610000;
		} else if (
			sisi === "2 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 250.000";
			total = jumlah * 810000;
		} else if (
			sisi === "2 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 50.000";
			satuanLaminasi.value = "Rp. 250.000";
			total = jumlah * 860000;
		}
	}

	html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
	$("#total").html(html);
}
function showTotalA6brosur() {
	var satuanlaminasi = $("satuanLaminasi").val();
	var satuanlipat = $("satuanLipat").val();
	var bahan = $("#bahan").val();
	var sisi = $("#sisi").val();
	var laminasi = $("#laminasi").val();
	var lipat = $("#lipat").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";

	if (bahan === "HVS 100") {
		if (sisi === "1 Muka" && lipat === "Tanpa Lipat") {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 115000;
		} else if (sisi === "1 Muka" && lipat === "Lipat") {
			satuanLipat.value = "Rp. 20.000";
			total = jumlah * 135000;
		}
		if (sisi === "2 Muka" && lipat === "Tanpa Lipat") {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 230000;
		} else if (sisi === "2 Muka" && lipat === "Lipat") {
			satuanLipat.value = "Rp. 20.000";
			total = jumlah * 250000;
		}
	}

	if (bahan === "Art Paper 120") {
		if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 130000;
		} else if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 20.000";
			total = jumlah * 150000;
		}
		if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 260000;
		} else if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 20.000";
			total = jumlah * 280000;
		}
	}
	if (bahan === "Art Paper 150") {
		if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 140000;
		} else if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 20.000";
			total = jumlah * 160000;
		}
		if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			total = jumlah * 280000;
		} else if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 20.000";
			total = jumlah * 300000;
		}
	}

	if (bahan === "Art Carton 210") {
		if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 165000;
		} else if (
			sisi === "1 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 30.000";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 195000;
		} else if (
			sisi === "1 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 125.000";
			total = jumlah * 290000;
		} else if (
			sisi === "1 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 30.000";
			satuanLaminasi.value = "Rp. 125.000";
			total = jumlah * 320000;
		}
		if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 330000;
		} else if (
			sisi === "2 Muka" &&
			laminasi === "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 30.000";
			satuanLaminasi.value = "Rp. 0";
			total = jumlah * 360000;
		} else if (
			sisi === "2 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Tanpa Lipat"
		) {
			satuanLipat.value = "Rp. 0";
			satuanLaminasi.value = "Rp. 250.000";
			total = jumlah * 580000;
		} else if (
			sisi === "2 Muka" &&
			laminasi !== "Tanpa Laminasi" &&
			lipat === "Lipat"
		) {
			satuanLipat.value = "Rp. 30.000";
			satuanLaminasi.value = "Rp. 250.000";
			total = jumlah * 610000;
		}
	}

	html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
	$("#total").html(html);
}

function showTotalKalender() {
	var bahan = $("#bahan").val();
	var isi = $("#isi").val();
	var laminasi = $("#laminasi").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";

	if (bahan === "AC230") {
		if (isi === "7 Lembar" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 39000;
		} else if (isi === "13 Lembar" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 49500;
		}
		if (isi === "7 Lembar" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 49000;
		} else if (isi === "13 Lembar" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 69500;
		}
	}

	if (bahan === "AC260") {
		if (isi === "7 Lembar" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 40200;
		} else if (isi === "13 Lembar" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 51600;
		}
		if (isi === "7 Lembar" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 50200;
		} else if (isi === "13 Lembar" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 71600;
		}
	}
	if (bahan === "BCT") {
		if (isi === "7 Lembar") {
			total = jumlah * 42200;
		} else total = jumlah * 55100;
	}
	if (bahan === "B/W") {
		if (isi === "7 Lembar") {
			total = jumlah * 42200;
		} else total = jumlah * 55100;
	}
	if (bahan === "LINEN") {
		if (isi === "7 Lembar") {
			total = jumlah * 42200;
		} else total = jumlah * 55100;
	}

	html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
	$("#total").html(html);
}
function showTotalNota() {
	var warna = $("#warna").val();
	var ukuran = $("#ukuran").val();
	var rangkap = $("#rangkap").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";

	if (warna === "Full Warna" && ukuran === "A5" && rangkap === "rangkap 2") {
		total = jumlah * 40000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Full Warna" && ukuran === "A5" && rangkap === "rangkap 3") {
		total = jumlah * 55000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Full Warna" && ukuran === "A5" && rangkap === "rangkap 4") {
		total = jumlah * 75000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (warna === "Full Warna" && ukuran === "A6" && rangkap === "rangkap 2") {
		total = jumlah * 25000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Full Warna" && ukuran === "A6" && rangkap === "rangkap 3") {
		total = jumlah * 32500;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Full Warna" && ukuran === "A6" && rangkap === "rangkap 4") {
		total = jumlah * 40000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (
		warna === "Full Warna" &&
		ukuran === "1/3 F4" &&
		rangkap === "rangkap 2"
	) {
		total = jumlah * 35000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (
		warna === "Full Warna" &&
		ukuran === "1/3 F4" &&
		rangkap === "rangkap 3"
	) {
		total = jumlah * 45000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (
		warna === "Full Warna" &&
		ukuran === "1/3 F4" &&
		rangkap === "rangkap 4"
	) {
		total = jumlah * 53500;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (warna === "Full Warna" && ukuran === "F4" && rangkap === "rangkap 2") {
		total = jumlah * 80000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Full Warna" && ukuran === "F4" && rangkap === "rangkap 3") {
		total = jumlah * 110000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Full Warna" && ukuran === "F4" && rangkap === "rangkap 4") {
		total = jumlah * 150000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (warna === "Hitam Putih" && ukuran === "A5" && rangkap === "rangkap 2") {
		total = jumlah * 30000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (warna === "Hitam Putih" && ukuran === "A5" && rangkap === "rangkap 3") {
		total = jumlah * 40000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Hitam Putih" && ukuran === "A5" && rangkap === "rangkap 4") {
		total = jumlah * 55000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (warna === "Hitam Putih" && ukuran === "A6" && rangkap === "rangkap 2") {
		total = jumlah * 18000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Hitam Putih" && ukuran === "A6" && rangkap === "rangkap 3") {
		total = jumlah * 25000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Hitam Putih" && ukuran === "A6" && rangkap === "rangkap 4") {
		total = jumlah * 32500;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (
		warna === "Hitam Putih" &&
		ukuran === "1/3 F4" &&
		rangkap === "rangkap 2"
	) {
		total = jumlah * 24000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (
		warna === "Hitam Putih" &&
		ukuran === "1/3 F4" &&
		rangkap === "rangkap 3"
	) {
		total = jumlah * 35000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (
		warna === "Hitam Putih" &&
		ukuran === "1/3 F4" &&
		rangkap === "rangkap 4"
	) {
		total = jumlah * 45000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (warna === "Hitam Putih" && ukuran === "F4" && rangkap === "rangkap 2") {
		total = jumlah * 60000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Hitam Putih" && ukuran === "F4" && rangkap === "rangkap 3") {
		total = jumlah * 80000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (warna === "Hitam Putih" && ukuran === "F4" && rangkap === "rangkap 4") {
		total = jumlah * 110000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
}

function showTotalDtf() {
	var bahan = $("#bahan").val();
	var panjang = $("#panjang").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";

	if (bahan === "Lebar 60 cm") {
		if (panjang < 80) {
			total = jumlah * 50000;
		} else if (panjang >= 80 && panjang < 100) {
			total = jumlah * 65000 + (panjang - 80) * 600;
		} else if (panjang >= 100 && panjang < 150) {
			total = jumlah * 65000 + (panjang - 80) * 800;
		} else {
			total = jumlah * 65000 + 20 * 600 + (panjang - 100) * 500;
		}
		html =
			"" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
		$("#total").html(html);
	}
	if (bahan === "Lebar 30 cm") {
		if (panjang < 80) {
			total = jumlah * 30000;
		} else if (panjang >= 80 && panjang < 100) {
			total = jumlah * 60000 + (panjang - 80) * 600;
		} else if (panjang >= 100 && panjang < 150) {
			total = jumlah * 60000 + (panjang - 80) * 800;
		} else {
			total = jumlah * 60000 + 20 * 600 + (panjang - 100) * 500;
		}
		html =
			"" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
		$("#total").html(html);
	}
}

function showTotalTdtf() {
	var bahan = $("#bahan").val();
	var size = $("#size").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";

	if (bahan != "" && size != "XXL") {
		total = jumlah * 90000;
	} else total = jumlah * 100000;
	html = "" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
	$("#total").html(html);
}
function showTotalLbstiker() {
	var bahan = $("#bahan").val();
	var cutting = $("#cutting").val();
	var laminasi = $("#laminasi").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";

	if (
		bahan === "Stiker Vinyl Glossy" ||
		bahan === "Stiker Vinyl Doff" ||
		bahan === "Stiker Vinyl Transparant"
	) {
		if (cutting === "Kiss Cut" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 14000;
		} else if (cutting === "Die Cut" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 20500;
		} else total = jumlah * 17500;
	}

	html = "" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
	$("#total").html(html);

	if (bahan === "Stiker Chromo" || bahan === "Stiker HVS") {
		if (cutting === "Kiss Cut" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 11000;
		} else if (cutting === "Die Cut" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 17500;
		} else total = jumlah * 14000;
	}

	html = "" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
	$("#total").html(html);

	if (bahan === "Stiker Gold Glossy" || bahan === "Stiker Silver Glossy")
		if (cutting === "Kiss Cut" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 17000;
		} else if (cutting === "Die Cut" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 23500;
		} else total = jumlah * 20500;

	html = "" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
	$("#total").html(html);

	if (bahan === "Stiker Craft") {
		if (cutting === "Kiss Cut" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 13000;
		} else if (cutting === "Die Cut" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 19500;
		} else total = jumlah * 16500;
	}
	html = "" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
	$("#total").html(html);

	if (bahan === "Stiker Hologram") {
		if (cutting === "Kiss Cut" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 18000;
		} else if (cutting === "Die Cut" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 24500;
		} else total = jumlah * 21500;
	}
	html = "" + "<h3> Rp. " + formatRupiah(parseInt(total).toString()) + "</h3>";
	$("#total").html(html);
}

// ------------------------------------------------------------------------------------------
// Fungsi-fungsi
// ------------------------------------------------------------------------------------------

function formatRupiah(angka, prefix) {
	var number_string = angka.replace(/[^,\d]/g, "").toString(),
		split = number_string.split(","),
		sisa = split[0].length % 3,
		rupiah = split[0].substr(0, sisa),
		ribuan = split[0].substr(sisa).match(/\d{3}/gi);

	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if (ribuan) {
		separator = sisa ? "." : "";
		rupiah += separator + ribuan.join(".");
	}

	rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
	return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}

// function updateField2() {
// 	var laminasi = $("laminasi").val();
// 	var lipat = $("lipat").val();
// 	var satuanlaminasi = $("satuanlaminasi").val();
// 	var satuanlipat = $("satuanlipat").val();

// 	if (laminasi !== "Tanpa Laminasi") {
// 		satuanlaminasi.value = "Rp. 125.000";
// 	} else satuanlaminasi.value = "Rp. 0";

// 	if (lipat !== "Tanpa Lipat") {
// 		satuanlipat.value = "Rp. 50.000";
// 	}
// }

// Panggil fungsi updateField2() saat halaman dimuat untuk menetapkan nilai awal
// updateField2();
