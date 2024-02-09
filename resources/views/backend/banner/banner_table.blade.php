@extends('backend.layout.app')
@section('content')
<div class="container">
    <div class="row">


        <div class="col-sm-2"></div>
        <div class="col-sm-10 mt-3">
        <h3 class="bg-dark text-ligth text-center p-1">Banner</h3>

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
    </div>
</div>


@endsection