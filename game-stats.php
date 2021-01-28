<?php include '../../../wp-load.php'; ?>

<?php
$users = get_users( array( 'fields' => array( 'ID' ), 'role' => 'kid' ) );
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
	<style>
		table {
		  border-collapse: collapse;
		  font-family: Arial, Helvetica, sans-serif;
		  margin: 0 auto;
		  width: 100%;
		}
		td, th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2;}

		tr:hover {background-color: #ddd;}

		th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #4CAF50;
		  color: white;
		}

		.centered-content {
			margin: auto;
			width: 70%; 
		}
	</style>
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
                        <div style="width:100%;">
                            <div style="width:100%;">
                                <div class="media media-class-single">
								<div class="centered-content">
										<ul style="list-style-type:circle;">
											Igrajmo se bojama - zadaci<br>
											<li>Objasniti deci osnovni koncept materije, molekula i atoma.</li>
											<li>Šta je to hromatografija?</li>
											<li>Čemu ona služi?</li>
										</ul>
									<br>
										<ul style="list-style-type:circle;">
											Geobord - zadaci<br>
											<li>Zašto je bitno poznavanje osnovnih geometrijskih oblika?</li>
											<li>Gde ih srećemo u životu?</li>
											<li>Da li od osnovnih oblika možemo da pravimo kompleksnije oblike?</li>
											<li>Da li je ovaj način lsičan dobijanju slike na našim ekranima i TV aparatima?</li>
										</ul>
									<br>
										<ul style="list-style-type:circle;">
											Kisni oblak u tegli - zadaci<br>
											<li>Objasniti kako nastaje oblak isparavenjem vodene pare.</li>
											<li>Šta sve u sebe privlači oblak?</li>
											<li>Šta se mora desiti da bi počela da pada kiša iz oblaka?</li>
										</ul>
									<br>
									<table>
										<tr>
											<th>Ime</th>
											<th>Prezime</th>
											<th>Igrica 1</th>
											<th>Igrica 2</th>
											<th>Igrica 3</th>
										</tr>
										<?php foreach ($users as $user): ?>
										<?php $user_data = get_user_meta($user->ID); ?>
										<tr>
											<td>
												<?php echo $user_data['first_name'][0]; ?>
											</td>
											<td>
												<?php echo $user_data['last_name'][0]; ?>
											</td>
											<td>
												<?php echo $user_data['game0'][0] ?? 0; ?>
											</td>
											<td>
												<?php echo $user_data['game1'][0] ?? 0; ?>
											</td>
											<td>
												<?php echo $user_data['game2'][0] ?? 0; ?>
											</td>
										</tr>
										<?php endforeach; ?>
									</table>
									<br>
									<br>
								</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END CLASS SINGLE-->

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
