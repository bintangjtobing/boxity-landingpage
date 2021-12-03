@extends('welcome')
@section('title', 'Home')
@section('page_description', 'A cloud-based system that helps companies to run their businesses as efficiently as
possible. We provide a way for you to manage and integrate various activities and operations of anything that your
business needs such as productions, assets, financial management, and human resources management through a software
application.')
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
                    <h2 class="h2-lg">Integrate Every Works You Have</h2>

                    <!-- Text -->
                    <p class="p-xl">A cloud-based system that helps companies to run their businesses as efficiently as
                        possible. We provide a way for you to manage and integrate various activities and operations of
                        anything that your business needs such as productions, assets, financial management, and human
                        resources management through a software application.
                    </p>

                    <!-- HERO QUICK FORM -->
                    <form name="quickform" class="quick-form">

                        <!-- Form Inputs -->
                        <div class="input-group">
                            <input type="email" name="email" class="form-control email" placeholder="Your email address"
                                autocomplete="off" required>
                            <span class="input-group-btn form-btn">
                                <button type="submit" class="btn btn-md btn-stateblue black-hover submit">Get
                                    Started</button>
                            </span>
                        </div>

                        <!-- Form Message -->
                        <div class="quick-form-msg"><span class="loading"></span></div>

                    </form>

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
                            alt="partner-logo-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-2.png')!!}"
                            alt="partner-logo-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-3.png')!!}"
                            alt="partner-logo-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-4.png')!!}"
                            alt="partner-logo-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-5.png')!!}"
                            alt="partner-logo-logo">
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-6.png')!!}"
                            alt="partner-logo-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-7.png')!!}"
                            alt="partner-logo-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-8.png')!!}"
                            alt="partner-logo-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="partner-logo-logo mx-2">
                        <img class="img-fluid" src="{!!asset('images/boxity/partner-logo-9.png')!!}"
                            alt="partner-logo-logo" />
                    </div>


                </div>
            </div>
        </div> <!-- End Brands Carousel -->


    </div> <!-- End container -->
</div> <!-- END BRANDS-1 -->




<!-- CONTENT-2
			============================================= -->
<section id="content-2" class="content-2 pb-60 content-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- IMAGE BLOCK -->
            <div class="col-md-5 col-lg-6">
                <div class="rel img-block left-column wow fadeInRight">
                    <img class="img-fluid" src="{!!asset('images/boxity/saas-services-img.png')!!}" alt="content-image">
                </div>
            </div>


            <!-- TEXT BLOCK -->
            <div class="col-md-7 col-lg-6">
                <div class="txt-block right-column wow fadeInLeft">


                    <!-- Title -->
                    <h2 class="h2-xs">Add New Service To Meet Better Customer Needs</h2>
                    <p>Provide a more effective business system in various industries from manufacturing, retails,
                        education, health - care, professional services, and many other industries.</p>

                    <!-- List -->
                    <ul class="simple-list">

                        <li class="list-item">
                            <p class="p-lg"><b>Optimizing your business operational system</b>: simplifying various
                                operational
                                activities that takes time and effort such as checking inventory, monitoring working
                                hours, payroll, and making financial reports.
                            </p>
                        </li>

                        <li class="list-item">
                            <p class="p-lg"><b>Reducing operational costs</b>: by reducing time and resources, you can
                                avoid
                                disruptions, obstacles and breakdowns through the process of automation.</p>
                        </li>

                        <li class="list-item">
                            <p class="p-lg"><b>A more effective collaboration process</b>: our system helps with
                                centralizing
                                all data.Which means more effective time and more flexible access to data collaboration
                                between each department
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
                    <h2 class="h2-lg">Powerful Services In One Package Application Development</h2>
                    <p class="p-xl">Boxity ERP system provides several modules within our software system including
                        Warehouse Management System, HR Management System, E - commerce System, Hotel Reservation System
                        and Payroll System. All benefits are available with one installation of our system in your
                        company.
                    </p>

                </div>
            </div> <!-- END HERO TEXT -->


        </div>
        <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">
            <!-- TABS NAVIGATION -->
            <div class="col">
                <div class="tabs-nav clearfix">
                    <ul class="tabs-1">


                        <!-- TAB-1 LINK -->
                        <li class="tab-link current" data-tab="tab-1">

                            <!-- Title -->
                            <h5 class="h5-sm">Warehouse Management System</h5>

                            <!-- Text -->
                            <p class="p-lg">Complete control on the operational process including how you maintain your
                                inventory
                            </p>

                        </li>

                        <!-- TAB-2 LINK -->
                        <li class="tab-link" data-tab="tab-2">

                            <!-- Title -->
                            <h5 class="h5-sm">E-Commmerce System</h5>

                            <!-- Text -->
                            <p class="p-lg">Helps you with the best experience in the sales and also monitoring of every
                                data reached to customers
                            </p>

                        </li>

                        <!-- TAB-3 LINK -->
                        <li class="tab-link" data-tab="tab-3">

                            <!-- Title -->
                            <h5 class="h5-sm">Issue Center Management System</h5>

                            <!-- Text -->
                            <p class="p-lg">Any critic, complaint and inquiry you have can be directly sent through our
                                Issue Center System
                            </p>

                        </li>
                        <!-- TAB-4 LINK -->
                        <li class="tab-link" data-tab="tab-4">

                            <!-- Title -->
                            <h5 class="h5-sm">Human Resources Management System</h5>

                            <!-- Text -->
                            <p class="p-lg">Provide help to reduce a lot of time on manage employee and optimize all the
                                administrative functions
                            </p>

                        </li>


                    </ul>
                </div>
            </div> <!-- END TABS NAVIGATION -->


            <!-- IMAGE BLOCK -->
            <div class="col">
                <div class="img-block right-column wow fadeInLeft">
                    <div class="tabs-content">

                        <!-- TAB #1 IMAGE -->
                        <div id="tab-1" class="tab-content current">
                            <img class="img-fluid" src="{!!asset('images/boxity/wms.png')!!}" alt="tab-image" />
                        </div>

                        <!-- TAB #2 IMAGE -->
                        <div id="tab-2" class="tab-content">
                            <img class="img-fluid" src="{!!asset('images/boxity/ecommerce.png')!!}" alt="tab-preview">
                        </div>

                        <!-- TAB #3 IMAGE -->
                        <div id="tab-3" class="tab-content">
                            <img class="img-fluid" src="{!!asset('images/boxity/issue-center.png')!!}"
                                alt="tab-image" />
                        </div>
                        <!-- TAB #4 IMAGE -->
                        <div id="tab-4" class="tab-content">
                            <img class="img-fluid" src="{!!asset('images/boxity/hrm.png')!!}" alt="tab-image" />
                        </div>


                    </div>
                </div>
            </div> <!-- END IMAGE BLOCK -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END TABS-2 -->




<!-- TESTIMONIALS-1
			============================================= -->
{{-- <section id="reviews-1" class="bg-whitesmoke-gradient wide-100 reviews-section division">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="section-title title-01 mb-70">

                            <!-- Title -->
                            <h2 class="h2-md">Stories From Our Customers</h2>

                            <!-- Text -->
                            <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a
                                libero
                                tempus, blandit and cursus varius and magnis sapien
                            </p>

                        </div>
                    </div>
                </div>


                <!-- TESTIMONIALS CONTENT -->
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel owl-theme reviews-1-wrapper">


                            <!-- TESTIMONIAL #1 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">Etiam sapien sagittis congue augue massa varius egestas ultrice
                                        varius magna a tempus aliquet undo cursus suscipit
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="{!!asset('images/boxity/review-author-1.jpg')!!}"
                                                alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Scott Boxer</h6>
                                            <p class="p-md">@scott_boxer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #1 -->


                            <!-- TESTIMONIAL #2 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">At sagittis congue augue and egestas magna ipsum vitae a purus
                                        ipsum
                                        primis in cubilia laoreet augue egestas luctus and donec diam ultrice ligula
                                        magna
                                        suscipit lectus gestas augue into cubilia
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="{!!asset('images/boxity/review-author-2.jpg')!!}"
                                                alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Joel Peterson</h6>
                                            <p class="p-md">Internet Surfer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #2 -->


                            <!-- TESTIMONIAL #3 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">Mauris donec magnis sapien etiam sapien congue augue egestas et
                                        ultrice
                                        vitae purus diam integer a congue magna ligula undo egestas magna at
                                        suscipit feugiat
                                        primis
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="{!!asset('images/boxity/review-author-3.jpg')!!}"
                                                alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Marisol19</h6>
                                            <p class="p-md">@marisol19</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #3 -->


                            <!-- TESTIMONIAL #4 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">Mauris donec a magnis sapien etiam sapien congue augue pretium
                                        ligula
                                        lectus aenean a magna undo mauris lectus laoreet tempor egestas
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="{!!asset('images/boxity/review-author-4.jpg')!!}"
                                                alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Leslie D.</h6>
                                            <p class="p-md">Web Developer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #4 -->


                            <!-- TESTIMONIAL #5 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">An augue cubilia laoreet magna suscipit egestas and ipsum a
                                        lectus purus ipsum
                                        primis and augue ultrice ligula and egestas a suscipit lectus gestas undo
                                        auctor tempus
                                        feugiat impedit
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="{!!asset('images/boxity/review-author-5.jpg')!!}"
                                                alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Jennifer Harper</h6>
                                            <p class="p-md">App Developer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #5 -->


                            <!-- TESTIMONIAL #6 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">An augue cubilia laoreet undo magna ipsum semper suscipit
                                        egestas magna
                                        ipsum ligula a vitae purus and ipsum primis cubilia magna suscipit
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="{!!asset('images/boxity/review-author-6.jpg')!!}"
                                                alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Jonathan Barnes</h6>
                                            <p class="p-md">jQuery Programmer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #6 -->


                            <!-- TESTIMONIAL #7 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">Augue egestas diam tempus volutpat egestas augue in cubilia
                                        laoreet magna
                                        suscipit luctus dolor and blandit vitae purus diam tempus an aliquet porta
                                        rutrum gestas
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="{!!asset('images/boxity/review-author-7.jpg')!!}"
                                                alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Mike Harris</h6>
                                            <p class="p-md">Graphic Designer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #7 -->


                            <!-- TESTIMONIAL #8 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">Augue at vitae purus tempus egestas volutpat augue undo cubilia
                                        laoreet
                                        magna suscipit luctus dolor blandit at purus tempus feugiat impedit
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="{!!asset('images/boxity/review-author-8.jpg')!!}"
                                                alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Evelyn Martinez</h6>
                                            <p class="p-md">WordPress Consultant</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #8 -->


                        </div>
                    </div>
                </div> <!-- END TESTIMONIALS CONTENT -->


            </div> <!-- End container -->
        </section> <!-- END TESTIMONIALS-1 --> --}}




<!-- FAQs-2
			============================================= -->
{{-- <section id="faqs-2" class="pb-60 faqs-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-title title-01 mb-80">

                    <!-- Title -->
                    <h2 class="h2-md">Got Questions? Look Here</h2>

                    <!-- Text -->
                    <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a
                        libero
                        tempus, blandit and cursus varius and magnis sapien
                    </p>

                </div>
            </div>
        </div>


        <!-- FAQs-2 QUESTIONS -->
        <div class="faqs-2-questions">
            <div class="row row-cols-1 row-cols-lg-2">


                <!-- QUESTIONS HOLDER -->
                <div class="col">
                    <div class="questions-holder pr-15">


                        <!-- QUESTION #1 -->
                        <div class="question wow fadeInUp">

                            <!-- Question -->
                            <h5 class="h5-md">Can I see OLMO in action before purchasing?</h5>

                            <!-- Answer -->
                            <p class="p-lg">Etiam amet mauris suscipit in odio integer congue metus vitae
                                arcu mollis
                                blandit ultrice ligula egestas and magna suscipit lectus magna suscipit
                                luctus blandit
                                vitae
                            </p>

                        </div>


                        <!-- QUESTION #2 -->
                        <div class="question wow fadeInUp">

                            <!-- Question -->
                            <h5 class="h5-md">What are the requirements for using OLMO?</h5>

                            <!-- Answer -->
                            <p class="p-lg">An enim nullam tempor sapien gravida a donec ipsum enim an porta
                                justo
                                integer at velna vitae auctor integer congue undo magna at pretium purus
                                pretium
                            </p>

                        </div>


                        <!-- QUESTION #3 -->
                        <div class="question wow fadeInUp">

                            <!-- Question -->
                            <h5 class="h5-md">Can I use OLMO on different devices?</h5>

                            <!-- Answer -->
                            <ul class="simple-list">

                                <li class="list-item">
                                    <p class="p-lg">Fringilla risus, luctus mauris orci auctor purus ligula
                                        euismod
                                        pretium purus pretium rutrum tempor sapien
                                    </p>
                                </li>

                                <li class="list-item">
                                    <p class="p-lg">Nemo ipsam egestas volute turpis dolores ut aliquam
                                        quaerat sodales
                                        sapien undo pretium a purus
                                    </p>
                                </li>

                            </ul>

                        </div>


                    </div>
                </div> <!-- END QUESTIONS HOLDER -->


                <!-- QUESTIONS HOLDER -->
                <div class="col">
                    <div class="questions-holder pl-15">


                        <!-- QUESTION #4 -->
                        <div class="question wow fadeInUp">

                            <!-- Question -->
                            <h5 class="h5-md">Do you have a free trial?</h5>

                            <!-- Answer -->
                            <p class="p-lg">Cubilia laoreet augue egestas and luctus donec curabite diam
                                vitae dapibus
                                libero and quisque gravida donec and neque. Blandit justo aliquam molestie
                                nunc sapien
                            </p>

                        </div>


                        <!-- QUESTION #5 -->
                        <div class="question wow fadeInUp">

                            <!-- Question -->
                            <h5 class="h5-md">How does OLMO handle my privacy?</h5>

                            <!-- Answer -->
                            <p class="p-lg">Etiam amet mauris suscipit sit amet in odio. Integer congue leo
                                metus.
                                Vitae arcu mollis blandit ultrice ligula
                            </p>

                            <!-- Answer -->
                            <p class="p-lg">An enim nullam tempor sapien gravida donec congue leo metus.
                                Vitae arcu
                                mollis blandit integer at velna
                            </p>

                        </div>


                        <!-- QUESTION #6 -->
                        <div class="question wow fadeInUp">

                            <!-- Question -->
                            <h5 class="h5-md">I have an issue with my account</h5>

                            <!-- Answer -->
                            <ul class="simple-list">

                                <li class="list-item">
                                    <p class="p-lg">Fringilla risus, luctus mauris orci auctor purus</p>
                                </li>

                                <li class="list-item">
                                    <p class="p-lg">Quaerat sodales sapien euismod blandit purus and ipsum
                                        primis in
                                        cubilia laoreet augue luctus
                                    </p>
                                </li>

                            </ul>

                        </div>


                    </div>
                </div> <!-- END QUESTIONS HOLDER -->


            </div> <!-- End row -->
        </div> <!-- END FAQs-2 QUESTIONS -->


        <!-- MORE QUESTIONS BUTTON -->
        <div class="row">
            <div class="col">
                <div class="more-questions">
                    <h5 class="h5-sm">Have more questions? <a href="contacts.html">Ask your question
                            here</a></h5>
                </div>
            </div>
        </div>


    </div> <!-- End container -->
</section> <!-- END FAQs-2 --> --}}




<!-- CALL TO ACTION-11
			============================================= -->
<section id="cta-11" class="cta-section division">
    <div class="container">
        <div class="bg-tra-purple cta-11-wrapper">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION TEXT -->
                <div class="col-lg-7 col-lg-7">
                    <div class="cta-11-txt">

                        <!-- Title -->
                        <h2 class="h2-xs">Ready to Join Boxity?</h2>

                        <!-- Text -->
                        <p class="p-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi exercitationem
                            sapiente, voluptatum incidunt excepturi, quaerat asperiores repellendus consectetur itaque
                        </p>

                        <!-- Button -->
                        <a href="#" class="btn btn-stateblue tra-stateblue-hover">Get Started
                            Now</a>

                    </div>
                </div>


                <!-- CALL TO ACTION BUTTON -->
                <div class="col-lg-5">
                    <div class="text-end">
                        <div class="cta-11-img text-center">
                            <img class="img-fluid" src="{!!asset('images/boxity/saas-service1.png')!!}" alt="cta-image">
                        </div>
                    </div>
                </div>


            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END CALL TO ACTION-11 -->



<!-- DIVIDER LINE -->
<hr class="divider">

@endsection
