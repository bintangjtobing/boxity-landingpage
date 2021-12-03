<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="boxity central indonesia" />
    <meta name="description" content="@yield('page_description')" />
    <meta name="keywords"
        content="boxity, boxityerp, realizeboxity, boxity central indonesia, erp boxity, warehouse management, human resources management, financial management, boxity warehouse, boxity WMS, boxity financial, boxity indonesia" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VLZMGJP9FS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VLZMGJP9FS');

    </script>

    <!-- SITE TITLE -->
    <title>Boxity Central Indonesia - @yield('title')</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="icon"
        href="https://res.cloudinary.com/boxity-id/image/upload/v1634800361/assets/site%20needs/icon_za3vme.png"
        type="image/png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="https://res.cloudinary.com/boxity-id/image/upload/c_scale,w_152/v1634800361/assets/site%20needs/icon_za3vme.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="https://res.cloudinary.com/boxity-id/image/upload/c_scale,w_120/v1634800361/assets/site%20needs/icon_za3vme.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="https://res.cloudinary.com/boxity-id/image/upload/c_scale,w_76/v1634800361/assets/site%20needs/icon_za3vme.png">

    {{-- Meta --}}
    <meta name="og:title" property="og:title" content="Boxity Central Indonesia" />
    <meta name="og:url" property="og:url" content="https://boxity.id" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/v1637316265/assets/site%20needs/parts_m9hpuu.png" />
    <meta name="og:description" property="og:description"
        content="A cloud-based system that helps companies to run their businesses as efficiently as possible. We provide a way for you to manage and integrate various activities and operations of anything that your business needs such as productions, assets, financial management, and human resources management through a software application." />
    <meta name="twitter:card" content="Boxity Central Indonesia" />
    <meta name="twitter:title" property="og:title" content="Boxity Central Indonesia" />
    <meta name="twitter:url" property="og:url" content="https://boxity.id" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/v1637316265/assets/site%20needs/parts_m9hpuu.png" />
    <meta name="twitter:description" property="og:description"
        content="A cloud-based system that helps companies to run their businesses as efficiently as possible. We provide a way for you to manage and integrate various activities and operations of anything that your business needs such as productions, assets, financial management, and human resources management through a software application." />
    <link rel="canonical" href="https://boxity.id/" />
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/boxity-id/image/upload/v1634800361/assets/site%20needs/icon_za3vme.png"
        type="image/png" sizes="64x64" />


    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{!!asset('webpage/css/bootstrap.min.css')!!}" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="{!!asset('webpage/css/flaticon.css')!!}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="{!!asset('webpage/css/menu.css')!!}" rel="stylesheet">
    <link id="effect" href="{!!asset('webpage/css/dropdown-effects/fade-down.css')!!}" media="all" rel="stylesheet">
    <link href="{!!asset('webpage/css/magnific-popup.css')!!}" rel="stylesheet">
    <link href="{!!asset('webpage/css/owl.carousel.min.css')!!}" rel="stylesheet">
    <link href="{!!asset('webpage/css/owl.theme.default.min.css')!!}" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="{!!asset('webpage/css/animate.css')!!}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="{!!asset('webpage/css/style.css')!!}" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="{!!asset('webpage/css/responsive.css')!!}" rel="stylesheet">
    <link href="{!!asset('webpage/custom.css')!!}" rel="stylesheet">

</head>

<body>




    <!-- PRELOADER SPINNER
		============================================= -->
    <div id="loading" class="stateblue-loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>




    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page">




        <!-- HEADER
			============================================= -->
        <header id="header" class="header tra-menu navbar-dark">
            <div class="header-wrapper">


                <!-- MOBILE HEADER -->
                <div class="wsmobileheader clearfix">
                    <span class="smllogo"><img
                            src="https://res.cloudinary.com/boxity-id/image/upload/v1638440373/assets/site%20needs/color_logo_boxity_yor31q.png"
                            alt="mobile-logo" /></span>
                    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                </div>


                <!-- NAVIGATION MENU -->
                <div class="wsmainfull menu clearfix">
                    <div class="wsmainwp clearfix">


                        <!-- HEADER LOGO -->
                        <div class="desktoplogo"><a href="/" class="logo-black"><img
                                    src="https://res.cloudinary.com/boxity-id/image/upload/v1638440373/assets/site%20needs/color_logo_boxity_yor31q.png"
                                    alt="header-logo"></a></div>
                        <div class="desktoplogo"><a href="/" class="logo-white"><img
                                    src="https://res.cloudinary.com/boxity-id/image/upload/v1638440372/assets/site%20needs/color_logo_boxity_white_kcrqbo.png"
                                    alt="header-logo"></a></div>


                        <!-- MAIN MENU -->
                        <nav class="wsmenu clearfix">
                            <ul class="wsmenu-list nav-stateblue-hover">


                                <!-- MEGAMENU -->
                                <li class="nl-simple" aria-haspopup="true"><a href="/">Home</a></li>

                                <!-- DROPDOWN MENU -->
                                <li class="nl-simple" aria-haspopup="true"><a href="/about">About</a></li>
                                <li class="nl-simple" aria-haspopup="true"><a href="/contact">Contact</a></li>

                                <!-- SIMPLE NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true"><a href="/career">Career</a></li>
                            </ul>
                        </nav> <!-- END MAIN MENU -->


                    </div>
                </div> <!-- END NAVIGATION MENU -->


            </div> <!-- End header-wrapper -->
        </header> <!-- END HEADER -->

        @yield('content')

        <!-- FOOTER-4
			============================================= -->
        <footer id="footer-4" class="footer division">
            <div class="container">


                <!-- FOOTER CONTENT -->
                <div class="row">


                    <!-- FOOTER INFO -->
                    <div class="col-lg-3">
                        <div class="footer-info mb-40">
                            <img class="footer-logo"
                                src="https://res.cloudinary.com/boxity-id/image/upload/v1638440373/assets/site%20needs/color_logo_boxity_yor31q.png"
                                alt="footer-logo">
                        </div>
                    </div>


                    <!-- FOOTER LINKS -->
                    <div class="col-sm-6 col-md-3 col-lg-2 col-lg-2 col-xl-2 offset-xl-1">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h6 class="h6-xl">About</h6>

                            <!-- Footer Links -->
                            <ul class="foo-links text-secondary clearfix">
                                <li>
                                    <p class="p-md"><a href="/about">About Us</a></p>
                                </li>
                                <li>
                                    <p class="p-md"><a href="/our-team">Our Team</a></p>
                                </li>
                                <li>
                                    <p class="p-md"><a href="/career">Careers</a></p>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <!-- FOOTER LINKS -->
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h6 class="h6-xl">Discover</h6>

                            <!-- Footer List -->
                            <ul class="foo-links text-secondary clearfix">
                                {{-- <li>
                                    <p class="p-md"><a href="#">Our Blog</a></p>
                                </li> --}}
                                <li>
                                    <p class="p-md"><a href="/plans-pricing">Plans & Pricing</a></p>
                                </li>
                                <li>
                                    <p class="p-md"><a href="/cookie-policy">Cookie Policy</a></p>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <!-- FOOTER LINKS -->
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h6 class="h6-xl">Support</h6>

                            <!-- Footer List -->
                            <ul class="foo-links text-secondary clearfix">
                                <li>
                                    <p class="p-md"><a href="/faqs">FAQs</a></p>
                                </li>
                                <li>
                                    <p class="p-md"><a href="/contact">Contact Us</a></p>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <!-- FOOTER LINKS -->
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h6 class="h6-xl">Connect With Us</h6>

                            <!-- Social Links -->
                            <ul class="footer-socials text-secondary ico-25 text-center clearfix">
                                <li><a href="/facebook" target="_blank"><span class="flaticon-facebook"></span></a></li>
                                <li><a href="/instagram" target="_blank"><span class="flaticon-instagram"></span></a>
                                </li>
                                <li><a href="/linkedin" target="_blank"><span class="flaticon-linkedin"></span></a></li>
                            </ul>

                        </div>
                    </div>


                </div> <!-- END FOOTER CONTENT -->


                <hr>


                <!-- BOTTOM FOOTER -->
                <div class="bottom-footer">
                    <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


                        <!-- FOOTER COPYRIGHT -->
                        <div class="col">
                            <div class="footer-copyright">
                                <?php $y = Date('Y') ?>
                                <p>&copy; 2019 - {{$y}} Boxity Central Indonesia</p>
                            </div>
                        </div>


                        <!-- BOTTOM FOOTER LINKS -->
                        <div class="col">
                            <ul class="bottom-footer-list text-secondary text-end">
                                <li class="first-li">
                                    <p><a href="/privacy-policy">Privacy Policy</a></p>
                                </li>
                                <li class="last-li">
                                    <p><a href="/terms-conditions">Terms & Conditions</a></p>
                                </li>
                            </ul>
                        </div>


                    </div> <!-- End row -->
                </div> <!-- BOTTOM FOOTER -->


            </div>
        </footer> <!-- FOOTER-4 -->




    </div> <!-- END PAGE CONTENT -->




    <!-- EXTERNAL SCRIPTS
		============================================= -->
    <script src="{!!asset('webpage/js/jquery-3.6.0.min.js')!!}"></script>
    <script src="{!!asset('webpage/js/bootstrap.min.js')!!}"></script>
    <script src="{!!asset('webpage/js/modernizr.custom.js')!!}"></script>
    <script src="{!!asset('webpage/js/jquery.easing.js')!!}"></script>
    <script src="{!!asset('webpage/js/jquery.appear.js')!!}"></script>
    <script src="{!!asset('webpage/js/jquery.scrollto.js')!!}"></script>
    <script src="{!!asset('webpage/js/menu.js')!!}"></script>
    <script src="{!!asset('webpage/js/imagesloaded.pkgd.min.js')!!}"></script>
    <script src="{!!asset('webpage/js/isotope.pkgd.min.js')!!}"></script>
    <script src="{!!asset('webpage/js/owl.carousel.min.js')!!}"></script>
    <script src="{!!asset('webpage/js/jquery.magnific-popup.min.js')!!}"></script>
    <script src="{!!asset('webpage/js/quick-form.js')!!}"></script>
    <script src="{!!asset('webpage/js/request-form.js')!!}"></script>
    <script src="{!!asset('webpage/js/jquery.validate.min.js')!!}"></script>
    <script src="{!!asset('webpage/js/jquery.ajaxchimp.min.js')!!}"></script>
    <script src="{!!asset('webpage/js/wow.js')!!}"></script>

    <!-- Custom Script -->
    <script src="{!!asset('webpage/js/custom.js')!!}"></script>



</body>

</html>