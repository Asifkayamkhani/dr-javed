@extends('backend.layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2 mt-3">
            <a href="{{url('googleus')}}" class="btn btn-outline-info mt-3">New</a>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-9 mt-3">
            @if(session()->has('success'))
            <div class="alert alert-info">
                {{session('success')}}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="width:100%" id="example">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Name</th>
                            <th>Describtion</th>
                            <th>status</th>
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
                                {{$val->name}}
                            </td>
                            <td>
                                {{$val->desc}}
                            </td>
                            <td>
                                @if($val->status==1)
                                <a href="{{url('google-status/'.$val->id)}}" class="btn btn-sm btn-success">Active</a>
                                @else
                                <a href="{{url('google-status/'.$val->id)}}" class="btn btn-sm btn-primary">Inactive</a>
                                @endif
                            </td>

                            <td class="d-flex">
                                <p data-id="{{url('google-delete/'.$val->id)}}" class="btn btn-sm btn-danger delete">
                                    Delete</p>
                                <p>
                                    <a href="{{url('google-edit/'.$val->id)}}"
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