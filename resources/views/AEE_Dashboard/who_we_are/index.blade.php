@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
 <!-- Pre-loader -->
 <div id="preloader">
    <div id="status">
        <div class="spinner">Loading...</div>
    </div>
</div>
<div class="dashboard-main-wrapper">
<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        @include('AEE_Dashboard.layouts.sidebar')
        <div class="dashboard-wrapper">
            @if (session()->has('message'))
            <div class="alert alert-info" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{session()->get('message')}}
            </div>
            @elseif(session()->has('errors'))
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{$error}}</strong>
            </div>
                    @endforeach
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
                                        <a class="nav-link {{ session('isActive')===null ? 'show active': null }}" id="groupPicture-tab" data-toggle="tab" href="#groupPicture" role="tab" aria-controls="groupPicture" aria-selected="true">Group picture</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ session('isActive')==='vision' ? 'active': null }}" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="false">Vision</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ session('isActive')==='mission' ? 'active': null }}" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">Missions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ session('isActive')==='value' ? 'active': null }}" id="value-tab" data-toggle="tab" href="#value" role="tab" aria-controls="value" aria-selected="false">Values</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History</a>
                                    </li>
                                    <li class="nav-item" {{ session('isActive')==='expertise' ? 'active': null }}>
                                        <a class="nav-link" id="expertise-tab" data-toggle="tab" href="#expertise" role="tab" aria-controls="expertise" aria-selected="false">Expertise</a>
                                    </li>
                                    <li class="nav-item" {{ session('isActive')==='policies' ? 'active': null }}>
                                        <a class="nav-link" id="policies-tab" data-toggle="tab" href="#policies" role="tab" aria-controls="policies" aria-selected="false">Policies</a>
                                    </li>
                                    <li class="nav-item" {{ session('isActive')==='certificate' ? 'active': null }}>
                                        <a class="nav-link" id="certificates-tab" data-toggle="tab" href="#certificates" role="tab" aria-controls="certificates" aria-selected="false">Certificates</a>
                                    </li>
                                    <li class="nav-item" {{ session('isActive')==='timeline' ? 'active': null }}>
                                        <a class="nav-link" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="false">Timeline</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent3">
                                    <div class="tab-pane fade {{ session('isActive')===null ? 'show active': null }}" id="groupPicture" role="tabpanel" aria-labelledby="groupPicture-tab">
                                        <form action="/AEE_Dashboard/who_we_are/groupPic" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <h5 class="card-header">Group Picture</h5>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                                <div class="row">
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                          <input type="file" class="custom-file-input" id="groupImage" name="groupImage" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('image-prev').src = window.URL.createObjectURL(this.files[0])">
                                                                          <label class="custom-file-label" for="inputGroupFile04"><h6>Choose Image</h6></label>
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
                                        @if ($groupImage != null)
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="card">
                                                <h5 class="card-header">Group Picture (To change the picture, simply upload a new one from the tab above.)</h5>
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">Group Picture</th>
                                                                <th class="border-top-0">Options</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="{{asset($groupImage->name)}}" alt="Group Image"  class="img-fluid" />
                                                                </td>
                                                               <td>
                                                                 <div class="btn-group mb-2">
                                                                    <form action="/AEE_Dashboard/images/{{$groupImage->id}}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Delete</button>
                                                                </form>
                                                               </td>
                                                                </div>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th class="border-top-0">Group Picture</th>
                                                                <th class="border-top-0">Options</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                </div>
                                    <div class="tab-pane fade {{ session('isActive')==='vision' ? 'show active': null }}" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                                @if ($vision!=null)
                                                <h4>Edit Vision Details</h4>
                                                <form action="/AEE_Dashboard/who_we_are/{{$vision->id}}/update" method="POST" id="updateMission" data-parsley-validate="" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    @method('PATCH')
                                                        <div class="card">
                                                            <h5 class="card-header">Visions Table</h5>
                                                            <div class="card-body">
                                                                <div class="table-responsive ">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Vision details:</th>
                                                                                <th scope="col">Handle</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="visionTable">
                                                                            <td>
                                                                            <div class="form-group"><textarea class="form-control" name="text" id="visionText" cols="30" rows="10">{{$vision->text}}</textarea></div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group mb-0 float-right ">
                                                                                    <input type="submit" class="btn btn-success" value="Save">
                                                                                </div>
                                                                            </td>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <td>
                                                                                <div class="form-group">
                                                                                <input id="parentText" name="parentText" type="hidden" class="form-control" value="vision">
                                                                            </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                @else
                                                <form action="/AEE_Dashboard/who_we_are" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                        <div class="card">
                                                            <h5 class="card-header">Visions Table</h5>
                                                            <div class="card-body">
                                                                <div class="table-responsive ">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Vision details:</th>
                                                                                <th scope="col">Handle</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="visionTable">
                                                                            <td>
                                                                                <div class="form-group"><textarea class="form-control" placeholder="Enter Your Vision" name="text" id="visionText" cols="30" rows="10"></textarea></div>
                                                                            </td>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group mb-0 float-right ">
                                                                                    <input type="submit" class="btn btn-success" value="Save">
                                                                                </div>
                                                                            </td>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <td>
                                                                                <div class="form-group">
                                                                                <input id="parentText" name="parentText" type="hidden" class="form-control" value="vision">
                                                                            </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                @endif
                                        </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade {{ session('isActive')==='mission' ? 'show active': null }}" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                                        <div class="row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">

                                            @if (session('isEdit'))
                                            <form action="/AEE_Dashboard/who_we_are/{{Session::get('edit_webText')['id']}}/update" method="POST" id="updateMission" data-parsley-validate="" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                @method('PATCH')
                                                <div class="card">
                                                    <h5 class="card-header">Missions Table</h5>
                                                    <div class="card-body">
                                                        <div class="table-responsive ">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Mission details:</th>
                                                                        <th scope="col">Handle</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="missionEditTable">
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <textarea id="missionText" placeholder = "Input your mission" class="form-control" name="text" rows="3">@if (Session::get('edit_webText')['parentText']==="mission"){{Session::get('edit_webText')['text']}}
                                                                            @endif</textarea>
                                                                        </div>
                                                                    </td>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <td>
                                                                        <div class="form-group">
                                                                        <input id="parentText" name="parentText" type="hidden" class="form-control" value="mission">
                                                                    </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0 float-right ">
                                                                                <input type="submit" class="btn btn-success" value="Save">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                            @else
                                            <form action="/AEE_Dashboard/who_we_are" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <div class="card">
                                                        <h5 class="card-header">Missions Table</h5>
                                                        <div class="card-body">
                                                            <div class="table-responsive ">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Mission details:</th>
                                                                            <th scope="col">Handle</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="missionTable">

                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <td>
                                                                            <div class="form-group">
                                                                            <input id="parentText" name="parentText" type="hidden" class="form-control" value="mission">
                                                                        </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group mb-0 float-right ">
                                                                                    <input type="submit" class="btn btn-success" value="Save">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </form>
                                            @endif
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="card">
                                                <h5 class="card-header">Missions</h5>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">Mission Details</th>
                                                                <th class="border-top-0">Options</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($missions as $mission)
                                                            <tr>
                                                                <td>
                                                                    {{$mission->text}}
                                                                </td>

                                                               <td>

                                                                  <div class="btn-group mb-2">

                                                                  <a href="/AEE_Dashboard/who_we_are/{{$mission->id}}/edit"><button  type="button" class="btn btn-success waves-effect waves-light">Edit</button></a>

                                                               <form action="/AEE_Dashboard/who_we_are/{{$mission->id}}/delete" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</>
                                                               </form>
                                                                 </div>
                                                               </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th class="border-top-0">Mission Details</th>
                                                                <th class="border-top-0">Options</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade {{ session('isActive')==='value' ? 'show active': null }}" id="value" role="tabpanel" aria-labelledby="value-tab">
                                        <div class="row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                     @if (session('isEdit'))
                                       <form action="/AEE_Dashboard/who_we_are/{{Session::get('edit_webText')['id']}}/update" method="POST" id="updateMission" data-parsley-validate="" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        @method('PATCH')
                                            <div class="card">
                                                <h5 class="card-header">Values Table</h5>
                                                <div class="card-body">
                                                    <div class="table-responsive ">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Values details:</th>
                                                                    <th scope="col">Handle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="valueEditTable">
                                                                <td>
                                                                    <div class="form-group">
                                                                        <textarea id="valueText" placeholder = "Input your value" class="form-control" name="text" rows="3">@if (Session::get('edit_webText')['parentText']==="value"){{Session::get('edit_webText')['text']}}
                                                                        @endif</textarea>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td>
                                                                    <div class="form-group">
                                                                    <input id="parentText" name="parentText" type="hidden" class="form-control" value="value">
                                                                </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0 float-right ">
                                                                            <input type="submit" class="btn btn-success" value="Save">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                       @else
                                       <form action="/AEE_Dashboard/who_we_are" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="card">
                                                <h5 class="card-header">Values Table</h5>
                                                <div class="card-body">
                                                    <div class="table-responsive ">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Values details:</th>
                                                                    <th scope="col">Handle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="valueTable">

                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td>
                                                                    <div class="form-group">
                                                                    <input id="parentText" name="parentText" type="hidden" class="form-control" value="value">
                                                                </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0 float-right ">
                                                                            <input type="submit" class="btn btn-success" value="Save">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                       @endif
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="card">
                                                <h5 class="card-header">Values</h5>
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">Value Details</th>
                                                                <th class="border-top-0">Options</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($values as $value)
                                                            <tr>
                                                                <td>
                                                                    {{$value->text}}
                                                                </td>
                                                               <td>
                                                                 <div class="btn-group mb-2">

                                                                    <a href="/AEE_Dashboard/who_we_are/{{$value->id}}/edit"><button  type="button" class="btn btn-success waves-effect waves-light">Edit</button></a>

                                                               <form action="/AEE_Dashboard/who_we_are/{{$value->id}}/delete" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</>
                                                               </form>
                                                            </div>
                                                               </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th class="border-top-0">Value Details</th>
                                                                <th class="border-top-0">Options</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                            </div>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                <div class="tab-pane fade {{ session('isActive')==='history' ? 'show active': null }}" id="history" role="tabpanel" aria-labelledby="history-tab">

                                        @if ($history!=null)
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <form action="/AEE_Dashboard/who_we_are/{{$history->id}}/updateHistory" method="POST">
                                            {{ csrf_field() }}
                                            @method('PATCH')
                                        <div class="form-group">
                                            <label for="details" class="col-form-label">History Description:</label>
                                                <textarea id="details" placeholder = "Input description of history" class="form-control" name="details" rows="3">{{$history->details}}</textarea>
                                        </div>
                                        <div>
                                            <input id="parentText" name="parentText" type="hidden" class="form-control" value="history">
                                        </div>
                                        <div class="form-group">
                                            <label for="websiteLink">Sound Cloud iframe:</label>
                                            <p>Click <a target="_blank" class="btn-info" href="https://www.soundcloud.com/">Here</a> to go to soundcloud. Once there search for the specific file you want and once you find it, click the share button found on the bottom of the file and click on embed on the pop up window. Continue to customize the file to satisfy your needs and once done copy the code it provides and paste it on the text area below. BE SURE TO COPY AND PASTE THE ENTIRE CODE, OR IT WON'T WORK.</p>

                                            <textarea id="websiteLink" name="websiteLink" class="form-control">{{$history->websiteLink}}</textarea>
                                        </div>
                                    <div class="form-group mb-0 float-right ">
                                        <input type="submit" class="btn btn-success" value="Save">
                                    </div>
                                    </form>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">History details</th>
                                                                <th class="border-top-0">Soundcloud File Link</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                 {{$history->details}}
                                                                </td>
                                                                <td>
                                                                    {!!$history->websiteLink!!}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th class="border-top-0">History details</th>
                                                                <th class="border-top-0">Soundcloud File Link</th>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    @else
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <form action="/AEE_Dashboard/who_we_are/storeHistory" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="details" class="col-form-label">History Description:</label>
                                                    <textarea id="details" placeholder = "Input description of history" class="form-control" name="details" rows="3">{{old('details')}}</textarea>
                                            </div>
                                            <div>
                                                <input id="parentText" name="parentText" type="hidden" class="form-control" value="history">
                                            </div>
                                            <div class="form-group">
                                                <label for="google_map_link">Sound Cloud iframe:</label>
                                            <p>Click <a target="_blank" class="btn-info" href="https://www.soundcloud.com/">Here</a> to go to soundcloud. Once there search for the specific file you want and once you find it, click the share button found on the bottom of the file and click on embed on the pop up window. Continue to customize the file to satisfy your needs and once done copy the code it provides and paste it on the text area below. BE SURE TO COPY AND PASTE THE ENTIRE CODE, OR IT WON'T WORK.</p>

                                                <textarea id="websiteLink" name="websiteLink" class="form-control">{{old('websiteLink')}}</textarea>
                                            </div>
                                        <div class="form-group mb-0 float-right ">
                                            <input type="submit" class="btn btn-success" value="Save">
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                    <div class="tab-pane fade {{ session('isActive')==='expertise' ? 'show active': null }}" id="expertise" role="tabpanel" aria-labelledby="expertise-tab">
                                        <div class="row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                        @if (session('isEdit'))
                                        <form action="/AEE_Dashboard/who_we_are/{{Session::get('edit_webText')['id']}}/update" method="POST" id="updateMission" data-parsley-validate="" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            @method('PATCH')
                                                <div class="card">
                                                    <h5 class="card-header">Expertise Table</h5>
                                                    <div class="card-body">
                                                        <div class="table-responsive ">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Expertise details:</th>
                                                                        <th scope="col">Handle</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="expertiseEditTable">
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <textarea id="expertiseText" placeholder = "Input an expertise" class="form-control" name="text" rows="3">@if (Session::get('edit_webText')['parentText']==="expertise"){{Session::get('edit_webText')['text']}}
                                                                            @endif</textarea>
                                                                        </div>
                                                                    </td>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <td>
                                                                        <div class="form-group">
                                                                        <input id="parentText" name="parentText" type="hidden" class="form-control" value="expertise">
                                                                    </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0 float-right ">
                                                                                <input type="submit" class="btn btn-success" value="Save">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @else
                                        <form action="/AEE_Dashboard/who_we_are" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                                <div class="card">
                                                    <h5 class="card-header">Expertise Table</h5>
                                                    <div class="card-body">
                                                        <div class="table-responsive ">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Expertise details:</th>
                                                                        <th scope="col">Handle</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="expertiseTable">

                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <td>
                                                                        <div class="form-group">
                                                                        <input id="parentText" name="parentText" type="hidden" class="form-control" value="expertise">
                                                                    </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0 float-right ">
                                                                                <input type="submit" class="btn btn-success" value="Save">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endif
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="card">
                                                <h5 class="card-header">Expertises</h5>
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">Expertise</th>
                                                                <th class="border-top-0">Options</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($expertises as $expertise)
                                                            <tr>
                                                                <td>
                                                                    {{$expertise->text}}
                                                                </td>
                                                               <td>
                                                                 <div class="btn-group mb-2">

                                                                    <a href="/AEE_Dashboard/who_we_are/{{$expertise->id}}/edit"><button  type="button" class="btn btn-success waves-effect waves-light">Edit</button></a>

                                                               <form action="/AEE_Dashboard/who_we_are/{{$expertise->id}}/delete" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</>
                                                               </form>
                                                            </div>
                                                               </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th class="border-top-0">Expertise</th>
                                                                <th class="border-top-0">Options</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    <div class="tab-pane fade {{ session('isActive')==='policies' ? 'show active': null }}" id="policies" role="tabpanel" aria-labelledby="policies-tab">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <form action="/AEE_Dashboard/who_we_are/fileUpload" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                        <div class="card">
                                                            <h5 class="card-header">Quality Policy</h5>
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlFile1">Select file of quality policy</label>
                                                                        <input type="file" class="form-control-file" id="qualityPolicy" name="fileUpload" accept="application/pdf">
                                                                        <div class="form-group mb-0 float-right ">
                                                                            <input type="submit" class="btn btn-success" value="Upload">
                                                                        </div>
                                                                      </div>
                                                            </div>
                                                                <div class="form-group">
                                                                    <input id="parentText" name="parentText" type="hidden" class="form-control" value="qualityPolicy">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </form>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <form action="/AEE_Dashboard/who_we_are/fileUpload" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                        <div class="card">
                                                            <h5 class="card-header">Risk Management Policy</h5>
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlFile1">Select file of quality policy</label>
                                                                        <input type="file" class="form-control-file" id="riskPolicy" name="fileUpload" accept="application/pdf">
                                                                        <div class="form-group mb-0 float-right ">
                                                                            <input type="submit" class="btn btn-success" value="Upload">
                                                                        </div>
                                                                      </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="parentText" name="parentText" type="hidden" class="form-control" value="riskPolicy">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </form>
                                            </div>
                                            @if ($qualityPolicy!=null)
                                            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <h5 class="card-header">Quality Policy</h5>
                                                    <div class="card-body">
                                                        <embed src="{{asset($qualityPolicy->name)}}" type="application/pdf" width="100%" height="600px" />
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @if ($riskPolicy!=null)
                                            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <h5 class="card-header">Risk Management Policy</h5>
                                                    <div class="card-body">
                                                        <embed src="{{asset($riskPolicy->name)}}" type="application/pdf" width="100%" height="600px" />
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="certificates" role="tabpanel" aria-labelledby="certificates-tab">
                                        <h4>Certificates</h4>
                                    <form action="/AEE_Dashboard/who_we_are/storeCertificates" method="post"   class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone"   data-previews-container="#file-previews"
                                        data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="dz-message needsclick">
                                            <p class="h1 text-muted"><i class="mdi mdi-cloud-upload"></i></p>
                                            <h3>Input images of your certificates.(You can drag and drop your pictures here or      click on this box. It is possible to select more than one picture.)</h3>
                                        </div>
                                    </form>
                                    <td><div class="form-group mb-0 float-right "><button type="submit" form="updateMission" class="btn btn-info">Save</button></div></td></tr>
                                    <div class="row">
                                        @foreach ($certificates as $certificate)
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="{{$certificate->name}}" alt="additional-pictures">
                                                <div class="card-body">
                                                    <form action="/AEE_Dashboard/images/{{$certificate->id}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Delete</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    </div>
                                     <div class="tab-pane fade {{ session('isActive')==='timeline' ? 'show active': null }} " id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                                        <h4>Timeline</h4>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        @if (session('isEditTimeline'))
                                                        <h5 class="card-header">Input the following necessary information</h5>
                                                        <form action="/AEE_Dashboard/who_we_are/{{Session::get('edit_timeline')['id']}}/updateTimeline" method="POST" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            @method('PATCH')
                                                            <div class="form-group">
                                                                <label for="year" class="col-form-label">Year:</label>
                                                                <select class="form-control" name="year" id="year">
                                                                    @for ($i = 1990; $i <= now()->year; $i++)
                                                                <option value="{{$i}}" {{(Session::get('edit_timeline')['year'] == $i) ? "selected" : "" }}>{{$i}}</option>
                                                                    @endfor
                                                                </select>
                                                                <label for="month" class="col-form-label">Enter the month/s of the event:</label>
                                                                <input id="month" name="month" type="text" class="form-control" value="{{old('month')??Session::get('edit_timeline')['month']}}">
                                                                <div class="text-danger">{{$errors->first('month')}}</div>
                                                                <label for="details" class="col-form-label">Enter the details of the event:</label>
                                                                <textarea id="details" placeholder = "Input the details" class="form-control" name="details" rows="3">{{old('details')}}{{Session::get('edit_timeline')['details']}}
                                                                </textarea>
                                                                <div class="text-danger">{{$errors->first('details')}}</div>
                                                            </div>

                                                            <div class="form-group mb-0 float-right ">
                                                                <button type="submit" class="btn btn-success" value="Register">Save</button>
                                                            </div>
                                                        </form>
                                                        @else
                                                        <div class="section-block" id="basicform">
                                                            <h3 class="section-title">Register a new event on the timeline</h3>
                                                        </div>
                                                        <h5 class="card-header">Input the following necessary information</h5>

                                                        <form action="/AEE_Dashboard/who_we_are/timeline" method="POST" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <label for="year" class="col-form-label">Year:</label>
                                                                <select class="form-control" name="year" id="year">
                                                                    @for ($i = 1990; $i <= now()->year; $i++)
                                                                    <option value="{{$i}}" {{(old('year') == $i) ? "selected" : "" }}>{{$i}}</option>
                                                                    @endfor
                                                                </select>
                                                                <label for="month" class="col-form-label">Enter the month/s of the event:</label>
                                                                <input id="month" name="month" type="text" class="form-control" value="{{old('month')}}">
                                                                <div class="text-danger">{{$errors->first('month')}}</div>
                                                                <label for="details" class="col-form-label">Enter the details of the event:</label>
                                                                <textarea id="details" placeholder = "Input the details" class="form-control" name="details" rows="3">{{old('details')}}</textarea>
                                                                <div class="text-danger">{{$errors->first('details')}}</div>
                                                            </div>

                                                            <div class="form-group mb-0 float-right ">
                                                                <button type="submit" class="btn btn-success" value="Register">Register</button>
                                                            </div>
                                                        </form>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <h5 class="card-header">Timeline Events</h5>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                        <table class="table table-striped table-bordered first">
                                                            <thead>
                                                                <tr>
                                                                    <th class="border-top-0">Year</th>
                                                                    <th class="border-top-0">Month Range</th>
                                                                    <th class="border-top-0">Details</th>
                                                                    <th class="border-top-0">Options</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($timelineEvents as $event)
                                                                <tr>
                                                                    <td>
                                                                        {{$event->year}}
                                                                    </td>
                                                                    <td>
                                                                        {{$event->month}}
                                                                    </td>
                                                                    <td>
                                                                        {{$event->details}}
                                                                    </td>

                                                                   <td>

                                                                      <div class="btn-group mb-2">

                                                                      <a href="/AEE_Dashboard/who_we_are/{{$event->id}}/editTimeline"><button  type="button" class="btn btn-success waves-effect waves-light">Edit</button></a>

                                                                   <form action="/AEE_Dashboard/who_we_are/{{$event->id}}/deleteTimeline" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</>
                                                                   </form>
                                                                     </div>
                                                                   </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th class="border-top-0">Year</th>
                                                                    <th class="border-top-0">Month Range</th>
                                                                    <th class="border-top-0">Details</th>
                                                                    <th class="border-top-0">Options</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
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
                        <!-- ============================================================== -->
                        <!-- end basic tabs  -->
                        <!-- ============================================================== -->
                </div>
                <script type="text/javascript">
                    var count = 1;

                    mission_field(count);

                    function mission_field(number)
                    {
                     html = '<tr>';
                           html += '<td><div class="form-group"><textarea id="missionText" placeholder = "Input your mission" class="form-control" name="text[]" rows="3"></textarea></div></td>';
                           if(number > 1)
                           {
                               html += '<td><div class="form-group mb-0 float-right "><h3 type="submit" name="remove" id="removeMission" class="btn btn-danger">Remove</h3></div></td></tr>';
                               $('#missionTable').append(html);
                           }
                           else
                           {
                               html += '@if(!session('isEdit'))<td><div class="form-group mb-0 float-right "><h3  name="add" id="addMission" class="btn btn-info">Add More</h3></div></td></tr>@endif';
                               $('#missionTable').html(html);
                           }
                    }

                    $(document).on('click', '#addMission', function(){
                     count++;
                     mission_field(count);
                    });

                    $(document).on('click', '#removeMission', function(){
                     count--;
                     $(this).closest("tr").remove();
                    });

                </script>
                <script type="text/javascript">
                    var count = 1;

                    value_field(count);

                    function value_field(number)
                    {
                     html = '<tr>';
                           html += '<td><div class="form-group"><textarea id="valueText" placeholder = "Input your value" class="form-control" name="text[]" rows="3"></textarea></div></td>';
                           if(number > 1)
                           {
                               html += '<td><div class="form-group mb-0 float-right "><h3 type="submit" name="remove" id="removeValue" class="btn btn-danger">Remove</h3></div></td></tr>';
                               $('#valueTable').append(html);
                           }
                           else
                           {
                               html += '<td><div class="form-group mb-0 float-right "><h3  name="add" id="addValue" class="btn btn-info">Add More</h3></div></td></tr>';
                               $('#valueTable').html(html);
                           }
                    }

                    $(document).on('click', '#addValue', function(){
                     count++;
                     value_field(count);
                    });

                    $(document).on('click', '#removeValue', function(){
                     count--;
                     $(this).closest("tr").remove();
                    });

                </script>
                 <script type="text/javascript">
                    var count = 1;

                    expertise_field(count);

                    function expertise_field(number)
                    {
                     html = '<tr>';
                           html += '<td><div class="form-group"><textarea id="expertiseText" placeholder = "Input an expertise" class="form-control" name="text[]" rows="3"></textarea></div></td>';
                           if(number > 1)
                           {
                               html += '<td><div class="form-group mb-0 float-right "><h3 type="submit" name="remove" id="removeExpertise" class="btn btn-danger">Remove</h3></div></td></tr>';
                               $('#expertiseTable').append(html);
                           }
                           else
                           {
                               html += '<td><div class="form-group mb-0 float-right "><h3  name="add" id="addExpertise" class="btn btn-info">Add More</h3></div></td></tr>';
                               $('#expertiseTable').html(html);
                           }
                    }

                    $(document).on('click', '#addExpertise', function(){
                     count++;
                     expertise_field(count);
                    });

                    $(document).on('click', '#removeExpertise', function(){
                     count--;
                     $(this).closest("tr").remove();
                    });
                </script>
@endsection




