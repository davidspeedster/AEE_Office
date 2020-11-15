@extends('AEE_Real.layouts.master-layouts')
<link rel="stylesheet" href={{asset("assets/swiper_bundle/swiper-bundle-my-employees.css")}}>
@section('content')

    <div class="full-black-bg">
    <div class="page">

            <!-- Swiper -->
            <section class="home-slider owl-carousel">
                @foreach ($main_slider as $slider)
            <a href="/single_project_view/{{$slider->id}}" class="slider-item" style="background-image: url('{{asset('storage/'. $slider->image)}}');">
                    <div class="overlay"></div>
                    <div class="container">
                      <div class="row slider-text align-items-end justify-content-center">
                        <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#{{$slider->projectName}}
                        </div>
                      </div>
                    </div>
                  </a>
                @endforeach
              </section>


 <!--? About Start-->
 <section class="about-area section-padding2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-10">
                <div class="about-caption mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle5 mb-50">
                        <div class="front-text">
                            <h4>Welcome to Afro-European Engineers</h4>
                        </div>
                    </div>

                    <p>Founded in September 2007, Afro-European Engineers P.L.C. is fast becoming one of the leading specialized structural engineering firms in Ethiopia and is working towards a similar position in the African regional markets. Armed with state-of-the-art IT infrastructure, the company is giving high-end structural engineering solutions to its esteemed clients. Our company is ISO 9001 : 2015 certified and has deployed considerable investment, both in terms of hardware and software, and this has boosted its performance enabling the company to secure competitive advantage in the market. In addition to our competent staff, we have the advantage to work with European partners who have varied structural fields of specialization.</p>
                    <a href="/about" class="btn btn-primary px-4 py-3">About us</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <!-- about-img -->
                <div class="about-img ">
                    <div class="about-font-img ">
                        <img src={{asset("assets/AEE_Cool/img/gallery/about1.png")}} alt="">
                    </div>
                    <div class="about-back-img ">
                        <img src={{asset("assets/AEE_Cool/img/gallery/about2.png")}} alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- About  End-->
        <section class="ftco-services ">
            <div class="container">
              <div class="row no-gutters">
                <div class="col-md-5 ftco-animate py-5 nav-link-wrap aside-stretch">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <h3 class="ml-3">Services</h3>
                    @foreach ($services as $service)
                    <a class="nav-link px-4 {{$service->id === $services[0]->id ? "active" : null}}" id="v-pills-{{$service->id}}-tab" data-toggle="pill" href="#v-pills-{{$service->id}}" role="tab" aria-controls="v-pills-{{$service->id}}" aria-selected="true"><span class="fas fa-certificate"></span>{{$service->text}}</a>
                    @endforeach
                  </div>
                </div>
                <div class="col-md-7 ftco-animate p-4 p-md-5 d-flex align-items-center">

                  <div class="tab-content pl-md-5" id="v-pills-tabContent">
                      @foreach ($services as $service)
                      <div class="tab-pane fade {{$service->id === $services[0]->id ? "show active" : ""}} py-5" id="v-pills-{{$service->id}}" role="tabpanel" aria-labelledby="v-pills-{{$service->id}}-tab">
                        <div class="section-tittle section-tittle5 mb-50 d-flex align-items-center">
                            <div class="front-text">
                                <h2>{{$service->text}}</h2>
                            </div>
                        </div>
                        <p>{{$service->details}}</p>
                      </div>
                      @endforeach
                  </div>
                </div>
              </div>
            </div>
          </section>
   <!-- Project Area Start -->.
    <section class="project-area  section-padding30">
    <div class="container">
       <div class="project-heading mb-35">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle3">
                        <div class="front-text">
                            <h2 class="front-text">Our Projects</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> Show  all </a>
                                @foreach ($projectCategories as $category)
                                <a class="nav-item nav-link" id="nav-{{$category->id}}-tab" data-toggle="tab" href="#nav-{{$category->id}}" role="tab" aria-controls="nav-{{$category->id}}" aria-selected="false">{{$category->projectCategoryName}}</a>
                                @endforeach
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
            </div>
       </div>
        <div class="row">
            <div class="col-12">
                <!-- Nav Card -->
                <div class="tab-content active" id="nav-tabContent">
                    <!-- card ONE -->
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="project-caption">
                            <div class="row">
                                @foreach ($allProjects as $project)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('storage/'. $project->image)}}" alt="project image">
                                        </div>
                                        <div class="project-cap">
                                        <a href="/single_project_view/{{$project->id}}" class="plus-btn">
                                                <i class="ti-plus"></i>
                                                <h6>{{$project->projectName}}</h6>
                                                <hr>
                                                <h6>Client: {{$project->client}}</h6>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Card TWO -->
                  @foreach ($projectCategories as $category)
                  <div class="tab-pane fade" id="nav-{{$category->id}}" role="tabpanel" aria-labelledby="nav-{{$category->id}}">
                    <div class="project-caption">
                        <div class="row">
                            @foreach ($projects[$category['projectCategoryName']] as $project)
                            @foreach ($project as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-project mb-30">
                                    <div class="project-img">
                                        <img src="{{asset('storage/'. $item['image'])}} "alt="">
                                    </div>
                                    <div class="project-cap">
                                        <a href="/single_project_view/{{$item['id']}}" class="plus-btn">
                                            <i class="ti-plus"></i>
                                            <h6>{{$item['projectName']}}</h6>
                                            <hr>
                                            <h6>Client: {{$item['client']}}</h6>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                  @endforeach
                    <!-- Card THREE -->
                </div>
            <!-- End Nav Card -->
            </div>
        </div>
    </div>
</section>
<!-- Project Area End -->
{{-- employees slider --}}

<section class="project-area  section-padding30">
    <div class="container">
        <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle5 mb-50">
                            <div class="front-text">
                                <h2 class="">Our team</h2>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <div class="my-employees">
    <div id="employees-slide" class="swiper-container employee-slide">
        <div class="swiper-wrapper">
          @foreach ($employees as $employee)
          <div class="swiper-slide">
            <div class="single-team mb-30">
                <div class="team-img">
                    <img src="{{asset('storage/'. $employee->image)}}" alt="" style="width:150px;height:150px;">
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
        {{-- <!-- Add Pagination -->
        <div id="employee-pagination" class="swiper-pagination"></div> --}}
    </div>

    <!-- Add Arrows -->
      <div id="employee-next" class="swiper-button-next"></div>
      <div id="employee-prev" class="swiper-button-prev"></div>

    </div>
</section>
<!-- Testimonial Start -->
<div class="testimonial-area t-bg testimonial-padding">
    <div class="container ">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="section-tittle section-tittle5 mb-50">
                    <div class="front-text">
                        <h3 >Partners</h3>
                    </div>
                </div>
                <br>
                <ul>
                    @foreach ($partners as $partner)
                    <li>
                        <p><a href="{{$partner->websiteLink}}">{{$partner->details}}</a></p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="section-tittle section-tittle5 mb-50">
                    <div class="front-text">
                        <h3 >Registered Memberships</h3>
                    </div>
                </div>
                <br>
               <ul>
                @foreach ($registeredMemberships as $membership)
                <li>
                    <p><a href="{{$membership->websiteLink}}">{{$membership->details}}</a></p>
                </li>
                @endforeach
               </ul>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
</div>
    </div>
@endsection

