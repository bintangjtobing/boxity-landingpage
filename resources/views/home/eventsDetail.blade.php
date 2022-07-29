@extends('welcome')
@section('title', $events->event_name)
@section('tag_cover',$events->image->file ?? '')
@section('content')
<section id="hero-boxity" class="bg-scroll hero-section division" style="background-image: none !important;">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- HERO TEXT -->
            <div class="col-md-7 col-lg-6 order-first order-md-2">
                <div class="hero-boxity-txt wow fadeInLeft">

                    <!-- Title -->
                    <h2 class="h2-xl">Events, made for those who need</h2>

                </div>
            </div> <!-- END HERO TEXT -->

            <!-- HERO IMAGE -->
            <div class="col-md-5 col-lg-6 order-last order-md-2">
                <div class="hero-boxity-img pc-30 wow fadeInRight">
                    <img class="img-fluid" src="{!!asset('webpage/images/events.svg')!!}" alt="hero-image">
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
                        <img src="{{$events->image['file']}}" alt="" class="img-fluid mb-4">
                        <h4 class="h4-xs" style="margin-bottom: 10px !important;">{{$events->event_name}}</h4>
                        <button class="btn-primary-boxity">Organized by : {{$events->organized_by}}</button>
                        <button class="btn-primary-boxity">Event type : {{$events->type}}</button>
                        <!-- Version Data -->
                        <div class="rel">
                            <span class="release-date">Start date &nbsp; : {{$events->start_date}}</span> <br>
                            <span class="release-date">End date &nbsp; : {{$events->end_date}}</span> <br>
                        </div>

                    </div>

                    <!-- Release Highlights -->
                    <div class="release-highlights">
                        {!!$events->event_content!!}
                    </div>

                    <a href="/events/registration/{{$events->slug}}" class="btn btn-skyboxity tra-boxity-hover">Register
                        now</a>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section>
@endsection
