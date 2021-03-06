<?php include '../../../wp-load.php'; ?>

<?php
$user = wp_get_current_user();
$roles = $user->roles;
$is_kid = in_array("kid", $roles);
if ($is_kid) {
	$play_count = get_user_meta($user->ID, 'game1', true);
	if (strlen($play_count) == 0) {
		add_user_meta($user->ID, 'game1', '1');
	} else {
		$new_value = (int)$play_count;
		$new_value++;
		update_user_meta($user->ID, 'game1', "$new_value");
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jobby Theme Templates">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="Jobby Theme Templates">

    <!-- Title Page-->
    <title>Igrice</title>

    <!-- Icons font CSS-->
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/linearicons-free/css/linearicons-free.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="css/nunito-font.min.css" rel="stylesheet" media="all">
    <link href="css/chelsea-market-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/lightbox2/css/lightbox.min.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/modalVideo/modal-video.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.min.css" rel="stylesheet" media="all">

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
                                        <a href="/wordpress">
                                            <span class="bg-link">
                                                Početna strana
                                            </span>
                                        </a>
                                    </li>
                                    <li class="header-navbar__item has-sub">
                                        <a href="games.php">
                                            <span class="bg-link">igrice</span>
                                        </a>
                                    </li>
                                    <li class="header-navbar__item has-sub">
                                        <a href="teachers.php">
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
                                <a href="wordpress">Početna strana</a>
                            </li>
                            <li class="has-sub">
                                <ul class="list-unstyled navbar-mobile__child first">
                                    <li>
                                        <a href="404error.html">404 error</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="<?php bloginfo('template_url'); ?>/games.php">igrice</a>
                                <ul class="list-unstyled navbar-mobile__child first">
                                    <li>
                                        <a href="games.php">Igrice</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="teachers.php">nastavnici</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- END HEADER-->

        <!-- MAIN-->
        <main id="main">


            <!-- PAGE HEADING-->
            <section class="section page-heading js-parallax-scroll" style="background-image: url('images/bg-heading-03.jpg');">
                <div class="container">
                    <div class="page-heading-inner">
                        <div class="section-heading section-heading-1 section-heading-1--tiny text-left">
                            <h2 class="section-heading__title">Igrice</h2>
                            <div class="section-heading__line">
                                <img src="images/icon/line-blue-small.png" alt="Line" />
                            </div>
                        </div>
                        <nav class="au-breadcrumb">
                            <ul class="list-unstyled list-breadcrumb">
                                <li class="list-breadcrumb__item">
                                    <a href="/wordpress/">Početna strana</a>
                                </li>
                                <li class="list-breadcrumb__item">Igrice</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
            <!-- END PAGE HEADING-->

            <!-- CLASS SINGLE-->
            <section class="section p-t-125">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-9">
                            <div class="p-r-10 p-md-r-0">
                                <div class="media media-class-single">
                                    <div class="media__img m-b-30">
                                        <iframe class="img-radius" src="https://scratch.mit.edu/projects/477492180/embed" allowtransparency="true" width="100%" height="700px" frameborder="0" scrolling="no" allowfullscreen></iframe>
                                    </div>
                                    <div class="media__body">
                                        <h2 class="title title--xl m-b-20">Napravimo geobord</h2>
                                        <video width="640" height="480" controls>
                                            <source src="videos/geobord.mp4" type="video/mp4">
                                             Vaš čitač ne podržava video.
                                         </video>
                                        <p class="m-b-15">Na deblje parče kartona, postavimo tiple na podjednakim rastojanjima u obliku pravougaone mreže.</p>
                                        <p class="m-b-30">
                                            <i>Zadaci za decu</i>
                                            <ul style="list-style-type: circle;">
                                                <li>
                                                    Povlačenjem lastiša i kačenjem za tiple napravite osnovne geometrijske oblike. Nakon toga napravite predmete i oblike iz vašeg okruženja, slova, brojeve itd.
                                                </li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-3">
                            <div class="au-card blue">
                                <div class="au-card__head">
                                    <h3 class="title title--white title--md">Zahtevi za igru</h3>
                                </div>
                                <div class="au-card__body">
                                    <div class="box box-info-2">
                                        <div class="box__head">
                                            <div class="box-icon">
                                                <span class="lnr lnr-leaf"></span>
                                            </div>
                                        </div>
                                        <div class="box__body">
                                            <h5 class="title">Godine</h5>
                                            <span class="d-block">5 - 6</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="au-card yellow">
                                <div class="au-card__head">
                                    <h3 class="title title--white title--md">Informacije</h3>
                                </div>
                                <div class="au-card__body">
                                    <div class="box box-info-2">
                                        <div class="box__head">
                                            <div class="box-icon">
                                                <span class="lnr lnr-users"></span>
                                            </div>
                                        </div>
                                        <div class="box__body">
                                            <h5 class="title">Nastavnik</h5>
                                            <span class="d-block">Alice Wonderland</span>
                                            <span class="d-block">Hermione Granger</span>
                                        </div>
                                    </div>
                                    <div class="box box-info-2">
                                        <div class="box__head">
                                            <div class="box-icon">
                                                <span class="lnr lnr-phone"></span>
                                            </div>
                                        </div>
                                        <div class="box__body">
                                            <h5 class="title">Telefon</h5>
                                            <span class="d-block">+381 111 1111</span>
                                            <span class="d-block">+381 222 2222</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END CLASS SINGLE-->

            <!-- OTHER CLASS-->
            <section class="section p-t-25 p-md-t-40 p-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading section-heading-1 section-heading-1--small text-left">
                                <h2 class="section-heading__title">Ostale igrice</h2>
                                <div class="section-heading__line">
                                    <img src="images/icon/line-blue-small.png" alt="Line">
                                </div>
                            </div>
                            <div class="slick-class-3">
                                <div class="slick__wrap-content js-slick-wrapper" data-slick-xs="1" data-slick-sm="2" data-slick-md="2" data-slick-lg="3" data-slick-xl="3" data-slick-dots="false" data-slick-customnav="true" data-slick-autoplay="true">
                                    <div class="slick__content js-slick-content">
                                        <div class="slick__item">
                                            <div class="media media-our-class-3">
                                                <div class="media__img">
                                                    <a href="igrajmo-se-bojama.php">
                                                        <img src="images/our-class-07.jpg" alt="Igrajmo se bojama" />
                                                    </a>
                                                </div>
                                                <div class="media__body">
                                                    <h3 class="media__title">
                                                        <a href="igrajmo-se-bojama.php">Igrajmo se bojama</a>
                                                    </h3>
                                                    <div class="media-our-class__info">
                                                        <div class="row no-gutters">
                                                            <div class="col-6">
                                                                <div>
                                                                    <span class="name">Godine</span>
                                                                    <span class="value">5 - 6</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slick__item">
                                            <div class="media media-our-class-3">
                                                <div class="media__img">
                                                    <a href="kisni-oblak.php">
                                                        <img src="images/our-class-09.jpg" alt="Kisni oblak" />
                                                    </a>
                                                </div>
                                                <div class="media__body">
                                                    <h3 class="media__title">
                                                        <a href="kisni-oblak.php">Kišni oblak</a>
                                                    </h3>
                                                    <div class="media-our-class__info">
                                                        <div class="row no-gutters">
                                                            <div class="col-6">
                                                                <div>
                                                                    <span class="name">Godine</span>
                                                                    <span class="value">5 - 6</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick__nav arrows-3">
                                        <span class="slick-prev slick-arrow js-slick-prev zmdi zmdi-chevron-left"></span>
                                        <span class="slick-next slick-arrow js-slick-next zmdi zmdi-chevron-right"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END OTHER CLASS-->

            <!-- STATISTIC-->
            <section class="section">
                <div class="row no-gutters statistic-1">
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic__item blue">
                            <div class="icon">
                                <img src="images/icon/ic-statis-01.png" alt="icon 1">
                            </div>
                            <div class="statistic__item-inner">
                                <span class="number js-counterup">15</span>
                                <span class="desc">Nastavnika</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic__item yellow">
                            <div class="icon">
                                <img src="images/icon/ic-statis-02.png" alt="icon 2">
                            </div>
                            <div class="statistic__item-inner">
                                <span class="number js-counterup">140</span>
                                <span class="desc">Polaznika</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic__item pink">
                            <div class="icon">
                                <img src="images/icon/ic-statis-03.png" alt="icon 3">
                            </div>
                            <div class="statistic__item-inner">
                                <span class="number js-counterup">1500</span>
                                <span class="desc">Radnih časova</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic__item green">
                            <div class="icon">
                                <img src="images/icon/ic-statis-04.png" alt="icon 4">
                            </div>
                            <div class="statistic__item-inner">
                                <span class="number js-counterup">32</span>
                                <span class="desc">Odabrane lekcije</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

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
        </main>
        <!-- END MAIN-->
    </div>



    <!-- BACK TO TOP-->
    <div id="to-top">
        <a href="#">
            <img src="images/icon/to-top.png" alt="To Top">
        </a>
    </div>
    <!-- END BACK TO TOP-->
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/noUiSlider/nouislider.min.js"></script>
    <script src="vendor/modalVideo/modal-video.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
