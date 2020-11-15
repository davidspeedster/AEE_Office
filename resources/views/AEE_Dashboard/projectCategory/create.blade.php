@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
@include('AEE_Dashboard.layouts.sidebar')
<div class="dashboard-wrapper">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Register a new Project Category</h3>
        </div>
        <div class="card">
            <h5 class="card-header">Input the following necessary information</h5>
            <div class="card-body">
                <form action="/AEE_Dashboard/projectCategory" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="projectCategoryName" class="col-form-label">Project Category Name:</label>
                        <input id="projectCategoryName" name="projectCategoryName" type="text" class="form-control" value="{{old('projectCategoryName')}}">
                        <div class="text-danger">{{$errors->first('projectCategoryName')}}</div>
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
