@extends('fronted.layout.app')
@section('content')

@if(session()->has('error'))
<div class="alert alert-danger text-center">
    {{session('error')}}
</div>
@endif

<!-- banner start  -->
@foreach($banner as $val)
<section class="banner" style="background-image:url({{asset('uploades/'.$val->image)}})" width="1920px" hieght="900px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing ">Got Best Pain Clinic in India Award</span>
                    <h1 class="mb-3 mt-3">{{$val->name}}</h1>

                    <p class="mb-4 pr-5">{{$val->describtion}}
                    </p>
                    <div class="btn-container ">
                        <a href="{{url('Appointment')}}" target="_blank"
                            class="btn btn-main-2 btn-icon btn-round-full">Make
                            appointment <i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- banner complete  -->

<!-- card for appointment and details for clinick start  -->
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Online Appointment</h4>
                        <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of
                            family medicine.</p>
                        <a href="{{url('Appointment')}}" class="btn btn-main btn-round-full">Make a appointment</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <span>Timing schedule</span>
                        <h4 class="mb-3">Working Hours</h4>
                        <ul class="w-hours list-unstyled">
                            <li style="font-weight:600; color:#223a66; font-size:20px;">Monday to Saturday :

                            </li>
                            <li class="">
                                <span style="font-weight:600; color:#223a66;    ">Morning Time : 8:00AM - 11:00AM</span>
                                <span style="font-weight:600; color:#223a66;">Evening Time : 5:00PM - 07:00PM</span>
                            </li>

                            <li style="font-weight:600; color:#223a66; font-size:20px;">Sunday : Closed

                            </li>


                        </ul>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <span>Emergency Cases</span>
                        <h4 class="mb-3">
                            <a href="tel:+919983349786">
                                <span class="h4">+919983349786</span>
                            </a>
                            <a href="tel:+919983033332">
                                <span class="h4">+919983033332</span>
                            </a>
                        </h4>
                        <p>Get ALL time support for emergency.We have introduced the principle of family
                            medicine.Get Connected with us for any emergency .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- card for appointment and details for clinick complete  -->

<!-- image and service information start  -->
<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="about-img">
                    <img src="{{asset('fronted/images/gallery1.jpeg')}}" alt="" class="img-fluid">
                    <img src="{{asset('fronted/images/gallery2.jpeg')}}" alt="" class="img-fluid mt-4">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="about-img mt-4 mt-lg-0">
                    <img src="{{asset('fronted/images/gallery3.jpeg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <h2 class="title-color">Personal care <br>& Pain Partner</h2>
                    <p class="mt-4 mb-5">Radiofrequency, Cryoneurolysis, Vertebroplasty, Endoscopic discectomy etc.
                        are done for chronic pain management…</p>

                    <a href="{{('Services')}}" class="btn btn-main-2 btn-round-full btn-icon">Services<i
                            class="icofont-simple-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- image and service information complete  -->

<!-- happy people and etc.. counting start  -->
<section class="cta-section ">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-doctor"></i>
                        <span class="h3">58</span>k
                        <p>Happy People</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-flag"></i>
                        <span class="h3">700</span>+
                        <p>Surgery Comepleted</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-badge"></i>
                        <span class="h3">40</span>+
                        <p>Expert Doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-globe"></i>
                        <span class="h3">20</span>
                        <p>Worldwide Branch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- happy people and etc.. counting complete  -->

<!-- services details start and read more start  -->
<section class="section service gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Our Services</h2>
                    <div class="divider mx-auto "></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 testimonial-wrap-3">
                @foreach($services as $service)
                <div class="card ml-2 shadow">
                    <div class="style-2  gray-bg">
                        <div class="service-item ">
                            <div class="icon d-flex align-items-center">
                                <img src="{{asset('uploades/'.$service->image)}}" alt="" width="100px">
                                <h4 class="mt-3 mb-3">{{$service->name}}</h4>
                            </div>

                            <div class="content">
                                <p>{{ \Illuminate\Support\Str::limit($service->describtion,  100,  '...') }}
                                </p>
                                <a class="nav-link btn btn-sm btn-danger"
                                    href="{{url('service/detail/'.$service->id)}}">Read More</a>
                            </div>


                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
</section>
<!-- services details start and read more complete -->

<!-- dr image and book appointment  start  -->
<section class="section appointment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ">
                <div class="appoinment-content">
                    <img src="{{asset('fronted/images/dr1.jpg')}}" alt="" class="img-fluid">
                    <div class="emergency">
                        <a href="tel:+919983349789">
                            <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+99 833 49789</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 ">
                <div class="appointment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color">Book appointment</h2>
                    <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui
                        velit . Iste dolorum atque similique praesentium soluta.</p>
                    <form id="#" class="appointment-form" method="post" action="{{url('Appointment')}}">
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
                                    <input name="number" id="phone" required type="text" maxlength="10"
                                        minimumlength="10" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date" id="date" required type="date" class="form-control"
                                        placeholder="dd/mm/yyyy">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="time" id="time" required type="time" class="form-control"
                                        placeholder="Time">
                                </div>
                            </div>

                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" required rows="6"
                                placeholder="Your Message"></textarea>
                        </div>

                        <input type="submit" value="Make Appointment" class="btn btn-main btn-round-full" id="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- dr image and book appointment  complete  -->

<!-- google review start  -->
<section class="section testimonial-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>Google Review</h2>
                    <div class="divider mx-auto"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 testimonial-wrap-2">
                @foreach($testimonial as $val)
                <div class="testimonial-block style-2  gray-bg">
                    <i class="icofont-quote-right"></i>



                    <div class="client-info ">
                        <h4>- {{$val->name}}</h4>
                        <p>
                            <span class="fa fa-star" style="color: gold;"></span>
                            <span class="fa fa-star" style="color: gold;"></span>
                            <span class="fa fa-star" style="color: gold;"></span>
                            <span class="fa fa-star" style="color: gold;"></span>
                            <span class="fa fa-star" style="color: gold;"></span>
                        </p>
                        <p>
                            {{$val->desc}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- google review complete  -->

<!-- gallery slider start  -->
<section class="section clients">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>Gallery</h2>
                    <div class="divider mx-auto"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row clients-logo">
            @foreach($data as $val)
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="{{asset('uploades/'.$val->image)}}" alt="" class="img-fluid"
                        style=" height:163px !important; width=:163px !important;">
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- gallery slider complete  -->

@endsection