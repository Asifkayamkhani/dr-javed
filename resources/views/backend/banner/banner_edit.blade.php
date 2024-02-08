@extends('backend.layout.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-10"></div>
        <div class="col-sm-2 mt-3">
            <a href="{{url('banner-table')}}" class="btn btn-outline-info mt-3">Back</a>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-8">
            <div class="card mt-3">
            <h3 class="text-center bg-dark text-light p-2">Edit Your Bannerdata</h3>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                           
                            <div class="col-sm-12">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image" id="">
                                <img src="{{asset('uploades/'.$data->image)}}" alt="" width="100px">
                                <input type="hidden" name="img" value="{{$data->image}}" id="">

                            </div>

                            <div class="col-sm-12 mt-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$data->name}}" id="" required >
                            </div>

                            <div class="col-sm-12 mt-3">
                                <label for="">Describtion</label>
                            <textarea type="text" name="describtion" required class="form-control" id="" cols="30" rows="3">{{$data->describtion}}</textarea>
                           </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Status</label>
                                <select class="form-control" name="status" class="form-control" id="" required >
                                    <option value="" selected disabled>Select Your Status</option>
                                    <option value="1"<?php echo $data->status==1 ? "selected":"" ?>>Active</option>
                                    <option value="0"<?php echo $data->status==0 ? "selected":"" ?>>Inactive</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-3 text-center">
                                <input type="submit" value="Submit" class="btn btn-sm btn-danger" id="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

@endsection