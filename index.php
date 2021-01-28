<?php
$url = "/wordpress/wp-admin/profile.php";
if (is_user_logged_in()) {
    $user = wp_get_current_user();
    $roles = $user->roles;
    $is_teacher = in_array("teacher", $roles);
    if ($is_teacher) {
        $url = get_bloginfo('template_url') . "/game-stats.php";
    } else {
        $url = get_bloginfo('template_url') . "/games.php";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="AuCreative">

    <!-- Title Page-->
    <title>STEM games</title>

    <!-- Icons font CSS-->
    <link href="<?php bloginfo('template_url'); ?>/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/vendor/linearicons-free/css/linearicons-free.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="<?php bloginfo('template_url'); ?>/css/nunito-font.min.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/css/chelsea-market-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="<?php bloginfo('template_url'); ?>/css/great-vibes-font.min.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/css/lobster-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php bloginfo('template_url'); ?>/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php bloginfo('template_url'); ?>/vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/vendor/lightbox2/css/lightbox.min.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/vendor/modalVideo/modal-video.min.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo('template_url'); ?>/vendor/revolution/css/layers.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/vendor/revolution/css/navigation.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/vendor/revolution/css/settings.css" rel="stylesheet" />

    <!-- Main CSS-->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="all">

    <!--Favicons-->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
</head>

<body class="animsition js-preloader">
    <div class="page-wrapper">
        <!-- HEADER-->
        <header id="header">
            <div class="header header-2 d-none d-lg-block js-header-1">
                <div class="header__bar">
                    <div class="container">
                        <div class="header__content">
                            <nav class="header-navbar">
                                <ul class="list-unstyled">
                                    <li class="header-navbar__item has-sub">
                                        <a href="index.php">
                                            <span class="bg-link">
                                                Početna strana
                                            </span>
                                        </a>
                                    </li>
                                    <li class="header-navbar__item has-sub">
                                        <a href="<?php echo $url; ?>">
                                            <span class="bg-link">Igrice</span>
                                        </a>
                                    </li>
                                    <li class="header-navbar__item has-sub">
                                        <a href="<?php bloginfo('template_url'); ?>/teachers.php">
                                            <span class="bg-link">nastavnici</span>
                                        </a>
                                    </li>
                                    <li class="header-navbar__item has-sub">
                                        <a href="/wordpress/wp-admin/profile.php">
                                            <span class="bg-link">
                                                profil
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-search" role="dialog">
                <button class="close" type="button" data-dismiss="modal">
                    <i class="zmdi zmdi-close"></i>
                </button>
                <div class="modal-dialog">
                </div>
                <div class="header-mobile js-header-mobile d-block d-lg-none">
                    <div class="header-mobile__bar">
                        <div class="container-fluid clearfix">
                            <button class="hamburger hamburger--slider float-right" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <nav class="navbar-mobile">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li class="has-sub">
                                <a href="<?php bloginfo('template_url'); ?>/index.php">Početna strana</a>
                            </li>
                            <li class="has-sub">
                                <ul class="list-unstyled navbar-mobile__child first">
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/programs.html">Programs</a>
                                    </li>
                                    <li>
                                        <a href="<?php bloginfo('template_url'); ?>/404error.html">404 error</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="<?php echo $url; ?>">games</a>
                                <ul class="list-unstyled navbar-mobile__child first">
                                    <li>
                                        <a href="<?php echo $url; ?>">Games</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="<?php bloginfo('template_url'); ?>/teachers.php">teacher</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- END HEADER-->

        <!-- SLIDER-->
        <section class="wrap wrap--w1760">
            <div class="rev_slider_wrapper">
                <div class="rev_slider fullwidthabanner js-rev" data-version="5.4.4" style="display:none" data-rev-height="760" data-rev-layout="auto" data-rev-stylearrow="au-rev-arrow-2" data-rev-bullets="false">
                    <ul>
                        <li class="rev-item rev-item-5" data-transition="fade">
                            <img class="rev-slidebg" src="<?php bloginfo('template_url'); ?>/images/slide-05.jpg" alt="Master Slider 01" />
                            <div class="tp-caption tp-resizeme rev-img-1" data-frames="[{&quot;delay&quot;:500,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[left]" data-y="[bottom]" data-hoffset="[-145, -145, -200, -200, -100]" data-voffset="[0, 0, -90, -80, -80]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                <img src="<?php bloginfo('template_url'); ?>/images/slide-item-08.png" alt="Slide Img" />
                            </div>
                            <div class="tp-caption tp-resizeme rev-img-1" data-frames="[{&quot;delay&quot;:900,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[left]" data-y="[bottom]" data-hoffset="[-360, -360, 0, -200, -100]" data-voffset="[0, 0, 0, 0, 0]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                <img src="<?php bloginfo('template_url'); ?>/images/slide-item-09.png" alt="Slide Img" />
                            </div>
                            <div class="tp-caption tp-resizeme rev-img-1" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[right,right,right, center, center]" data-y="[center]" data-hoffset="[-40, -40, 0, 0, 0]" data-voffset="[-32, -32, 0, 0, 0]" data-width="[625, 625, 570, 767, 575]" data-height="[&quot;auto&quot;]" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]"
                                data-textalign="center">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/line-red.png" alt="Slide Img" />
                            </div>
                            <div class="tp-caption tp-resizeme rev-text-4" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[right,right,right,center, center]" data-y="[center]" data-hoffset="[-40, -40, 0, 10, 10]" data-voffset="[-70, -70, -70, -70, -70]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[625, 625, 570, 765, 575]"
                                data-height="[&quot;auto&quot;]" data-whitespace="[normal, normal, normal, normal, normal]" data-color="#ff5c6c" data-fontweight="800" data-fontsize="[27, 27, 39, 39, 39]" data-textalign="center" data-lineheight="48" data-letterspacing="5">EDUCATION
                            </div>
                            <div class="tp-caption tp-resizeme rev-text-1" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[right,right,right,center, center]" data-y="[center]" data-hoffset="[-40, -40, -30, 10, 10]" data-voffset="[35, 35, 35, 35, 10]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[625, 625, 570, 765, 575]"
                                data-height="[&quot;auto&quot;]" data-whitespace="[normal, normal, normal, normal, normal]" data-color="#ff5c6c" data-fontweight="400" data-fontsize="[44, 44, 40, 40, 40]" data-lineheight="48" data-textalign="center">skills to raise children
                            </div>
                            <a class="tp-caption tp-resizeme" href="#" target="_self" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[right,right,right,center,center]" data-y="[center,center,center,center,center]" data-hoffset="[200, 200, 160, 10, 10]" data-voffset="[158, 158, 150, 150, 150]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                data-responsive_offset="on" data-responsive="off" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                            </a>
                        </li>
                        <li class="rev-item rev-item-5" data-transition="fade">
                            <img class="rev-slidebg" src="<?php bloginfo('template_url'); ?>/images/slide-06.jpg" alt="Master Slider 01" />
                            <div class="tp-caption tp-resizeme rev-img-1" data-frames="[{&quot;delay&quot;:500,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[left]" data-y="[bottom]" data-hoffset="[-145, -145, -200, -200, -100]" data-voffset="[0, 0, -90, -80, -80]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                <img src="<?php bloginfo('template_url'); ?>/images/slide-item-10.png" alt="Slide Img" />
                            </div>
                            <div class="tp-caption tp-resizeme rev-img-1" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[right,right,right, center, center]" data-y="[center]" data-hoffset="[-40, -40, 0, 0, 0]" data-voffset="[-32, -32, 0, 0, 0]" data-width="[625, 625, 570, 767, 575]" data-height="[&quot;auto&quot;]" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]"
                                data-textalign="center">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/line-black.png" alt="Slide Img" />
                            </div>
                            <div class="tp-caption tp-resizeme rev-text-4" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[right,right,right,center, center]" data-y="[center]" data-hoffset="[-40, -40, 0, 10, 10]" data-voffset="[-70, -70, -70, -70, -70]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[625, 625, 570, 765, 575]"
                                data-height="[&quot;auto&quot;]" data-whitespace="[normal, normal, normal, normal, normal]" data-color="#333" data-fontweight="800" data-fontsize="[27, 27, 39, 39, 39]" data-textalign="center" data-lineheight="48" data-letterspacing="5">EDUCATION
                            </div>
                            <div class="tp-caption tp-resizeme rev-text-5" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[right,right,right,center, center]" data-y="[center]" data-hoffset="[-40, -40, -30, 10, 10]" data-voffset="[35, 35, 35, 20, 50]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[625, 625, 570, 765, 575]"
                                data-height="[&quot;auto&quot;]" data-whitespace="[normal, normal, normal, normal, normal]" data-color="#333" data-fontweight="800" data-fontsize="[65, 65, 60, 60, 60]" data-lineheight="70" data-textalign="center">Study with Children
                            </div>
                            <a class="tp-caption tp-resizeme" href="#" target="_self" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-x="[right,right,right,center,center]" data-y="[center,center,center,center,center]" data-hoffset="[200, 200, 160, 10, 10]" data-voffset="[158, 158, 150, 150, 150]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                data-responsive_offset="on" data-responsive="off" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- END SLIDER-->

        <!-- PROGRAM-->
        <section class="section p-t-140 p-md-t-50 p-b-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading section-heading-1 m-b-110 m-md-b-60">
                            <h2 class="section-heading__title">Our Programs</h2>
                            <div class="section-heading__line">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/line-blue.png" alt="Line">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="program-wrap">
                            <div class="program__img">
                                <img src="<?php bloginfo('template_url'); ?>/images/program-01.png" alt="Program 1">
                            </div>
                            <div class="program-col">
                                <div class="box box-program-2 icon-right">
                                    <div class="box__head">
                                        <div class="box__head-bg">
                                            <img src="<?php bloginfo('template_url'); ?>/images/icon/bg-program-02.png" alt="Background" />
                                            <div class="box__head-icon">
                                                <img src="<?php bloginfo('template_url'); ?>/images/icon/program-02.png" alt="Icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box__body">
                                        <h3 class="title title--sm title--black box__title">
                                            <a href="#">Maths</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="box box-program-2 icon-right">
                                    <div class="box__head">
                                        <div class="box__head-bg">
                                            <img src="<?php bloginfo('template_url'); ?>/images/icon/bg-program-03.png" alt="Background" />
                                            <div class="box__head-icon">
                                                <img src="<?php bloginfo('template_url'); ?>/images/icon/program-03.png" alt="Icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box__body">
                                        <h3 class="title title--sm title--black box__title">
                                            <a href="#">Technology</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="program-col">
                                <div class="box box-program-2">
                                    <div class="box__head">
                                        <div class="box__head-bg">
                                            <img src="<?php bloginfo('template_url'); ?>/images/icon/bg-program-04.png" alt="Background" />
                                            <div class="box__head-icon">
                                                <img src="<?php bloginfo('template_url'); ?>/images/icon/program-04.png" alt="Icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box__body">
                                        <h3 class="title title--sm title--black box__title">
                                            <a href="#">Science</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="box box-program-2">
                                    <div class="box__head">
                                        <div class="box__head-bg">
                                            <img src="<?php bloginfo('template_url'); ?>/images/icon/bg-program-05.png" alt="Background" />
                                            <div class="box__head-icon">
                                                <img src="<?php bloginfo('template_url'); ?>/images/icon/program-05.png" alt="Icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box__body">
                                        <h3 class="title title--sm title--black box__title">
                                            <a href="#">Engineering</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PROGRAM-->

        <!-- OFFER-->
        <section class="section bg-pattern bg-pattern-3 p-t-125 p-md-t-50 p-b-205 p-md-b-100">
            <div class="bg-cloud-4">
                <img src="<?php bloginfo('template_url'); ?>/images/icon/bg-cloud-04.png" alt="Cloud">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading section-heading-1">
                            <h2 class="section-heading__title">STEM edukacija</h2>
                            <div class="section-heading__line">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/line-blue.png" alt="Line">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-tab-1">
                            <ul class="nav au-tab-list" role="tablist">
                                <li class="au-tab-list__item">
                                    <a class="active show" href="#active" role="tab" data-toggle="tab" aria-controls="active" aria-selected="true">Science</a>
                                </li>
                                <li class="au-tab-list__item">
                                    <a href="#commit" role="tab" data-toggle="tab" aria-controls="commit" aria-selected="true">Technology</a>
                                </li>
                                <li class="au-tab-list__item">
                                    <a href="#out" role="tab" data-toggle="tab" aria-controls="out" aria-selected="true">Engineering</a>
                                </li>
                                <li class="au-tab-list__item">
                                    <a href="#edu" role="tab" data-toggle="tab" aria-controls="edu" aria-selected="true">Maths</a>
                                </li>
                            </ul>
                            <div class="tab-content au-tab-content">
                                <div class="tab-pane au-tab-pane fade show active" role="tabpanel" id="active">
                                    <div class="au-tab-pane-inner">
                                        <div class="au-tab-pane__text">
                                            <h3 class="title title--lg title--black">Nauka</h3>
                                            <p class="m-b-15">Nauka se zasniva na istraživanjima koja obično provode akademske i istraživačke institucije, kao i vladine agencije i kompanije. Praktični utjecaj naučnog istraživanja doveo je do pojave naučnih politika koje
                                                nastoje utjecati na znanstveno poduzeće davanjem prioriteta razvoju komercijalnih proizvoda, naoružanja, zdravstvene zaštite, javne infrastrukture i zaštite okoliša. Nauka se zasniva na istraživanjima koja
                                                obično provode akademske i istraživačke institucije, kao i vladine agencije i kompanije.</p>
                                            <p>Praktični utjecaj naučnog istraživanja doveo je do pojave naučnih politika koje nastoje utjecati na znanstveno poduzeće davanjem prioriteta razvoju komercijalnih proizvoda, naoružanja, zdravstvene zaštite, javne
                                                infrastrukture i zaštite okoliša. </p>
                                        </div>
                                        <div class="au-tab-pane__img">
                                            <div class="img-radius img--w160 m-r-30 m-md-r-0">
                                                <img src="<?php bloginfo('template_url'); ?>/images/offer-01.jpg" alt="Offer 1">
                                            </div>
                                            <div class="img-radius img--w220">
                                                <img src="<?php bloginfo('template_url'); ?>/images/offer-02.jpg" alt="Offer 2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane au-tab-pane fade" role="tabpanel" id="commit">
                                    <div class="au-tab-pane-inner">
                                        <div class="au-tab-pane__text">
                                            <h3 class="title title--lg title--black">Tehnologija</h3>
                                            <p class="m-b-15">Tehnologija ("nauka o zanatu", s grčkog τέχνη, techne, "umjetnost, vještina, lukavost ruke"; i -λογία, -logia) je zbroj tehnika, vještina, metoda i procesa koji se koriste u proizvodnji roba ili usluga ili u
                                                postizanju ciljeva, poput naučnog istraživanja. Tehnologija može biti poznavanje tehnika, procesa i slično, ili može biti ugrađena u mašine kako bi se omogućilo rad bez detaljnog znanja o njihovom radu.
                                            </p>
                                            <p>Sistemi (npr. Mašine) koji primjenjuju tehnologiju uzimajući unos, mijenjajući ga prema upotrebi sistema, a zatim proizvodeći rezultat, nazivaju se tehnološkim sistemima ili tehnološkim sistemima. </p>
                                        </div>
                                        <div class="au-tab-pane__img">
                                            <div class="img-radius img--w160 m-r-30 m-md-r-0">
                                                <img src="<?php bloginfo('template_url'); ?>/images/offer-01.jpg" alt="Offer 1">
                                            </div>
                                            <div class="img-radius img--w220">
                                                <img src="<?php bloginfo('template_url'); ?>/images/offer-02.jpg" alt="Offer 2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane au-tab-pane fade" role="tabpanel" id="out">
                                    <div class="au-tab-pane-inner">
                                        <div class="au-tab-pane__text">
                                            <h3 class="title title--lg title--black">Inženjerstvo</h3>
                                            <p class="m-b-15">Inženjerstvo je upotreba naučnih principa za projektovanje i izgradnju mašina, konstrukcija i drugih predmeta, uključujući mostove, tunele, puteve, vozila i zgrade. </p>
                                            <p>Inženjerska disciplina obuhvata širok spektar specijalizovanijih oblasti tehnike, od kojih svaka ima specifičniji naglasak na određenim oblastima primenjene matematike, primenjene nauke i vrstama primene. </p>
                                        </div>
                                        <div class="au-tab-pane__img">
                                            <div class="img-radius img--w160 m-r-30 m-md-r-0">
                                                <img src="<?php bloginfo('template_url'); ?>/images/offer-01.jpg" alt="Offer 1">
                                            </div>
                                            <div class="img-radius img--w220">
                                                <img src="<?php bloginfo('template_url'); ?>/images/offer-02.jpg" alt="Offer 2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane au-tab-pane fade" role="tabpanel" id="edu">
                                    <div class="au-tab-pane-inner">
                                        <div class="au-tab-pane__text">
                                            <h3 class="title title--lg title--black">Matematika</h3>
                                            <p class="m-b-15">Matematika je bitna u mnogim poljima, uključujući prirodne nauke, inženjerstvo, medicinu, finansije i društvene nauke. Primijenjena matematika dovela je do potpuno novih matematičkih disciplina, poput statistike
                                                i teorije igara.</p>
                                            <p>Matematičari se bave čistom matematikom (matematika za sebe) bez imajući na umu bilo kakvu primjenu, ali praktične primjene za ono što je počelo kao čista matematika često se otkrivaju kasnije. </p>
                                        </div>
                                        <div class="au-tab-pane__img">
                                            <div class="img-radius img--w160 m-r-30 m-md-r-0">
                                                <img src="<?php bloginfo('template_url'); ?>/images/offer-01.jpg" alt="Offer 1">
                                            </div>
                                            <div class="img-radius img--w220">
                                                <img src="<?php bloginfo('template_url'); ?>/images/offer-02.jpg" alt="Offer 2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane au-tab-pane fade" role="tabpanel" id="dev">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OFFER-->

        <!-- OUR CLASS-->
        <section class="section p-t-140 p-md-t-60 p-b-80">
            <div class="container">
                <div class="col-md-12">
                    <div class="section-heading section-heading-1">
                        <h2 class="section-heading__title">O STEM-u</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-l-30 p-r-30 p-md-l-15 p-md-r-15">
                        <div class="media media-our-class-4">
                            <div class="media__img">
                                <video width="100%" height="480" controls>
                                    <source src="<?php bloginfo("template_url")?>/videos/STEM-sta.mp4" type="video/mp4">
                                    Vaš čitač ne podržava video.
                                </video>
                            </div>
                            <div class="media__body">
                                <h3 class="media__title">
                                    <a href="classes-single.html">Šta je STEM?</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-l-30 p-r-30 p-md-l-15 p-md-r-15">
                        <div class="media media-our-class-4">
                            <div class="media__img">
                                <video width="100%" height="480" controls>
                                    <source src="<?php bloginfo("template_url")?>/videos/STEM-kako.mp4" type="video/mp4">
                                    Vaš čitač ne podržava video.
                                </video>
                            </div>
                            <div class="media__body">
                                <h3 class="media__title">
                                    <a href="classes-single.html">Kako STEM?</a>
                                </h3>
                            </div>
                        </div>
                        <div class="media media-our-class-4">
                            <div class="media__img">
                                <video width="100%" height="480" controls>
                                    <source src="<?php bloginfo("template_url")?>/videos/STEM-zasto.mp4" type="video/mp4">
                                    Vaš čitač ne podržava video.
                                </video>
                            </div>
                            <div class="media__body">
                                <h3 class="media__title">
                                    <a href="classes-single.html">Zašto STEM?</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- END OUR CLASS-->

        <!-- FOOTER-->
        <section class="section copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-wrap">
                            <span class="copyright__text">© 2021 STEM.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END FOOTER-->
        </div>


        <!-- BACK TO TOP-->
        <div id="to-top">
            <a href="#">
            <img src="<?php bloginfo('template_url'); ?>/images/icon/to-top.png" alt="To Top">
        </a>
        </div>
        <!-- END BACK TO TOP-->
        <!-- Jquery JS-->
        <script src="<?php bloginfo('template_url'); ?>/vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS-->
        <script src="<?php bloginfo('template_url'); ?>/vendor/animsition/animsition.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/slick/slick.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/lightbox2/js/lightbox.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/wow/wow.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/isotope/isotope.pkgd.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/matchHeight/jquery.matchHeight-min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/select2/select2.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/sweetalert/sweetalert.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/noUiSlider/nouislider.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/modalVideo/modal-video.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!--
| (Load Extensions only on Local File Systems !
| The following part can be removed on Server for On Demand Loading)
-->
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <!-- Config Revolution Slider-->
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/config-revolution.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/countdowntime/moment.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/countdowntime/moment-timezone.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendor/countdowntime/countdowntime.js"></script>

        <!-- Main JS-->
        <script src="<?php bloginfo('template_url') ?>/js/global.js"></script>

</body>

</html>
<!-- end document-->
