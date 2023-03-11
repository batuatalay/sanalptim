<?php 
include("/controller/branch.controller.php");
$branches = Branch::getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="Fithub" />
    <meta name="description" content="Fithub" />
    <base href="http://sanalptim.com/" target="_blank">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- FavIcon CSS -->
    <link rel="icon" href="assets/images/favicon.png" type="image/gif" sizes="16x16">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!--Google Fonts CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Font Awesome Icon CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- Wow Animation CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.min.css">

    <!-- Main Style CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

     <!-- Loader Start -->
	<div class="loader-box">
        <div class="loader-text">
            <span class="let1">L</span>
            <span class="let2">o</span>
            <span class="let3">a</span>
            <span class="let4">d</span>
            <span class="let5">i</span>
            <span class="let6">n</span>
            <span class="let7">g</span>
            <span class="let8">.</span>
            <span class="let9">.</span>
            <span class="let10">.</span>
        </div>
	</div>
	<!-- Loader End -->

     <!-- Header Start -->
     <header class="site-header">
        <!--Navbar Start  -->
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <!-- Sit Logo Start -->
                        <div class="site-branding">
                            <a href="index.html" title="Fithub">
                                <!--<img src="assets/images/logo.png" alt="Logo">
                                <img src="assets/images/logo_stickey.png" class="sticky-logo" alt="Logo"> -->
                            </a>
                        </div>
                        <!-- Sit Logo End -->
                    </div>
                    <div class="col-lg-10">
                        <div class="header-menu">
                            <nav class="main-navigation one">
                                <button class="toggle-button">
                                    <span></span>
                                    <span class="toggle-width"></span>
                                    <span></span>
                                </button>
                                <div class="mobile-menu-box">
                                    <i class="menu-background top"></i>
                                    <i class="menu-background middle"></i>
                                    <i class="menu-background bottom"></i>
                               <ul class="menu">
                                   <li><a href="/main">Anasayfa</a></li>
                                   <li class="sub-items">
                                    <a href="javascript:void(0);" title="Classes">Branşlarımız</a>
                                    <ul class="sub-menu">
                                        <?php 
                                            foreach ($branches as $branch) {
                                        ?> 
                                        <li><a href="/branch/get/<?=$branch['branch_key']?>" title="Classes"><?=$branch['name']?></a></li>

                                        <?php  } ?>
                                    </ul>
                                    </li>
                                    <li><a href="/main">Hocalarımız</a></li>
                                    <li><a href="/main">Hareketler</a></li>
                                    <li><a href="/main">Blog</a></li>
                                   <li><a href="contact-us.html">İletişim</a></li>
                               </ul>
                                </div>
                            </nav>
                            <div class="header-search-box">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#search-modal" class="header-search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="black-shadow"></div>
                            <div class="header-btn">
                                <a href="contact-us.html" class="sec-btn">Spora Başla</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Navbar End  -->
    </header>
    <!-- Header End -->