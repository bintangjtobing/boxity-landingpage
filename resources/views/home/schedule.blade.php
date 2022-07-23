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
                    <h2 class="h2-xs">{{__('demo_schedule_registration')}}</h2>

                    <!-- Text -->
                    <p class="p">{{__('dsc_demo_schedule_registration')}}
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
                            <input type="email" name="email" class="form-control email" placeholder="Email Address*">
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
                        <div class="col-md-12">
                            <p class="p-lg">Your Application that you've interest: </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="application" id="" class="form-control">
                                        <option value="" selected>Choose one...</option>
                                        <option value="Semplice">Semplice - Make your micro-site before your coffee cold
                                        </option>
                                        <option value="Landingpage">landing page - Make your great landing page with us
                                        </option>
                                        <option value="Octans">Octans - Finance and accounting software</option>
                                        <option value="Fornax">Fornax - Issue center management software</option>
                                        <option value="Pyxis">Pyxis - Hotel reservation management system software
                                        </option>
                                        <option value="Aquila">Aquila - Payroll management automated software</option>
                                        <option value="Lyra">Lyra - E-Commerce management software</option>
                                        <option value="Orion">Orion - Human resources information system software
                                        </option>
                                        <option value="Chatifine">Chatifine - Secure and encrypted business chat app
                                        </option>
                                        <option value="Stockpile">Stockpile - Warehouse management system software
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="terms" id="" class="form-control">
                                        <option value="" selected>Choose plans...</option>
                                        <option value="1yr">1 Year</option>
                                        <option value="3yrs">3 Years</option>
                                        <option value="5yrs">5 Years</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Anything you wanna say to us?"
                                        class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form Button -->
                        <span>{{__('accept_terms_demo')}}</span>
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
