@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
@include('AEE_Dashboard.layouts.sidebar')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Register a new Project</h3>
        </div>
        <div class="card">
            <h5 class="card-header">Input the following necessary information</h5>
            <div class="card-body">
                <form action="/AEE_Dashboard/newsFeed" method="POST"  enctype="multipart/form-data" id="registrationForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="newsHeader" class="col-form-label">News header:</label>
                        <input id="newsHeader" name="newsHeader" type="text" class="form-control" value="{{old('newsHeader')}}">
                        <div class="text-danger">{{$errors->first('newsHeader')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="project_id">Select the Project that the news feed covers</label>
                        <select class="form-control" id="project_id" name="project_id" >
                             @foreach ($projects as $project)
                            <option {{ (old('project_id')==$project->projectName)? "selected" : "" }} value="{{$project->id}}">{{$project->projectName}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">{{$errors->first('project_id')}}</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="source">News Source:</label>
                        <input id="source" name="source" type="text" class="form-control" value="{{old('source')}}">
                        <div class="text-danger">{{$errors->first('source')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3">{{old('description')}}</textarea>
                        <div class="text-danger">{{$errors->first('description')}}</div>
                    </div>


                    <div class="form-group">
                        <label for="videoLink">News Video iframe:</label>
                        <p>Click <a target="_blank" class="btn-info" href="https://www.youtube.com/">Here</a> to go to youtube. Once there search for the specific video you want and once you find it, click the share button found on the bottom of the player and click on embed on the pop up window. Continue to customize the file to satisfy your needs and once done copy the code it provides and paste it on the text area below. BE SURE TO COPY AND PASTE THE ENTIRE CODE, OR IT WON'T WORK.</p>

                        <textarea id="videoLink" name="videoLink" class="form-control">{{old('videoLink')}}</textarea>
                        <div class="text-danger">{{$errors->first('videoLink')}}</div>

                    </div>

                    <div class="form-group mb-0 float-right ">
                        <button type="submit" class="btn btn-success" value="Register">Register</button>
                    </div>
                </form>
                <!-- end row -->
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
</div>

@endsection
