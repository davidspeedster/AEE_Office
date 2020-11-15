@extends('AEE_Real.layouts.master-layouts')
<link rel="stylesheet" href={{asset("assets/swiper_bundle/swiper-bundle-project-images-singular-category.css")}}>
   @section('content')
        <!-- slider Area Start-->
        <br><br><br><br><br><br>
        <div class="section-tittle section-tittle3">
            <div class="front-text">
                <h2 class="front-text"> {{$projectCategory->projectCategoryName}}</h2>
            </div>
        </div>
<!-- slider Area End-->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            @foreach ($projects as $project)
            <div class="section-tittle section-tittle3">
                <div class="front-text">
                    <h3 class="front-text"> {{$project->projectName}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="blog_details">
                        <table class="table-responsive-sm" style="width: 100%">
                            <tr>
                                <th><h6 class="d-inline-block">Project: {{$project->projectName}}</h6></th>
                            </tr>
                            <tr>
                                <th><h6 class="d-inline-block">Client: {{$project->client}}</h6></th>
                            </tr>
                            <tr>
                                <th><h6 class="d-inline-block">Location: {{$project->location}}</h6></th>
                            </tr>
                            <tr>
                                <th><h6 class="d-inline-block">Involvement of AEE: {{$project->involvement}}</h6></th>
                            </tr>
                            <tr>
                              <th><h6 class="d-inline-block">Status: {{$project->status}}</h6></th>
                            </tr>
                            <tr>
                              <th><h6 class="d-inline-block">Development Period: {{$project->duration}}</h6></th>
                            </tr>
                            <tr>
                                <th><h6 class="d-inline-block">Architect: {{$project->architect}}</h6></th>
                            </tr>
                            <tr>
                                <th><h6 class="d-inline-block">Contractor: {{$project->contractor}}</h6></th>
                            </tr>
                          </table>
                          <br>
                          <button value="readMore" id="readMore" onclick="readMore('tab-{{$project->id}}')" class="btn btn-primary px-4 py-3">Read More</button><span id="dots">...</span>
                          <hr>

                        <p style="display: none" id="tab-{{$project->id}}">{{$project->description}}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog_item_img">
                    <div class="project-images">
                        <div id="project-images-slide" class="swiper-container project-image-slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-team mb-30">
                                        <div class="team-img">
                                            <img src="{{asset('storage/'. $project->image)}}" alt="project image" style="width:300px;height:300px;">
                                            <a href="#" class="blog_item_date">
                                                <h6>{{$project->projectName}}</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                              @foreach ($project_images[$project['id']] as $images)
                              @foreach ($images as $image)
                              <div class="swiper-slide">
                                <div class="single-team mb-30">
                                    <div class="team-img">
                                        <img src="{{asset($image['name'])}}" alt="project image" style="width:300px;height:300px;">
                                        <a href="#" class="blog_item_date">
                                        <h6>{{$project->projectName}}</h6>
                                        </a>
                                    </div>
                                </div>
                              </div>
                              @endforeach
                              @endforeach
                            </div>
                            {{-- <!-- Add Pagination -->
                            <div id="employee-pagination" class="swiper-pagination"></div> --}}
                        </div>

                        <!-- Add Arrows -->
                          <div id="project-image-next" class="swiper-button-next"></div>
                          <div id="project-image-prev" class="swiper-button-prev"></div>
                    </div>
                    </div>
                </div>
            </div>
            <br><br>
            @endforeach
        </div>
    </section>
   @endsection
   @section('script')
   <script>
    function readMore(id) {
      var dots = document.getElementById("dots");
      var description = document.getElementById(id);
      var btnText = document.getElementById("readMore");

      if (btnText.value === "readMore") {
          console.log(btnText.innerHTML)
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        btnText.value = "readLess";
        description.style.display = "inline";
      } else {
        console.log(btnText.innerHTML)
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        btnText.value = "readMore"
        description.style.display = "none";
      }
    }
    </script>
   @endsection

