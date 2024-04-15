$(document).ready(function () {
	var root = window.location.origin + "/sipesan/";

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

function showTotalKalender() {
	var bahan = $("#bahan").val();
	var isi = $("#isi").val();
	var laminasi = $("#laminasi").val();
	var jumlah = $("#jumlah").val();
	var total = 0;
	var html = "";

	if (
		bahan === "AC230" &&
		isi === "7 Lembar" &&
		laminasi === "Tanpa Laminasi"
	) {
		total = jumlah * 39000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (
		(bahan === "AC230" && isi === "7 Lembar" && laminasi === "Doff") ||
		(bahan === "AC230" && isi === "7 Lembar" && laminasi === "Glossy")
	) {
		total = jumlah * 49000;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (
		bahan === "AC360" &&
		isi === "7 Lembar" &&
		laminasi === "Tanpa Laminasi"
	) {
		total = jumlah * 40200;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (
		(bahan === "AC360" && isi === "7 Lembar" && laminasi === "Doff") ||
		(bahan === "AC360" && isi === "7 Lembar" && laminasi === "Glossy")
	) {
		total = jumlah * 50200;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (bahan === "BCT" && isi === "7 Lembar" && laminasi === "Tanpa Laminasi") {
		total = jumlah * 42200;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (
		(bahan === "BCT" && isi === "7 Lembar" && laminasi === "Doff") ||
		(bahan === "BCT" && isi === "7 Lembar" && laminasi === "Glossy")
	) {
		total = jumlah * 52200;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (bahan === "B/W" && isi === "7 Lembar" && laminasi === "Tanpa Laminasi") {
		total = jumlah * 42200;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (
		(bahan === "B/W" && isi === "7 Lembar" && laminasi === "Doff") ||
		(bahan === "B/W" && isi === "7 Lembar" && laminasi === "Glossy")
	) {
		total = jumlah * 52200;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (
		bahan === "LINEN" &&
		isi === "7 Lembar" &&
		laminasi === "Tanpa Laminasi"
	) {
		total = jumlah * 42200;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (
		(bahan === "LINEN" && isi === "7 Lembar" && laminasi === "Doff") ||
		(bahan === "LINEN" && isi === "7 Lembar" && laminasi === "Glossy")
	) {
		total = jumlah * 52200;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
	if (
		bahan === "AC230" &&
		isi === "13 Lembar" &&
		laminasi === "Tanpa Laminasi"
	) {
		total = jumlah * 49500;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (
		(bahan === "AC230" && isi === "13 Lembar" && laminasi === "Doff") ||
		(bahan === "AC230" && isi === "13 Lembar" && laminasi === "Glossy")
	) {
		total = jumlah * 59500;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (
		bahan === "AC360" &&
		isi === "13 Lembar" &&
		laminasi === "Tanpa Laminasi"
	) {
		total = jumlah * 51600;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (
		(bahan === "AC360" && isi === "13 Lembar" && laminasi === "Doff") ||
		(bahan === "AC360" && isi === "13 Lembar" && laminasi === "Glossy")
	) {
		total = jumlah * 61600;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (bahan === "BCT" && isi === "13 Lembar" && laminasi === "Tanpa Laminasi") {
		total = jumlah * 55100;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (
		(bahan === "BCT" && isi === "13 Lembar" && laminasi === "Doff") ||
		(bahan === "BCT" && isi === "13 Lembar" && laminasi === "Glossy")
	) {
		total = jumlah * 65100;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (bahan === "B/W" && isi === "13 Lembar" && laminasi === "Tanpa Laminasi") {
		total = jumlah * 55100;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (
		(bahan === "B/W" && isi === "13 Lembar" && laminasi === "Doff") ||
		(bahan === "B/W" && isi === "13 Lembar" && laminasi === "Glossy")
	) {
		total = jumlah * 65100;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}

	if (
		bahan === "LINEN" &&
		isi === "13 Lembar" &&
		laminasi === "Tanpa Laminasi"
	) {
		total = jumlah * 55100;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	} else if (
		(bahan === "LINEN" && isi === "13 Lembar" && laminasi === "Doff") ||
		(bahan === "LINEN" && isi === "13 Lembar" && laminasi === "Glossy")
	) {
		total = jumlah * 65100;
		html = "" + "<h3> Rp. " + formatRupiah(total.toString()) + "</h3>";
		$("#total").html(html);
	}
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

	if (bahan === "Stiker Vinyl Glossy") {
		if (cutting === "Kiss Cut" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 14000;
		} else if (cutting === "Kiss Cut" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 20500;
		} else total = jumlah * 17500;
	} else if (bahan === "Stiker Vinyl Doff") {
		if (cutting === "Kiss Cut" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 14000;
		} else if (cutting === "Kiss Cut" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 20500;
		} else total = jumlah * 17500;
	} else if (bahan === "Stiker Vinyl Transparant") {
		if (cutting === "Kiss Cut" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 14000;
		} else if (cutting === "Kiss Cut" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 20500;
		} else total = jumlah * 17500;
	}

	if (
		(bahan === "Stiker Gold Glossy" || bahan === "Stiker Silver Glossy") &&
		cutting === "Kiss Cut" &&
		laminasi === "Tanpa Laminasi"
	) {
		total = jumlah * 17000;
	} else if (
		(bahan === "Stiker Gold Glossy" || bahan === "Stiker Silver Glossy") &&
		cutting === "Die Cut" &&
		laminasi !== "Tanpa Laminasi"
	) {
		total = jumlah * 23500;
	} else total = jumlah * 20500;

	if (bahan === "Stiker Craft") {
		if (cutting === "Kiss Cut" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 13000;
		} else if (cutting === "Die Cut" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 19500;
		} else total = jumlah * 16500;
	}

	if (bahan === "Stiker Hologram") {
		if (cutting === "Kiss Cut" && laminasi === "Tanpa Laminasi") {
			total = jumlah * 18000;
		} else if (cutting === "Die Cut" && laminasi !== "Tanpa Laminasi") {
			total = jumlah * 24500;
		} else total = jumlah * 21500;
	}
	if (
		(bahan === "Stiker Vinyl Glossy" ||
			bahan === "Stiker Vinyl Doff" ||
			bahan === "Stiker Vinyl Transparant") &&
		cutting === "Kiss Cut" &&
		laminasi === "Tanpa Laminasi"
	) {
		total = jumlah * 14000;
	} else if (
		(bahan === "Stiker Vinyl Glossy" ||
			bahan === "Stiker Vinyl Doff" ||
			bahan === "Stiker Vinyl Transparant") &&
		cutting === "Die Cut" &&
		laminasi !== "Tanpa Laminasi"
	) {
		total = jumlah * 20500;
	} else total = jumlah * 17500;

	if (
		(bahan === "Stiker Chromo" || bahan === "Stiker HVS") &&
		cutting === "Kiss Cut" &&
		laminasi === "Tanpa Laminasi"
	) {
		total = jumlah * 11000;
	} else if (
		(bahan === "Stiker Chromo" || bahan === "Stiker HVS") &&
		cutting === "Die Cut" &&
		laminasi !== "Tanpa Laminasi"
	) {
		total = jumlah * 17500;
	} else total = jumlah * 14000;
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
