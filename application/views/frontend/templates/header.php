<!DOCTYPE HTML>
<html>

<head>
    <title><?=$title?></title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="TheBox - premium e-commerce template">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shorcut icon" href="<?=base_url()?>assets/frontend/img/sipesan/favicon.png">
    <link
        href='<?= base_url() ?>assets/frontend/fonts/fonts.googleapis.com/cssb98c.css?family=Roboto:500,300,700,400italic,400'
        rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link href='<?= base_url() ?>assets/frontend/fonts/fonts.googleapis.com/css1c0e.css?family=Open+Sans:400,700,600'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/styles.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/mystyles.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/switcher.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/animate.min.css" />
    <link rel="alternate stylesheet" type="text/css"
        href="<?= base_url() ?>assets/frontend/css/schemes/bright-turquoise.css" title="bright-turquoise" media="all" />
    <link rel="alternate stylesheet" type="text/css"
        href="<?= base_url() ?>assets/frontend/css/schemes/turkish-rose.css" title="turkish-rose" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/salem.css"
        title="salem" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/hippie-blue.css"
        title="hippie-blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/mandy.css"
        title="mandy" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/green-smoke.css"
        title="green-smoke" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/horizon.css"
        title="horizon" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/cerise.css"
        title="cerise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/brick-red.css"
        title="brick-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/de-york.css"
        title="de-york" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/shamrock.css"
        title="shamrock" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/studio.css"
        title="studio" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/leather.css"
        title="leather" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/denim.css"
        title="denim" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/scarlet.css"
        title="scarlet" media="all" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/backend/node_modules/dropify/dist/css/dropify.min.css">
</head>

<body>
    <div class="global-wrapper clearfix" id="global-wrapper">
        <div class="demo_changer" id="demo_changer">
            <div class="demo-icon fa fa-sliders"></div>
            <div class="form_holder">
                <div class="line"></div>
                <p>Color Scheme</p>
                <div class="predefined_styles" id="styleswitch_area">
                    <a class="styleswitch" href="indexc392.html?default=true" style="background:#486D97;"></a>
                    <a class="styleswitch" href="#" data-src="bright-turquoise" style="background:#0EBCF2;"></a>
                    <a class="styleswitch" href="#" data-src="turkish-rose" style="background:#B66672;"></a>
                    <a class="styleswitch" href="#" data-src="salem" style="background:#12A641;"></a>
                    <a class="styleswitch" href="#" data-src="hippie-blue" style="background:#4F96B6;"></a>
                    <a class="styleswitch" href="#" data-src="mandy" style="background:#E45E66;"></a>
                    <a class="styleswitch" href="#" data-src="green-smoke" style="background:#96AA66;"></a>
                    <a class="styleswitch" href="#" data-src="horizon" style="background:#5B84AA;"></a>
                    <a class="styleswitch" href="#" data-src="cerise" style="background:#CA2AC6;"></a>
                    <a class="styleswitch" href="#" data-src="brick-red" style="background:#cf315a;"></a>
                    <a class="styleswitch" href="#" data-src="de-york" style="background:#74C683;"></a>
                    <a class="styleswitch" href="#" data-src="shamrock" style="background:#30BBB1;"></a>
                    <a class="styleswitch" href="#" data-src="studio" style="background:#7646B8;"></a>
                    <a class="styleswitch" href="#" data-src="leather" style="background:#966650;"></a>
                    <a class="styleswitch" href="#" data-src="denim" style="background:#1A5AE4;"></a>
                    <a class="styleswitch" href="#" data-src="scarlet" style="background:#FF1D13;"></a>
                </div>
                <div class="line"></div>
                <p>Layout</p>
                <div class="predefined_styles"><a class="btn btn-xs" href="#" id="btn-wide">Wide</a>&nbsp;&nbsp;<a
                        class="btn btn-xs" href="#" id="btn-boxed">Boxed</a>
                </div>
                <div class="line"></div>
                <p>Background Patterns</p>
                <div class="predefined_styles" id="patternswitch_area">
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/binding_light.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/binding_dark.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/dark_fish_skin.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/dimension.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/escheresque_ste.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/food.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/giftly.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/grey_wash_wall.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/ps_neutral.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/pw_maze_black.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/pw_pattern.png);"></a>
                    <a class="patternswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/simple_dashed.png);"></a>
                </div>
                <div class="line"></div>
                <p>Background Images</p>
                <div class="predefined_styles" id="bgimageswitch_area">
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/bike.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/bike.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/flowers.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/flowers.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/wood.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/wood.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/taxi.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/taxi.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/phone.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/phone.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/road.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/road.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/keyboard.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/keyboard.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/beach.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/beach.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/street.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/street.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/nature.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/nature.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/bridge.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/bridge.jpg"></a>
                    <a class="bgimageswitch" href="#"
                        style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/cameras.jpg);"
                        data-src="<?= base_url() ?>assets/frontend/img/backgrounds/cameras.jpg"></a>
                </div>
                <div class="line"></div>
            </div>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
            <h3 class="widget-title">Member Login</h3>
            <p>Welcome back, friend. Login to get started</p>
            <hr />
            <?= form_open('login') ?>
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="username" required autocomplete="off" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" required autocomplete="off" />
            </div>
            <input class="btn btn-primary" type="submit" value="Login" name="login" />
            <?= form_close() ?>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-account-dialog" class="popup-text">Belum Punya Akun?</a>
                </li>
                <!--			<li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>-->
                <!--			</li>-->
            </ul>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
            <h3 class="widget-title">Buat Akun</h3>
            <p>Ready to get best offers? Let's get started!</p>
            <hr />
            <?= form_open('register') ?>
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" required name="username" autocomplete="off" />
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" type="text" required name="email" autocomplete="off" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" required name="password" autocomplete="off" />
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" type="text" required name="nama" autocomplete="off" />
            </div>
            <div class="form-group">
                <label>Nomor HP</label>
                <input class="form-control" type="number" required name="no_hp" autocomplete="off" />
            </div>
            <input class="btn btn-primary" type="submit" value="Buat Akun" name="register" />
            <?= form_close() ?>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-login-dialog" class="popup-text">Sudah Punya Akun ?</a>
                </li>
            </ul>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
            <h3 class="widget-title">Password Recovery</h3>
            <p>Enter Your Email and We Will Send the Instructions</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control" type="text" />
                </div>
                <input class="btn btn-primary" type="submit" value="Recover Password" />
            </form>
        </div>
        <nav class="navbar navbar-inverse navbar-main navbar-pad">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="img/logo-w.png" alt="Image Alternative text" title="Image Title" />
                    </a>
                </div>
                <div class="rel">
                    <form class="navbar-form navbar-left navbar-main-search navbar-main-search-category" role="search">
                        <select class="navbar-main-search-category-select">
                            <option>All Departmens</option>
                            <option>Appilances</option>
                            <option>Apps & Games</option>
                            <option>Arts, Crafts & Sewing</option>
                            <option>Automotive</option>
                            <option>Baby</option>
                            <option>Books</option>
                            <option>CDs & Vinyl</option>
                            <option>Cell Phones & Accessories</option>
                            <option>Clothing, Shoes & Jewelry</option>
                            <option>&nbsp;&nbsp;&nbsp;Woman</option>
                            <option>&nbsp;&nbsp;&nbsp;Men</option>
                            <option>&nbsp;&nbsp;&nbsp;Girls</option>
                            <option>&nbsp;&nbsp;&nbsp;Baby</option>
                            <option>Collectibles & Fine Art</option>
                            <option>Computers</option>
                            <option>Credit and Payment Cards</option>
                            <option>Digital Music</option>
                            <option>Electronics</option>
                            <option>Gift Cards</option>
                            <option>Grocery & Gourmet</option>
                            <option>Health & Personal Care</option>
                            <option>Home & Kitchen</option>
                            <option>Industrial & Scientific</option>
                            <option>Luggage & Travel</option>
                            <option>Luxury Beauty</option>
                            <option>Magazine Subscribtions</option>
                            <option>Movies & TV</option>
                            <option>Musical Instuments</option>
                            <option>Office Products</option>
                            <option>Patio, Lawn & Garden</option>
                            <option>Pet Supplies</option>
                            <option>Software</option>
                            <option>Sports & Outdoors</option>
                            <option>Tools & Home Improvement</option>
                            <option>Toys & Games</option>
                            <option>Video Games</option>
                            <option>Wine</option>
                        </select>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search the Entire Store..." />
                        </div>
                        <a class="fa fa-search navbar-main-search-submit" href="#"></a>
                    </form>
                    <a class="navbar-theme-img" href="#">
                        <img src="img/373x92.png" alt="Image Alternative text" title="Image Title" />
                    </a>
                </div>
            </div>
        </nav>
        <div class="alert-parent">
            <?php if ($this->session->flashdata('alert') == 'login_sukses') : ?>
            <div class="alert-success animated fadeInDownBig hide-it">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <i class="fa fa-check"></i> Berhasil Login
            </div>
            <?php elseif ($this->session->flashdata('alert') == 'success_register') : ?>
            <div class="alert-success animated fadeInDownBig hide-it">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <i class="fa fa-check"></i> Berhasil Register, Silahkan Login
            </div>
            <?php elseif ($this->session->flashdata('alert') == 'login_gagal') : ?>
            <div class="alert-danger animated fadeInDownBig hide-it">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <i class="fa fa-warning"></i> Username atau password salah
            </div>
            <?php elseif ($this->session->flashdata('alert') == 'belum_login') : ?>
            <div class="alert-danger animated fadeInDownBig hide-it">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <i class="fa fa-warning"></i> Silahkan Login Dahulu
            </div>
            <?php elseif ($this->session->flashdata('alert') == 'logout_sukses') : ?>
            <div class="alert-success animated fadeInDownBig hide-it">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <i class="fa fa-check"></i> Berhasil Logout
            </div>
            <?php elseif ($this->session->flashdata('alert') == 'bayar_sukses') : ?>
            <div class="alert-success animated fadeInDownBig hide-it">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <i class="fa fa-check"></i> Berhasil Melakukan Pembayaran
            </div>
            <?php elseif ($this->session->flashdata('alert') == 'konfirmasi_sukses') : ?>
            <div class="alert-success animated fadeInDownBig hide-it">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <i class="fa fa-check"></i> Berhasil Melakukan Konfirmasi
            </div>
            <?php elseif ($this->session->flashdata('alert') == 'pesan_sukses') : ?>
            <div class="alert-success animated fadeInDownBig hide-it">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <i class="fa fa-check"></i> Berhasil Melakukan Pemesanan
            </div>
            <?php elseif ($this->session->flashdata('alert') == 'pesan_hapus') : ?>
            <div class="alert-success animated fadeInDownBig hide-it">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <i class="fa fa-check"></i> Berhasil Menghapus Pesanan
            </div>
            <?php elseif ($this->session->flashdata('alert') == 'komentar_sukses') : ?>
            <div class="alert-success animated fadeInDownBig hide-it">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <i class="fa fa-check"></i> Berhasil Menambahkan Komentar
            </div>
            <?php endif;?>
        </div>
