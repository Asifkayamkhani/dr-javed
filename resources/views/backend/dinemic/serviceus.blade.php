@extends('backend.layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('services-table')}}" class="btn btn-outline-info mt-3">Back</a>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-8">
            <div class="card mt-3">
            <h3 class="text-center bg-dark text-light p-2">Add Services</h3>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="">Service Name</label>
                                <input type="text" name="name" class="form-control" id="" required>
                            </div>

                            <div class="col-sm-12">
                                <label for="">Describtion</label>
                               <textarea name="describtion" class="form-control" id="" cols="30" rows="3" required></textarea>
                            </div>

                            <div class="col-sm-12">
                                <label for="">Service Details</label>
                                <textarea name="details" class="form-control" id="" cols="30" rows="3" required></textarea>
                            </div>
                           
                            <div class="col-sm-12 mt-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" id="" required>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Video</label>
                                <input type="file" name="video" class="form-control" id="" required>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Status</label>
                                <select name="status" class="form-control" id="" required>
                                    <option value="" selected disabled>Select Your Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
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