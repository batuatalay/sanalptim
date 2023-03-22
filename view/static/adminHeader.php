<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <base href="<?=ENV?>" target="_self">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SanalPTim | Admin Panel</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="admin/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="admin/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Lütfen Bekleyiniz ...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">SanalPTim | Yönetim Paneli</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="admin/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=strtoupper($_SESSION['admin']['name'] . " " .$_SESSION['admin']['surname']) ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/logOut"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Anasayfa</span>
                        </a>
                    </li>
                    <li>
                        <a class="menu-toggle">
                            <span>Branşlar</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a class=" waves-effect waves-block">
                                    <span>Branş Ekle</span>
                                </a>
                            </li>
                            <li>
                                <a class=" waves-effect waves-block">
                                    <span>Branşlar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-toggle">
                            <span>Hocalar</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a class=" waves-effect waves-block">
                                    <span>Hoca Ekle</span>
                                </a>
                            </li>
                            <li>
                                <a class=" waves-effect waves-block">
                                    <span>Hocalar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-toggle">
                            <span>Hareketler</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a class=" waves-effect waves-block">
                                    <span>Hareket Ekle</span>
                                </a>
                            </li>
                            <li>
                                <a class=" waves-effect waves-block">
                                    <span>Hareketler</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-toggle">
                            <span>Programlar</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a class=" waves-effect waves-block">
                                    <span>Program Ekle</span>
                                </a>
                            </li>
                            <li>
                                <a class=" waves-effect waves-block">
                                    <span>Programlar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-toggle">
                            <span>Yazılar</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a class=" waves-effect waves-block">
                                    <span>Yazı Ekle</span>
                                </a>
                            </li>
                            <li>
                                <a class=" waves-effect waves-block">
                                    <span>Yazılar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/typography.html">
                            <span>Site Ayarları</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2023 <a>BatPanel - CMS</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>