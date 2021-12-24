@extends('welcome')
@section('title', 'Career')
@section('page_description', '')
@section('content')
<div id="download-page" class="page-hero-section division">
    <div class="page-hero-overlay division">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="hero-txt text-center dark-color">

                        <!-- Title -->
                        <h2 class="h2-xs">Ready to join our great team?</h2>

                        <!-- Text -->
                        <p class="p-xl">Join our team to help shape the future of cross-platform integrated systems for
                            the many businesses in need.
                        </p>

                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- End hero-overlay -->


    <!-- WAVE SHAPE BOTTOM -->
    <div class="wave-shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
            </path>
        </svg>
    </div>


</div>
<section id="features-4" class="wide-60 features-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-title title-01 mb-70">

                    <!-- Title -->
                    <h2 class="h2-md">Open positions</h2>

                    <!-- Text -->
                    <p class="p-xl">We are looking for people to join a team as passionate as we are to help build a
                        platform that empowers enterprise resource planning systems across multiple sectors for future
                        success.
                    </p>

                </div>
            </div>
        </div>


        <!-- FEATURES-4 WRAPPER -->
        {{-- <div class="fbox-4-wrapper fbox-4-wide">
            <div class="row row-cols-1 row-cols-md-2 justify-content-center">


                <!-- Career BOX #1 -->
                @foreach ($job as $job)
                <div class="col text-center">
                    <div class="fbox-4 mb-20 wow fadeInUp">
                        <!-- Text -->
                        <a href="#" class="fbox-txt rollover-career">
                            <!-- Title -->
                            <h5 class="h5">{{$job->title}}</h5>
        <!-- Text -->
        <p class="p-lg">{{$job->part}} - <span>{{$job->location}}</span>
        </p>

        </a>

    </div>
    </div>


    @endforeach


    </div>
    </div> <!-- END FEATURES-4 WRAPPER --> --}}

    @foreach ($job as $job)
    <div id="cta-7" class="cta-section division">
        <div class="container">
            <div class="cta-12-wrapper bg-snow">
                <div class="row d-flex align-items-center">


                    <!-- TEXT -->
                    <div class="col-lg-9">
                        <div class="cta-7-txt">
                            <h3>{{$job->title}}</h3>
                            <p class="p">{{$job->part}} - <span>{{$job->location}}
                            </p>
                        </div>
                    </div>


                    <!-- BUTTON -->
                    <div class="col-lg-3 text-end">
                        <div class="cta-7-btn">
                            <a href="/jobs/{{Crypt::encrypt($job->id)}}" class="btn btn-skyboxity tra-boxity-hover">Read
                                more</a>
                        </div>
                    </div>


                </div> <!-- End row -->
            </div> <!-- End cta-7-wrapper -->
        </div> <!-- End container -->
    </div>
    @endforeach


    </div> <!-- End container -->
</section>
@endsection
