@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
@include('AEE_Dashboard.layouts.sidebar')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Edit details of {{$project->projectName}}</h3>
        </div>
        <div class="card">
            <h5 class="card-header">Input the following necessary information</h5>
            <div class="card-body">
                <form action="/AEE_Dashboard/project/{{$project->id}}" method="POST" id="editForm" data-parsley-validate="" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PATCH')
                    <div class="form-group">
                        <label for="projectName" class="col-form-label">Project Title:</label>
                        <input id="projectName" name="projectName" type="text" class="form-control" value="{{old('projectName')??$project->projectName}}">
                        <div class="text-danger">{{$errors->first('projectName')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="projectCategoryName">Select Project Category</label>
                        <select class="form-control" id="projectCategoryName" name="projectCategoryName" >
                            @foreach ($projectCategories as $projectCategory)
                           <option {{ ($projectCategory->projectCategoryName==$project->projectCategoryName)? "selected" : "" }} value="{{$projectCategory->projectCategoryName}}">{{$projectCategory->projectCategoryName}}</option>
                           @endforeach
                       </select>
                        <div class="text-danger">{{$errors->first('projectCategoryName')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="client" class="col-form-label">Client Name:</label>
                        <input id="client" name="client" type="text" class="form-control" value="{{old('client')?? $project->client}}">
                        <div class="text-danger">{{$errors->first('client')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="location" class="col-form-label">Location:</label>
                        <input id="location" name="location" type="text" class="form-control" value="{{old('location')?? $project->location}}">
                        <div class="text-danger">{{$errors->first('location')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="involvement" class="col-form-label">Involvement of the company:</label>
                        <input id="involvement" name="involvement" type="text" class="form-control" value="{{old('involvement')?? $project->involvement}}">
                        <div class="text-danger">{{$errors->first('involvement')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-form-label">Status:</label>
                        <input id="status" name="status" type="text" class="form-control" value="{{old('status')?? $project->status}}">
                        <div class="text-danger">{{$errors->first('status')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="duration" class="col-form-label">Construction Duration:</label>
                        <input id="duration" name="duration" type="text" class="form-control" value="{{old('duration')?? $project->duration}}">
                        <div class="text-danger">{{$errors->first('duration')}}</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="architect">Architect:</label>
                        <input id="architect" name="architect" type="text" class="form-control" value="{{old('architect')?? $project->architect}}">
                        <div class="text-danger">{{$errors->first('architect')}}</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="contractor">Contractor:</label>
                        <input id="contractor" name="contractor" type="text" class="form-control" value="{{old('contractor')?? $project->contractor}}">
                        <div class="text-danger">{{$errors->first('contractor')}}</div>
                    </div>

                    <div class="form-group">
                        <label for="description">Example textarea</label>
                        <textarea class="form-control" name="description" id="description" rows="3">{{old('description')?? $project->description}}</textarea>
                        <div class="text-danger">{{$errors->first('description')}}</div>
                    </div>

                    <div class="form-group">
                        <label>Should this project be included in the main slider?</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-valid" id="true" value="true" name="isForMain" {{ ($project->isForMain=="true")? "checked" : "" }} >
                            <label class="custom-control-label" for="true">Yes</label>
                        </div>
                        <div class="text-danger">{{$errors->first('true')}}</div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-invalid" id="false" value="false" name="isForMain" {{ ($project->isForMain=="false")? "checked" : "" }} >
                            <label class="custom-control-label" for="false">No</label>
                        </div>
                        <div class="text-danger">{{$errors->first('false')}}</div>
                    </div>

                    <div class="form-group">
                        <label>Should this project be included in the featured projects section?</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-valid" id="true" value="true" name="isFeatured" {{ ($project->isFeatured=="true")? "checked" : "" }} >
                            <label class="custom-control-label" for="true">Yes</label>
                        </div>
                        <div class="text-danger">{{$errors->first('true')}}</div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-invalid" id="false" value="false" name="isFeatured" {{ ($project->isFeatured=="false")? "checked" : "" }} >
                            <label class="custom-control-label" for="false">No</label>
                        </div>
                        <div class="text-danger">{{$errors->first('false')}}</div>
                    </div>

                    <div class="card-body border-top">
                        <h4>Main Picture</h4>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('storage/'. $project->image)}}" alt="main-picture">
                                    <div class="card-body">
                                        <h3 class="card-title">Main Picture</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <label class="btn btn-info" for="image">Change Picture </label>
                                <input type="file" id="image" name="image" class="form-control-file" value="{{old('image')}}" accept="image/x-png,image/gif,image/jpeg">
                        <div class="text-danger">{{$errors->first('image')}}</div>
                            </div>
                        </div>
                    </div>

                </form>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <h4 class="card-header">Manage the additional pictures of the project</h4>
                            <div class="card-body">
                                <h4 class="header-title m-t-0">Dropzone File Upload</h4>

                                <form action="/AEE_Dashboard/project/images" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                    data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                    <div class="dz-message needsclick">
                                        <p class="h1 text-muted"><i class="mdi mdi-cloud-upload"></i></p>
                                        <h3>Drop files here or click to upload.</h3>
                                    </div>
                                </form>
                                <div class="row">
                                    @foreach ($images as $image)
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <img class="card-img-top img-fluid" src="{{asset($image->name)}}" alt="additional-pictures">
                                            <div class="card-body">
                                                <form action="/AEE_Dashboard/images/{{$image->id}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Delete</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="form-group mb-0 float-right ">
                                    <button type="submit" class="btn btn-success" form="editForm" value="Register">Save</button>
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
</div>
@endsection
