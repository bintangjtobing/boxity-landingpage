@extends('welcome')
@section('title', 'Landing page by Boxity')
@section('page_description', 'Web creation services in Boxity are ready to help you to be able to scale-up in the online
world. Enjoy the ease of managing the website according to your wishes with great performance and full features. Order
your website now.')
@section('page_keywords', 'landingpage boxity, boxity landingpage, landingpage dari boxity, jasa pembuatan landingpage
berkualitas, jasa pembuatan landingpage terjangkau, landingpage
berkualitas di indonesia, jasa landingpage murah, Membuat Website, Membuat Website Gratis, Buat Website, Buat Website
Gratis, Membuat Website Sendiri, pembuatan website, bikin website, buat web, bikin web, Manfaat Website')
@section('content')
<section id="hero-boxity" class="bg-scroll hero-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- HERO IMAGE -->
            <div class="col-md-5 col-lg-6 order-last order-md-2">
                <div class="hero-boxity-img pc-30 wow fadeInRight">
                    <img class="img-fluid" src="{!!asset('product/landingpage/asset-1.png')!!}"
                        alt="landingpage-by-boxity">
                </div>
            </div>


            <!-- HERO TEXT -->
            <div class="col-md-7 col-lg-6 order-first order-md-2">
                <div class="hero-boxity-txt white-color wow fadeInLeft">

                    <!-- Title -->
                    <h2 class="h2-xl">Web creation services in Boxity are ready to help you to be able to scale-up in
                        the online world</h2>

                    <!-- Text -->
                    {{-- <p class="p-xl">Feugiat primis a ligula sapien mauris an auctor laoreet and pretium augue
                        egestas cubilia
                    </p> --}}

                    <!-- Buttons Group -->
                    <div class="btns-group mb-20">
                        <a href="/contact" class="btn btn-skyboxity tra-white-hover mr-15">{{__('contact_sales')}}</a>
                    </div>

                </div>
            </div> <!-- END HERO TEXT -->


        </div> <!-- End row -->
    </div> <!-- End container -->


    <!-- WAVE SHAPE BOTTOM -->
    <div class="wave-shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 285">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,128L80,149.3C160,171,320,213,480,240C640,267,800,277,960,277.3C1120,277,1280,267,1360,261.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>


</section> <!-- END hero-boxity -->

<!-- FEATURES-4
			============================================= -->
<section id="features-4" class="wide-60 features-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-title title-01 mb-70">

                    <!-- Title -->
                    <h2 class="h2-md">Why you should choose us?</h2>

                </div>
            </div>
        </div>
        <!-- FEATURES-4 WRAPPER -->
        <div class="fbox-4-wrapper">
            <div class="row row-cols-1 row-cols-md-2">

                <!-- FEATURE BOX #1 -->
                <div class="col">
                    <div class="fbox-4 pc-25 mb-40 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico">
                            <div class="ico-60 shape-ico boxity-primary-color">
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
                                <span class="flaticon-shield-1"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Regular, accurate, and fast website creation process</h5>

                            <!-- Text -->
                            <p class="p-lg"> Tell us your needs, make payments, and the website is ready to live
                                according to your wishes. The website creation process is fast, you don't have to wait
                                long!
                            </p>

                        </div>

                    </div>
                </div>


                <!-- FEATURE BOX #2 -->
                <div class="col">
                    <div class="fbox-4 pc-25 mb-40 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico">
                            <div class="ico-60 shape-ico boxity-primary-color">
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
                                <span class="flaticon-process"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Using native programming</h5>

                            <!-- Text -->
                            <p class="p-lg">We do not use CMS panels from wordpress or blogger, because we create and
                                provide quality and professional things for our clients.
                            </p>

                        </div>

                    </div>
                </div>


                <!-- FEATURE BOX #3 -->
                <div class="col">
                    <div class="fbox-4 pc-25 mb-40 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico">
                            <div class="ico-60 shape-ico boxity-primary-color">
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
                                <span class="flaticon-price"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Affordable prices and number one quality</h5>

                            <!-- Text -->
                            <p class="p-lg">Goodbye expensive websites! Boxity provides affordable website creation
                                services, but the quality is still number one. Websites with great performance are ready
                                for you to use for any purpose.
                            </p>

                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="fbox-4 pc-25 mb-40 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico">
                            <div class="ico-60 shape-ico boxity-primary-color">
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
                                <span class="flaticon-phone-call"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Friendly and professional technical support</h5>

                            <!-- Text -->
                            <p class="p-lg">Have a problem with your website? Contact us anytime! Boxity's professional
                                team is ready to help provide solutions to your problems.
                            </p>

                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="fbox-4 pc-25 mb-40 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico">
                            <div class="ico-60 shape-ico boxity-primary-color">
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
                                <span class="flaticon-box"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Fully managed service</h5>

                            <!-- Text -->
                            <p class="p-lg">Supported with powerful & secure servers, huge resources, and various
                                optimization features: auto-backup, auto-patch, & auto-installer.
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- END FEATURES-4 WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END FEATURES-4 -->

<section id="content-6" class="content-6 pb-60 content-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->
            <div class="col-md-6 col-lg-5">
                <div class="txt-block left-column wow fadeInRight">

                    <!-- Title -->
                    <h2 class="h2-xs">{{__('maximize_business')}}</h2>

                    <!-- Text -->
                    <p class="p-lg">{{__('dsc_maximize_business')}}
                    </p>

                </div>
            </div>


            <!-- IMAGE BLOCK -->
            <div class="col-md-6 col-lg-7">
                <div class="img-block right-column wow fadeInLeft">
                    <img class="img-fluid" src="{!!asset('images/boxity/img-20-circle.png')!!}" alt="content-image">
                </div>
            </div>


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

<section id="features-8" class="bg-snow wide-60 features-section division">
    <div class="container">


        <!-- BOTTOM ROW -->
        <div class="bottom-row">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-8 col-lg-6 order-last order-md-2">
                    <div class="txt-block left-column wow fadeInRight">

                        <!-- Title -->
                        <h2 class="h2-xs">Classy features that are available</h2>

                        <!-- Text -->
                        <p class="p-lg">in every landing page creation service package
                        </p>

                        <!-- CONTENT BOX #1 -->
                        <div class="cbox-2 mt-20 mb-30">

                            <!-- Icon -->
                            <div class="cbox-2-ico">
                                <div class="ico-25 orange-red-color">
                                    <span class="flaticon-seo"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="h5-xs">Mobile and SEO-Friendly</h5>
                            </div>

                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="cbox-2">

                            <!-- Icon -->
                            <div class="cbox-2-ico">
                                <div class="ico-25 orange-red-color">
                                    <span class="flaticon-secure"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="h5-xs">Comodo Positive SSL 1-year</h5>
                            </div>

                        </div>
                        <!-- CONTENT BOX #1 -->
                        <div class="cbox-2 mt-20 mb-30">

                            <!-- Icon -->
                            <div class="cbox-2-ico">
                                <div class="ico-25 orange-red-color">
                                    <span class="flaticon-email"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="h5-xs">Professional business email</h5>
                            </div>

                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="cbox-2">

                            <!-- Icon -->
                            <div class="cbox-2-ico">
                                <div class="ico-25 orange-red-color">
                                    <span class="flaticon-hosting-servers"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="h5-xs">Free hosting & domain</h5>
                            </div>

                        </div>
                        <!-- CONTENT BOX #1 -->
                        <div class="cbox-2 mt-20 mb-30">

                            <!-- Icon -->
                            <div class="cbox-2-ico">
                                <div class="ico-25 orange-red-color">
                                    <span class="flaticon-new-window"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="h5-xs">Easy instant upgrade</h5>
                            </div>

                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="cbox-2">

                            <!-- Icon -->
                            <div class="cbox-2-ico">
                                <div class="ico-25 orange-red-color">
                                    <span class="flaticon-download-1"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="h5-xs">Safe data backup</h5>
                            </div>

                        </div>

                    </div>
                </div> <!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-md-4 col-lg-6 order-first order-md-2">
                    <div class="img-block right-column wow fadeInLeft">
                        <img class="img-fluid" src="{!!asset('images/boxity/img-02.png')!!}" alt="content-image">
                    </div>
                </div>


            </div>
        </div> <!-- END BOTTOM ROW -->


    </div> <!-- End container -->
</section>
<!-- BRANDS-2
			============================================= -->
<div id="brands-2" class="wide-70 brands-section division">
    <div class="container">


        <!-- BRANDS TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="brands-title text-center">
                    <p class="p-xl">This guys are using services from BOXITY and they are more than happier ever</p>
                </div>
            </div>
        </div>


        <!-- BRANDS-2 WRAPPER -->
        <div class="brands-2-wrapper">
            <div class="row justify-content-md-center row-cols-2 row-cols-sm-3 row-cols-md-5">


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-12.png')!!}"
                                alt="Client of Boxity Central Indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-1.png')!!}"
                                alt="Client of Boxity Central Indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-2.png')!!}"
                                alt="Client of Boxity Central Indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-3.png')!!}"
                                alt="Client of Boxity Central Indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-4.png')!!}"
                                alt="Client of Boxity Central Indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-5.png')!!}"
                                alt="Client of Boxity Central Indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-6.png')!!}"
                                alt="Client of Boxity Central Indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-7.png')!!}"
                                alt="Client of Boxity Central Indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-8.png')!!}"
                                alt="Client of Boxity Central Indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-9.png')!!}"
                                alt="Client of Boxity Central Indonesia" />
                        </a>
                    </div>
                </div>


            </div>
        </div> <!-- END BRANDS-2 WRAPPER -->


    </div> <!-- End container -->
</div> <!-- END BRANDS-2 -->

<!-- DIVIDER LINE -->
<hr class="divider">

<section id="pricing-2" class="bg-snow pb-60 inner-page-hero pricing-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                <div class="section-title title-01 mb-80">

                    <!-- Title -->
                    <h2 class="h2-md"> Pricing plans to get the best<br>suitable landing page for your business</h2>

                    <!-- Text -->
                    <p class="p-xl">No credit card required. Call, discuss, and apply.<br></p>

                </div>
            </div>
        </div>


        <!-- PRICING TABLES -->
        <div class="pricing-2-row pc-25">
            <div class="row row-cols-1 row-cols-md-3">


                <!-- BASIC PLAN -->
                <div class="col">
                    <div class="pricing-2-table bg-white mb-40 wow fadeInUp">

                        <!-- Plan Price -->
                        <div class="pricing-plan">

                            <!-- Plan Title -->
                            <div class="pricing-plan-title">
                                <h5 class="h5-xs">Basic Plan</h5>
                            </div>

                            <p>Suitable for your new business</p>
                            <sup class="dark-color">IDR</sup>
                            <span class="dark-color">2,99jt</span>
                            <sup class="validity dark-color"> /OTC</sup>

                            <a href="/contact" target="_blank"
                                class="btn btn-sm btn-skyboxity tra-boxity-hover">Contact our sales</a>

                        </div>

                        <!-- Plan Features  -->
                        <ul class="features">
                            <li>
                                <p><span><i
                                            class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>8GB</b></span>
                                    Cloud Hosting Storage</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Max. <b>1 page
                                    </b></p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<b>2x</b> Design
                                    revision</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Search
                                    engine setup</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Google analytics
                                </p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Mobile
                                    responsive</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>1
                                            Month</b></span>
                                    free maintenance</p>
                            </li>
                        </ul>

                    </div>
                </div> <!-- END BASIC PLAN -->
                <div class="col">
                    <div class="pricing-2-table bg-white mb-40 wow fadeInUp">

                        <!-- Plan Price -->
                        <div class="pricing-plan">

                            <!-- Plan Title -->
                            <div class="pricing-plan-title">
                                <h5 class="h5-xs">Starter Plan</h5>
                            </div>

                            <p>Suitable for your business with small to medium scale.</p>
                            <sup class="dark-color">IDR</sup>
                            <span class="dark-color">5,499jt</span>
                            <sup class="validity dark-color"> /OTC</sup>

                            <a href="/contact" target="_blank"
                                class="btn btn-sm btn-skyboxity tra-boxity-hover">Contact our sales</a>

                        </div>

                        <!-- Plan Features  -->
                        <ul class="features">
                            <li>
                                <p><span><i
                                            class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>64GB</b></span>
                                    Cloud Hosting Storage</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Max. <b>6 page
                                    </b></p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<b>3x</b> Design
                                    revision</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Search
                                    engine setup</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Google analytics
                                </p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Mobile
                                    responsive</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>3
                                            Month</b></span>
                                    free maintenance</p>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col">
                    <div class="pricing-2-table bg-white mb-40 wow fadeInUp">

                        <!-- Plan Price -->
                        <div class="pricing-plan">

                            <!-- Plan Title -->
                            <div class="pricing-plan-title">
                                <h5 class="h5-xs">Basic Plan</h5>
                            </div>

                            <p>Suitable for your establish business</p>
                            <sup class="dark-color">IDR</sup>
                            <span class="dark-color">8,499jt</span>
                            <sup class="validity dark-color"> /OTC</sup>

                            <a href="/contact" target="_blank"
                                class="btn btn-sm btn-skyboxity tra-boxity-hover">Contact our sales</a>

                        </div>

                        <!-- Plan Features  -->
                        <ul class="features">
                            <li>
                                <p><span><i
                                            class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>128GB</b></span>
                                    Cloud Hosting Storage</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Max. <b>12 page
                                    </b></p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<b>6x</b> Design
                                    revision</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Search
                                    engine setup</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Google analytics
                                </p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Mobile
                                    responsive</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>6
                                            Month</b></span>
                                    free maintenance</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End container -->
</section>

<div class="cta-section division">
    <div class="container">
        <div class="">
            <div class="row d-flex align-items-center">

                <div class="col-lg-12 text-center">
                    <div class="cta-7-img">
                        <img src="{!!asset('images/boxity/just-logo.png')!!}" class="img-responsive img-logo-cta"
                            alt="Boxity Central Indonesia Logo">
                    </div>
                </div>

                <!-- TEXT -->
                <div class="col-lg-12 text-center">
                    <div class="cta-7-txt">
                        <h3>{{__('ready_to_move')}}</h3>
                        <h3>{{__('dsc_ready_to_move')}}</h3>
                    </div>
                </div>


                <!-- BUTTON -->
                <div class="col-lg-12 text-center">
                    <div class="cta-7-btn">
                        <a href="/contact" class="btn btn-skyboxity tra-boxity-hover my-4">{{__('contact_sales')}}</a>
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End cta-7-wrapper -->
    </div> <!-- End container -->
</div>
@endsection
