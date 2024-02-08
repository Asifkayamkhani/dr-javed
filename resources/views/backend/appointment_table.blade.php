@extends('backend.layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-8 mt-5">
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
                            <th>Number</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>
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
                                {{$val->name}}
                            </td>
                            <td>{{$val->number}}</td>
                            <td>{{$val->date}}</td>
                            <td>{{$val->time}}</td>
                            <td>{{$val->message}}</td>
                            <td>
                                @if($val->status==1)
                                <a href="{{url('status-appointment/'.$val->id)}}"
                                    class="btn btn-sm btn-success">Confirmed</a>
                                @else
                                <a href="{{url('status-appointment/'.$val->id)}}"
                                    class="btn btn-sm btn-primary">Pending</a>
                                @endif
                            </td>
                            <td>
                                <p data-id="{{url('delete-appointment/'.$val->id)}}" class="btn btn-sm btn-danger delete">Delete</p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

@endsection