@extends('fronted.layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-6 text-center">
            <div class="widget mb-5 mb-lg-0">
                <div class="section-title">
                    <h4 class="text-capitalize  mt-5">Gallery Us</h4>
                    <div class="divider mx-auto"></div>
                </div>
                <div class="row">
                    @foreach($data as $title)
                    <div class="col-sm-4 mt-3 mb-3">
                        @if($title->type == 1)
                        <img src="{{asset('uploades/'.$title->image)}}" alt="" width="300px" height="300px">
                        @else
                        <video controls height="300px" width="300px">
                            <source src="{{asset('uploades/'.$title->image)}}" type="video/mp4">
                        </video>
                        @endif
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>
@endsection