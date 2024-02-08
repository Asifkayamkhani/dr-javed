@extends('fronted.layout.app')
@section('content')
<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-sm-12">
          <div class="card shadow">
            <div class="card-body">
                <h3 class="text-center">Booked Appointment</h3>
                <hr>
                <div class="table-responsive">
                <table class="table text-center">
                <thead>
                    <th>S.NO</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @php 
                    $i=1;
                    @endphp
                    @foreach($data as $user)
                    <tr>
                        <td>{{$i++;}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{date('d M Y', strtotime($user->date))}}</td>
                        <td>{{date('h:i A', strtotime($user->time))}}</td>
                        <td>
                            @if($user->status == 1)
                                 <span class="btn btn-sm btn-success">Confirmed</span>
                            @else
                             <span class="btn btn-sm btn-primary">Pending</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>


@endsection