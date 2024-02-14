@extends('fronted.layout.app')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Contact Us</span>
                    <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Call Us</h5>
                    <a href="tel:+919983349786">

                        <span class="h4">+919983349786</span>
                    </a>
                    <a href="tel:+919983033332">
                        <span class="h4">+919983033332</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <a href="mailto:Kmadvpain@gmail.com">
                        <h5>Email Us</h5>
                        Kmadvpain@gmail.com
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <a href="https://maps.app.goo.gl/TFPtWuo1KYPrwemo6">
                        <h5>Location</h5>
                        Clinik Location
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contact us</h2>
                    <div class="divider mx-auto my-4"></div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                @if(session()->has('success'))
                <div class="alert alert-info">
                    {{session('success')}}
                </div>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="#" class="appointment-form" method="post" action="#">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" required type="text" class="form-control"
                                    placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" required type="email" class="form-control"
                                    placeholder="Email address">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="address" class="form-control" placeholder="address" id="address"
                                    required cols="30" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="number" id="number" required type="text" maxlength="10" minimumlength="10"
                                    class="form-control" placeholder="number">
                            </div>
                        </div>

                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" required rows="6"
                            placeholder="Your Message"></textarea>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Send Message" class="btn btn-main btn-round-full" id="">
                </form>
            </div>
        </div>
    </div>
    </div>
</section>


<div class="google-map ">
    <div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.6285082205018!2d75.744313675451!3d26.946989158616663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db35032537719%3A0x8079001f5e73bcc5!2sKM%20Advanced%20Pain%20Management%20Center%20%7C%20Pain%20Specialist%20in%20Jaipur%20-%20DR.%20JAVED%20KHAN!5e0!3m2!1sen!2sin!4v1706683034468!5m2!1sen!2sin"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection