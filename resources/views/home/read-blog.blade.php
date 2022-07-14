@extends('welcome')
@section('title', $blogs->title)
@section('page_description', 'This page is about news stories that are interesting to read, from everything updated from
Boxity Central Indonesia, from features, fixes, memes and more.')
@section('page_keywords', 'blog boxity, boxity, boxityerp, realizeboxity, boxity central
indonesia, erp boxity, warehouse management, human resources management, financial management, boxity warehouse, boxity
WMS, boxity financial, boxity indonesia, news from boxity')
@section('content')
<section id="single-post" class="wide-100 inner-page-hero single-post-section division">
    <div class="container">


        <!-- SINGLE POST CONTENT -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="single-post-wrapper">


                    <!-- SINGLE POST TITLE -->
                    <div class="single-post-title">

                        <!-- CATEGORY -->
                        {{-- <p class="p-sm post-tag txt-500 txt-upcase">OLMO News</p> --}}

                        <!-- TITLE -->
                        <h2 class="h2-md">{{$blogs->title}}</h2>

                        <!-- POST DATA -->
                        <div class="post-data clearfix">

                            <!-- Author Avatar -->
                            <div class="post-author-avatar">
                                <img src="{{$blogs->user->avatar}}" alt="author-avatar">
                            </div>

                            <!-- Author Data -->
                            <div class="post-author">
                                <h6 class="h6-xl">{{$blogs->user->name}}</h6>
                                <p class="p-md">Posted on {{  date('M d, Y', strtotime($blogs->created_at)) }} | <i
                                        class="far fa-eye"></i> @if ($blogs->views<1000)
                                        {{number_format($blogs->views)}} @elseif($blogs->views<1000000)
                                            {{number_format($blogs->views/1000, 1).'K'}} @elseif($blogs->views
                                            <1000000000) {{number_format($blogs->views/1000000, 1).'M'}} @else{
                                                {{number_format($blogs->views/1000000000, 1).'B'}} } @endif views</p>
                                                </div> </div> <!-- END POST DATA -->


                            </div> <!-- END SINGLE POST TITLE -->


                            <!-- BLOG POST INNER IMAGE -->
                            <div class="post-inner-img">
                                <img class="img-fluid" src="{{$blogs->image->file}}" alt="blog-post-image" />
                            </div>


                            <!-- BLOG POST TEXT -->
                            <div class="single-post-txt">

                                {!!$blogs->description!!}

                            </div> <!-- END BLOG POST TEXT -->


                            <!-- SINGLE POST SHARE LINKS -->
                            {{-- <div class="row post-share-links d-flex align-items-center">

                        <!-- POST TAGS -->
                        <div class="col-md-9 col-xl-8 post-tags-list">
                            <span><a href="#">Life</a></span>
                            <span><a href="#">Ideas</a></span>
                            <span><a href="#">Story</a></span>
                            <span><a href="#">Web Design</a></span>
                        </div>

                        <!-- POST SHARE ICONS -->
                        <div class="col-md-3 col-xl-4 post-share-list text-end">
                            <ul class="share-social-icons ico-25 text-center clearfix">
                                <li><a href="#" class="share-ico"><span class="flaticon-twitter"></span></a></li>
                                <li><a href="#" class="share-ico"><span class="flaticon-facebook"></span></a></li>
                                <li><a href="#" class="share-ico"><span class="flaticon-bookmark"></span></a></li>
                            </ul>
                        </div>

                    </div> <!-- END SINGLE POST SHARE --> --}}

                        </div>
                    </div>
                </div> <!-- END SINGLE POST CONTENT -->


            </div> <!-- End container -->
</section> <!-- END SINGLE POST -->
<section id="blog-1" class="bg-whitesmoke-gradient wide-60 blog-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-title title-01 mb-70">
                    <h2 class="h2-md">Keep Reading...</h2>
                </div>
            </div>
        </div>


        <!-- BLOG POSTS -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <!-- BLOG POST #1 -->
            @foreach ($blogArr as $blogGet)
            <div class="col">
                <div id="bp-1-1" class="blog-1-post mb-40 wow fadeInUp">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                        <div class="hover-overlay">
                            <img class="img-fluid" src="{{$blogGet->image->file}}" alt="blog-post-image" />
                            <div class="item-overlay"></div>
                        </div>
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Tag -->
                        <p class="p-md post-tag">{{$blogGet->created_at->diffForHumans()}}</p>

                        <!-- Post Link -->
                        <h5 class="h5-md">
                            <a href="/blog/read/{{$blogGet->slug}}">{{$blogGet->title}}</a>
                        </h5>

                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p class="p-md"><i class="far fa-eye"></i>@if ($blogGet->views<1000)
                                    {{number_format($blogGet->views)}} @elseif($blogGet->
                                    views<1000000) {{number_format($blogGet->views/1000, 1).'K'}} @elseif($blogGet->
                                        views
                                        <1000000000) {{number_format($blogGet->views/1000000, 1).'M'}} @else{
                                            {{number_format($blogGet->views/1000000000, 1).'B'}} } @endif Views</p>
                                            </div> </div> <!-- END BLOG POST TEXT -->

                        </div>
                    </div> <!-- END  BLOG POST #1 -->
                    @endforeach
                </div> <!-- END BLOG POSTS -->


            </div> <!-- End container -->
</section>




<!-- ABOUT POST AUTHOR
			============================================= -->
<div class="about-post-author bg-snow division">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="author-senoff">

                    <!-- Avatar -->
                    <img src="{{$blogs->user->avatar}}" alt="author-avatar">

                    <!-- Text -->
                    <div class="author-senoff-txt">

                        <!-- Title -->
                        <h5 class="h5-xs">Published by</h5>
                        <h5 class="h5-md">{{$blogs->user->name}}</h5>
                        <p class="p-md">{{$blogs->user->bio}}
                        </p>

                        <!-- Link -->
                        <p class="author-link">All stories by <a href="#">{{$blogs->user->name}}</a></p>

                    </div>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div>
@endsection
