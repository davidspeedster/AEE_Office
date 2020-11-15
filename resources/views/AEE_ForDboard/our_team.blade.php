@extends('AEE_real.layouts.master-layouts')
@section('content')
<div class="full-black-bg">
    <div class="team-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle5 mb-50">
                        <div class="front-text">
                            <h2 class="">Our team</h2>
                        </div>
                        <span class="back-text">exparts</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src={{asset("assets/AEE_Dark/img/team/team1.png")}} alt="">
                        </div>
                        <div class="team-caption">
                            <span>UX Designer</span>
                            <h3>Ethan Welch</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src={{asset("assets/AEE_Dark/img/team/team2.png")}} alt="">
                        </div>
                        <div class="team-caption">
                            <span>UX Designer</span>
                            <h3>Ethan Welch</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src={{asset("assets/AEE_Dark/img/team/team3.png")}} alt="">
                        </div>
                        <div class="team-caption">
                            <span>UX Designer</span>
                            <h3>Ethan Welch</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
