@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
@include('AEE_Dashboard.layouts.sidebar')
<div class="dashboard-wrapper">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Register a new service</h3>
        </div>
        <div class="card">
            <h5 class="card-header">Input the following necessary information</h5>
            <div class="card-body">
                <form action="/AEE_Dashboard/service" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="text" class="col-form-label">Service Name:</label>
                        <input id="text" name="text" type="text" class="form-control" value="{{old('text')}}">
                        <div class="text-danger">{{$errors->first('text')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="details" class="col-form-label">Service Details:</label>
                        <textarea class="form-control" name="details" id="details" rows="3">{{old('details')}}</textarea>
                        <div class="text-danger">{{$errors->first('details')}}</div>
                    </div>


                    <div>
                        <input id="parentText" name="parentText" type="hidden" class="form-control" value="service">
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
@endsection
