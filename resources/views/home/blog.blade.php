@extends('welcome')
@section('title', 'Blog')
@section('page_description', 'This page is about news stories that are interesting to read, from everything updated from
Boxity Central Indonesia, from features, fixes, memes and more.')
@section('page_keywords', 'blog boxity, boxity, boxityerp, realizeboxity, boxity central
indonesia, erp boxity, warehouse management, human resources management, financial management, boxity warehouse, boxity
WMS, boxity financial, boxity indonesia, news from boxity')
@section('content')
<div id="download-page" class="page-hero-section division">
    <div class="page-hero-overlay division">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="hero-txt text-center dark-color">

                        <!-- Title -->
                        <h2 class="h2-xs">Relevant news and more for you. Welcome to our blog</h2>

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
<section id="blog-page" class="bg-snow wide-50 inner-page-hero blog-page-section division"
    style="padding-top: 3rem !important;">
    <div class="container">
        <!-- POSTS WRAPPER -->
        <div class="posts-wrapper">
            <!-- BLOG POSTS CATEGORY -->
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg posts-category">Latest Articles</h5>
                </div>
            </div>
            <!-- BLOG POSTS -->
            <div class="row">
                <div class="col gallery-items-list">
                    <div class="masonry-wrap grid-loaded">


                        @foreach ($blogs as $blog)
                        <div class="blog-3-post masonry-image">
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{$blog->image->file}}" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>
                            <div class="blog-post-txt">
                                <p class="p-md post-tag">{{$blog->created_at->diffForHumans()}}</p>
                                <h5 class="h5-md">
                                    <a href="/blog/read/{{Crypt::encrypt($blog->id)}}">
                                        {{$blog->title}}
                                    </a>
                                </h5>
                                <div class="post-meta">
                                    <p class="p-md"><i class="fal fa-eye"></i> {{$blog->views}} Views</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- END BLOG POSTS -->


        </div> <!-- END POSTS WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END BLOG POSTS LISTING -->




<!-- PAGE PAGINATION
			============================================= -->
<div class="bg-snow pb-100 page-pagination division">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination ico-20 justify-content-center">
                        {{$blogs->links()}}
                    </ul>
                </nav>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END PAGE PAGINATION -->


@endsection
