@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
@include('AEE_Dashboard.layouts.sidebar')
<div class="dashboard-wrapper">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Edit the current project category</h3>
        </div>
        <div class="card">
            <h5 class="card-header">Input the following necessary information</h5>
            <div class="card-body">
                <form action="/AEE_Dashboard/registeredMembership/{{$registeredMembership->id}}" method="POST">
                    {{ csrf_field() }}
                    @method('PATCH')
                    <div class="form-group">
                        <label for="details" class="col-form-label">Association Name:</label>
                        <input id="details" name="details" type="text" class="form-control" value="{{old('details')?? $registeredMembership->details}}">
                        <div class="text-danger">{{$errors->first('details')}}</div>
                    </div>

                    <div>
                        <input id="parentText" name="parentText" type="hidden" class="form-control" value="registeredMembership">
                    </div>

                    <div class="form-group">
                        <label for="websiteLink" class="col-form-label">Association Website Link</label>
                        <input id="websiteLink" name="websiteLink" type="text" class="form-control" value="{{old('websiteLink')?? $registeredMembership->websiteLink}}">
                        <div class="text-danger">{{$errors->first('websiteLink')}}</div>
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
