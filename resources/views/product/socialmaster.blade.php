@extends('welcome')
@section('title', 'Socialmaster by Boxity')
@section('page_description', 'A comprehensive social media management tool for businesses and individuals to master their online presence.')
@section('icon',
'https://res.cloudinary.com/boxity-id/image/upload/c_fit,w_64/v1680894882/socialmaster_oxbhev.png')
@section('page_keywords', 'buat mini website mudah dan terjangkau dengan semplice dari boxity, semplice by boxity,
semplice boxity, semplice micro site, micro site')
@section('tag_cover',
'https://res.cloudinary.com/boxity-id/image/upload/v1680894882/tag_socialmaster_dmbtax.png')
@section('content')
<section id="hero-boxity" class="bg-scroll hero-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- HERO IMAGE -->
            <div class="col-md-5 col-lg-6 order-last order-md-2">
                <div class="hero-boxity-img pc-30 wow fadeInRight">
                    <img class="img-fluid" src="{!!asset('product/socialmaster/asset-1.png')!!}"
                        alt="landingpage-by-boxity">
                </div>
            </div>


            <!-- HERO TEXT -->
            <div class="col-md-7 col-lg-6 order-first order-md-2">
                <div class="hero-boxity-txt white-color wow fadeInLeft">

                    <!-- Title -->
                    <h2 class="h2-xl">Social media management tool for businesses</h2>

                    <!-- Text -->
                    <p class="p">A comprehensive social media management tool for businesses and individuals to master their online presence.
                    </p>

                    <!-- Buttons Group -->
                    <div class="btns-group mb-20">
                        <a href="/schedule-demo" class="btn btn-skyboxity tra-white-hover mr-15">Stay connected with your audience today!</a>
                        <a href="/sc/business/portfolio/smm/2022" class="btn btn-skyboxity tra-white-hover mt-15">See our portfolio</a>
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
                    <h2 class="h2-md">Why you should use <span>Socialmaster</span> <abbr title="Boxity Socialmaster">from Boxity</abbr>?</h2>

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
                            <h5 class="h5-md">Increased Brand Visibility</h5>

                            <!-- Text -->
                            <p class="p-lg">Our social media management services can help increase your brand's visibility and reach on social media platforms. This can lead to increased brand awareness and ultimately, more customers.
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
                            <h5 class="h5-md">Professional Content Creation</h5>

                            <!-- Text -->
                            <p class="p-lg">Our team of experienced professionals can create high-quality content for your social media channels, ensuring that your brand's messaging is consistent and engaging.
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
                                <span class="flaticon-target"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Targeted Advertising</h5>

                            <!-- Text -->
                            <p class="p-lg">Our social media management services include targeted advertising campaigns that can reach your ideal audience. This can help increase conversions and drive sales.
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
                                <span class="flaticon-analytics"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Analytics and Reporting</h5>

                            <!-- Text -->
                            <p class="p-lg">Our team provides detailed analytics and reporting on the performance of your social media channels. This can help you make informed decisions about your social media strategy and optimize your efforts for maximum impact.
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
                                <span class="flaticon-time"></span>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">

                            <!-- Title -->
                            <h5 class="h5-md">Save Time and Resources</h5>

                            <!-- Text -->
                            <p class="p-lg">By outsourcing your social media management to us, you can save time and resources that can be better spent on other areas of your business. This can help increase productivity and overall efficiency.
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
