@extends('welcome')
@section('title', 'Semplice by Boxity')
@section('page_description', 'Semplice is a platform that can help SMEs specifically and focused on increasing their
customer reach online by integrating all their business links or contact information in 1 microsite with 1 click.')
@section('icon',
'https://res.cloudinary.com/boxity-id/image/upload/c_fit,w_64/v1656495388/asset/logo-products/semplice_logo_goxdbe.png')
@section('page_keywords', 'buat mini website mudah dan terjangkau dengan semplice dari boxity, semplice by boxity,
semplice boxity, semplice micro site, micro site')
@section('tag_cover',
'https://res.cloudinary.com/boxity-id/image/upload/v1656579851/asset/logo-products/tag-cover/tag_cover-semplice_aisiuj.png')
@section('content')
<section id="hero-boxity" class="bg-scroll hero-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- HERO IMAGE -->
            <div class="col-md-5 col-lg-6 order-last order-md-2">
                <div class="hero-boxity-img pc-30 wow fadeInRight">
                    <img class="img-fluid" src="{!!asset('product/semplice/asset-1.png')!!}"
                        alt="landingpage-by-boxity">
                </div>
            </div>


            <!-- HERO TEXT -->
            <div class="col-md-7 col-lg-6 order-first order-md-2">
                <div class="hero-boxity-txt white-color wow fadeInLeft">

                    <!-- Title -->
                    <h2 class="h2-xl">Create a mini-website before your coffee gets cold.</h2>

                    <!-- Text -->
                    <p class="p">Website that focuses on business-exclusive purposes such as promotions,
                        business contact information, and links to client markets.
                    </p>

                    <!-- Buttons Group -->
                    <div class="btns-group mb-20">
                        <a href="/contact" class="btn btn-skyboxity tra-white-hover mr-15">Create your mini-website
                            here</a>
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
                    <h2 class="h2-md">Why you should use <span>Semplice</span>?</h2>

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
                            <h5 class="h5-md">Simple and light</h5>

                            <!-- Text -->
                            <p class="p-lg">The version of the website has a very mini size, so it can be accessed very
                                quickly by anyone globally.
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
                            <h5 class="h5-md">Powerful development</h5>

                            <!-- Text -->
                            <p class="p-lg">An anti-complicated process. So the microsite development can be done in
                                less than 10 minutes. Stay powerful in terms of functionality like a complex website.
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
                            <h5 class="h5-md">Free maintenance</h5>

                            <!-- Text -->
                            <p class="p-lg">Create a micro/mini version of the website, no maintenance is required. You
                                just focus on developing your business strategy.
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
                    <img class="img-fluid" src="{!!asset('images/boxity/Integrated-modules.png')!!}"
                        alt="content-image">
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
                        <p class="p-lg">in every micro-site creation service package
                        </p>

                        <!-- CONTENT BOX #1 -->
                        <div class="cbox-2 mt-20 mb-30">

                            <!-- Icon -->
                            <div class="cbox-2-ico">
                                <div class="ico-25 orange-red-color">
                                    <span class="flaticon-check"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="h5-xs">Modern, and elegant</h5>
                            </div>

                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="cbox-2">

                            <!-- Icon -->
                            <div class="cbox-2-ico">
                                <div class="ico-25 orange-red-color">
                                    <span class="flaticon-check"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="h5-xs">Unlimited social media links</h5>
                            </div>

                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="cbox-2">

                            <!-- Icon -->
                            <div class="cbox-2-ico">
                                <div class="ico-25 orange-red-color">
                                    <span class="flaticon-check"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="h5-xs">Unlimited subdomain requests</h5>
                            </div>

                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="cbox-2">

                            <!-- Icon -->
                            <div class="cbox-2-ico">
                                <div class="ico-25 orange-red-color">
                                    <span class="flaticon-check"></span>
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
                        <img class="img-fluid" src="{!!asset('images/boxity/semplice.gif')!!}" alt="content-image">
                    </div>
                </div>


            </div>
        </div> <!-- END BOTTOM ROW -->


    </div> <!-- End container -->
</section>
<section id="pricing-2" class="bg-snow pb-60 inner-page-hero pricing-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                <div class="section-title title-01 mb-80">

                    <!-- Title -->
                    <h2 class="h2-md">Landing page plans specially curated for your business</h2>

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
                                <h5 class="h5-xs">Premium Plan</h5>
                            </div>

                            <sup class="dark-color">IDR</sup>
                            <span class="dark-color">50rb</span>
                            <sup class="validity dark-color"> /month</sup>

                            <a href="/contact" target="_blank" class="btn btn-sm btn-skyboxity tra-boxity-hover">Contact
                                our sales</a>

                        </div>

                        <!-- Plan Features  -->
                        <ul class="features">
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Unlimited link
                                </p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Social icon</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Custom theme</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Promotion banner
                                </p>
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
                                <h5 class="h5-xs">Exclusive Plan</h5>
                            </div>

                            <sup class="dark-color">IDR</sup>
                            <span class="dark-color">100rb</span>
                            <sup class="validity dark-color"> /Month</sup>

                            <a href="/contact" target="_blank" class="btn btn-sm btn-skyboxity tra-boxity-hover">Contact
                                our sales</a>

                        </div>

                        <!-- Plan Features  -->
                        <ul class="features">
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Unlimited link
                                </p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Social icon</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;QR Code</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Custom theme</p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Promotion banner
                                </p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Google analytics
                                </p>
                            </li>
                            <li>
                                <p><span><i class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Hide
                                    Boxity logo</p>
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
                                <h5 class="h5-xs">Black card plan</h5>
                            </div>

                            <sup class="dark-color">IDR</sup>
                            <span class="dark-color">xxx</span>
                            <sup class="validity dark-color"> /month</sup>

                            <a href="/contact" target="_blank" class="btn btn-sm btn-skyboxity tra-boxity-hover">Call
                                us</a>

                        </div>

                        <!-- Plan Features  -->
                        {{-- <ul class="features">
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
                        </ul> --}}

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
                        <img src="https://res.cloudinary.com/boxity-id/image/upload/v1678791753/asset_boxity/logo/icon-web_qusdsv.png" class="img-responsive img-logo-cta"
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
