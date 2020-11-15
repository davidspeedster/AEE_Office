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
                <form action="/AEE_Dashboard/project" method="POST"  enctype="multipart/form-data" id="registrationForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="projectName" class="col-form-label">Project Title:</label>
                        <input id="projectName" name="projectName" type="text" class="form-control" value="{{old('projectName')}}">
                        <div class="text-danger">{{$errors->first('projectName')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="projectCategoryName">Select Project Category</label>
                        <select class="form-control" id="projectCategoryName" name="projectCategoryName" >
                             @foreach ($projectCategories as $projectCategory)
                            <option {{ (old('projectCategoryName')==$projectCategory->projectCategoryName)? "selected" : "" }} value="{{$projectCategory->projectCategoryName}}">{{$projectCategory->projectCategoryName}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">{{$errors->first('projectCategoryName')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="client" class="col-form-label">Client Name:</label>
                        <input id="client" name="client" type="text" class="form-control" value="{{old('client')}}">
                        <div class="text-danger">{{$errors->first('client')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="location" class="col-form-label">Location:</label>
                        <input id="location" name="location" type="text" class="form-control" value="{{old('location')}}">
                        <div class="text-danger">{{$errors->first('location')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="involvement" class="col-form-label">Involvement of the company:</label>
                        <input id="involvement" name="involvement" type="text" class="form-control" value="{{old('involvement')}}">
                        <div class="text-danger">{{$errors->first('involvement')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-form-label">Status:</label>
                        <input id="status" name="status" type="text" class="form-control" value="{{old('status')}}">
                        <div class="text-danger">{{$errors->first('status')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="duration" class="col-form-label">Construction Duration:</label>
                        <input id="duration" name="duration" type="text" class="form-control" value="{{old('duration')}}">
                        <div class="text-danger">{{$errors->first('duration')}}</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="architect">Architect:</label>
                        <input id="architect" name="architect" type="text" class="form-control" value="{{old('architect')}}">
                        <div class="text-danger">{{$errors->first('architect')}}</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="contractor">Contractor:</label>
                        <input id="contractor" name="contractor" type="text" class="form-control" value="{{old('contractor')}}">
                        <div class="text-danger">{{$errors->first('contractor')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="description">Example textarea</label>
                        <textarea class="form-control" name="description" id="description" rows="3">{{old('description')}}</textarea>
                        <div class="text-danger">{{$errors->first('description')}}</div>
                    </div>

                    <div class="form-group">
                        <label>Should this project be included in the main slider?</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-valid" id="mainSliderTrue" value="true" name="isForMain" {{ (old('isForMain')=="true")? "checked" : "" }} >
                            <label class="custom-control-label" for="mainSliderTrue">Yes</label>
                        </div>
                        <div class="text-danger">{{$errors->first('true')}}</div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-invalid" id="mainSliderFalse" value="false" name="isForMain" {{ (old('isForMain')=="false")? "checked" : "" }} >
                            <label class="custom-control-label" for="mainSliderFalse">No</label>
                        </div>
                        <div class="text-danger">{{$errors->first('false')}}</div>
                    </div>

                    <div class="form-group">
                        <label>Should this project be included in the featured projects section?</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-valid" id="FeaturedTrue" value="true" name="isFeatured" {{ (old('isFeatured')=="true")? "checked" : "" }} >
                            <label class="custom-control-label" for="FeaturedTrue">Yes</label>
                        </div>
                        <div class="text-danger">{{$errors->first('true')}}</div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-invalid" id="FeaturedFalse" value="false" name="isFeatured" {{ (old('isFeatured')=="false")? "checked" : "" }} >
                            <label class="custom-control-label" for="FeaturedFalse">No</label>
                        </div>
                        <div class="text-danger">{{$errors->first('false')}}</div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="btn btn-info" for="image"><strong>Click here to input main image for project(This image will be the one displayed on the main slider of the home page if chosen to be so) :</strong></label>                            <div class="col-sm-7">
                                <img src="#" id="image-prev" width="200px" alt="Uploaded-pic" />   <!--for preview purpose -->
                                <input type="file" id="image" name="image" class="form-control-file" value="{{old('image')}}" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('image-prev').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                          </div>
                    </div>

                </form>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title m-t-0">Additional Pictures</h4>

                                <form action="/AEE_Dashboard/project/images" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                    data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="fallback">
                                        <input name="file" type="file" id="images" multiple />
                                    </div>
                                    <div class="dz-message needsclick">
                                        <p class="h1 text-muted"><i class="mdi mdi-cloud-upload"></i></p>
                                        <h3>Input additional images for the project.(You can drag and drop your pictures here or click on this box. It is possible to select more than one picture and the selected pictures will be used in the project's slideshow) :</h3>
                                    </div>
                                </form>
                                <div class="form-group mb-0 float-right ">
                                    <button type="submit" class="btn btn-success" value="Register" form="registrationForm">Register</button>
                                </div>
                                <!-- Preview -->
                                <div class="dropzone-previews mt-3" id="file-previews"></div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row -->

                <!-- file preview template -->
                <div class="d-none" id="uploadPreviewTemplate">
                    <div class="card mt-1 mb-0 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img data-dz-thumbnail class="avatar-sm rounded bg-light" alt="">
                                </div>
                                <div class="col pl-0">
                                    <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                                    <p class="mb-0" data-dz-size></p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
</div>

@endsection
