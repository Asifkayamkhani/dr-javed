@extends('fronted.layout.app')
@section('content')
@if(session()->has('error'))
<div class="alert alert-danger text-center">
    {{session('error')}}
</div>
@endif

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Book your Seat</span>
                    <h1 class="text-capitalize mb-5 text-lg">Appointment</h1>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="appointment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-3">
                    <div class="feature-icon mb-3">
                        <i class="icofont-support text-lg"></i>
                    </div>
                    <span class="h3">Call for an Emergency Service!</span>
                    <a href="tel:+919587858315">
                        <h2 class="text-color mt-3">9587858315 </h2>
                    </a>
                </div>
            </div>

            <div class="col-lg-8">

                <div class="appointment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">Book an appointment</h2>
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
    </div>
</section>
@endsection