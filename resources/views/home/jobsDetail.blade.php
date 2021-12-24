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
<section id="download-1" class="bg-snow wide-20 download-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="version-release">

                    <!-- Release Data -->
                    <div class="release-data">

                        <h4 class="h4-xs">{{$job->title}}</h4>

                        <!-- Version Data -->
                        <div class="rel">
                            <span class="release-date">Location &nbsp; : {{$job->location}}</span>
                            <a href="/jobs/a/{{Crypt::encrypt($job->id)}}"
                                class="btn btn-skyboxity tra-boxity-hover ico-15 ico-left release-download">
                                Apply Now
                            </a>
                        </div>

                    </div>

                    <!-- Release Highlights -->
                    <div class="release-highlights">
                        {!!$job->description!!}
                    </div>

                    <a href="/jobs/a/{{Crypt::encrypt($job->id)}}" class="btn btn-skyboxity tra-boxity-hover">Apply
                        Now</a>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section>
@endsection
