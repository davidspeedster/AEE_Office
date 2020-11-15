@extends('AEE_real.layouts.master-layouts')
<link rel="stylesheet" href={{asset("assets/swiper_bundle/swiper-bundle-project-images.css")}}>
@section('content')
   <div class="full-black-bg">
<!-- Project Area Start -->

        <div>
            <div class="container">
                <section class="project-area  section-padding30">
                    <div class="container">
                        <div class="row">
                                    <div class="col-xl-12">
                                        <!-- Section Tittle -->
                                        <div class="section-tittle section-tittle5 mb-50 float-left">
                                            <div class="front-text">
                                                <h2 class="">{{$project->projectName}}</h2>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <div class="project-images">
                    <div id="project-images-slide" class="swiper-container project-image-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-team mb-30">
                                    <div class="team-img">
                                        <img src="{{asset('storage/'. $project->image)}}" alt="project image" style="width:700px;height:700px;">
                                    </div>
                                </div>
                            </div>
                          @foreach ($project_images as $image)
                          <div class="swiper-slide">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <img src="{{asset($image->name)}}" alt="project image" style="width:700px;height:700px;">
                                </div>
                            </div>
                          </div>
                          @endforeach
                        </div>
                        {{-- <!-- Add Pagination -->
                        <div id="employee-pagination" class="swiper-pagination"></div> --}}
                    </div>

                    <!-- Add Arrows -->
                      <div id="project-image-next" class="swiper-button-next"></div>
                      <div id="project-image-prev" class="swiper-button-prev"></div>

                    </div>
                    <div class="blog_details">
                        <table class="table-responsive-sm" style="width: 100%">
                            <tr>
                              <th><h2 class="d-inline-block">Project: </h2></th>
                              <td><h6 class="d-inline-block">{{$project->projectName}}</h6></td>
                            </tr>
                            <tr>
                                <th><h2 class="d-inline-block">Client: </h2></th>
                                <td><h6 class="d-inline-block">{{$project->client}}</h6></td>
                              </tr>
                              <tr>
                                <th><h2 class="d-inline-block">Location: </h2></th>
                                <td><h6 class="d-inline-block">{{$project->location}}</h6></td>
                              </tr>
                              <tr>
                                <th><h2 class="d-inline-block">Involvement of AEE: </h2></th>
                                <td><h6 class="d-inline-block">{{$project->involvement}}</h6></td>
                              </tr>
                            <tr>
                              <th><h2 class="d-inline-block">Status: </h2></th>
                              <td><h6 class="d-inline-block">{{$project->status}}</h6></td>
                            </tr>
                            <tr>
                              <th><h2 class="d-inline-block">Development Period: </h2></th>
                              <td><h6 class="d-inline-block">{{$project->duration}}</h6></td>
                            </tr>
                            <tr>
                                <th><h2 class="d-inline-block">Architect: </h2></th>
                                <td><h6 class="d-inline-block">{{$project->architect}}</h6></td>
                              </tr>
                              <tr>
                                <th><h2 class="d-inline-block">Contractor: </h2></th>
                                <td><h6 class="d-inline-block">{{$project->contractor}}</h6></td>
                              </tr>
                          </table>
                          <hr>

                        <p>{{$project->description}}</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- Project Area End -->

   </div>
@endsection
