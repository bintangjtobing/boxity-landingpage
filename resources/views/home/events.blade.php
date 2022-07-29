@extends('welcome')
@section('title', 'Events page')
@section('page_description', 'Boxity also has an event page that contains event news in the form of webinars, startup
seminars, incubation events, and others organized by partners and Boxity itself.')
@section('page_keywords', 'event, event boxity, webinar boxity, webinar, seminar online boxity, seminar online')
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
<section id="blog-page" class="bg-snow wide-50 inner-page-hero blog-page-section division"
    style="padding-top: 3rem !important;">
    <div class="container">
        <!-- POSTS WRAPPER -->
        <div class="posts-wrapper">
            <!-- BLOG POSTS CATEGORY -->
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg posts-category">Upcoming events</h5>
                </div>
            </div>
            <!-- BLOG POSTS -->
            <div class="row">
                <div class="col gallery-items-list">
                    <div class="masonry-wrap grid-loaded">


                        @foreach ($events as $events)
                        <div class="blog-3-post masonry-image">
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{$events->image['file']}}" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>
                            <div class="blog-post-txt">
                                <p class="p-md post-tag">{{$events->created_at->diffForHumans()}}</p>
                                <h5 class="h5-md">
                                    <a href="/events/{{$events->slug}}">
                                        {{$events->event_name}}
                                    </a>
                                </h5>
                            </div>
                        </div> @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End container -->
</section>
@endsection
