<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Boxity | PT Boxity Central Indonesia" />
    <meta name="description" content="@yield('page_description')" />
    <meta name="keywords" content="@yield('page_keywords')" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="copyright" content="PT Boxity Central Indonesia">
    <meta name="url" content="http://www.boxity.id">
    <meta name="identifier-URL" content="http://www.boxity.id">

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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-217791541-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-217791541-1');

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
    <meta name="og:title" property="og:title" content="Boxity | PT Boxity Central Indonesia" />
    <meta name="og:url" property="og:url" content="https://boxity.id" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/v1642815378/assets/site%20needs/tag_cover_hsiapv.jpg" />
    <meta name="og:description" property="og:description"
        content="Boxity Central Indonesia is here to help and support companies in the 4.0 business industrial revolution, by providing a cloud-based system with an ERP model for companies with large valuations, and the SAAS (Software as a Service) model for small to medium MSMEs." />
    <meta name="twitter:card" content="Boxity | PT Boxity Central Indonesia" />
    <meta name="twitter:title" property="og:title" content="Boxity | PT Boxity Central Indonesia" />
    <meta name="twitter:url" property="og:url" content="https://boxity.id" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/v1642815378/assets/site%20needs/tag_cover_hsiapv.jpg" />
    <meta name="twitter:description" property="og:description"
        content="Boxity Central Indonesia is here to help and support companies in the 4.0 business industrial revolution, by providing a cloud-based system with an ERP model for companies with large valuations, and the SAAS (Software as a Service) model for small to medium MSMEs." />
    <link rel="canonical" href="https://boxity.id/" />
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/boxity-id/image/upload/v1634800361/assets/site%20needs/icon_za3vme.png"
        type="image/png" sizes="64x64" />
    <meta name="og:email" content="info@boxity.id" />
    <meta name="og:phone_number" content="02129021873" />
    <meta name="og:latitude" content="-6.1465558" />
    <meta name="og:longitude" content="106.7843094" />
    <meta name="og:street-address" content="Grand Silipi Tower, Jl. Jend Jl. Jelambar Barat No.22-24" />
    <meta name="og:locality" content="DKI Jakarta" />
    <meta name="og:region" content="ID" />
    <meta name="og:postal-code" content="11480" />
    <meta name="og:country-name" content="Indonesia" />


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
    <script src="https://kit.fontawesome.com/bf3b9c3659.js" crossorigin="anonymous"></script>

    <!-- ON SCROLL ANIMATION -->
    <link href="{!!asset('webpage/css/animate.css')!!}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="{!!asset('webpage/css/style-min.css')!!}" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="{!!asset('webpage/css/responsive.css')!!}" rel="stylesheet">
    <link href="{!!asset('webpage/custom-min.css')!!}" rel="stylesheet">

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
                    <span class="smllogo"><a href="/"><img
                                src="https://res.cloudinary.com/boxity-id/image/upload/v1638440373/assets/site%20needs/color_logo_boxity_yor31q.png"
                                alt="mobile-logo" /></a></span>
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
                                <li class="nl-simple" aria-haspopup="true"><a href="/">{{__('home')}}</a></li>

                                <li aria-haspopup="true" class="mg_link"><a href="#">{{__('product')}} <span
                                            class="wsarrow"></span></a>
                                    <div class="wsmegamenu w-75 clearfix">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="col-md-12 col-lg-6 link-list">
                                                    <li><a href="#">Octans <sup>Soon</sup><br><span
                                                                class="sub-link-list">{{__('octans')}}</span></a>
                                                    </li>
                                                    <li><a href="/products/fornax">Fornax<br><span
                                                                class="sub-link-list">{{__('fornax')}}</span></a></li>
                                                    <li><a href="#">Pyxis <sup>Soon</sup><br><span
                                                                class="sub-link-list">{{__('pyxis')}}</span></a></li>
                                                    <li><a href="#">Aquila <sup>Soon</sup><br><span
                                                                class="sub-link-list">{{__('aquila')}}</span></a></li>
                                                </ul>

                                                <!-- MEGAMENU LINKS -->
                                                <ul class="col-md-12 col-lg-6 link-list">
                                                    <li><a href="/products/lyra">Lyra<br><span
                                                                class="sub-link-list">{{__('lyra')}}</span></a></li>
                                                    <li><a href="/products/orion">Orion<br><span
                                                                class="sub-link-list">{{__('orion')}}</span></a></li>
                                                    <li><a href="/products/chatifine">Chatifine<br><span
                                                                class="sub-link-list">{{__('chatifine')}}</span></a>
                                                    </li>
                                                    <li><a href="/products/stockpile">Stockpile<br><span
                                                                class="sub-link-list">{{__('stockpile')}}</span></a>
                                                    </li>
                                                </ul>

                                            </div> <!-- End row -->
                                        </div> <!-- End container -->
                                    </div> <!-- End wsmegamenu -->
                                </li>
                                <!-- DROPDOWN MENU -->
                                <li class="nl-simple" aria-haspopup="true"><a href="/about">{{__('about')}}</a></li>
                                {{-- <li class="nl-simple" aria-haspopup="true"><a href="/plans">Pricing</a></li> --}}

                                <!-- SIMPLE NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true"><a href="/career">{{__('career')}}</a></li>
                                <li aria-haspopup="true"><a href="#">{{ Config::get('languages')[App::getLocale()] }}
                                        <span class="wsarrow"></span></a>
                                    <ul class="sub-menu">
                                        @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                        <li><a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nl-simple" aria-haspopup="true">
                                    <a href="/contact" class="btn btn-skyboxity">{{__('contact_sales')}}</a>
                                </li>

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
                    <div class="col-lg-4">
                        <div class="footer-info mb-40">
                            <img class="footer-logo mb-25"
                                src="https://res.cloudinary.com/boxity-id/image/upload/v1638440373/assets/site%20needs/color_logo_boxity_yor31q.png"
                                alt="footer-logo">
                            <!-- Text -->
                            <p>Grand Silipi Tower, Lt 9 Unit O, <br> Jl. Jend. S.
                                Parman Kav 22-24 <br> Jakarta Barat,
                                11480 <br><br>
                                <span><i class="fal fa-phone-alt"></i></span> <a href="tel:+622129021873">021
                                    2902
                                    1873</a> <br>
                                <span><i class="fab fa-whatsapp"></i></span> <a
                                    href="https://wa.me/message/MJB3SRIR3ADHL1">0812 6357
                                    4797</a> <br>
                                <span><i class="fal fa-envelope-open-text"></i></span> <a
                                    href="mailto:info@boxity.id">info@boxity.id</a>
                            </p>
                        </div>
                    </div>


                    <!-- FOOTER LINKS -->
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h6 class="h6-xl">Company</h6>

                            <!-- Footer Links -->
                            <ul class="foo-links text-secondary clearfix">
                                <li>
                                    <p><a href="/about">{{__('about')}}</a></p>
                                </li>
                                <li>
                                    <p><a href="/career">{{__('career')}} <span>- {{__('we_hiring')}}</span></a></p>
                                </li>
                                <li>
                                    <p><a href="/contact">{{__('contact')}}</a></p>
                                </li>
                                <li>
                                    <p><a href="/privacy-policy">{{__('privacy_policy')}}</a></p>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- FOOTER LINKS -->
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h6 class="h6-xl">{{__('product')}}</h6>

                            <!-- Footer Links -->
                            <ul class="foo-links text-secondary clearfix">
                                <li>
                                    <p><a href="#">Boxity ERP</a></p>
                                </li>
                                <li>
                                    <p><a href="/products/fornax">Fornax</a></p>
                                </li>
                                <li>
                                    <p><a href="/products/lyra">Lyra</a></p>
                                </li>
                                <li>
                                    <p><a href="/products/orion">Orion</a></p>
                                </li>
                                <li>
                                    <p><a href="/products/stockpile">Stockpile</a></p>
                                </li>
                                <li>
                                    <p><a href="#">Octans <span>- Soon</span></a></p>
                                </li>
                                <li>
                                    <p><a href="#">Pyxis <span>- Soon</span></a></p>
                                </li>
                                <li>
                                    <p><a href="#">Aquila <span>- Soon</span></a></p>
                                </li>
                                <li>
                                    <p><a href="/products/chatifine">Chatifine</a></p>
                                </li>
                            </ul>

                        </div>
                    </div>



                    <!-- FOOTER LINKS -->
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h6 class="h6-xl">{{__('connect_with_us')}}</h6>

                            <!-- Social Links -->
                            <ul class="footer-socials text-secondary ico-25 text-center clearfix">
                                <li><a href="/facebook" target="_blank"><span class="flaticon-facebook"></span></a></li>
                                <li><a href="/instagram" target="_blank"><span class="flaticon-instagram"></span></a>
                                </li>
                                <li><a href="/linkedin" target="_blank"><span class="flaticon-linkedin-logo"></span></a>
                                </li>
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
                                <p>&copy;{{$y}} PT. Boxity Central Indonesia. All rights reserved.</p>
                            </div>
                        </div>


                        <!-- BOTTOM FOOTER LINKS -->
                        <div class="col">
                            <ul class="bottom-footer-list text-secondary text-end">
                                <li class="first-li">
                                    <p><a href="/privacy-policy">{{__('privacy_policy')}}</a></p>
                                </li>
                                <li class="last-li">
                                    <p><a href="/terms-conditions">{{__('terms_condition')}}</a></p>
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
