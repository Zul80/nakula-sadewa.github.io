<div class="container">
    <header class="page-header">
        <h1 class="page-title">Pesan Nota</h1>
        <ol class="breadcrumb page-breadcrumb">
            <li><a href="#">Home</a>
            </li>
            <li><a href="#">Pesan</a>
            </li>
            <li class="active">Nota NCR</li>
        </ol>
    </header>
    <div class="row">
        <?= form_open('nota' , array('enctype' => 'multipart/form-data')) ?>
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
                            <label for="">Warna<span style="color: red">*</span> :</label><br>
                            <select name="warna" id="warna" class="form-control" onchange="showTotalNota()" required>
                                <option value="Full Warna">Full Warna</option>
                                <option value="Hitam Putih">Hitam Putih</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Ukuran :</label><br>
                            <select name="ukuran" id="ukuran" class="form-control" onchange="showTotalNota()" required>
                                <option value="A5">A5</option>
                                <option value="A6">A6</option>
                                <option value="1/3 F4">1/3 F4</option>
                                <option value="F4">F4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Isi :</label><br>

                            <select name="rangkap" id="rangkap" class="form-control" onchange="showTotalNota()"
                                required>
                                <option value="rangkap 2">Rangkap 2</option>
                                <option value="rangkap 3">Rangkap 3</option>
                                <option value="rangkap 4">Rangkap 4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah :</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah"
                                onkeyup="showTotalNota()" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">Estimasi Waktu (hari) :</label>
                            <input type="number" class="form-control" required autocomplete="off" name="estimasi">
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label for=""><span style="color: red">*</span>Keterangan :</label>
                            <ul>
                                <li>Biasa (bct) : Rp. 15.000 per pcs</li>
                                <li>Bagus (glossy) : Rp. 25.000 per pcs</li>
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
                            <p class="product-page-side-text">STANDARD 4.95 USD FREE (ORDERS OVER 50 USD) In 2-4 working
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