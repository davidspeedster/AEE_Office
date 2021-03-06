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

            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Tables</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><a href="/AEE_Dashboard/employee/create"><button type="button" class="btn btn-info ">Register a new employee</button></a></h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Full Name</th>
                                                <th class="border-top-0">Phone Number</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Position</th>
                                                <th class="border-top-0">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employees as $employee )
                                            <tr>
                                                <td>
                                                 <img src={{asset('storage/'. $employee->image)}} width=150 alt="Employee Image"  class="rounded-circle avatar-sm" />
                                                <span class="ml-2">{{$employee->firstname}} {{$employee->lastname}}</span>
                                                </td>
                                                <td>
                                                    {{$employee->phone}}
                                                </td>
                                                <td>
                                                    {{$employee->email}}
                                                </td>
                                                <td>
                                                    {{$employee->position}}
                                                </td>
                                               <td>
                                                 <div class="btn-group mb-2">

                                               <a href="/AEE_Dashboard/employee/{{$employee->id}}/edit"><button type="button" class="btn btn-success waves-effect waves-light">Edit</button></a>

                                               <form action="/AEE_Dashboard/employee/{{$employee->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</>
                                               </form>
                                               </td>
                                                </div>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="border-top-0">Full Name</th>
                                                <th class="border-top-0">Phone Number</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Position</th>
                                                <th class="border-top-0">Options</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
@endsection
