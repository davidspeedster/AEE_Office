@extends('AEE_real.layouts.master-layouts')
@section('content')
   <div class="full-black-bg">
<!-- Project Area Start -->
  <section class="project-area  section-padding30">
    <div class="container">
       <div class="project-heading mb-35">
            <div class="row align-items-end">
                <br><br><br>
                <br><br><br>
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
                                            <img src={{asset('storage/'. $project->image)}} alt="project image">
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
                                        <img src={{asset('storage/'. $item['image'])}} alt="">
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

   </div>
@endsection
