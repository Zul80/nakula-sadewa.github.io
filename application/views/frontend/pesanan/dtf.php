<div class="container">
    <header class="page-header">
        <h1 class="page-title">Print DTF </h1>
        <ol class="breadcrumb page-breadcrumb">
            <li><a href="#">Home</a>
            </li>
            <li><a href="#">Pesan</a>
            </li>
            <li class="active">Print DTF (PET FILM ONLY)</li>
        </ol>
    </header>
    <div class="row">
        <?= form_open('dtf' , array('enctype' => 'multipart/form-data')) ?>
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
                            <label for="">Ukuran :</label>

                            <div class="row">
                                <div class="col-md-6">
                                    <select name="bahan" id="bahan" class="form-control" onchange="showTotalDtf()"
                                        required>
                                        <option value="Lebar 60 cm">Lebar Bahan 60 cm</option>
                                        <option value="Lebar 30 cm">Lebar Bahan 30 cm</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" id="panjang" name="panjang"
                                        placeholder="Panjang (cm)" required autocomplete="off"
                                        onchange="showTotalDtf()">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah :</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah" onkeyup="showTotalDtf()"
                                required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">Estimasi Waktu (hari) :</label>
                            <input type="number" class="form-control" required autocomplete="off" name="estimasi">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for=""><span style="color: red">*</span>Keterangan :</label>
                            <ul>
                                <li>Lebar Bahan 60 cm: Rp. 60.000 per meter</li>
                                <li>Lebar Bahan 30 cm : Rp. 50.000 per meter</li>
                            </ul>
                        </div>
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