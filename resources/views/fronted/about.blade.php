@extends('fronted.layout.app')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">About Us</span>
                    <h1 class="text-capitalize mb-5 text-lg">About Us</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section aasi3 about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="title-color aasi4">Personal care for your healthy living</h2>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>

<section class="fetaure-page ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="about-block-item mb-5 mb-lg-0">
                    <img src="{{asset('fronted/images/gallery1.jpeg')}}" alt="" class="img-fluid w-100">
                    <h4 class="mt-3">Best staffs for Pain</h4>
                    <p>We have the best and trained staff & nurses who care for our patients with back pain, neck
                        pain, knee pain, shoulder pain, headaches, cancer pain, nerve pain, etc.</p>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="about-block-item mb-5 mb-lg-0">
                    <img src="{{asset('fronted/images/gallery2.jpeg')}}" alt="" class="img-fluid w-100">
                    <h4 class="mt-3">Modern Facilities</h4>
                    <p>At our pain management clinic in Jaipur, we have the best most modern pain management
                        instruments and equipment.</p>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="about-block-item mb-5 mb-lg-0">
                    <img src="{{asset('fronted/images/gallery3.jpeg')}}" alt="" class="img-fluid w-100">
                    <h4 class="mt-3">Pain Specialists</h4>
                    <p>We have the best doctors for pain treatment who are highly qualified with the highest degrees
                        in this field.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="about-block-item">
                    <img src="{{asset('fronted/images/gallery4.jpg')}}" alt="" class="img-fluid w-100">
                    <h4 class="mt-3">Transparent Treatment</h4>
                    <p>Our doctors never ask for any unnecessary tests. They accept all tests done from any place.
                        They ask for tests to confirm or rule out a diagnosis when needed.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section aasi5 awards">
    <div class="container">
        <div class="row align-items-center text">
            <div class="col-lg-4 mt-5">
                <div class="section-title">
                    <h2 class="title-color text-center">Best Pain Clinic in India </h2>
                    <div class="divider mx-auto"></div>
                </div>
            </div>
            <div class="col-lg-8">

                KMAPMC is a pain management clinic and hospital in Jaipur that received the “Best Pain Clinic” in
                India award from the Indian chapter of the International Association of Pain and the “Excellence in
                Pain Practice” award by the World Institute of Pain first time in Asia in 2010.

                It is not just the best pain management clinic in Jaipur or the best pain management hospital in
                Jaipur, it is the best pain clinic in the country. We received the “Best Pain Clinic” award from
                ISSP, the Indian chapter of IASP. We also received “Excellence in Pain Practice” by the World
                Institute of Pain in 3 categories for quality pain practice, research & training for the first time
                in the whole of Asia. Our director has authored several books on pain management for doctors.

                We offer treatment <span style="color: rgb(218, 100, 100);">
                    headaches, spine pain like neck pain & back pain, knee pain, cancer pain, shoulder pain etc. due to
                    migraine, trigeminal neuralgia, arthritis, slipped disc, spondylosis, or neuro spine-related
                    diseases. We use advanced procedures like, Ozone Nucleolysis, Radio-Frequency procedures, Spinal
                    Cord Stimulation, Endoscopic Discectomy, Vertebroplasty, intrathecal pump
                </span> etc.
            </div>
        </div>
    </div>
</section>

<section class="section aasi5 team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="mt-3">Meet Our Specialist</h2>
                    <div class="divider mx-auto mb-3"></div>
                    <p>Today’s users expect effortless experiences. Don’t let essential people and processes stay
                        stuck in the past. Speed it up, skip the hassles</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-block mb-5 mb-lg-0">
                    <img src="{{asset('fronted/images/team/1.jpg')}}" alt="" class="img-fluid w-100">

                    <div class="content">
                        <h4 class="mt-4 mb-0"><a href="doctor-single.html">John Marshal</a></h4>
                        <p>Internist, Emergency Physician</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-block mb-5 mb-lg-0">
                    <img src="{{asset('fronted/images/team/2.jpg')}}" alt="" class="img-fluid w-100">

                    <div class="content">
                        <h4 class="mt-4 mb-0"><a href="doctor-single.html">Marshal Root</a></h4>
                        <p>Surgeon, Сardiologist</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-block mb-5 mb-lg-0">
                    <img src="{{asset('fronted/images/team/3.jpg')}}" alt="" class="img-fluid w-100">

                    <div class="content">
                        <h4 class="mt-4 mb-0"><a href="doctor-single.html">Siamon john</a></h4>
                        <p>Internist, General Practitioner</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-block">
                    <img src="{{asset('fronted/images/team/4.jpg')}}" alt="" class="img-fluid w-100">

                    <div class="content">
                        <h4 class="mt-4 mb-0"><a href="doctor-single.html">Rishat Ahmed</a></h4>
                        <p>Orthopedic Surgeon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection