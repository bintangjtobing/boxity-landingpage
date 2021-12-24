@extends('welcome')
@section('title', 'Career Apply')
@section('page_description', '')
@section('content')
<div id="apply-jobs" class="page-hero-section division">
    <div class="page-hero-overlay division">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="hero-txt text-center dark-color">

                        <!-- Title -->
                        <h2 class="h2-xs">Application Form</h2>

                        <!-- Text -->
                        <p class="p-xl">{{$job->title}}
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
<section id="contacts-2" class="bg-snow wide-50 inner-page-hero contacts-section division apply-jobs-class">
    <div class="container">
        <div class="row justify-content-center">
            @if (Session::has('success'))
            <div class="col-lg-10 col-xl-8">
                <div class="alert alert-success">
                    <span>Congratulations! We have received your application. <br> Please wait for us to review it, and
                        send
                        you feedback via the email you provided.</span>
                </div>
            </div>
            @endif
            <div class="col-lg-10 col-xl-8">
                <div class="form-holder">
                    <form action="/jobs/a/{{Crypt::encrypt($job->id)}}" method="POST" class="row contact-form">
                        @csrf

                        <!-- Contact Form Input -->
                        <div class="col-md-12">
                            <p class="p-lg">Your Full Name: </p>
                            <span>Please enter your real name: </span>
                            <input type="text" name="nama_lengkap" class="form-control name" placeholder="Your Name*"
                                required>
                        </div>

                        <div class="col-md-12">
                            <p class="p-lg">Your Email Address: </p>
                            <span>Please carefully check your email address for accuracy</span>
                            <input type="text" name="email" class="form-control email" placeholder="Email Address*"
                                required>
                        </div>
                        <div class="col-md-12">
                            <p class="p-lg">Your Number Phone: </p>
                            <span>Please carefully check your number phone</span>
                            <input type="text" name="nohp" class="form-control phone" placeholder="Phone Number*"
                                required>
                        </div>

                        <div class="col-md-12">
                            <p class="p-lg">Cover Letter: </p>
                            <span>Explain us why we should choose you</span>
                            <textarea minlength="100" class="form-control message" name="about" rows="6"
                                placeholder="I have a skill that..." required></textarea>
                        </div>
                        <div class="col-md-12">
                            <p class="p-lg">Resume/CV: </p>
                            <span>Upload your latest resume/cv (Accept only <i>.pdf</i> file)</span>
                            <input type="file" accept="application/pdf" name="supported_file" class="form-control">
                        </div>

                        <!-- Contact Form Button -->
                        <div class="col-md-12 mt-15 form-btn text-right">
                            <button type="submit" class="btn btn-skyboxity tra-boxity-hover submit">Submit
                                Request</button>
                        </div>

                        <!-- Contact Form Message -->
                        <div class="col-lg-12 contact-form-msg">
                            <span class="loading"></span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div> <!-- End container -->
</section>
@endsection
