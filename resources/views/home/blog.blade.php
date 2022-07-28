@extends('welcome')
@section('title', 'Blog')
@section('page_description', 'This page is about news stories that are interesting to read, from everything updated from
Boxity Central Indonesia, from features, fixes, memes and more.')
@section('page_keywords', 'blog boxity, boxity, boxityerp, realizeboxity, boxity central
indonesia, erp boxity, warehouse management, human resources management, financial management, boxity warehouse, boxity
WMS, boxity financial, boxity indonesia, news from boxity')
@section('content')
<section id="hero-boxity" class="bg-scroll hero-section division"
    style="background-image: none !important; padding-top: 80px;">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- HERO TEXT -->
            <div class="col-md-7 col-lg-6 order-first order-md-2">
                <div class="hero-boxity-txt wow fadeInLeft">

                    <!-- Title -->
                    <h2 class="h2-xl"><b>Relevant news</b> and more for you. <br>Welcome to our blog.</h2>

                </div>
            </div> <!-- END HERO TEXT -->

            <!-- HERO IMAGE -->
            <div class="col-md-5 col-lg-6 order-last order-md-2">
                <div class="hero-boxity-img pc-30 wow fadeInRight">
                    <img class="img-fluid" src="{!!asset('webpage/images/blog.svg')!!}" alt="hero-image">
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
                                    <a href="/blog/read/{{$blog->slug}}">
                                        {{$blog->title}}
                                    </a>
                                </h5>
                                <div class="post-meta">
                                    <p class="p-md"><i class="fal fa-eye"></i>
                                        @if ($blog->views<1000) {{number_format($blog->views)}} @elseif($blog->views
                                            <1000000) {{number_format($blog->views/1000, 1).'K'}} @elseif($blog->views
                                                <1000000000) {{number_format($blog->views/1000000, 1).'M'}} @else{
                                                    {{number_format($blog->views/1000000000, 1).'B'}} } @endif Views</p>
                                                    </div> </div> </div> @endforeach </div> </div> </div> <!-- END BLOG
                                                    POSTS -->


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
