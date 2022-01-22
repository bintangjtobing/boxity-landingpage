@extends('welcome')
@section('title', 'Orion by Boxity')
@section('page_description', 'Manage employee data, attendance and administration with the cloud -based HRD application
, Orion by Boxity.')
@section('page_keywords', 'boxity, boxityerp, realizeboxity, boxity central indonesia, orion by boxity, orion HRIS,
orion Human Resources Information system, orion HRM, orion boxity, HRIS terbaik, hrm, human resources, human resources management system, payroll, best hris, HR partner, hr talent, junior hr')
@section('content')
<section id="hero-boxity" class="bg-scroll hero-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- HERO IMAGE -->
            <div class="col-md-5 col-lg-6 order-last order-md-2">
                <div class="hero-boxity-img pc-30 wow fadeInRight">
                    <img class="img-fluid" src="{!!asset('product/orion/logo-mockup/phone-mockup.png')!!}"
                        alt="orion-by-boxity">
                </div>
            </div>


            <!-- HERO TEXT -->
            <div class="col-md-7 col-lg-6 order-first order-md-2">
                <div class="hero-boxity-txt white-color wow fadeInLeft">

                    <!-- Title -->
                    <h2 class="h2-xl">Manage employee data, attendance and administration with the cloud -based HR
                        application</h2>

                    <!-- Text -->
                    {{-- <p class="p-xl">Feugiat primis a ligula sapien mauris an auctor laoreet and pretium augue
                        egestas cubilia
                    </p> --}}

                    <!-- Buttons Group -->
                    <div class="btns-group mb-20">
                        <a href="/contact" class="btn btn-skyboxity tra-white-hover mr-15">Contact sales</a>
                        <a href="#"
                            class="video-popup2 btn btn-md btn-transparent ico-20 ico-left">
                            <span class="flaticon-play"></span> See ORION in Action
                        </a>
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
                                <span class="flaticon-fingerprint-scan"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Attendance management</h5>

                            <!-- Text -->
                            <p class="p-lg">Attendance management, employees, which prioritise productivity
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
                                <span class="flaticon-cloud-network"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Secure cloud-based</h5>

                            <!-- Text -->
                            <p class="p-lg">Secure cloud- based, centralised and comprehensive database
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
                                <span class="flaticon-algorithm"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Automated processes</h5>

                            <!-- Text -->
                            <p class="p-lg">Save time with automated processes
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
                    <h2 class="h2-xs">Maximize business performance with some of our integrated modules.</h2>

                    <!-- Text -->
                    <p class="p-lg">Accelerate your business development through integration between systems that will
                        bring convenience, practicality, and cost savings.
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


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-title title-01 mb-70">

                    <!-- Title -->
                    <h2 class="h2-md">We're also prepare your needs in the future</h2>

                    <!-- Text -->
                    <p class="p-xl">We have a benefit for you who wanna join with us, and calm down because it's our
                        reward for you free.
                    </p>

                </div>
            </div>
        </div>


        <!-- FEATURES-8 WRAPPER -->
        <div class="fbox-8-wrapper text-center">
            <div class="row row-cols-1 row-cols-md-3">


                <!-- FEATURE BOX #1 -->
                <div class="col">
                    <div class="fbox-8 mb-40 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img bg-whitesmoke-gradient">
                            <img class="img-fluid" src="{!!asset('images/boxity/img-23.png"')!!} alt="feature-icon" />
                        </div>

                        <!-- Title -->
                        <h5 class="h5-md">Domain & cloud storage</h5>

                        <!-- Text -->
                        <p>As long as we have a cooperation contract, you will get a free domain and
                            server. So don' t worry about configuring our system for you because domain and server
                                installation can be done online so it doesn't take a very long time. </p> </div> </div>
                                <div class="col">
                            <div class="fbox-8 mb-40 wow fadeInUp">

                                <!-- Image -->
                                <div class="fbox-img bg-whitesmoke-gradient">
                                    <img class="img-fluid" src="{!!asset('images/boxity/img-21.png"')!!} alt="feature-icon" />
                        </div>

                        <!-- Title -->
                        <h5 class="h5-md">Business Website</h5>

                        <!-- Text -->
                        <p>As long as we have a cooperation contract, we will also help you get, create,
                            design to launching the official website for your company to the wide internet. Don' t
                                        worry about not having an official site for your great business. </p> </div>
                                        </div> <div class="col">
                                    <div class="fbox-8 mb-40 wow fadeInUp">

                                        <!-- Image -->
                                        <div class="fbox-img bg-whitesmoke-gradient">
                                            <img class="img-fluid" src="{!!asset('images/boxity/img-24.png"')!!}" alt="feature-icon" />
                                        </div>

                                        <!-- Title -->
                                        <h5 class="h5-md">Business mail</h5>

                                        <!-- Text -->
                                        <p class="p-lg">As long as we have a cooperation contract, we will also help you
                                            to config your business email.  </p> </div> </div> </div> <!-- End row -->

</section>

<section id="pricing-2" class="bg-snow pb-60 inner-page-hero pricing-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-title title-01 mb-80">

                    <!-- Title -->
                    <h2 class="h2-md">Flexible pricing plans for <br> contract subscriptions</h2>

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
                                                        <h5 class="h5-xs">Basic</h5>
                                                        <h6 class="h6-sm bg-lightgrey">1 Year</h6>
                                                    </div>

                                                    <p>for maintenance start from</p>
                                                    <sup class="dark-color">IDR</sup>
                                                    <span class="dark-color">3,5jt</span>
                                                    <sup class="validity dark-color"> / month</sup>
                                                    <p>*exclude license price</p>

                                                    <a href="/schedule-demo"
                                                        target="_blank"
                                                        class="btn btn-sm btn-skyboxity tra-boxity-hover">Start free 14
                                                        days<br><span>Contact our sales</span></a>

                                                </div>

                                                <!-- Plan Features  -->
                                                <ul class="features">
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>256GB</b></span>
                                                            Cloud VPS Storage</p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<b>Unlimited users
                                                                        and clients</b></p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<b>Free server &
                                                                        domain</b></p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Business mail</p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Business
                                                                    <b>premium</b> website config</p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Report
                                                            adjustments
                                                            <span class="text-danger">*</span></p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>VIP</b></span>
                                                            support</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div> <!-- END BASIC PLAN -->


                                        <!-- AGENCY PLAN -->
                                        <div class="col">
                                            <div class="pricing-2-table bg-white mb-40 wow fadeInUp">

                                                <!-- Plan Price -->
                                                <div class="pricing-plan">

                                                    <!-- Plan Title -->
                                                    <div class="pricing-plan-title">
                                                        <h5 class="h5-xs">Agency</h5>
                                                        <h6 class="h6-sm bg-lightgrey">3 Years</h6>
                                                    </div>

                                                    <p>for maintenance start from</p>
                                                    <sup class="dark-color">IDR</sup>
                                                    <span class="dark-color">3jt</span>
                                                    <sup class="validity dark-color"> / month</sup>
                                                    <p>*exclude license price</p>
                                                    <a href="/schedule-demo"
                                                        target="_blank" class="btn btn-sm btn-skyboxity tra-boxity-hover">Start free 20
                                                        days<br><span>Contact our sales</span></a>
                                                </div>

                                                <!-- Plan Features  -->
                                                <ul class="features">
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>500GB</b></span>
                                                            Cloud VPS Storage</p>
                                                    </li>
                                                    <li>
                                                        <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<b>Unlimited
                                                                users
                                                                and clients</b></p>
                                                    </li>
                                                    <li>
                                                        <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<b>Free server &
                                                                domain</b></p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Business
                                                            mail</p>
                                                    </li>
                                                    <li>
                                                        <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Business
                                                            <b>premium</b> website config</p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Report
                                                            adjustments
                                                            <span class="text-danger">*</span></p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>VIP</b></span>
                                                            support</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- END AGENCY PLAN  -->


                                        <!-- ADVANCED PLAN -->
                                        <div class="col">
                                            <div class="pricing-2-table bg-white mb-40 wow fadeInUp">

                                                <!-- Plan Price  -->
                                                <div class="pricing-plan highlight">

                                                    <!-- Plan Title -->
                                                    <div class="pricing-plan-title">
                                                        <h5 class="h5-xs">Advanced</h5>
                                                        <h6 class="h6-sm bg-lightgrey">5 Years</h6>
                                                    </div>

                                                    <p>for maintenance start from</p>
                                                    <sup class="dark-color">IDR</sup>
                                                    <span class="dark-color">2,6jt</span>
                                                    <sup class="validity dark-color"> / month</sup>
                                                    <p>*exclude license price</p>

                                                    <!-- Pricing Plan Button -->
                                                    <a href="/schedule-demo"
                                                        target="_blank"
                                                        class="btn btn-sm btn-skyboxity tra-boxity-hover">Start free 30
                                                        days<br><span>Contact our sales</span></a>
                                                </div>

                                                <!-- Plan Features  -->
                                                <ul class="features">
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>1TB</b></span>
                                                            Cloud VPS Storage</p>
                                                    </li>
                                                    <li>
                                                        <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<b>Unlimited
                                                                users
                                                                and clients</b></p>
                                                    </li>
                                                    <li>
                                                        <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<b>Free server &
                                                                domain</b></p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Business
                                                            mail</p>
                                                    </li>
                                                    <li>
                                                        <p><span><i class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;Business
                                                            <b>premium</b> website config</p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color fa-check-circle"></i></span>&nbsp;Report
                                                            adjustments
                                                            <span class="text-danger">*</span></p>
                                                    </li>
                                                    <li>
                                                        <p><span><i
                                                                    class="fad boxity-primary-color
                                                                    fa-check-circle"></i></span>&nbsp;<span><b>VVIP</b></span>
                                                            support<span class="text-danger">*</span></p>
                                                    </li>
                                                </ul>



                                            </div>
                                        </div> <!-- END ADVANCED PLAN -->


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
                                            <h3>Ready to move forward with Boxity?</h3>
                                            <p class="p-xl">Increase efficiency, productivity and business performance
                                                with
                                                Boxity
                                                products.
                                            </p>
                                        </div>
                                    </div>


                                    <!-- BUTTON -->
                                    <div class="col-lg-12 text-center">
                                        <div class="cta-7-btn">
                                            <a href="/contact" class="btn btn-skyboxity tra-boxity-hover my-4">Contact
                                                Sales</a>
                                        </div>
                                    </div>


                                </div> <!-- End row -->
                            </div> <!-- End cta-7-wrapper -->
                        </div> <!-- End container -->
                    </div>
@endsection
