@extends('backend.layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('bannerus')}}" class="btn btn-outline-info mt-3">New</a>
        </div>

        <div class="col-sm-2"></div>
        <div class="col-sm-10 mt-3">
            <div class="text-center">
                @if(session()->has('success'))
                <div class="alert alert-dark">
                    {{session('success')}}
                </div>
                @endif
            </div>
            <div class="table-responsive">

                <table class="table  table-striped table-bordered" style="width:100%" id="example">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Images</th>
                            <th>Name</th>
                            <th>Describtion</th>
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
                        <td>
                        <img src="{{asset('uploades/'.$val->image)}}" width="100px" alt="">
                        </td>
                        <td>{{$val->name}}</td>
                        <td>{{$val->describtion}}</td>

                            <td>
                                @if($val->status==1)
                                <a href="{{url('banner-status/'.$val->id)}}" class="btn btn-sm btn-info">Active</a>
                                @else
                                <a href="{{url('banner-status/'.$val->id)}}" class="btn btn-sm btn-dark">Inactive</a>
                                @endif
                            </td>
                            <td class="d-flex">
                                <p data-id="{{url('banner-delete/'.$val->id)}}" class="btn btn-sm btn-danger delete">Delete</p>
                                <p>
                                    <a href="{{url('banner-edit/'.$val->id)}}"
                                        class="btn btn-sm btn-secondary ml-2">Edit</a>
                                </p>
                            </td>
    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- <div class="col-sm-1"></div> -->
    </div>
</div>


@endsection