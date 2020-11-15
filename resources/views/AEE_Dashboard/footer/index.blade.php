@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
 <!-- Pre-loader -->
 <div id="preloader">
    <div id="status">
        <div class="spinner">Loading...</div>
    </div>
</div>
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
        @include('AEE_Dashboard.layouts.sidebar')
        <div class="dashboard-wrapper">
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

            <div class="container-fluid  dashboard-content">

                <div class="row">
                        <!-- ============================================================== -->
                        <!-- vertical tabs  -->
                        <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                        <div class="tab-vertical">
                            <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link {{ session('isActive')===null ? 'active': null }}" id="followUs-tab" data-toggle="tab" href="#followUs" role="tab" aria-controls="followUs" aria-selected="true">Folow Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ session('isActive')==='location' ? 'active': null }}" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="false">Location</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ session('isActive')==='logo' ? 'show active': null }}" id="logo-tab" data-toggle="tab" href="#logo" role="tab" aria-controls="logo" aria-selected="false">Logo</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane fade {{ session('isActive')===null ? 'show active': null }}" id="followUs" role="tabpanel" aria-labelledby="followUs-tab">
                                    <form action="/AEE_Dashboard/footer/followUs" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="card">
                                                @if ($accounts!=null)
                                                <h5 class="card-header">Edit your links to the respective social media accounts</h5>
                                                @else
                                                <h5 class="card-header">Input your links to the respective social media accounts</h5>
                                                @endif

                                                <div class="card-body">
                                                    <div class="form-group mb-3">
                                                        <label for="facebook">Facebook:</label>
                                                        <input id="facebook" placeholder="https://www.facebook.com/username/" name="facebook" type="text" class="form-control" value="{{old('facebook')??($accounts!=null ? $accounts->facebook : "")}}">
                                                        <div class="text-danger">{{$errors->first('facebook')}}</div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="twitter">Twitter:</label>
                                                        <input id="twitter" name="twitter" placeholder="https://twitter.com/username" type="text" class="form-control" value="{{old('twitter')??($accounts!=null ? $accounts->twitter : "")}}">
                                                        <div class="text-danger">{{$errors->first('twitter')}}</div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="linkedin">Linedin:</label>
                                                        <input id="linkedin" name="linkedin" placeholder="https://www.linkedin.com/usename" type="text" class="form-control" value="{{old('linkedin')??($accounts!=null ? $accounts->linkedin : "")}}">
                                                        <div class="text-danger">{{$errors->first('linkedin')}}</div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="youtube">Youtube:</label>
                                                        <input id="youtube" name="youtube" type="text" placeholder="https://www.youtube.com/channel link" class="form-control" value="{{old('youtube')??($accounts!=null ? $accounts->youtube : "")}}">
                                                        <div class="text-danger">{{$errors->first('youtube')}}</div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="instagram">Instagram:</label>
                                                        <input id="instagram" placeholder="https://www.instagram.com/username/" name="instagram" type="text" class="form-control" value="{{old('instagram')??($accounts!=null ? $accounts->instagram : "")}}">
                                                        <div class="text-danger">{{$errors->first('instagram')}}</div>
                                                    </div>
                                                    <div class="form-group mb-0 float-right ">
                                                        <button type="submit" class="btn btn-success" value="Save">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                            <div class="tab-pane fade {{ session('isActive')==='location' ? 'show active': null }}" id="location" role="tabpanel" aria-labelledby="location-tab">
                                <form action="/AEE_Dashboard/footer/location" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="card">
                                            @if ($location_info!=null)
                                            <h5 class="card-header">Edit your location related info</h5>
                                            @else
                                            <h5 class="card-header">Input your location related info</h5>
                                            @endif

                                            <div class="card-body">
                                                <div class="form-group mb-3">
                                                    <label for="location_info">Location Details:</label>
                                                    <input id="location_info" name="location_info" type="text" class="form-control" value="{{old('location_info')??($location_info!=null ? $location_info->location_info: "")}}">
                                                    <div class="text-danger">{{$errors->first('location_info')}}</div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="po_box_info">Po.Box info:</label>
                                                    <input id="po_box_info" name="po_box_info" type="text" class="form-control" value="{{old('po_box_info')??($location_info!=null ? $location_info->po_box_info: "")}}">
                                                    <div class="text-danger">{{$errors->first('po_box_info')}}</div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="telephone_numbers">Telephone numbers(if multiple, separate with a comma):</label>
                                                    <input id="telephone_numbers" name="telephone_numbers" type="text" class="form-control" value="{{old('telephone_numbers')??($location_info!=null ? $location_info->telephone_numbers: "")}}">
                                                    <div class="text-danger">{{$errors->first('telephone_numbers')}}</div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="fax_info">Fax details:</label>
                                                    <input id="fax_info" name="fax_info" type="text" class="form-control" value="{{old('fax_info')??($location_info!=null ? $location_info->fax_info: "")}}">
                                                    <div class="text-danger">{{$errors->first('fax_info')}}</div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="email">Email:</label>
                                                    <input id="email" name="email" type="text" class="form-control" value="{{old('email')??($location_info!=null ? $location_info->email: "")}}">
                                                    <div class="text-danger">{{$errors->first('email')}}</div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="google_map_link">Google Maps Location iframe:</label>
                                                    <p>Click <a target="_blank" class="btn-info" href="https://www.embedgooglemap.net/en">Here</a> to go the map generator. Input the location and once your done copy the text it will provide to you and paste it here. Please set the width and height in the map generator to 300.</p>

                                                    <textarea class="form-control" name="google_map_link" id="google_map_link" rows="3">{{old('google_map_link')??($location_info!=null ? $location_info->google_map_link: "")}}</textarea>
                                                    <div class="text-danger">{{$errors->first('google_map_link')}}</div>
                                                </div>
                                                <div class="form-group mb-0 float-right ">
                                                    <button type="submit" class="btn btn-success" value="Save">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade {{ session('isActive')==='logo' ? 'show active': null }}" id="logo" role="tabpanel" aria-labelledby="logo-tab">
                                <form action="/AEE_Dashboard/footer/logo" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Group Picture</h5>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="logo" name="logo" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('image-prev').src = window.URL.createObjectURL(this.files[0])">
                                                                <label class="custom-file-label" for="inputGroupFile04"><h6>click here to choose an image</h6></label>
                                                            </div>
                                                            <div class="form-group mb-0 float-right ">
                                                                    <input type="submit" class="btn btn-success" value="Upload">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <img src="#" id="image-prev" width="300" alt="Uploaded-pic" />   <!--for preview purpose -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @if ($logo != null)
                                <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="card">
                                        <h5 class="card-header">Logo (To change the picture of the logo, simply upload a new one from the tab above.)</h5>
                                        <div class="card-body">
                                           <img src="{{asset($logo->name)}}" alt="Group Image" width="200" class="img-fluid"/>
                                        </div>
                                    </div>
                                    @endif
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

