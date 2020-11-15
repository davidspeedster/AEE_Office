
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
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="alerts">
                                <h3 class="section-title">Alerts</h3>
                                <p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                <h4>Project Name:</h4>
                                <h3>{{$project->projectName}}</h3>
                                <hr>
                                <h4>Project Category: </h4>
                                <h3>
                                    {{$project->projectCategoryName}}
                                </h3>
                                <hr>
                                <h4>Client: </h4>
                                <h3>
                                    {{$project->client}}
                                </h3>
                                <hr>
                                <h4>Project Location:</h4>
                                <h3>
                                    {{$project->location}}
                                </h3>
                                <hr>
                                <h4>Involvement of the Company: </h4>
                                <h3>
                                    {{$project->involvement}}
                                </h3>
                                <hr>
                                <h4>Status: </h4>
                                <h3>
                                    {{$project->status}}
                                </h3>
                                <hr>
                                <h4>Construction Duration: </h4>
                                <h3>
                                    {{$project->duration}}
                                </h3>
                                <hr>
                                <h4>Project Architect: </h4>
                                <h3>
                                    {{$project->architect}}
                                </h3>
                                <hr>
                                <h4>Project Contractor: </h4>
                                <h3>
                                    {{$project->contractor}}
                                </h3>
                                <hr>
                                <h4>Project Description:</h4>
                                <h3>
                                    {{$project->description}}
                                </h3>
                                <hr>

                                </div>
                                <div class="card-body border-top">
                                    <h4>Main Picture</h4>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <img class="card-img-top img-fluid" src="{{asset('storage/'. $project->image)}}" alt="main-picture">
                                            <div class="card-body">
                                                <h3 class="card-title">Main Picture</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h4>Additional Pictures</h4>
                                   <div class="row">
                                    @foreach ($images as $image)
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <img class="card-img-top img-fluid" src="{{$image->name}}" alt="additional-pictures">
                                        </div>
                                    </div>
                                    @endforeach
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
