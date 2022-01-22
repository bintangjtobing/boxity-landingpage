@extends('welcome')
@section('title', 'About')
@section('page_description', 'This page is about who Boxity Central Indonesia is, what is our vision, the companies we
have worked with, whether its a contract system and others.')
@section('page_keywords', 'about boxity, boxity, boxityerp, realizeboxity, boxity central indonesia, erp boxity,
warehouse management,
human resources management, financial management, boxity warehouse, boxity WMS, boxity financial, boxity indonesia')
@section('content')
<section id="about-2" class="about-section">
    <div class="bg-inner bg-lightgrey inner-page-hero division">
        <div class="container">


            <!-- ABOUT-2 TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="about-2-title">

                        <!-- Title -->
                        <h2 class="h2-xl">Digitize your business <br> with us</h2>

                        <!-- Text -->
                        {{-- <p class="p-xl">Quaerat sodales sapien and euismod blandit vitae ipsum primis cubilia
                            undo laoreet augue luctus magna and dolor luctus egestas sapien
                        </p> --}}

                    </div>
                </div>
            </div> <!-- END ABOUT-2 TITLE -->


            <!-- ABOUT-2 IMAGES -->
            <div class="about-2-images">
                <div class="row row-cols-1 row-cols-md-2">


                    <!-- IMAGES-1 -->
                    <div class="col col-md-5">
                        <img class="img-fluid" src="{!!asset('webpage/images/about-1-img.jpg')!!}" alt="about-image">
                    </div>


                    <!-- IMAGES-2 -->
                    <div class="col col-md-7">
                        <img class="img-fluid" src="{!!asset('webpage/images/about-2-img.jpg')!!}" alt="about-image">
                    </div>


                </div> <!-- End row -->
            </div> <!-- END ABOUT-2 IMAGES -->


        </div> <!-- End container -->
    </div> <!-- End bg-inner -->
</section> <!-- END ABOUT-2 -->




<!-- FEATURES-4
			============================================= -->
<section id="features-4" class="wide-60 features-section division">
    <div class="container">



        <!-- FEATURES-4 WRAPPER -->
        <div class="fbox-4-wrapper fbox-4-wide">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico">
                            <div class="ico-65">
                                <span class="flaticon-line-graph-1"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h5 class="h5-md">{{__('who_is_boxity')}}</h5>

                            <!-- Text -->
                            <p>
                                {{__('dsc_who_is_boxity')}}
                            </p>

                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico">
                            <div class="ico-65">
                                <span class="flaticon-arrow"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h5 class="h5-md">{{__('our_vision')}}</h5>

                            <!-- Text -->
                            <p>{{__('dsc_our_vision')}}</p>

                        </div>

                    </div>
                </div>


            </div>
        </div> <!-- END FEATURES-4 WRAPPER -->

        <hr class="divider">
        <section id="features-4" class="wide-60 features-section division">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="section-title title-01 mb-70">

                            <!-- Title -->
                            <h2 class="h2-md">{{__('were_better')}}</h2>

                            <!-- Text -->
                            <p class="p-xl">{{__('why_are_we_so_confident')}}
                            </p>

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
                                        <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}"
                                            alt="ico-bkg">
                                        <span class="flaticon-signal"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">{{__('quick_access')}}</h5>

                                    <!-- Text -->
                                    <p class="p-lg">{{__('dsc_quick_access')}}
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
                                        <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}"
                                            alt="ico-bkg">
                                        <span class="flaticon-smartphone-2"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">{{__('device_accessibility')}}</h5>

                                    <!-- Text -->
                                    <p class="p-lg">{{__('dsc_device_accessibility')}}
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
                                        <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}"
                                            alt="ico-bkg">
                                        <span class="flaticon-hosting-servers"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">{{__('customers_private')}}</h5>

                                    <!-- Text -->
                                    <p class="p-lg">{{__('dsc_customers_private')}}
                                    </p>

                                </div>

                            </div>
                        </div>


                        <!-- FEATURE BOX #4 -->
                        <div class="col">
                            <div class="fbox-4 pc-25 mb-40 wow fadeInUp">

                                <!-- Icon -->
                                <div class="fbox-ico">
                                    <div class="ico-60 shape-ico boxity-primary-color">
                                        <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}"
                                            alt="ico-bkg">
                                        <span class="flaticon-flow-chart"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">{{__('integration')}}</h5>

                                    <!-- Text -->
                                    <p class="p-lg">{{__('dsc_integration')}}
                                    </p>

                                </div>

                            </div>
                        </div>


                        <!-- FEATURE BOX #5 -->
                        <div class="col">
                            <div class="fbox-4 pc-25 mb-40 wow fadeInUp">

                                <!-- Icon -->
                                <div class="fbox-ico">
                                    <div class="ico-60 shape-ico boxity-primary-color">
                                        <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}"
                                            alt="ico-bkg">
                                        <span class="flaticon-cloud-computing"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">{{__('storage_backup')}}</h5>

                                    <!-- Text -->
                                    <p class="p-lg">{{__('dsc_storage_backup')}}
                                    </p>

                                </div>

                            </div>
                        </div>


                        <!-- FEATURE BOX #6 -->
                        <div class="col">
                            <div class="fbox-4 pc-25 mb-40 wow fadeInUp">

                                <!-- Icon -->
                                <div class="fbox-ico">
                                    <div class="ico-60 shape-ico boxity-primary-color">
                                        <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}"
                                            alt="ico-bkg">
                                        <span class="flaticon-shield"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">{{__('secure_safe')}}</h5>

                                    <!-- Text -->
                                    <p class="p-lg">{{__('dsc_secure_safe')}}
                                    </p>

                                </div>

                            </div>
                        </div>


                    </div>
                </div> <!-- END FEATURES-4 WRAPPER -->


            </div> <!-- End container -->
        </section>

    </div> <!-- End container -->
</section> <!-- END FEATURES-4 -->


<hr class="divider">
<div id="brands-2" class="wide-70 brands-section division">
    <div class="container">


        <!-- BRANDS TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="brands-title text-center">
                    <p class="p-xl">{{__('clients')}}</p>
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
                                alt="partner-boxity-central-indonesia" />
                        </a>
                    </div>
                </div>

                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-1.png')!!}"
                                alt="partner-boxity-central-indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-3.png')!!}"
                                alt="partner-boxity-central-indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-4.png')!!}"
                                alt="partner-boxity-central-indonesia" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-5.png')!!}"
                                alt="partner-boxity-central-indonesia">
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-6.png')!!}"
                                alt="partner-boxity-central-indonesia">
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-7.png')!!}"
                                alt="partner-boxity-central-indonesia">
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-8.png')!!}"
                                alt="partner-boxity-central-indonesia">
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-9.png')!!}"
                                alt="partner-boxity-central-indonesia">
                        </a>
                    </div>
                </div>

            </div>
        </div> <!-- END BRANDS-2 WRAPPER -->


    </div> <!-- End container -->
</div>


<!-- DIVIDER LINE -->
<hr class="divider">



<!-- CALL TO ACTION-5
			============================================= -->
<div id="cta-7" class="cta-section division">
    <div class="container">
        <div class="cta-7-wrapper bg-snow">
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
                        <p class="p-xl">{{__('dsc_ready_to_move')}}
                        </p>
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
