<div class="container">
    <header class="page-header">
        <h1 class="page-title">Pesan Brosur A6</h1>
        <ol class="breadcrumb page-breadcrumb">
            <li><a href="#">Home</a>
            </li>
            <li><a href="#">Pesan</a>
            </li>
            <li class="active">Brosur A6</li>
        </ol>
    </header>
    <div class="row">
        <?= form_open('a6brosur' , array('enctype' => 'multipart/form-data')) ?>
        <div class="col-md-5">
            <h4>Upload Gambar</h4>
            <div class="product-page-product-wrap">
                <div class="clearfix">
                    <input type="file" class="dropify" name="upload" required>
                </div>
            </div>
            <p style="margin-top: 20px;">
                File yang diijinkan jpg, jpeg, png, tiff, bmp, rar, zip, 7z, tif, ps, psd, cdr, ai, id, pdf dan Max
                Ukuran File 50 MB. <strong>Jika file lebih dari satu silahkan jadikan satu dengan format Zip atau
                    Rar</strong> </p>
        </div>
        <div class=" col-md-7">
            <h4>Detail Pesanan</h4>
            <div class="row" data-gutter="10">
                <div class="col-md-8">
                    <div class="box">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Type Kertas<span style="color: red">*</span> :</label>
                                    <select name="bahan" id="bahan" class="form-control"
                                        onchange="checkOption(); showTotalA4brosur()" required>
                                        <option value="HVS 100">HVS 100</option>
                                        <option value="Art Paper 120">Art Paper 120</option>
                                        <option value="Art Paper 150">Art Paper 150</option>
                                        <option value="Art Carton 210">Art Carton 210</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Cetak Sisi<span style="color: red">*</span> :</label>
                                    <select name="sisi" id="sisi" class="form-control" onchange="showTotalA4brosur()"
                                        required>
                                        <option value="1 Muka">1 Muka</option>
                                        <option value="2 Muka">2 Muka</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="ilang" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Pilih Jenis Laminasi:</label>
                                    <select name="laminasi" id="laminasi" class="form-control"
                                        onchange="showTotalA4brosur()">
                                        <option value="Tanpa Laminasi">Tanpa Laminasi</option>
                                        <option value="Laminasi Doff">Laminasi Doff</option>
                                        <option value="Laminasi Glossy">Laminasi Glossy</option>
                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <label for="satuanLaminasi">Nominal/Rim:</label>
                                    <input type="text" id="satuanLaminasi" class="form-control" value="Rp. 0"
                                        style="font-weight: 600;text-align: right" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="ilang" style="display: block;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Lipat :</label>
                                    <select name="lipat" id="lipat" class="form-control" onchange="showTotalA4brosur()"
                                        required>
                                        <option value="Tanpa Lipat">Tanpa Lipat</option>
                                        <option value="Lipat">Lipat</option>
                                    </select>

                                </div>

                                <div class="col-md-6">
                                    <label for="satuanLipat">Nominal/Rim:</label>
                                    <input type="text" id="satuanLipat" class="form-control" value="Rp. 0"
                                        style="font-weight: 600; text-align: right" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Jumlah (rim) :</label>
                                    <input type="number" name="jumlah" class="form-control" id="jumlah"
                                        onkeyup="showTotalA4brosur()" required autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Estimasi Waktu (hari) :</label>
                                    <input type="number" class="form-control" required autocomplete="off"
                                        name="estimasi">
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label for=""><span style="color: red">*</span>Keterangan :</label>
                            <ul>
                                <li>HVS : Rp. 500.000 per rim</li>
                                <li>Konstruk : Rp. 750.000 per rim</li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-highlight">
                        <h4>Total</h4>
                        <div id="total">
                            <h3>0</h3>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary" name="keranjang"><i
                                class="fa fa-shopping-cart"></i>Add to cart
                        </button>
                        <?= form_close() ?>
                        <div class="product-page-side-section">
                            <h5 class="product-page-side-title">Share This Item</h5>
                            <ul class="product-page-share-item">
                                <li>
                                    <a class="fa fa-facebook" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-twitter" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-pinterest" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-instagram" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-google-plus" href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-page-side-section">
                            <h5 class="product-page-side-title">Shipping & Returns</h5>
                            <p class="product-page-side-text">In the store of your choice in 3-5 working days</p>
                            <p class="product-page-side-text">STANDARD 4.95 USD FREE (ORDERS OVER 50 USD) In 2-4
                                working
                                days*</p>
                            <p class="product-page-side-text">EXPRESS 9.95 USD In 24-48 hours (working days)*</p>
                            <p class="product-page-side-text">* Except remote areas</p>
                            <p class="product-page-side-text">You have one month from the shipping confirmation
                                email.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="gap"></div>
</div>


<script>
function checkOption() {
    var selectedOption = document.getElementById("bahan").value;
    var groupForm = document.getElementById("ilang");

    if (selectedOption !== "Art Carton 210") {
        groupForm.style.display = "none";
    } else {
        groupForm.style.display = "block";
    }
}
</script>