<?php include '../../../wp-load.php'; ?>
<?php
$url = "/wordpress/wp-admin/profile.php";
if (is_user_logged_in()) {
    $user = wp_get_current_user();
    $roles = $user->roles;
    $is_teacher = in_array("teacher", $roles);
    if ($is_teacher) {
        $url = "game-stats.php";
    } else {
        $url = "games.php";
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
    <title>Nastavnici</title>

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
                                        <a href="<?php echo $url; ?>">
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
                                <a href="<?php echo $url; ?>">igrice</a>
                                <ul class="list-unstyled navbar-mobile__child first">
                                    <li>
                                        <a href="<?php echo $url; ?> ">Igrice</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="teachers.php">teacher</a>
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
            <section class="section page-heading js-parallax-scroll" style="background-image: url('images/bg-heading-02.jpg');">
                <div class="container">
                    <div class="page-heading-inner">
                        <div class="section-heading section-heading-1 section-heading-1--tiny text-left">
                            <h2 class="section-heading__title">nastavnici</h2>
                            <div class="section-heading__line">
                                <img src="images/icon/line-blue-small.png" alt="Line" />
                            </div>
                        </div>
                        <nav class="au-breadcrumb">
                            <ul class="list-unstyled list-breadcrumb">
                                <li class="list-breadcrumb__item">
                                    <a href="/wordpress/">Početna strana</a>
                                </li>
                                <li class="list-breadcrumb__item">Nastavnici</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
            <!-- END PAGE HEADING-->

            <!-- OUR TEACHER-->
            <section class="section p-t-120 p-md-t-80 p-b-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading section-heading-1">
                                <h2 class="section-heading__title">Nastavnici</h2>
                                <div class="section-heading__line">
                                    <img src="images/icon/line-blue.png" alt="Line">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="media media-teacher-3">
                                <div class="media__img">
                                    <a href="teacher-single.html">
                                        <img src="images/teacher-06.jpg" alt="Keri En" />
                                    </a>
                                </div>
                                <div class="media__body">
                                    <h4 class="media__title title title--sm title--black">
                                        Keri En
                                    </h4>
                                    <span class="media__desc">Koordinator za STEM</span>
                                    <p class="media__text">
                                        Volim da se bavim ovim. STEM je zabavan i perspektivan, ovim projektom ćemo promeniti svet!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media media-teacher-3">
                                <div class="media__img">
                                    <a href="teacher-single.html">
                                        <img src="images/teacher-07.jpg" alt="Arturija Pendragon" />
                                    </a>
                                </div>
                                <div class="media__body">
                                    <h4 class="media__title title title--sm title--black">
                                        Arturija Pendragon
                                    </h4>
                                    <span class="media__desc">Nauka</span>
                                    <p class="media__text">Nauka je nešto što me privlači celog svog života i pokušavam da svoj entuzijazam prenesem kroz ovaj projekat!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media media-teacher-3">
                                <div class="media__img">
                                    <a href="teacher-single.html">
                                        <img src="images/teacher-08.jpg" alt="Hinata Hjuga" />
                                    </a>
                                </div>
                                <div class="media__body">
                                    <h4 class="media__title title title--sm title--black">
                                        Hinata Hjuga
                                    </h4>
                                    <span class="media__desc">Inženjerstvo</span>
                                    <p class="media__text">Inženjerstvo je vitalni deo tehnologije, podučavanjem dece istim pokušavam da dam svom doprinos čovečanstvu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media media-teacher-3">
                                <div class="media__img">
                                    <a href="teacher-single.html">
                                        <img src="images/teacher-09.jpg" alt="Elizabet Lajones" />
                                    </a>
                                </div>
                                <div class="media__body">
                                    <h4 class="media__title title title--sm title--black">
                                        Elizabet Lajones
                                    </h4>
                                    <span class="media__desc">Tehnologija</span>
                                    <p class="media__text">Tehnologija! Nauka koja se najbrže razvija i gura čovečanstvo napred. Želim da budem deo ovog projekta jer smatram da je potencijal ogroman.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media media-teacher-3">
                                <div class="media__img">
                                    <a href="teacher-single.html">
                                        <img src="images/teacher-11.jpg" alt="Juno Gasai" />
                                    </a>
                                </div>
                                <div class="media__body">
                                    <h4 class="media__title title title--sm title--black">
                                        Juno Gasai
                                    </h4>
                                    <span class="media__desc">Matematika</span>
                                    <p class="media__text">Matematika, osnovni gradivni deo ogromnog dela nauke. Preciznost, korektnost i procene, sve ovo nam je potrebno za napredak, pa i mladi umovi koji su zainteresovani za istu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END OUR TEACHER-->
        </main>
        <!-- END MAIN-->

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
    <script src="js/config-contact.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
