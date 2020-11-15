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
            @else
            <div class="alert alert-info" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>No new notifications</strong>
            </div>
            @endif
<!-- ============================================================== -->
                        <!-- justified tabs  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                            <div class="section-block">
                                <h5 class="section-title">Featured Projects</h5>
                                <p>You can view and edit your list of featured projects here</p>
                            </div>
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="featuredProjects-tab-justify" data-toggle="tab" href="#featuredProjects-justify" role="tab" aria-controls="featuredProjects" aria-selected="true">Featured Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="unfeaturedProjects-tab-justify" data-toggle="tab" href="#unfeaturedProjects-justify" role="tab" aria-controls="unfeaturedProjects" aria-selected="false">Unfeatured Projects</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent7">
                                    <div class="tab-pane fade show active" id="featuredProjects-justify" role="tabpanel" aria-labelledby="featuredProjects-tab-justify">
                                        <div class="row">
                                            @foreach ($featuredProjects as $project)
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="card">
                                                    <img src="{{asset('storage/'. $project->image)}}" alt="project Image" width="300"  class="card-img-top img-fluid" />
                                                    <div class="card-body">
                                                        <h3 class="card-title">{{$project->projectName}}</h3>
                                                        <h4>{{$project->location}}</h4>
                                                        <div class="row">
                                                            <a href="/AEE_Dashboard/project/{{$project->id}}">
                                                                <button type="button" class="btn btn-info ">Details</button>
                                                            </a>
                                                            <form action="/AEE_Dashboard/featuredProjects/{{$project->id}}/remove" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn float-right btn-danger waves-effect waves-light">remove</>
                                                               </form>
                                                        </div>
                                                        </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="unfeaturedProjects-justify" role="tabpanel" aria-labelledby="unfeaturedProjects-tab-justify">
                                        <div class="row">
                                            @foreach ($unfeaturedProjects as $project)
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="card">
                                                    <img src="{{asset('storage/'. $project->image)}}" alt="project Image" width="300"  class="card-img-top img-fluid" />
                                                    <div class="card-body">
                                                        <h3 class="card-title">{{$project->projectName}}</h3>
                                                        <h4>{{$project->location}}</h4>
                                                        <div class="row">
                                                            <a href="/AEE_Dashboard/project/{{$project->id}}">
                                                                <button type="button" class="btn btn-info ">Details</button>
                                                            </a>
                                                            <form action="/AEE_Dashboard/featuredProjects/{{$project->id}}/add" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn float-right btn-success waves-effect waves-light">Add to featured projects</>
                                                               </form>
                                                        </div>
                                                        </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end justified tabs  -->
                        <!-- ============================================================== -->
@endsection
