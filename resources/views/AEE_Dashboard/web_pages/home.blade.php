@extends('AEE_Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
   <!-- sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    @include('AEE_Dashboard.layouts.sidebar')
    <!-- end sidebar -->
    <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{URL::to('/AEE_ForDboard/')}}" width="50%" height="40%">></iframe>
                          </div>
                    </div>
                </div>
            </div>
        </div>
            @endsection
