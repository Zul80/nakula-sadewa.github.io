<div class="container">
    <header class="page-header">
        <h1 class="page-title">T-Shirts | DTF </h1>
        <ol class="breadcrumb page-breadcrumb">
            <li><a href="#">Home</a>
            </li>
            <li><a href="#">Pesan</a>
            </li>
            <li class="active">T-Shirts | DTF</li>
        </ol>
    </header>
    <div class="row">
        <?= form_open('tdtf' , array('enctype' => 'multipart/form-data')) ?>
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
                            <label for="">Bahan :</label>

                            <div class="row">
                                <div class="col-md-6">
                                    <select name="bahan" id="bahan" class="form-control" onchange="showTotalTdtf()"
                                        required>
                                        <option value="Premium Black">Premium Black</option>
                                        <option value="Premium White">Premium White</option>
                                        <option value="Premium Red">Premium Red</option>
                                        <option value="Premium Royal Blue">Premium Royal Blue</option>
                                        <option value="Premium Navy">Premium Navy</option>
                                        <option value="Premium Yellow">Premium Yellow</option>
                                        <option value="Premium Pink">Premium Pink</option>
                                        <option value="Misty Dark Gray">Misty Dark Gray</option>
                                        <option value="Misty Gray">Misty Gray</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="size" id="size" class="form-control" onchange="showTotalTdtf()"
                                        required>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah :</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah"
                                onkeyup="showTotalTdtf()" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">Estimasi Waktu (hari) :</label>
                            <input type="number" class="form-control" required autocomplete="off" name="estimasi">
                        </div>
                        <br>

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