@extends('AEE_real.layouts.master-layouts')
@section('content')
<div class="full-black-bg">
    <div class="team-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <br><br><br>
                    <br><br><br>
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle5 mb-50">
                        <span class="back-text d-flex justify-content-center">Our Team</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                @foreach ($employees as $employee)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src={{asset('storage/'. $employee->image)}} alt="" style="width:300px;height:300px;">
                        </div>
                        <div class="team-caption">
                            <span>{{$employee->position}}</span>
                            <span>{{$employee->firstname}} {{$employee->lastname}}</span>
                            <span><i class="fas fa-phone"></i> {{$employee->phone}}</span>
                            <span><i class="fas fa-envelope"></i> {{$employee->email}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
