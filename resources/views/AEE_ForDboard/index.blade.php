@extends('AEE_Real.layouts.master-layouts')
@section('content')
     <!-- <div class="KW_progressContainer">
      <div class="KW_progressBar">

      </div>
    </div> -->
    <div class="full-black-bg">
    <div class="page">

            <!-- Swiper -->
            <section class="home-slider owl-carousel">
                <a href="portfolio.html" class="slider-item" style="background-image: url('/assets/AEE_Slider/images/bg_1.jpg');">
                  <div class="overlay"></div>
                  <div class="container">
                    <div class="row slider-text align-items-end justify-content-center">
                      <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">#01 Exterior Building</h1>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="portfolio.html" class="slider-item" style="background-image: url('/assets/AEE_Slider/images/bg_2.jpg');">
                  <div class="overlay"></div>
                  <div class="container">
                    <div class="row slider-text align-items-end justify-content-center">
                      <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#02 American Building</h1>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="portfolio.html" class="slider-item" style="background-image: url('/assets/AEE_Slider/images/bg_3.jpg');">
                  <div class="overlay"></div>
                  <div class="container">
                    <div class="row slider-text align-items-end justify-content-center">
                      <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#03 Louie's Residences</h1>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="portfolio.html" class="slider-item" style="background-image: url('/assets/AEE_Slider/images/bg_4.jpg');">
                  <div class="overlay"></div>
                  <div class="container">
                    <div class="row slider-text align-items-end justify-content-center">
                      <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#04 Business Building</h1>
                      </div>
                    </div>
                  </div>
                </a>
              </section>
              <button type="button" class="btn btn-info px-4 py-3 float-right">
                <span class="btn-label"><i class="fas fa-edit"></i></span>Edit Main Slider
            </button>


 <!--? About Start-->
 <section class="about-area section-padding2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-10">
                <div class="about-caption mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-35">
                        <span>About Us</span>
                        <h2>Welcome to Afro-European Engineers</h2>
                    </div>
                    <p>Founded in September 2007, Afro-European Engineers P.L.C. is fast becoming one of the leading specialized structural engineering firms in Ethiopia and is working towards a similar position in the African regional markets. Armed with state-of-the-art IT infrastructure, the company is giving high-end structural engineering solutions to its esteemed clients. Our company is ISO 9001 : 2015 certified and has deployed considerable investment, both in terms of hardware and software, and this has boosted its performance enabling the company to secure competitive advantage in the market. In addition to our competent staff, we have the advantage to work with European partners who have varied structural fields of specialization.</p>
                    <a href="about.html" class="btn btn-primary px-4 py-3">About us</a>
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
                    <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-house-plans"></span> Interior</a>

                    <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3 flaticon-ideas"></span> Concept</a>

                    <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness" role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span class="mr-3 flaticon-modern-house"></span> Residential</a>

                    <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3 flaticon-skyline"></span> Hospitality</a>
                  </div>
                </div>
                <div class="col-md-7 ftco-animate p-4 p-md-5 d-flex align-items-center">

                  <div class="tab-content pl-md-5" id="v-pills-tabContent">

                    <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                      <span class="icon mb-3 d-block flaticon-house-plans"></span>
                      <h2 class="mb-4">Interior Design</h2>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                    </div>

                    <div class="tab-pane fade py-5" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
                      <span class="icon mb-3 d-block flaticon-ideas"></span>
                      <h2 class="mb-4">Concept Design</h2>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                    </div>

                    <div class="tab-pane fade py-5" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">
                      <span class="icon mb-3 d-block flaticon-modern-house"></span>
                      <h2 class="mb-4">Residential Design</h2>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                    </div>

                    <div class="tab-pane fade py-5" id="v-pills-reception" role="tabpanel" aria-labelledby="v-pills-reception-tab">
                      <span class="icon mb-3 d-block flaticon-skyline"></span>
                      <h2 class="mb-4">Hospitality Design</h2>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
   <!-- Project Area Start -->
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
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Intorior</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Recent</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Big building</a>
                                <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Park</a>
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
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project1.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                            <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project2.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project3.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project4.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project5.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project6.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card TWO -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="project-caption">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project5.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project6.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project1.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project2.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project3.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project4.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card THREE -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="project-caption">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project3.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project4.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project1.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project2.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project5.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project6.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card FUR -->
                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                        <div class="project-caption">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project1.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project2.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project3.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project4.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project5.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project6.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card FIVE -->
                    <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                        <div class="project-caption">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project1.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project2.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project3.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project4.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project5.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src={{asset("/assets/AEE_Dark/img/gallery/project6.png")}} alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <img src={{asset('storage/'. $employee->image)}} alt="" style="width:150px;height:150px;">
                </div>
                <div class="team-caption">
                    <span class="title">{{$employee->position}}</span>
                    <h3>{{$employee->firstname}}</h3>
                    <h3>{{$employee->lastname}}</h3>
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
    <a target="_parent" href="/AEE_Dashboard/employee">
        <button type="button" class="btn btn-info px-4 py-3 float-right">
            <span class="btn-label"><i class="fas fa-edit"></i></span>Edit Team Slider
        </button>
    </a>
</section>

</div>
    </div>
@endsection
