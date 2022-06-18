@extends('welcome')
@section('title', 'Career')
@section('page_description', 'At Boxity Central Indonesia, we aim to empower the progress of businesses and people in
Indonesia’s 1 trillion dollar economy. To do that, we need heroes: people who always hold their work to the highest
standard, people who continuously look for ways to empower themselves and empower others.')
@section('page_keywords', 'career boxity, karir boxity, lowongan kerja di boxity, boxity,
boxityerp, realizeboxity,
boxity central indonesia, erp boxity, warehouse management,
human resources management, financial management, boxity warehouse, boxity WMS, boxity financial, boxity indonesia')
@section('content')
<div id="download-page" class="page-hero-section division">
    <div class="page-hero-overlay division">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="hero-txt text-center dark-color">

                        <!-- Title -->
                        <h2 class="h2-xs">{{__('ready_to_join_team')}}</h2>

                        <!-- Text -->
                        <p class="p-xl">{{__('dsc_ready_to_join_team')}}
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
                    <h2 class="h2-md">{{__('vacant_positions')}}</h2>

                    <!-- Text -->
                    <p>{{__('dsc_vacant_positions')}}
                    </p>

                </div>
            </div>
        </div>
        @if(count($job) > 0)
        @foreach ($job as $job)
        <div id="cta-7" class="cta-section division">
            <div class="container">
                <div class="cta-12-wrapper bg-snow">
                    <div class="row d-flex align-items-center">


                        <!-- TEXT -->
                        <div class="col-lg-9">
                            <div class="cta-7-txt">
                                <h3>{{$job->title}}</h3>
                                <p class="p"><b>Part of:</b> {{$job->part}}, <b>Job Location:</b>
                                    <span>{{$job->location}} | <i class="far fa-eye"></i> <sup>{{$job->views}}
                                            views</sup>
                                </p>
                            </div>
                        </div>


                        <!-- BUTTON -->
                        <div class="col-lg-3 text-end">
                            <div class="cta-7-btn">
                                @if ($job->status == 0)
                                <a href="/jobs/{{Crypt::encrypt($job->id)}}"
                                    class="btn btn-skyboxity tra-boxity-hover">Read
                                    more</a>
                                @else
                                <a href="#" class="btn btn-skyboxity tra-boxity-hover disabled">Closed</a>
                                @endif
                            </div>
                        </div>


                    </div> <!-- End row -->
                </div> <!-- End cta-7-wrapper -->
            </div> <!-- End container -->
        </div>
        @endforeach
        @else
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8 text-center">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    <span>Thank you for your subscription! We have received your email.</span>
                </div>
                @endif
                <h3>{{__('no_job_openings')}}</h3>
                <p>{{__('dsc_no_job_openings')}}</p>
                <form action="/subscription/new" method="POST" class="row">
                    @csrf
                    <!-- Form Input -->
                    <div class="col-md-12">
                        <input type="email" name="email" class="form-control email" placeholder="Enter Your Email*"
                            autocomplete="off" required>
                    </div>

                    <!-- Form Button -->
                    <div class="col-md-12 form-btn mt-15">
                        <button type="submit" class="btn btn-md btn-skyboxity tra-boxity-hover submit">Subscribe
                            Now</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @endif
    </div> <!-- End container -->
</section>
@endsection
