@extends('welcome')
@section('title', 'About')
@section('page_description', '')
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
                            <h5 class="h5-md">Who is Boxity?</h5>

                            <!-- Text -->
                            <p>
                                Boxity is an Enterprise Resources Planning (ERP) platform for planning, utilizing as
                                well as developing resources to the fullest. Boxity provides a way for those of you who
                                may have just started a business, as well as for those who already have a business that
                                is 5-10 years old, to manage and integrate any activities and operations your business
                                needs such as production, asset, financial management, and managing human resources
                                through software applications that we have.
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
                            <h5 class="h5-md">Our Vision</h5>

                            <!-- Text -->
                            <p>To provide a more effective business system in various industries from manufacturing,
                                retails, education, health-care, professional services, and many other industries.</p>

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
                            <h2 class="h2-md">We’re Better. Here’s Why…</h2>

                            <!-- Text -->
                            <p class="p-xl">There are a lot of advantages that you can gain if you choose us.
                            </p>

                        </div>
                    </div>
                </div>


                <!-- FEATURES-4 WRAPPER -->
                <div class="fbox-4-wrapper fbox-4-wide">
                    <div class="row row-cols-1 row-cols-md-2">


                        <!-- FEATURE BOX #1 -->
                        <div class="col">
                            <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                                <!-- Icon -->
                                <div class="fbox-ico">
                                    <div class="ico-65">
                                        <span class="flaticon-internet"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">Integrated</h5>

                                    <!-- Text -->
                                    <p class="p-lg">Boxity has a system that has functions that are integrated into all
                                        systems in the boxity application itself.
                                    </p>

                                </div>

                            </div>
                        </div>


                        <!-- FEATURE BOX #2 -->
                        <div class="col">
                            <div class="fbox-4 pl-25 mb-40 wow fadeInUp">

                                <!-- Icon -->
                                <div class="fbox-ico">
                                    <div class="ico-65">
                                        <span class="flaticon-time"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">Time Efficiency</h5>

                                    <!-- Text -->
                                    <p class="p-lg">You get better time management because you spend less time accessing
                                        and processing data and it’s more effective for collaboration.
                                    </p>

                                </div>

                            </div>
                        </div>


                        <!-- FEATURE BOX #3 -->
                        <div class="col">
                            <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                                <!-- Icon -->
                                <div class="fbox-ico">
                                    <div class="ico-65">
                                        <span class="flaticon-web-browser"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">Accesible</h5>

                                    <!-- Text -->
                                    <p class="p-lg">In an our integrated system, you can access and manage your system
                                        anywhere and anytime from your computer, android, and also the iOS system.
                                    </p>

                                </div>

                            </div>
                        </div>


                        <!-- FEATURE BOX #4 -->
                        <div class="col">
                            <div class="fbox-4 pl-25 mb-40 wow fadeInUp">

                                <!-- Icon -->
                                <div class="fbox-ico">
                                    <div class="ico-65">
                                        <span class="flaticon-increase-1"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">Effective flow with friendly User Interface</h5>

                                    <!-- Text -->
                                    <p class="p-lg">You would have less time spent, reduce cost, and more effective
                                        management which increases overall productivity within one integrated system.
                                    </p>

                                </div>

                            </div>
                        </div>


                        <!-- FEATURE BOX #5 -->
                        <div class="col">
                            <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                                <!-- Icon -->
                                <div class="fbox-ico">
                                    <div class="ico-65">
                                        <span class="flaticon-phone-call"></span>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">24/7 Support</h5>

                                    <!-- Text -->
                                    <p class="p-lg">Did you get a problem? Take it easy. Any concern and problem you
                                        have would be easily solved by our live customer service system that would be
                                        available 24/7 and also you can submit your ticket from our system, and we'll
                                        receive your ticket and do the job ticket based on your priority.
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
                    <p class="p-xl">Over 10+ companies are already using our application every day</p>
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
                                alt="partner-logo-logo" />
                        </a>
                    </div>
                </div>

                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-1.png')!!}"
                                alt="partner-logo-logo" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-3.png')!!}"
                                alt="partner-logo-logo" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-4.png')!!}"
                                alt="partner-logo-logo" />
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-5.png')!!}"
                                alt="partner-logo-logo">
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-6.png')!!}"
                                alt="partner-logo-logo">
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-7.png')!!}"
                                alt="partner-logo-logo">
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-8.png')!!}"
                                alt="partner-logo-logo">
                        </a>
                    </div>
                </div>


                <!-- BRAND LOGO IMAGE -->
                <div class="col">
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-9.png')!!}"
                                alt="partner-logo-logo">
                        </a>
                    </div>
                </div>

            </div>
        </div> <!-- END BRANDS-2 WRAPPER -->


    </div> <!-- End container -->
</div>


<!-- DIVIDER LINE -->
<hr class="divider">

<!-- FEATURES-8
			============================================= -->
{{-- <section id="features-8" class="pb-60 features-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-title title-01 mb-70">

                    <!-- Title -->
                    <h2 class="h2-md">What Makes Boxity Different</h2>

                    <!-- Text -->
                    <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero
                        tempus, blandit and cursus varius and magnis sapien
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
                            <img class="img-fluid" src="{!!asset('webpage/images/img-21.png')!!}" alt="feature-icon" />
                        </div>

                        <!-- Title -->
                        <h5 class="h5-md">One-stop Solutions</h5>

                        <!-- Text -->
                        <p class="p-lg">Feugiat primis ultrice semper lacus cursus feugiat undo primis ultrice a
                            ligula an auctor tempus magnis
                        </p>

                    </div>
                </div>


                <!-- FEATURE BOX #2 -->
                <div class="col">
                    <div class="fbox-8 mb-40 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img bg-whitesmoke-gradient">
                            <img class="img-fluid" src="{!!asset('webpage/images/img-24.png')!!}" alt="feature-icon" />
                        </div>

                        <!-- Title -->
                        <h5 class="h5-md">Online Marketing</h5>

                        <!-- Text -->
                        <p class="p-lg">Feugiat primis ultrice semper lacus cursus feugiat undo primis ultrice a
                            ligula an auctor tempus magnis
                        </p>

                    </div>
                </div>


                <!-- FEATURE BOX #3 -->
                <div class="col">
                    <div class="fbox-8 mb-40 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img bg-whitesmoke-gradient">
                            <img class="img-fluid" src="{!!asset('webpage/images/img-25.png')!!}" alt="feature-icon" />
                        </div>

                        <!-- Title -->
                        <h5 class="h5-md">Design & Development</h5>

                        <!-- Text -->
                        <p class="p-lg">Feugiat primis ultrice semper lacus cursus feugiat undo primis ultrice a
                            ligula an auctor tempus magnis
                        </p>

                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- END FEATURES-8 WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END FEATURES-8 --> --}}


<!-- TEAM-1
			============================================= -->
{{-- <section id="team-1" class="wide-50 team-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-title title-01 mb-80">

                    <!-- Title -->
                    <h2 class="h2-md">One Team Many Talents</h2>

                    <!-- Text -->
                    <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero
                        tempus, blandit and cursus varius and magnis sapien
                    </p>

                </div>
            </div>
        </div>


        <!-- TEAM MEMBERS HOLDER -->
        <div class="team-members-wrapper text-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">


                <!-- TEAM MEMBER #1 -->
                <div class="col">
                    <div class="team-member wow fadeInUp">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <img class="img-fluid" src="{!!asset('webpage/images/team-1.jpg')!!}"
                                alt="team-member-foto">
                        </div>

                        <!-- Team Member Data -->
                        <div class="team-member-data">
                            <h5 class="h5-sm">Jonathan Barnes</h5>
                            <p class="p-lg">Founder and CEO</p>
                            <p class="p-lg tm-social"><a href="#" class="text-secondary">@jonatanbarnes</a></p>
                        </div>

                    </div>
                </div> <!-- END TEAM MEMBER #1 -->


                <!-- TEAM MEMBER #2 -->
                <div class="col">
                    <div class="team-member wow fadeInUp">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <img class="img-fluid" src="{!!asset('webpage/images/team-2.jpg')!!}"
                                alt="team-member-foto">
                        </div>

                        <!-- Team Member Data -->
                        <div class="team-member-data">
                            <h5 class="h5-sm">Jamie Bartlett</h5>
                            <p class="p-lg">Software Engineer</p>
                            <p class="p-lg tm-social text-secondary"><a href="#">@jamiebartlett</a></p>
                        </div>

                    </div>
                </div> <!-- END TEAM MEMBER #2 -->


                <!-- TEAM MEMBER #3 -->
                <div class="col">
                    <div class="team-member wow fadeInUp">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <img class="img-fluid" src="{!!asset('webpage/images/team-3.jpg')!!}"
                                alt="team-member-foto">
                        </div>

                        <!-- Team Member Data -->
                        <div class="team-member-data">
                            <h5 class="h5-sm">Matthew Anderson</h5>
                            <p class="p-lg">Software Engineer</p>
                            <p class="p-lg tm-social text-secondary"><a href="#">@matthewanderson</a></p>
                        </div>

                    </div>
                </div> <!-- END TEAM MEMBER #3 -->


                <!-- TEAM MEMBER #4 -->
                <div class="col">
                    <div class="team-member wow fadeInUp">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <img class="img-fluid" src="{!!asset('webpage/images/team-4.jpg')!!}"
                                alt="team-member-foto">
                        </div>

                        <!-- Team Member Data -->
                        <div class="team-member-data">
                            <h5 class="h5-sm">Megan Coleman</h5>
                            <p class="p-lg">UX / UI Designer</p>
                            <p class="p-lg tm-social text-secondary"><a href="#">@megancoleman</a></p>
                        </div>

                    </div>
                </div> <!-- END TEAM MEMBER #4 -->


                <!-- TEAM MEMBER #5 -->
                <div class="col">
                    <div class="team-member wow fadeInUp">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <img class="img-fluid" src="{!!asset('webpage/images/team-5.jpg')!!}"
                                alt="team-member-foto">
                        </div>

                        <!-- Team Member Data -->
                        <div class="team-member-data">
                            <h5 class="h5-sm">Charlotte Johnson</h5>
                            <p class="p-lg">Quality Assurance</p>
                            <p class="p-lg tm-social text-secondary"><a href="#">@charlottejohnson</a></p>
                        </div>

                    </div>
                </div> <!-- END TEAM MEMBER #5 -->


                <!-- TEAM MEMBER #6 -->
                <div class="col">
                    <div class="team-member wow fadeInUp">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <img class="img-fluid" src="{!!asset('webpage/images/team-6.jpg')!!}"
                                alt="team-member-foto">
                        </div>

                        <!-- Team Member Data -->
                        <div class="team-member-data">
                            <h5 class="h5-sm">Olivia Steiner</h5>
                            <p class="p-lg">Head of Marketing</p>
                            <p class="p-lg tm-social text-secondary"><a href="#">@oliviasteiner</a></p>
                        </div>

                    </div>
                </div> <!-- END TEAM MEMBER #6 -->


                <!-- TEAM MEMBER #7 -->
                <div class="col">
                    <div class="team-member wow fadeInUp">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <img class="img-fluid" src="{!!asset('webpage/images/team-7.jpg')!!}"
                                alt="team-member-foto">
                        </div>

                        <!-- Team Member Data -->
                        <div class="team-member-data">
                            <h5 class="h5-sm">Mark Brayton</h5>
                            <p class="p-lg">Customer Care</p>
                            <p class="p-lg tm-social text-secondary"><a href="#">@markbrayton</a></p>
                        </div>

                    </div>
                </div> <!-- END TEAM MEMBER #7 -->


                <!-- TEAM MEMBER #8 -->
                <div class="col">
                    <div class="team-member wow fadeInUp">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <img class="img-fluid" src="{!!asset('webpage/images/team-8.jpg')!!}"
                                alt="team-member-foto">
                        </div>

                        <!-- Team Member Data -->
                        <div class="team-member-data">
                            <h5 class="h5-sm">Grow With Us</h5>
                            <p class="p-lg text-secondary"><a href="mailto:youremail@mail.com">hireme@domain.com</a></p>
                            <p class="p-lg tm-social text-secondary">
                                <a href="mailto:youremail@mail.com">hireme1@domain.com</a>
                            </p>
                        </div>

                    </div>
                </div> <!-- END TEAM MEMBER #8 -->


            </div> <!-- End row -->
        </div> <!-- TEAM MEMBERS HOLDER -->


    </div> <!-- End container -->
</section> <!-- END TEAM-1 --> --}}








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
                        <h3>Ready to move forward with Boxity?</h3>
                        <p class="p-xl">Increase efficiency, productivity and business performance with Boxity products.
                        </p>
                    </div>
                </div>


                <!-- BUTTON -->
                <div class="col-lg-12 text-center">
                    <div class="cta-7-btn">
                        <a href="/contact" class="btn btn-skyboxity tra-boxity-hover my-4">Contact Sales</a>
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End cta-7-wrapper -->
    </div> <!-- End container -->
</div>
@endsection
