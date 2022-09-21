@extends('welcome')
@section('title', $job->title ?? 'Career')
@section('page_description', Str::limit($job->description, 150))
@section('content')
<section id="hero-boxity" class="bg-scroll hero-section division" style="background-image: none !important;">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- HERO TEXT -->
            <div class="col-md-7 col-lg-6 order-first order-md-2">
                <div class="hero-boxity-txt wow fadeInLeft">

                    <!-- Title -->
                    <h2 class="h2-xl">{{__('ready_to_join_team')}}</h2>
                    <p class="p-xl">{{__('dsc_ready_to_join_team')}}
                    </p>

                </div>
            </div> <!-- END HERO TEXT -->

            <!-- HERO IMAGE -->
            <div class="col-md-5 col-lg-6 order-last order-md-2">
                <div class="hero-boxity-img pc-30 wow fadeInRight">
                    <img class="img-fluid" src="{!!asset('webpage/images/vacant.svg')!!}" alt="hero-image">
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->

</section>
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
                            <a href="/job-openings/apply/{{$job->slug}}"
                                class="btn btn-skyboxity tra-boxity-hover ico-15 ico-left release-download">
                                Apply Now
                            </a>
                        </div>

                    </div>

                    <!-- Release Highlights -->
                    <div class="release-highlights">
                        {!!$job->description!!}
                    </div>

                    <a href="/job-openings/apply/{{$job->slug}}" class="btn btn-skyboxity tra-boxity-hover">Apply
                        Now</a>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section>
@endsection
