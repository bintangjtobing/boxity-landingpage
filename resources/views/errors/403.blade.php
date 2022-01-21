@extends('welcome')
@section('title', __('Forbidden'))
@section('content')
<section id="hero-24" class="bg-tra-boxity hero-section division pb-4">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- 404 PAGE TEXT -->
            <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">
                <div class="hero-24-txt text-center">

                    <!-- Image -->
                    <div class="rel hero-24-img">

                        <!-- Image -->
                        <img class="img-fluid" src="{!!asset('images/boxity/error-404.png')!!}" alt="error-404-img">

                        <!-- Transparent Header -->
                        <h2 class="tra-header">403
                        </h2>

                    </div>

                    <!-- Text -->
                    <h2 class="h2-md">Forbidden</h2>
                    <h5 class="h5-md">The page you are looking for was forbidden. You cannot open it. </h5>

                    <!-- Button -->
                    <a href="/" class="btn btn-skyboxity tra-grey-hover">Back To Home</a>


                </div>
            </div> <!-- END 404 PAGE TEXT -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>
