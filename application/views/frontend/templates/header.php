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
        <nav class="navbar navbar-inverse navbar-main yamm">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/frontend/img/sipesan/Logo NakulaSadewa.png" alt="Image Alternative text" title="Image Title" />
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="main-nav-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Shop by Category<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu dropdown-menu-category">
                                <li><a href="#"><i class="fa fa-home dropdown-menu-category-icon"></i>Home & Garden</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Home & Garden</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Home</a>
                                                                <p>Ullamcorper ut mauris blandit nascetur</p>
                                                            </li>
                                                            <li><a href="#">Kitchen</a>
                                                                <p>Non platea donec condimentum facilisi</p>
                                                            </li>
                                                            <li><a href="#">Furniture & Decor</a>
                                                                <p>Hac quisque consectetur posuere suspendisse</p>
                                                            </li>
                                                            <li><a href="#">Bedding & Bath</a>
                                                                <p>Duis platea augue aliquet morbi</p>
                                                            </li>
                                                            <li><a href="#">Appilances</a>
                                                                <p>Lacus consectetur elementum egestas lacus</p>
                                                            </li>
                                                            <li><a href="#">Patio, Lawn & Garden</a>
                                                                <p>Amet fames donec et nec</p>
                                                            </li>
                                                            <li><a href="#">Wedding Registry</a>
                                                                <p>Neque vitae at ut turpis</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Home Improvement</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Home Improvement</a>
                                                                <p>Maecenas in sodales nunc dui</p>
                                                            </li>
                                                            <li><a href="#">Lamps & Light Fixtures</a>
                                                                <p>Habitant mattis nisi conubia mi</p>
                                                            </li>
                                                            <li><a href="#">Kitchen & Bath Fixtures</a>
                                                                <p>Penatibus cum porta aenean mauris</p>
                                                            </li>
                                                            <li><a href="#">Home Automation</a>
                                                                <p>Consequat tincidunt lectus sagittis tellus</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/2-i.png" alt="Image Alternative text" title="Image Title" style="right: -10px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-diamond dropdown-menu-category-icon"></i>Jewelry</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Jewelry</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Necklances & Pendants</a>
                                                                <p>Dapibus suspendisse porta eget mattis</p>
                                                            </li>
                                                            <li><a href="#">Bracelets</a>
                                                                <p>Tempus vestibulum mus imperdiet nibh</p>
                                                            </li>
                                                            <li><a href="#">Rings</a>
                                                                <p>Sem pharetra quis netus vel</p>
                                                            </li>
                                                            <li><a href="#">Errings</a>
                                                                <p>Vehicula class vestibulum nisl donec</p>
                                                            </li>
                                                            <li><a href="#">Wedding & Engagement</a>
                                                                <p>Hendrerit fermentum magna sed amet</p>
                                                            </li>
                                                            <li><a href="#">Charms</a>
                                                                <p>Purus sit nec class sit</p>
                                                            </li>
                                                            <li><a href="#">Booches</a>
                                                                <p>Fringilla tellus volutpat per eget</p>
                                                            </li>
                                                            <li><a href="#">Men's Jewelry</a>
                                                                <p>Molestie platea suspendisse eget tortor</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Jewelry Shops</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Contemporary & Designer</a>
                                                                <p>Pharetra magna nam senectus tristique</p>
                                                            </li>
                                                            <li><a href="#">Juniors</a>
                                                                <p>Cursus ut odio sollicitudin venenatis</p>
                                                            </li>
                                                            <li><a href="#">Meternity</a>
                                                                <p>Natoque dis maecenas magna dignissim</p>
                                                            </li>
                                                            <li><a href="#">Pettite</a>
                                                                <p>Sociosqu et sociis accumsan interdum</p>
                                                            </li>
                                                            <li><a href="#">Uniforms, Works & Safety</a>
                                                                <p>Dictum netus quis enim phasellus</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/3-i.png" alt="Image Alternative text" title="Image Title" style="right: -10px; bottom: -10px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-child dropdown-menu-category-icon"></i>Toy & Kids</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Kids Clothing</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Accessories</a>
                                                                <p>Suscipit nunc donec purus dui</p>
                                                            </li>
                                                            <li><a href="#">Active Wear</a>
                                                                <p>Himenaeos nulla sociosqu rhoncus dictumst</p>
                                                            </li>
                                                            <li><a href="#">Coats & Jackets</a>
                                                                <p>Fusce ultricies congue sapien porttitor</p>
                                                            </li>
                                                            <li><a href="#">Jeans</a>
                                                                <p>Maecenas fringilla ipsum nam lorem</p>
                                                            </li>
                                                            <li><a href="#">Sets</a>
                                                                <p>Aliquam rhoncus elit himenaeos facilisis</p>
                                                            </li>
                                                            <li><a href="#">Indoors</a>
                                                                <p>Auctor nostra cubilia pretium ante</p>
                                                            </li>
                                                            <li><a href="#">Swimwear</a>
                                                                <p>A enim interdum ullamcorper erat</p>
                                                            </li>
                                                            <li><a href="#">Special Occasion</a>
                                                                <p>Pharetra varius imperdiet praesent tempor</p>
                                                            </li>
                                                            <li><a href="#">Shoes</a>
                                                                <p>Justo placerat eleifend senectus laoreet</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">More For Kids</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Kids Furniture</a>
                                                                <p>Mi cubilia volutpat augue convallis</p>
                                                            </li>
                                                            <li><a href="#">Kids Jewelry & Watches</a>
                                                                <p>Facilisi gravida vehicula duis aliquam</p>
                                                            </li>
                                                            <li><a href="#">Toys & Games</a>
                                                                <p>Habitant cras accumsan dis vitae</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/4-i.png" alt="Image Alternative text" title="Image Title" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-plug dropdown-menu-category-icon"></i>Electronics</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Electronics</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">TV & Video</a>
                                                                <p>Eleifend duis convallis porta gravida</p>
                                                            </li>
                                                            <li><a href="#">Home Audio & Theater</a>
                                                                <p>Auctor phasellus luctus ante et</p>
                                                            </li>
                                                            <li><a href="#">Camera, Photo & Video</a>
                                                                <p>Dignissim sagittis leo aptent malesuada</p>
                                                            </li>
                                                            <li><a href="#">Cell Phones & Accessories</a>
                                                                <p>Nibh convallis cras velit himenaeos</p>
                                                            </li>
                                                            <li><a href="#">Headphones</a>
                                                                <p>Dis pretium interdum bibendum elementum</p>
                                                            </li>
                                                            <li><a href="#">Video Games</a>
                                                                <p>Morbi dignissim dis habitant senectus</p>
                                                            </li>
                                                            <li><a href="#">Gar Electronics</a>
                                                                <p>Curabitur placerat consequat est nunc</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Computers</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Laptops & Tablets</a>
                                                                <p>Ad ornare commodo luctus curabitur</p>
                                                            </li>
                                                            <li><a href="#">Desktops & Monitors</a>
                                                                <p>Mi aliquet aliquam nec sollicitudin</p>
                                                            </li>
                                                            <li><a href="#">Computer Accessories</a>
                                                                <p>Fames cubilia elit donec nostra</p>
                                                            </li>
                                                            <li><a href="#">Software</a>
                                                                <p>Cum nullam porta dignissim tortor</p>
                                                            </li>
                                                            <li><a href="#">Printers & Ink</a>
                                                                <p>Porta turpis quam pretium ultricies</p>
                                                            </li>
                                                            <li><a href="#">Networking</a>
                                                                <p>Varius massa maecenas et id</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/5-i.png" alt="Image Alternative text" title="Image Title" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-tags dropdown-menu-category-icon"></i>Clothes & Shoes</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">TheBox Fashion</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Woman</a>
                                                                <p>Dictumst mattis donec fringilla ac</p>
                                                            </li>
                                                            <li><a href="#">Men</a>
                                                                <p>Parturient posuere id phasellus erat</p>
                                                            </li>
                                                            <li><a href="#">Girls</a>
                                                                <p>Elementum nullam lacus cursus rhoncus</p>
                                                            </li>
                                                            <li><a href="#">Boys</a>
                                                                <p>Parturient vitae praesent quisque nascetur</p>
                                                            </li>
                                                            <li><a href="#">Baby</a>
                                                                <p>Molestie quis dignissim vel sit</p>
                                                            </li>
                                                            <li><a href="#">Luggage</a>
                                                                <p>Odio metus tristique auctor dictumst</p>
                                                            </li>
                                                            <li><a href="#">Accessories</a>
                                                                <p>Primis ad viverra quisque etiam</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/6-i.png" alt="Image Alternative text" title="Image Title" style="right: -20px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-futbol-o dropdown-menu-category-icon"></i>Sports</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Sports</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Athletic Clothing</a>
                                                                <p>In rutrum donec cras non</p>
                                                            </li>
                                                            <li><a href="#">Exorcise & Fitness</a>
                                                                <p>Dis suscipit risus ridiculus lacus</p>
                                                            </li>
                                                            <li><a href="#">Hunting & Fishing</a>
                                                                <p>Mus cursus luctus donec pellentesque</p>
                                                            </li>
                                                            <li><a href="#">Team Sports</a>
                                                                <p>Rhoncus sem quam vulputate mus</p>
                                                            </li>
                                                            <li><a href="#">Fan Sports</a>
                                                                <p>Hendrerit risus ultrices a elementum</p>
                                                            </li>
                                                            <li><a href="#">Golf</a>
                                                                <p>Massa est at aenean parturient</p>
                                                            </li>
                                                            <li><a href="#">Sports Collections</a>
                                                                <p>In egestas senectus lectus convallis</p>
                                                            </li>
                                                            <li><a href="#">Camping & Hiking</a>
                                                                <p>Lectus dui neque sit dignissim</p>
                                                            </li>
                                                            <li><a href="#">Cycling</a>
                                                                <p>Facilisis fames feugiat laoreet pharetra</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/7-i.png" alt="Image Alternative text" title="Image Title" style="right: -39px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-music dropdown-menu-category-icon"></i>Entertaiment</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Entertaiment</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Video Games & Consoles</a>
                                                                <p>Felis vitae ornare lacus sodales</p>
                                                            </li>
                                                            <li><a href="#">Music</a>
                                                                <p>Non sapien curae nisl nec</p>
                                                            </li>
                                                            <li><a href="#">DVD & Movies</a>
                                                                <p>Habitant velit semper pretium et</p>
                                                            </li>
                                                            <li><a href="#">Tickets</a>
                                                                <p>Ipsum dolor in amet nunc</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Memorabilia</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Autographs</a>
                                                            </li>
                                                            <li><a href="#">Movie</a>
                                                            </li>
                                                            <li><a href="#">Music</a>
                                                            </li>
                                                            <li><a href="#">Television</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/9-i.png" alt="Image Alternative text" title="Image Title" style="right: -27px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-location-arrow dropdown-menu-category-icon"></i>Travel</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Travel Equepment</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Luggage</a>
                                                                <p>Vestibulum lacus nulla dis sollicitudin</p>
                                                            </li>
                                                            <li><a href="#">Travel Accessories</a>
                                                                <p>Diam luctus dolor ante lobortis</p>
                                                            </li>
                                                            <li><a href="#">Luggage Accessories</a>
                                                                <p>Neque enim facilisis penatibus integer</p>
                                                            </li>
                                                            <li><a href="#">Lodging</a>
                                                                <p>Lacinia semper nibh ullamcorper feugiat</p>
                                                            </li>
                                                            <li><a href="#">Maps</a>
                                                                <p>Faucibus non nec amet ac</p>
                                                            </li>
                                                            <li><a href="#">Other Travel</a>
                                                                <p>Mus hac diam nulla ridiculus</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Booking</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Vacation Packages</a>
                                                                <p>Proin sem iaculis condimentum pharetra</p>
                                                            </li>
                                                            <li><a href="#">Campground & RV</a>
                                                                <p>Morbi volutpat torquent orci luctus</p>
                                                            </li>
                                                            <li><a href="#">Rail</a>
                                                                <p>Pharetra volutpat nisl dis curae</p>
                                                            </li>
                                                            <li><a href="#">Car Rental</a>
                                                                <p>Primis aliquet sapien pellentesque velit</p>
                                                            </li>
                                                            <li><a href="#">Cruises</a>
                                                                <p>Tristique taciti tincidunt adipiscing pharetra</p>
                                                            </li>
                                                            <li><a href="#">Airline</a>
                                                                <p>Massa at quisque fermentum faucibus</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/11-i.png" alt="Image Alternative text" title="Image Title" style="right: -100px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-picture-o dropdown-menu-category-icon"></i>Art & Design</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Art</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Paintings from Dealers & Resellers</a>
                                                                <p>Ultrices mi fames himenaeos pellentesque</p>
                                                            </li>
                                                            <li><a href="#">Paintings Direct from Artist</a>
                                                                <p>Curabitur nisl etiam a volutpat</p>
                                                            </li>
                                                            <li><a href="#">Art Prints</a>
                                                                <p>Phasellus convallis diam tempus malesuada</p>
                                                            </li>
                                                            <li><a href="#">Art Photographs from Resellers</a>
                                                                <p>Mauris torquent dapibus montes mollis</p>
                                                            </li>
                                                            <li><a href="#">Art Photographs from the Artist</a>
                                                                <p>Iaculis porta ridiculus rutrum fusce</p>
                                                            </li>
                                                            <li><a href="#">Art Posters</a>
                                                                <p>Sed parturient habitant a gravida</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Design</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Home Decor Decals</a>
                                                                <p>Curabitur senectus blandit parturient quam</p>
                                                            </li>
                                                            <li><a href="#">Furniture</a>
                                                                <p>Fames sem nec interdum id</p>
                                                            </li>
                                                            <li><a href="#">Wallpapers</a>
                                                                <p>Torquent litora nibh curae morbi</p>
                                                            </li>
                                                            <li><a href="#">Bar Flasks</a>
                                                                <p>Cum etiam duis malesuada viverra</p>
                                                            </li>
                                                            <li><a href="#">Posters & Prints</a>
                                                                <p>Ultricies pellentesque vestibulum sed mattis</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/12-i.png" alt="Image Alternative text" title="Image Title" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-motorcycle dropdown-menu-category-icon"></i>Motors</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Motors</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Parts & Accessories</a>
                                                                <p>Augue penatibus venenatis malesuada nam</p>
                                                            </li>
                                                            <li><a href="#">Cars & Trucks</a>
                                                                <p>Semper facilisis taciti posuere convallis</p>
                                                            </li>
                                                            <li><a href="#">Motorcycles</a>
                                                                <p>Curae auctor non sodales iaculis</p>
                                                            </li>
                                                            <li><a href="#">Passenger Vehicles</a>
                                                                <p>Blandit taciti pellentesque faucibus id</p>
                                                            </li>
                                                            <li><a href="#">Industry Vehicles</a>
                                                                <p>Nam scelerisque sapien ultricies euismod</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Brands</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">BMW</a>
                                                            </li>
                                                            <li><a href="#">Land Rover</a>
                                                            </li>
                                                            <li><a href="#">Nissan</a>
                                                            </li>
                                                            <li><a href="#">Honda</a>
                                                            </li>
                                                            <li><a href="#">Ford</a>
                                                            </li>
                                                            <li><a href="#">Porsche</a>
                                                            </li>
                                                            <li><a href="#">Audi</a>
                                                            </li>
                                                            <li><a href="#">Mercedes-Benz</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/13-i.png" alt="Image Alternative text" title="Image Title" style="right: -15px; bottom: -15px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-paw dropdown-menu-category-icon"></i>Pets</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <h5 class="dropdown-menu-category-title">Pet Supplies</h5>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Backyard Poultry Supplies</a>
                                                                <p>Maecenas accumsan parturient integer lacus</p>
                                                            </li>
                                                            <li><a href="#">Bird Supplies</a>
                                                                <p>Justo torquent cras sociis a</p>
                                                            </li>
                                                            <li><a href="#">Cat Supplies</a>
                                                                <p>Massa molestie inceptos congue venenatis</p>
                                                            </li>
                                                            <li><a href="#">Dog Supplies</a>
                                                                <p>Platea hac neque egestas dignissim</p>
                                                            </li>
                                                            <li><a href="#">Pet Memorials & Urns</a>
                                                                <p>Lacinia quisque ridiculus cras semper</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Fish & Aquariums</a>
                                                                <p>Magnis nascetur consequat enim conubia</p>
                                                            </li>
                                                            <li><a href="#">Horse Supplies</a>
                                                                <p>Auctor eleifend vel magnis est</p>
                                                            </li>
                                                            <li><a href="#">Reptile Supplies</a>
                                                                <p>Auctor nunc vel nulla primis</p>
                                                            </li>
                                                            <li><a href="#">Small Animal Supplies</a>
                                                                <p>Mauris fringilla blandit sapien fermentum</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Wholesale Lots</a>
                                                                <p>Volutpat curabitur himenaeos eros quis</p>
                                                            </li>
                                                            <li><a href="#">Other Pet Supplies</a>
                                                                <p>Risus amet arcu viverra laoreet</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/14-i.png" alt="Image Alternative text" title="Image Title" style="right: -15px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-cubes dropdown-menu-category-icon"></i>Hobbies & DIY</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Hobby & DIY</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Model & Kit Tools</a>
                                                                <p>Viverra diam dictum curabitur laoreet</p>
                                                            </li>
                                                            <li><a href="#">Supplies & Engines</a>
                                                                <p>Facilisi conubia purus taciti malesuada</p>
                                                            </li>
                                                            <li><a href="#">RC Airline & Helicopter</a>
                                                                <p>Eget cum malesuada nunc libero</p>
                                                            </li>
                                                            <li><a href="#">RC Car, Truck & motorcycle</a>
                                                                <p>Vestibulum aptent aliquam eros facilisi</p>
                                                            </li>
                                                            <li><a href="#">Military Airline Models & Kits</a>
                                                                <p>Purus mus odio praesent facilisi</p>
                                                            </li>
                                                            <li><a href="#">Craft Airbrushing Supplies</a>
                                                                <p>Molestie amet fringilla ultricies sem</p>
                                                            </li>
                                                            <li><a href="#">Card Making Supplies</a>
                                                                <p>Leo pulvinar gravida pulvinar felis</p>
                                                            </li>
                                                            <li><a href="#">Craft Sewing</a>
                                                                <p>Adipiscing risus curae nulla rutrum</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/15-i.png" alt="Image Alternative text" title="Image Title" style="height: 100%;" />
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#">Pages<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <h5>Homepages</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="index.html">Layout 1</a>
                                                    <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                                </li>
                                                <li><a href="index-layout-2.html">Layout 2</a>
                                                    <p class="dropdown-menu-items-list-desc">Banners Area + Product Carousel</p>
                                                </li>
                                                <li><a href="index-layout-3.html">Layout 3</a>
                                                    <p class="dropdown-menu-items-list-desc">Aside Departmens</p>
                                                </li>
                                                <li><a href="index-layout-4.html">Layout 4</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                                </li>
                                                <li><a href="index-layout-5.html">Layout 5</a>
                                                    <p class="dropdown-menu-items-list-desc">Small Aside Departmens + Sidebar</p>
                                                </li>
                                                <li><a href="index-layout-6.html">Layout 6</a>
                                                    <p class="dropdown-menu-items-list-desc">Full Banners + Product Tabs</p>
                                                </li>
                                                <li><a href="index-layout-7.html">Layout 7</a>
                                                    <p class="dropdown-menu-items-list-desc">Small Aside Departmens + Slider</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Category Pages</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="category.html">Layout 1</a>
                                                    <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                                </li>
                                                <li><a href="category-layout-2.html">Layout 2</a>
                                                    <p class="dropdown-menu-items-list-desc">Banner Title</p>
                                                </li>
                                                <li><a href="category-layout-3.html">Layout 3</a>
                                                    <p class="dropdown-menu-items-list-desc">4 Columns Thumbs</p>
                                                </li>
                                                <li><a href="category-layout-4.html">Layout 4</a>
                                                    <p class="dropdown-menu-items-list-desc">6 Columns Small Thumbs</p>
                                                </li>
                                                <li><a href="category-layout-5.html">Layout 5</a>
                                                    <p class="dropdown-menu-items-list-desc">3 Columns Horizontal Thumbs</p>
                                                </li>
                                                <li><a href="category-layout-6.html">Layout 6</a>
                                                    <p class="dropdown-menu-items-list-desc">4 Columns Horizontal Thumbs</p>
                                                </li>
                                                <li><a href="category-layout-7.html">Layout 7</a>
                                                    <p class="dropdown-menu-items-list-desc">No Filters</p>
                                                </li>
                                                <li><a href="category-layout-8.html">Layout 8</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                                </li>
                                                <li><a href="category-layout-9.html">Layout 9</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Inverse</p>
                                                </li>
                                                <li><a href="category-layout-10.html">Layout 10</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Color</p>
                                                </li>
                                                <li><a href="category-layout-11.html">Layout 11</a>
                                                    <p class="dropdown-menu-items-list-desc">Horizontal Thumbs</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Product Pages</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="product-page.html">Layout 1</a>
                                                    <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                                </li>
                                                <li><a href="product-layout-2.html">Layout 2</a>
                                                    <p class="dropdown-menu-items-list-desc">No Sidebar</p>
                                                </li>
                                                <li><a href="product-layout-3.html">Layout 3</a>
                                                    <p class="dropdown-menu-items-list-desc">Full Area Layout + Banners</p>
                                                </li>
                                                <li><a href="product-layout-4.html">Layout 4</a>
                                                    <p class="dropdown-menu-items-list-desc">Gallery Style</p>
                                                </li>
                                                <li><a href="product-layout-5.html">Layout 5</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                                </li>
                                                <li><a href="product-layout-6.html">Layout 6</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Left</p>
                                                </li>
                                                <li><a href="product-layout-7.html">Layout 7</a>
                                                    <p class="dropdown-menu-items-list-desc">Product Gallery Left</p>
                                                </li>
                                                <li><a href="product-layout-8.html">Layout 8</a>
                                                    <p class="dropdown-menu-items-list-desc">Product Gallery Right</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Header Layouts</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="index.html">Layout 1</a>
                                                    <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                                </li>
                                                <li><a href="index-nav-layout-2.html">Layout 2</a>
                                                    <p class="dropdown-menu-items-list-desc">Center Logo + Category Nav</p>
                                                </li>
                                                <li><a href="index-nav-layout-3.html">Layout 3</a>
                                                    <p class="dropdown-menu-items-list-desc">Special Area + Extended Search</p>
                                                </li>
                                                <li><a href="index-nav-layout-4.html">Layout 4</a>
                                                    <p class="dropdown-menu-items-list-desc">White Area + Extended Search</p>
                                                </li>
                                            </ul>
                                            <hr />
                                            <h5>Footer Layouts</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="index.html">Layout 1</a>
                                                    <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                                </li>
                                                <li><a href="index-footer-layout-2.html">Layout 2</a>
                                                    <p class="dropdown-menu-items-list-desc">Minimal</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Misc</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="shopping-cart.html">Shopping Cart</a>
                                                </li>
                                                <li><a href="shopping-cart-empty.html">Cart Empty</a>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a>
                                                </li>
                                                <li><a href="order-summary.html">Summary</a>
                                                </li>
                                                <li><a href="about-us.html">About Us</a>
                                                </li>
                                                <li><a href="contact.html">Contact</a>
                                                </li>
                                                <li><a href="404.html">404</a>
                                                </li>
                                                <li><a href="blog.html">Blog</a>
                                                </li>
                                                <li><a href="blog-post.html">Blog Post</a>
                                                </li>
                                                <li><a href="login-register.html">Login/Register</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left navbar-main-search" role="search">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search the Entire Store..." />
                        </div>
                        <a class="fa fa-search navbar-main-search-submit" href="#"></a>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text">Sign In</a>
                        </li>
                        <li><a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text">Create Account</a>
                        </li>
                        <li class="dropdown">
                            <a class="fa fa-shopping-cart" href="shopping-cart.html"></a>
                            <ul class="dropdown-menu dropdown-menu-shipping-cart">
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$41</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Gucci Patent Leather Open Toe Platform</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$89</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Nikon D5200 24.1 MP Digital SLR Camera</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$68</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Apple 11.6" MacBook Air Notebook </a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$67</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Fossil Women's Original Boyfriend</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <p class="dropdown-menu-shipping-cart-total">Total: $150</p>
                                    <button class="dropdown-menu-shipping-cart-checkout btn btn-primary">Checkout</button>
                                </li>
                            </ul>
                        </li>
                    </ul>
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
