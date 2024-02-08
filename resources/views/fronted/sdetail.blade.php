@extends('fronted.layout.app')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Service Details</span>
                    <h1 class="text-capitalize mb-5 text-lg">Service Details</h1>
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
                    <img width="100%" src="{{asset('uploades/'.$data->image)}}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
              <h3>{{$data->name}}</h3>
              <p>{{$data->describtion}}</p>
              <p>{{$data->details}}</p>

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
<!-- 
	<section class="section testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6">
					<div class="section-title">
						<h2 class="mb-4">What they say about us</h2>
						<div class="divider  my-4"></div>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-6 testimonial-wrap offset-lg-6">
					<div class="testimonial-block">
						<div class="client-info ">
							<h4>Amazing service!</h4>
							<span>John Partho</span>
						</div>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
							iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam
							eveniet nostrum nemo commodi numquam quod.
						</p>
						<i class="icofont-quote-right"></i>

					</div>

					<div class="testimonial-block">
						<div class="client-info">
							<h4>Expert doctors!</h4>
							<span>Mullar Sarth</span>
						</div>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
							iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam
							eveniet nostrum nemo commodi numquam quod.
						</p>
						<i class="icofont-quote-right"></i>
					</div>

					<div class="testimonial-block">
						<div class="client-info">
							<h4>Good Support!</h4>
							<span>Kolis Mullar</span>
						</div>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
							iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam
							eveniet nostrum nemo commodi numquam quod.
						</p>
						<i class="icofont-quote-right"></i>
					</div>

					<div class="testimonial-block">
						<div class="client-info">
							<h4>Nice Environment!</h4>
							<span>Partho Sarothi</span>
						</div>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
							iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam
							eveniet nostrum nemo commodi numquam quod.
						</p>
						<i class="icofont-quote-right"></i>
					</div>

					<div class="testimonial-block">
						<div class="client-info">
							<h4>Modern Service!</h4>
							<span>Kolis Mullar</span>
						</div>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
							iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam
							eveniet nostrum nemo commodi numquam quod.
						</p>
						<i class="icofont-quote-right"></i>
					</div>
				</div>
			</div>
		</div>
	</section> -->
@endsection