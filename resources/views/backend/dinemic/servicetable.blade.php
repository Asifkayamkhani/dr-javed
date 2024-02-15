@extends('backend.layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('servicesus')}}" class="btn btn-outline-info mt-3">New</a>
        </div>

        <div class="col-sm-2"></div>
        <div class="col-sm-10 mt-3">
            <h3 class="bg-dark text-ligth text-center p-1">Services</h3>
            <div class="text-center">
                @if(session()->has('success'))
                <div class="alert alert-info">
                    {{session('success')}}
                </div>
                @endif
            </div>
            <div class="table-responsive">

                <table class="table  table-striped table-bordered" style="width:100%" id="example">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Service Name</th>
                            <th>Describtion</th>
                            <th>Service Details</th>
                            <th>Images</th>
                            <th>Video</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($data as $val)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->describtion}}</td>
                            <td>{{$val->details}}</td>
                            <td>
                                <img src="{{asset('uploades/'.$val->image)}}" width="100px" alt="">
                            </td>
                            <td>
                            <video width="100px" controls>
                                <source src="{{asset('uploades/'.$val->video)}}" type="video/mp4">
                            </video>
                            </td>
                            <td>
                                @if($val->status==1)
                                <a href="{{url('service-status/'.$val->id)}}" class="btn btn-sm btn-info">Active</a>
                                @else
                                <a href="{{url('service-status/'.$val->id)}}" class="btn btn-sm btn-dark">Inactive</a>
                                @endif
                            </td>
                            <td class="d-flex">
                                <p data-id="{{url('delete-services/'.$val->id)}}" class="btn btn-sm btn-danger delete">
                                    Delete</p>
                                <p>
                                    <a href="{{url('services-edit/'.$val->id)}}"
                                        class="btn btn-sm btn-secondary ml-2">Edit</a>
                                </p>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection