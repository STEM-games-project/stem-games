<?php include '../../../wp-load.php'; ?>

<?php
$current_user = wp_get_current_user();
$roles = $current_user->roles;
$is_teacher = in_array("teacher", $roles);
$url0 = "igrajmo-se-bojama.php";
$url1 = "geobord.php";
$url2 = "kisni-oblak.php";
if ($is_teacher) {
	$url0 = "game-stats.php";
	$url1 = "game-stats.php";
	$url2 = "game-stats.php";
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
                                        <a href="games.php">igrice</a>
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
                                    <a href="/wordpress/">Početna Strana</a>
                                </li>
                                <li class="list-breadcrumb__item">Igrice</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
            <!-- END PAGE HEADING-->

            <!-- CLASSES-->
            <section class="section js-isotope-wrapper p-t-125 p-b-80">
            </section>
            <!-- END CLASSES-->

            <!-- TEACHER-->
            <section class="section bg-pink-2 p-t-120 p-md-t-60 p-b-80">
                <div class="bg-cloud-2">
                    <img src="images/icon/bg-cloud-06.png" alt="Cloud 1">
                </div>
                <div class="bg-cloud-3">
                    <img src="images/icon/bg-cloud-07.png" alt="Cloud 2">
                </div>
                <div class="container">
                    <div class="container">
                        <div class="row isotope-content">
                            <div class="col-md-6 col-lg-4 isotope-item isotope-item-sizer play">
                                <div class="media media-our-class-3">
                                    <div class="media__img">
										<a href="<?php echo $url0; ?>">
                                            <img src="images/our-class-07.jpg" alt="Igrajmo se bojama" />
                                        </a>
                                        <span class="media-our-class__price">
                                    </span>
                                    </div>
                                    <div class="media__body">
                                        <h3 class="media__title">
											<a href="<?php echo $url0; ?>">Igrajmo se bojama</a>
                                        </h3>
                                        <div class="media-our-class__info">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div>
                                                        <span class="name">Godine:</span>
                                                        <span class="value">5 - 6</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 isotope-item isotope-item-sizer pri">
                                <div class="media media-our-class-3">
                                    <div class="media__img">
										<a href="<?php echo $url1; ?>">
                                            <img src="images/our-class-08.jpg" alt="Napravimo geobord" />
                                        </a>
                                        <span class="media-our-class__price">
                                    </span>
                                    </div>
                                    <div class="media__body">
                                        <h3 class="media__title">
											<a href="<?php echo $url1; ?>">Napravimo geobord</a>
                                        </h3>
                                        <div class="media-our-class__info">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div>
                                                        <span class="name">Godine:</span>
                                                        <span class="value">5 - 6</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 isotope-item isotope-item-sizer play">
                                <div class="media media-our-class-3">
                                    <div class="media__img">
										<a href="<?php echo $url2; ?>">
                                            <img src="images/our-class-09.jpg" alt="Kišni oblak" />
                                        </a>
                                        <span class="media-our-class__price">
                                    </span>
                                    </div>
                                    <div class="media__body">
                                        <h3 class="media__title">
											<a href="<?php echo $url2; ?>">Kišni oblak</a>
                                        </h3>
                                        <div class="media-our-class__info">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div>
                                                        <span class="name">Godine:</span>
                                                        <span class="value">5 - 6</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- END TEACHER-->

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
