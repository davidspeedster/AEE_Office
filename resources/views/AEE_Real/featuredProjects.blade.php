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
                            <h2 class="front-text">Featured Projects</h2>
                        </div>
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
                                @foreach ($featuredProjects as $project)
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="{{asset('storage/'. $project->image)}}" alt="project Image" width="300"  class="card-img-top img-fluid" />
                                        <div class="card-body">
                                            <div class="project-cap">
                                                <h6>{{$project->projectName}}</h6>
                                                <hr>
                                                <h6>Client: {{$project->client}}</h6>
                                                <a href="/single_project_view/{{$project->id}}" class="btn btn-info float-right">Details</a></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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

   </div>
@endsection
