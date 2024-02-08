@extends('backend.layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9 mt-5">
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
                            <th>Email</th>
                            <th>Address</th>
                            <th>Number</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($contact as $val)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                                {{$val->name}}
                            </td>
                            <td>
                                {{$val->email}}
                            </td>
                            <td>
                                {{$val->address}}
                            </td>
                            <td>{{$val->number}}</td>
                            <td>{{$val->message}}</td>

                            <td>
                                <p data-id="{{url('delete-contact/'.$val->id)}}" class="btn btn-sm btn-danger delete">Delete</p>
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