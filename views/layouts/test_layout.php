<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Bazooka.My - <?php echo $title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="Nike SB Stefan Janoski Max - Shop online for Nike SB Stefan Janoski Max with JD Sports, the UK's leading sports fashion retailer."/>
        <meta content="" name="shamie_kcs@yahoo.com"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="<?php echo base_url(); ?>assets/css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.png"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img" src="<?php echo base_url(); ?>assets/img/logo.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">About</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#experience">Experience</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Work</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 sm-margin-b-60">
                        <div class="margin-b-30">
                            <h1 class="promo-block-title"><?php echo $product['product_name'];?></h1>
                            <p class="promo-block-text">Web &amp; UI/UX Designer</p>
                        </div>
                        <ul class="list-inline">
                            <li><a href="#" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-twitter"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-dribbble"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-behance"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="promo-block-img-wrap">
                            <img class="promo-block-img img-responsive" src="<?php echo base_url(); ?>assets/img/mockup/avatar-01.png" align="Avatar">
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-5 sm-margin-b-60">
                        <img class="full-width img-responsive" src="<?php echo base_url(); ?>assets/img/500x700/01.jpg" alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <div class="section-seperator margin-b-50">
                            <div class="margin-b-50">
                                <div class="margin-b-30">
                                    <h2>About Me</h2>
                                    <p>I'm Alisa Portman, orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <a href="#" class="btn-theme btn-theme-md btn-default-bg text-uppercase">Download my CV</a>
                            </div>
                        </div>

                        <h2>My Skills</h2>
                        <!-- Progress Box -->
                        <div class="progress-box">
                            <h5>Adobe Illustrator <span class="color-heading pull-right">87%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="87"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Adobe Photoshop <span class="color-heading pull-right">96%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="96"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Graphic Design <span class="color-heading pull-right">77%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                            </div>
                        </div>
                        <!-- End Progress Box -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End About -->

        <!-- Experience -->
        <div id="experience">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row row-space-2 margin-b-4">
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-mustache"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Illustrator</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service bg-color-base wow zoomIn" data-height="height" data-wow-duration=".3" data-wow-delay=".1s">
                                <div class="service-element">
                                    <i class="service-icon color-white icon-screen-tablet"></i>
                                </div>
                                <div class="service-info">
                                    <h3 class="color-white">Graphic Design</h3>
                                    <p class="color-white margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 sm-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Photoshop</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Sketch</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Experience -->

        <!-- Work -->
        <div id="work">
            <div class="container content-lg">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Latest Products</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/970x647/01.jpg" alt="Latest Products Image">
                            </div>
                        </div>
                        <h4><a href="#">Triangle Roof</a> <span class="text-uppercase margin-l-20">Management</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/970x647/02.jpg" alt="Latest Products Image">
                            </div>
                        </div>
                        <h4><a href="#">Curved Corners</a> <span class="text-uppercase margin-l-20">Developmeny</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/970x647/03.jpg" alt="Latest Products Image">
                            </div>
                        </div>
                        <h4><a href="#">Bird On Green</a> <span class="text-uppercase margin-l-20">Design</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Work -->

        <!-- Clients -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo base_url(); ?>assets/img/clients/01.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo base_url(); ?>assets/img/clients/02.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo base_url(); ?>assets/img/clients/03.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo base_url(); ?>assets/img/clients/04.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo base_url(); ?>assets/img/clients/05.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo base_url(); ?>assets/img/clients/06.png" alt="Clients Logo">
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

        <!-- Promo Banner -->
        <div class="promo-banner parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/img/1920x1080/01.jpg">
            <div class="container-sm content-lg">
                <h2 class="promo-banner-title">Displaying the Result</h2>
                <p class="promo-banner-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
            </div>
        </div>
        <!-- End Promo Banner -->

        <!-- Contact -->
        <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                           <h2>Contact Me</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row">
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h4>Location</h4>
                            <a href="#">Brookyln, New York</a>
                        </div>
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h4>Phone</h4>
                            <a href="#">+77 234 548 00 00</a>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h4>Email</h4>
                            <a href="mailto:#">alex.teseira@gmail.com</a>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h4>Web</h4>
                            <a href="#">alex.teseira.com</a>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="<?php echo base_url(); ?>assets/img/logo.png" alt="Acecv Logo">
                    </div>
                    <div class="col-xs-6 text-right sm-text-left">
                        <p class="margin-b-0"><a class="fweight-700" href="http://keenthemes.com/preview/acecv/">Acecv</a> Theme Powered by: <a class="fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery.appear.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/js/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/components/progress-bar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/components/wow.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>