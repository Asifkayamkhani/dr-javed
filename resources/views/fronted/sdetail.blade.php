@extends('fronted.layout.app')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Service Details</span>
                    <h1 class="text-capitalize mb-5 text-lg">{{$data->name}}</h1>
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
                   <video width="100%" controls>
                    <source src="{{asset('uploades/'.$data->video)}}" type="video/mp4">
                   </video>
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



@endsection