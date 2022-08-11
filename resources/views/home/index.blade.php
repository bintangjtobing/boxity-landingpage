@extends('welcome')
@section('title', 'Home')
@section('page_description', 'Providing ERP with cloud-based web and mobile applications and distributing them on a SaaS basis for MSME needs.')
@section('page_keywords', 'sistem erp terbaik, erp terbaik, erp indonesia, erp di indonesia, solusi erp, software erp
terbaik di Indonesia, boxity, boxityerp, boxity central indonesia, erp boxity, hris, saas, erp business suite, saas
business suite, cloud based ERP, erp sap, erp crm, erp cloud, saas cloud, software saas, best erp in Indonesia, cheapest
erp saas, best erp, best saas')
@section('content')
<!-- HERO-21
			============================================= -->
<section id="hero-21" class="bg-snow hero-section division">
    <div class="container">
        <div class="row d-flex align-items-center">

            <!-- HERO TEXT -->
            <div class="col-md-10 offset-md-1">
                <div class="hero-21-txt text-center">

                    <!-- Title -->
                    <h2 class="h2-lg">{{__('slogan')}}</h2>

                    <!-- Text -->
                    <p class="p-xl">{{__('what_are_we')}}
                    </p>
                    <a href="/contact" class="btn btn-sm btn-stateblue black-hover mt-3">{{__('contact_sales')}}</a>

                </div>
            </div> <!-- END HERO TEXT -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END HERO-21 -->




<!-- CONTENT-9
			============================================= -->
<div id="content-9" class="content-9 bg-snow pt-60 content-section division">
    <div class="container">


        <!-- IMAGE BLOCK -->
        <div class="row">
            <div class="col">
                <div class="content-9-img video-preview wow fadeInUp">

                    <!-- Play Icon -->
                    {{-- <a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">
                        <div class="video-btn video-btn-xl bg-pink ico-90">
                            <div class="video-block-wrapper"><span class="flaticon-play-button"></span>
                            </div>
                        </div>
                    </a> --}}

                    <!-- Preview Image -->
                    <img class="img-fluid" src="{!!asset('images/boxity/saas-banner-img-copy.png')!!}"
                        alt="video-preview">

                </div>
            </div>
        </div>


    </div> <!-- End container -->
</div> <!-- END CONTENT-9 -->




<!-- BRANDS-1
			============================================= -->
<div id="brands-1" class="pt-60 pb-100 brands-section division">
    <div class="container">


        <!-- Brands Carousel -->
        <div class="row">
            <div class="col text-center">
                <div class="owl-carousel brands-carousel">

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-1.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>
                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-2.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-3.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-4.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-5.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-6.png')!!}"
                            alt="partner-boxity-central-indonesia">
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-7.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-8.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-9.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-10.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-11.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-12.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-13.png')!!}"
                            alt="partner-boxity-central-indonesia" />
                    </div>


                </div>
            </div>
        </div> <!-- End Brands Carousel -->


    </div> <!-- End container -->
</div> <!-- END BRANDS-1 -->

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
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
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
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
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
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
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
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
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
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
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
                                <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
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

<hr class="divider">

<!-- CONTENT-2
			============================================= -->
<section id="content-2" class="content-2 pb-60 pt-60 content-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- IMAGE BLOCK -->
            <div class="col-md-5 col-lg-6">
                <div class="rel img-block left-column wow fadeInRight">
                    <img class="img-fluid" src="{!!asset('images/boxity/saas-services-img.png')!!}"
                        alt="boxity central indonesia">
                </div>
            </div>


            <!-- TEXT BLOCK -->
            <div class="col-md-7 col-lg-6">
                <div class="txt-block right-column wow fadeInLeft">


                    <!-- Title -->
                    <h2 class="h2-xs">{{__('add_new_service')}}</h2>
                    <p>{{__('dsc_add_new_service')}}</p>

                    <!-- List -->
                    <ul class="simple-list">

                        <li class="list-item">
                            <p class="p-lg"><b>{{__('optimizing_business')}}</b>{{__('dsc_optimizing_business')}}
                            </p>
                        </li>

                        <li class="list-item">
                            <p class="p-lg"><b>{{__('reducing_operational')}}</b>{{__('dsc_reducing_operational')}}</p>
                        </li>

                        <li class="list-item">
                            <p class="p-lg">
                                <b>{{__('more_effective_collaboration')}}</b>{{__('dsc_more_effective_collaboration')}}
                            </p>
                        </li>

                    </ul>

                </div>
            </div> <!-- END TEXT BLOCK -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END CONTENT-2 -->

<!-- TABS-2
			============================================= -->
<section id="tabs-2" class="wide-60 tabs-section division">
    <div class="container">
        <div class="row d-flex align-items-center mb-5">

            <!-- HERO TEXT -->
            <div class="col-md-10 offset-md-1">
                <div class="hero-21-txt text-center">

                    <!-- Title -->
                    <h2 class="h2-lg">{{__('powerful_services')}}</h2>
                    <p>{{__('dsc_powerful_services')}}
                    </p>

                </div>
            </div> <!-- END HERO TEXT -->


        </div>
        <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">
            <!-- TABS NAVIGATION -->
            <div class="col">
                <div class="tabs-nav clearfix">
                    <ul class="tabs-1">
                        <!-- TAB-2 LINK -->
                        <li class="tab-link" data-tab="tab-2">

                            <!-- Title -->
                            <h4 class="h4-sm">Semplice <sup>New</sup></h4>
                            <h6>Create your micro-site before your coffee gets cold.</h6>
                            <!-- Text -->
                            <p>a platform that can help SMEs specifically and focused on increasing their customer reach
                                online by integrating all their business links or contact information in 1 microsite
                                with 1 click.
                            </p>

                        </li>
                        <li class="tab-link" data-tab="tab-2">

                            <!-- Title -->
                            <h4 class="h4-sm">Fornax</h4>
                            <h6>{{__('fornax')}}</h6>
                            <!-- Text -->
                            <p>{{__('dsc_fornax')}}
                            </p>

                        </li>
                        <!-- TAB-4 LINK -->
                        <li class="tab-link" data-tab="tab-4">

                            <!-- Title -->
                            <h4 class="h4-sm">Orion</h4>
                            <h6>{{__('orion')}}</h6>
                            <!-- Text -->
                            <p>{{__('dsc_orion')}}
                            </p>

                        </li>
                        <!-- TAB-1 LINK -->
                        <li class="tab-link current" data-tab="tab-1">

                            <!-- Title -->
                            <h4 class="h4-sm">Octans <sup>Soon</sup></h4>
                            <h6>{{__('octans')}}</h6>
                            <!-- Text -->
                            <p>{{__('dsc_octans')}}
                            </p>

                        </li>

                        <!-- TAB-3 LINK -->
                        <li class="tab-link" data-tab="tab-3">

                            <!-- Title -->
                            <h4 class="h4-sm">Aquila <sup>Soon</sup></h4>
                            <h6>{{__('aquila')}}</h6>
                            <!-- Text -->
                            <p>{{__('dsc_aquila')}}
                            </p>

                        </li>
                        <li class="tab-link" data-tab="tab-3">

                            <!-- Title -->
                            <h4 class="h4-sm">Lunar</h4>
                            <h6>{{__('lunar')}}</h6>
                            <!-- Text -->
                            <p>{{__('dsc_lunar')}}
                            </p>

                        </li>



                    </ul>
                </div>
            </div> <!-- END TABS NAVIGATION -->


            <div class="col">
                <div class="tabs-nav clearfix">
                    <ul class="tabs-1">

                        <!-- TAB-2 LINK -->
                        <li class="tab-link current" data-tab="tab-2">

                            <!-- Title -->
                            <h4 class="h4-sm">Landing page services <sup>New</sup></h4>
                            <h6>{{__('landingpage')}}</h6>
                            <!-- Text -->
                            <p>{{__('dsc_landingpage')}}</p>

                        </li>
                        <!-- TAB-1 LINK -->
                        <li class="tab-link" data-tab="tab-1">

                            <!-- Title -->
                            <h4 class="h4-sm">Lyra</h4>
                            <h6>{{__('lyra')}}</h6>
                            <!-- Text -->
                            <p>{{__('dsc_lyra')}}
                            </p>

                        </li>

                        <!-- TAB-1 LINK -->
                        <li class="tab-link current" data-tab="tab-1">

                            <!-- Title -->
                            <h4 class="h4-sm">Stockpile</h4>
                            <h6>{{__('stockpile')}}</h6>
                            <!-- Text -->
                            <p>{{__('dsc_stockpile')}}
                            </p>

                        </li>

                        <!-- TAB-3 LINK -->
                        <li class="tab-link" data-tab="tab-3">

                            <!-- Title -->
                            <h4 class="h4-sm">Pyxis <sup>Soon</sup></h4>
                            <h6>{{__('pyxis')}}</h6>
                            <!-- Text -->
                            <p>{{__('dsc_pyxis')}}
                            </p>

                        </li>
                        <!-- TAB-4 LINK -->
                        <li class="tab-link" data-tab="tab-4">

                            <!-- Title -->
                            <h4 class="h4-sm">Chatifine</h4>
                            <h6>{{__('chatifine')}}</h6>
                            <!-- Text -->
                            <p>{{__('dsc_chatifine')}}
                            </p>

                        </li>


                    </ul>
                </div>
            </div> <!-- END IMAGE BLOCK -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END TABS-2 -->


<!-- CALL TO ACTION-11
			============================================= -->
<section id="cta-11" class="cta-section division">
    <div class="container">
        <div class="bg-tra-white cta-11-wrapper">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION TEXT -->
                <div class="col-lg-7 col-lg-7">
                    <div class="cta-11-txt">

                        <!-- Title -->
                        <h2 class="h2-xs">{{__('ready_to_join')}}</h2>

                        <!-- Text -->
                        <p class="p-lg">{{__('dsc_ready_to_join')}}
                        </p>

                        <!-- Button -->
                        <a href="/contact" class="btn btn-stateblue tra-stateblue-hover">{{__('contact_sales')}}</a>

                    </div>
                </div>


                <!-- CALL TO ACTION BUTTON -->
                <div class="col-lg-5">
                    <div class="text-end">
                        <div class="cta-11-img text-center">
                            <img class="img-fluid" src="{!!asset('images/boxity/saas-service1.png')!!}"
                                alt="ready-to-join boxity central">
                        </div>
                    </div>
                </div>


            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END CALL TO ACTION-11 -->



<!-- DIVIDER LINE -->

@endsection
