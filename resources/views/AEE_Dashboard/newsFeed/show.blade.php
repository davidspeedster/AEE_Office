
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
                            <div class="card">
                                <div class="card-body">
                                <h4>News Header:</h4>
                                <h3>
                                    {{$newsFeed->newsHeader}}
                                </h3>
                                <hr>
                                <h4>Project Name:</h4>
                                <h3>
                                    {{$newsFeed->project->projectName}}
                                </h3>
                                <hr>
                                <h4>Client:</h4>
                                <h3>
                                    {{$newsFeed->project->client}}
                                </h3>
                                <hr>
                                <h4>Project Location:</h4>
                                <h3>
                                    {{$newsFeed->project->location}}
                                </h3>
                                <hr>
                                <h4>News Feed Discription:</h4>
                                <h3>
                                    {{$newsFeed->description}}
                                </h3>
                                <hr>
                                </div>
                                <div class="card-body border-top">
                                    <h4>News Feed Cover Picture</h4>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <img class="card-img-top img-fluid" src="{{asset('storage/'. $newsFeed->project->image)}}" alt="main-picture">
                                            <div class="card-body">
                                                <h3 class="card-title">Main Picture</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h4>News Feed Video</h4>
                                   {!!$newsFeed->videoLink!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
