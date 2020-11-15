@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
@include('AEE_Dashboard.layouts.sidebar')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if (session()->has('message'))
            <div class="alert alert-info" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{session()->get('message')}}
            </div>
            @else
            <div class="alert alert-info" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>No new notifications</strong>
            </div>
            @endif
                <div class="card-body">
                    <h4 class="header-title m-t-0">Dropzone File Upload</h4>

                    <form action="/AEE_Dashboard/images" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                        data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                        <div class="dz-message needsclick">
                            <p class="h1 text-muted"><i class="mdi mdi-cloud-upload"></i></p>
                            <h3>Drop files here or click to upload.</h3>
                        </div>
                        <div class="form-group mb-0 float-right ">
                            <button id="submit-all" type="submit" class="btn btn-success" value="Register" form="registrationForm">Submit</button>
                        </div>
                    </form>
                    <div class="row">
                        @foreach ($images as $image)
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{$image->name}}" alt="additional-pictures">
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
@endsection
