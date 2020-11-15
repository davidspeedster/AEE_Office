@extends('AEE_Real.layouts.master-layouts')
<link rel="stylesheet" href={{asset("assets/swiper_bundle/swiper-bundle-certificates.css")}}>
@section('content')
<main>
    <!-- slider Area Start-->
  <div class="full-black-bg">
    <div class="slider-area ">
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap pt-100">
                        <h3 class="d-flex justify-content-center">Who We Are</h3>
                    </div>
                </div>
            </div>
            <img src="{{$groupImage != null ? asset($groupImage->name): ""}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
    {{-- Tab start --}}
    <section class="py-5 header">
        <div class="container py-4">

            <div class="row">
                <div class="col-md-3">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-vision-tab" data-toggle="pill" href="#v-pills-vision" role="tab" aria-controls="v-pills-vision" aria-selected="true">
                            <i class="fa fa-eye mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Our Vision</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">
                            <i class="fa fa-tasks mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Our Mission</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-value-tab" data-toggle="pill" href="#v-pills-value" role="tab" aria-controls="v-pills-value" aria-selected="false">
                            <i class="fas fa-balance-scale mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Our Values</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-history-tab" data-toggle="pill" href="#v-pills-history" role="tab" aria-controls="v-pills-history" aria-selected="false">
                            <i class="fa fa-history mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Our History</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-expertise-tab" data-toggle="pill" href="#v-pills-expertise" role="tab" aria-controls="v-pills-expertise" aria-selected="false">
                            <i class="fa fa-hard-hat mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Our Expertise</span></a>
                        </div>
                </div>


                <div class="col-md-9">
                    <!-- Tabs content -->
                    <div  class="tab-content" id="v-pills-tabContent">
                        <div  class="tab-pane fade shadow rounded  show active p-5" id="v-pills-vision" role="tabpanel" aria-labelledby="v-pills-vision-tab">
                            <div class="section-tittle section-tittle5 mb-50">
                                <div class="front-text">
                                    <h4 class="font-weight-bold mb-4">Our Vision</h4>
                                </div>
                            </div>
                            <p class="font-weight-bold mb-2">{{$vision != null ? $vision->text: "Our Vision"}}</p>
                        </div>

                        <div class="tab-pane fade shadow rounded p-5" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                            <div class="section-tittle section-tittle5 mb-50">
                                <div class="front-text">
                                    <h4 class="font-weight-bold mb-4">Our Missions</h4>
                                </div>
                            </div>
                            <ul class="unordered-list">
                                @foreach ($missions as $mission)
                            <li class="font-weight-bold mb-2">{{$mission->text}}</li>
                            @endforeach
                            </ul>

                        </div>

                        <div class="tab-pane fade shadow rounded p-5" id="v-pills-value" role="tabpanel" aria-labelledby="v-pills-value-tab">
                            <div class="section-tittle section-tittle5 mb-50">
                                <div class="front-text">
                                    <h4 class="font-weight-bold mb-4">Our Values</h4>                                </div>
                            </div>
                            <ul class="unordered-list">
                             @foreach ($values as $value)
                            <li class="font-weight-bold mb-2">{{$value->text}}</li>
                            @endforeach
                            </ul>
                        </div>

                        <div class="tab-pane fade shadow rounded p-5" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
                            <div class="section-tittle section-tittle5 mb-50">
                                <div class="front-text">
                                    <h4 class="font-weight-bold mb-4">Our History</h4>                                </div>
                            </div>
                            @if ($history != null)
                            <h5 class="font-weight-bold  mb-4">{{$history->details}}</h5>
                            {!!$history->websiteLink!!}
                            @endif
                        </div>

                        <div class="tab-pane fade shadow rounded p-5" id="v-pills-expertise" role="tabpanel" aria-labelledby="v-pills-expertise-tab">
                            <div class="section-tittle section-tittle5 mb-50">
                                <div class="front-text">
                                    <h4 class="font-weight-bold mb-4">Our Expertise</h4>
                                </div>
                            </div>
                            <h5 class="font-weight-bold   mb-4">Specialty in heavily loaded high-rise and long-span civil structures</h5>
                            <ul class="unordered-list">
                            @foreach ($expertises as $expertise)
                            <li class="font-weight-bold mb-2">{{$expertise->text}}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Tab end --}}
    {{-- certificates Start --}}
    <div class="section-tittle section-tittle5 mb-50">
        <div class="front-text">
            <h4 class="font-weight-bold mb-4">Our Certificates</h4>
        </div>
    </div>
    <div class="certificates">
        <div id="certificates-slide" class="swiper-container certificates-slide">
            <div class="swiper-wrapper">

              @foreach ($certificates as $certificate)
              <div class="swiper-slide">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img class="img-fluid" src="{{$certificate->name}}" alt="Certificate" style="width:700px;height:700px;">
                    </div>
                </div>
              </div>
              @endforeach
            </div>
            {{-- <!-- Add Pagination -->
            <div id="employee-pagination" class="swiper-pagination"></div> --}}
        </div>

        <!-- Add Arrows -->
          <div id="certificate-next" class="swiper-button-next"></div>
          <div id="certificate-prev" class="swiper-button-prev"></div>

        </div>

{{-- certificates end --}}
    {{-- policies start --}}
    <div class="testimonial-area t-bg testimonial-padding">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="section-tittle section-tittle5 mb-50">
                    <div class="front-text">
                        <h4 class="font-weight-bold mb-4">Our Quality Policy</h4>
                    </div>
                </div>
                <ul class="unordered-list">

                @if ($qualityPolicy!=null)
                <li>
                    <p class="font-weight-bold mb-2">To view or download our quality policy, click <a class="text-info" target="_blank" href="{{asset($qualityPolicy->name)}}">here</a></p>
                </li>
                @endif
                </ul>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="section-tittle section-tittle5 mb-50">
                    <div class="front-text">
                        <h4 class="font-weight-bold mb-4">Our Risk Management Policy</h4>
                    </div>
                </div>
                @if ($riskPolicy!=null)
                <li>
                    <p class=class="font-weight-bold mb-2">To view or download our risk management policy, click <a class="text-info" target="_blank" href="{{asset($riskPolicy->name)}}">here</a></p>
                </li>
                @endif
            </div>
        </div>
    </div>
    {{-- policies end --}}

    {{-- timeline starts --}}
    <div class="timeline-wrapper">
        <div class="section-tittle section-tittle5 mb-55">
            <div class="front-text">
                <h2 class="">AEE IN MILESTONES</h2>
            </div>
        </div>
        <div id="timeline">
            <ul id="dates">
                @foreach ($years as $year)
                    <li><a href="#{{$year['year']}}">{{$year['year']}}</a> </li>
                @endforeach
            </ul>
            <ul id="issues">
                @foreach ($years as $year)
                <li id="{{$year['year']}}">
                    <div class="section-tittle section-tittle4 ">
                        <div class="front-text">
                            <h1 class="font-weight-bold mb-4">{{$year['year']}}</h1>
                        </div>
                    </div>
                    @foreach ($timelines[$year['year']] as $timeline)

                        <div class="front-text">
                            <h4 class="font-weight-bold mb-4">{{$timeline->month}}</h4>
                        </div>
                        <div class="front-text">
                            <h6 class="font-weight-bold mb-4">{{$timeline->details}}</h6>
                        </div>
                    @endforeach
                </li>
                @endforeach
            </ul>
        </div>
        <a href="#" id="next">+</a>
         <a href="#" id="prev">-</a>
    </div>
  </div>
</main>
@endsection
