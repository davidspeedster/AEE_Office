@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
@include('AEE_Dashboard.layouts.sidebar')
<div class="dashboard-wrapper">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Register a new Project</h3>
        </div>
        <div class="card">
            <h5 class="card-header">Input the following necessary information</h5>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="projectTitle" class="col-form-label">Project Title:</label>
                        <input id="projectTitle" type="text" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="projectCategoryName">Select Project Category</label>
                        <select class="form-control" id="projectCategoryName" name="projectCategoryName" required=''>
                            {{-- @foreach ($regions as $region)
                            <option value="{{$region->regionName}}">{{$region->regionName}}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="projectName" class="col-form-label">Project Name:</label>
                        <input id="projectName" type="text" class="form-control">
                    </>

                    <div class="form-group mb-3" id="address">
                        <label for="projectLocation">Project Location:</label>
                        <input id="projectLocation" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="image">Input image of employee :</label>
                        <input type="file" id="image" name="image" class="form-control" accept="image/x-png,image/gif,image/jpeg">
                        <div class="text-danger">{{$errors->first('image')}}</div>
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
