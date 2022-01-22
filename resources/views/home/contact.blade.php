@extends('welcome')
@section('title', 'Contact')
@section('page_description', 'If you need further information, please contact us via the contact provided as needed.')
@section('page_keywords', 'hubungi boxity, contact boxity, boxity, boxityerp, realizeboxity, boxity central indonesia,
erp boxity, warehouse management,
human resources management, financial management, boxity warehouse, boxity WMS, boxity financial, boxity indonesia')
@section('content')
<section id="contacts-2" class="bg-snow wide-50 inner-page-hero contacts-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title title-02">

                    <!-- Title -->
                    <span>{{__('contact')}}</span>
                    <h2 class="h2-xs">{{__('have_question')}} <br> {{__('have_question_2')}}</h2>

                    <!-- Text -->
                    <p class="p-xl">{{__('dsc_have_question')}}
                    </p>

                </div>
            </div>
        </div>

    </div> <!-- End container -->
</section>
<section id="features-2" class="wide-60 features-section division">
    <div class="container">


        <!-- FEATURES-2 WRAPPER -->
        <div class="fbox-2-wrapper text-center">
            <div class="row row-cols-1 row-cols-md-3">


                <!-- FEATURE BOX #1 -->
                <div class="col">
                    <div class="fbox-2 mb-40 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico-center ico-65 shape-ico boxity-primary-color">
                            <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
                            <span class="flaticon-email"></span>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt-center">

                            <!-- Title -->
                            <h5 class="h5-md">{{__('contact_sales')}}</h5>

                            <!-- Text -->
                            <p class="p">{{__('dsc_contact_sales')}}
                            </p>
                            <a href="mailto:sales@boxity.id" class="btn btn-skyboxity btn-sm my-4">sales@boxity.id</a>
                        </div>

                    </div>
                </div>


                <!-- FEATURE BOX #2 -->
                <div class="col">
                    <div class="fbox-2 mb-40 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico-center ico-65 shape-ico boxity-primary-color">
                            <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
                            <span class="flaticon-chat-1"></span>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt-center">

                            <!-- Title -->
                            <h5 class="h5-md">{{__('live_chat')}}</h5>

                            <!-- Text -->
                            <p class="p">{{__('dsc_live_chat')}}
                            </p>
                            <a href="https://wa.me/6281262845980?&text=Halo%20saya%20ingin%20menanyakan%20tentang%20produk%20Boxity"
                                class="btn btn-skyboxity btn-sm my-4">Chat via Whatsapp</a>

                        </div>

                    </div>
                </div>


                <!-- FEATURE BOX #3 -->
                <div class="col">
                    <div class="fbox-2 mb-40 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico-center ico-65 shape-ico boxity-primary-color">
                            <img class="ico-bkg" src="{!!asset('images/boxity/ico-bkg.png')!!}" alt="ico-bkg">
                            <span class="flaticon-calendar"></span>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt-center">

                            <!-- Title -->
                            <h5 class="h5-md">{{__('product_demo')}}</h5>

                            <!-- Text -->
                            <p class="p">{{__('dsc_product_demo')}}
                            </p>
                            <a href="/schedule-demo" class="btn btn-skyboxity btn-sm my-4">Schedule a demo</a>

                        </div>

                    </div>
                </div>


            </div>
        </div> <!-- END FEATURES-2 WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END CONTACTS-2 -->

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


<!-- DIVIDER LINE -->
<hr class="divider">


@endsection
