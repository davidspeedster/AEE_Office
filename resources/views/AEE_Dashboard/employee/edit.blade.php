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
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Edit information of {{$employee->firstname}} {{$employee->lastname}}</h3>
        </div>
        <div class="card">
            <h5 class="card-header">Input the following necessary information</h5>
            <div class="card-body">
                <form action="/AEE_Dashboard/employee/{{$employee->id}}" method="POST" id="demo-form" data-parsley-validate="" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PATCH')
                    <div class="form-group">
                        <label for="firstname" class="col-form-label">First Name:</label>
                        <input id="firstname" name="firstname" type="text" class="form-control" value="{{old('firstname')?? $object->firstname}}">
                        <div class="text-danger">{{$errors->first('firstname')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="lastname" class="col-form-label">Last name:</label>
                        <input id="lastname" name="lastname" type="text" class="form-control" value="{{old('lastname')?? $object->lastname}}">
                        <div class="text-danger">{{$errors->first('lastname')}}</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Enter Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{old('email')?? $object->email}}" required=''>
                        <div class="text-danger">{{$errors->first('email')}}</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="position">Input position as well as education and status position</label>
                        <input id="position" type="text" name="position" class="form-control" value="{{old('position')??$object->position}}">
                        <div class="text-danger">{{$errors->first('position')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="image">Input image of employee :</label>
                        <input type="file" id="image" name="image" class="form-control-file" accept="image/x-png,image/gif,image/jpeg">
                        <div class="text-danger">{{$errors->first('image')}}</div>
                    </div>

                    <div class="form-group mb-0 float-right ">
                        <button type="submit" class="btn btn-success" value="Register">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
