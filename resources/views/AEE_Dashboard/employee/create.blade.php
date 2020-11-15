@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
@include('AEE_Dashboard.layouts.sidebar')
 <!-- Pre-loader -->
 <div id="preloader">
    <div id="status">
        <div class="spinner">Loading...</div>
    </div>
</div>
<!-- End Preloader-->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Register a new employee</h3>
        </div>
        <div class="card">
            <h5 class="card-header">Input the following necessary information</h5>
            <div class="card-body">
                <form action="/AEE_Dashboard/employee" method="POST" id="demo-form" data-parsley-validate="" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="firstname" class="col-form-label">First Name:</label>
                        <input id="firstname" name="firstname" type="text" class="form-control" value="{{old('firstname')}}">
                        <div class="text-danger">{{$errors->first('firstname')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="lastname" class="col-form-label">Last name:</label>
                        <input id="lastname" name="lastname" type="text" class="form-control" value="{{old('lastname')}}">
                        <div class="text-danger">{{$errors->first('lastname')}}</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">Enter phone number:</label>
                        <input class="form-control"
                        type="tel" id="phone" name="phone" value="{{old('phone')?? $object->phone}}" required=''>
                        <div class="text-danger">{{$errors->first('phone')}}</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Enter Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{old('email')?? $object->email}}" required=''>
                        <div class="text-danger">{{$errors->first('email')}}</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="position">Input position as well as education and status position</label>
                        <input id="position" type="text" name="position" class="form-control" value="{{old('position')}}">
                        <div class="text-danger">{{$errors->first('position')}}</div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <label for="image">Input image of employee :</label>
                            <div class="col-sm-7">
                                <img src="#" id="image-prev" width="200px" alt="Uploaded-pic" />   <!--for preview purpose -->
                                <input type="file" id="image" name="image" class="form-control-file" value="{{old('image')}}" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('image-prev').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                          </div>
                    </div>

                    <div class="form-group mb-0 float-right ">
                        <button type="submit" class="btn btn-success" value="Register">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</div>
@endsection
