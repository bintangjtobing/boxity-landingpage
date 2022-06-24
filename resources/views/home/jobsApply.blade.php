@extends('welcome')
@section('title', 'Career Apply')
@section('page_description', '')
@section('content')
<section id="hero-boxity" class="bg-scroll hero-section division" style="background-image: none !important;">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- HERO TEXT -->
            <div class="col-md-7 col-lg-6 order-first order-md-2">
                <div class="hero-boxity-txt wow fadeInLeft">

                    <!-- Title -->
                    <h2 class="h2-xl">Fill the application form for we can fast work together</h2>
                    <p class="p-xl">Jobs interested: <b>{{$job->title}}</b>
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
                    <form action="/job-openings/apply/{{Crypt::encrypt($job->id)}}" method="POST" class="row contact-form"
                        enctype="multipart/form-data">
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
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                @error('g-recaptcha-response')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
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
