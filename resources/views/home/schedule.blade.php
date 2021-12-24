@extends('welcome')
@section('title', 'Schedule a demo')
@section('page_description', '')
@section('content')
<section id="contacts-2" class="bg-snow wide-50 inner-page-hero contacts-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title title-02 mb-80">

                    <!-- Title -->
                    <h2 class="h2-xs">Demo schedule registration</h2>

                    <!-- Text -->
                    <p class="p">Schedule a live Boxity product demo with the sales team from Boxity.
                    </p>

                </div>
            </div>
        </div>


        <!-- CONTACT FORM -->
        <div class="row justify-content-center">
            @if (Session::has('success'))
            <div class="col-lg-10 col-xl-8">
                <div class="alert alert-success">
                    <span>Congratulations! We have received your suggested date for demo. <br> We will get back to you
                        as soon as possible.</span>
                </div>
            </div>
            @endif
            <div class="col-lg-8 col-xl-8">
                <div class="form-holder">
                    <form name="contactform" action="/contact" method="POST" class="row contact-form">
                        @csrf

                        <!-- Contact Form Input -->
                        <div class="col-md-12">
                            <p class="p-lg">Your Name: </p>
                            <span>Please enter your real name: </span>
                            <input type="text" name="name" class="form-control name" placeholder="Your Name*">
                        </div>

                        <div class="col-md-12">
                            <p class="p-lg">Your Email Address: </p>
                            <span>Please carefully check your email address for accuracy</span>
                            <input type="text" name="email" class="form-control email" placeholder="Email Address*">
                        </div>
                        <div class="col-md-12">
                            <p class="p-lg">Your Phone Number: </p>
                            <span>We will not share your number to anybody else.</span>
                            <input type="number" min="10" minlength="10" name="phone" class="form-control phone"
                                placeholder="Phone Number*">
                        </div>

                        <div class="col-md-12">
                            <p class="p-lg">Your Date Suggestion: </p>
                            <span>Please pay attention to the date of your request, so our team can arrange the schedule
                                properly.</span>
                            <input type="date" name="date" class="form-control date" placeholder="Date Suggestion">
                        </div>

                        <!-- Contact Form Button -->
                        <span>By requesting a schedule demo, you agree to be contacted by the Boxity team in accordance
                            with the
                            applicable Terms and Conditions.</span>
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
        </div> <!-- END CONTACT FORM -->


    </div> <!-- End container -->
</section>
@endsection
