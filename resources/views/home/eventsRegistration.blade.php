@extends('welcome')
@section('title', $events->event_name . ' registration.')
@section('page_description', '')
@section('content')
<section id="hero-boxity" class="bg-scroll hero-section division" style="background-image: none !important;">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- HERO TEXT -->
            <div class="col-md-7 col-lg-6 order-first order-md-2">
                <div class="hero-boxity-txt wow fadeInLeft">

                    <!-- Title -->
                    <h2 class="h2-xl">Fill the registration form for joining our event!</h2>
                    <p class="p-xl">Event interested: <b>{{$events->event_name}}</b>
                    </p>

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
<section id="contacts-2" class="bg-snow wide-50 inner-page-hero contacts-section division apply-jobs-class">
    <div class="container">
        <div class="row justify-content-center">
            @if (Session::has('success'))
            <div class="col-lg-10 col-xl-8">
                <div class="alert alert-success">
                    <span>Congratulations! We have received your registrations. <br> Please wait for us to
                        send
                        you a event's link via the email you provided.</span>
                </div>
            </div>
            @endif
            <div class="col-lg-10 col-xl-8">
                <div class="form-holder">
                    <form action="/events/registration/{{$events->slug}}" method="POST" class="row contact-form"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- Contact Form Input -->
                        <div class="col-md-12">
                            <p class="p-lg">Your Full Name: </p>
                            <span>Please enter your real name: </span>
                            <input type="text" name="name" class="form-control name" placeholder="Your Name*" required>
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
                            <p class="p-lg">Who are you? </p>
                            <span>Please kindly tell what is your profession</span>
                            <select class="form-control select" name="type" id="">
                                <option value="Student">Student</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Employee">Employee</option>
                                <option value="Startup-founder">Startup-founder</option>
                                <option value="Conventional shop owner">Conventional shop owner</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <p class="p-lg">What institution/company/SME's sector?</p>
                            <select class="form-control select" name="sector" id="">
                                <option value="FnB (Food and Beverage)">FnB (Food and Beverage)</option>
                                <option value="Enterprises">Enterprises</option>
                                <option value="Manufactury">Manufactury</option>
                                <option value="Electricity">Electricity</option>
                                <option value="Software">Software</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Banking/Finance">Banking/Finance</option>
                                <option value="Infrastructure/Construction">Infrastructure/Construction</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <p class="p-lg">What do you expect from this event?</p>
                            <textarea minlength="100" class="form-control message" name="description" rows="6"
                                placeholder="Tell us why you want to join this event..." required></textarea>
                        </div>
                        <div class="col-md-12">
                            <p class="p-lg">Where do you get this information?</p>
                            <select class="form-control select" name="refrences" id="">
                                <option value="Social Media (LinkedIn/Whatsapp/Instagram/Facebook/...)">Social Media
                                    (WA/Instagram/Facebook/...)</option>
                                <option value="Newsletter">Newsletter</option>
                                <option value="Email">Email</option>
                                <option value="Friends or etc...">Friends or etc...</option>
                                <option value="Others">Others</option>
                            </select>
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
                                Register</button>
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
