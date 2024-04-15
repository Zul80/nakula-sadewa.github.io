<div class="container">
    <header class="page-header">
        <h1 class="page-title">Pesan Kalender</h1>
        <ol class="breadcrumb page-breadcrumb">
            <li><a href="#">Home</a>
            </li>
            <li><a href="#">Pesan</a>
            </li>
            <li class="active">KALENDER MEJA 15 X 21</li>
        </ol>
    </header>
    <div class="row">
        <?= form_open('kalender' , array('enctype' => 'multipart/form-data')) ?>
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
        <div class="col-md-7">
            <h4>Detail Pesanan</h4>
            <div class="row" data-gutter="10">
                <div class="col-md-8">
                    <div class="box">
                        <div class="form-group">
                            <label for="">Tipe Bahan<span style="color: red">*</span> :</label><br>
                            <select name="bahan" id="bahan" class="form-control" onchange="showTotalKalender()"
                                required>
                                <option value="AC230">Art Carton 230</option>
                                <option value="AC360">Art Carton 360</option>
                                <option value="BCT">BC TIK</option>
                                <option value="B/W">BW - Blues White</option>
                                <option value="LINEN">Linen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Isi :</label><br>
                            <select name="isi" id="isi" class="form-control" onchange="showTotalKalender()" required>
                                <option value="7 Lembar">7 Lembar</option>
                                <option value="13 Lembar">13 Lembar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Laminasi :</label><br>
                            <select name="laminasi" id="laminasi" class="form-control" onchange="showTotalKalender()"
                                required>
                                <option value="Tanpa Laminasi">Tanpa laminasi</option>
                                <option value="Doff">Laminasi Doff</option>
                                <option value="Glossy">Laminasi Glossy</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah :</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah"
                                onkeyup="showTotalKalender()" autocomplete="off">
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