@extends('AEE_Real.layouts.master-layouts')
   @section('content')
        <!-- slider Area Start-->
    <div class="slider-area ">
        <br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>{{$newsFeed->newsHeader}}</h2>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<!-- slider Area End-->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            {!!$newsFeed->videoLink!!}
                            <div class="blog_details">
                                <ul>
                                <li><h2 class="d-inline-block">Project: {{$newsFeed->project->projectName}}</h2></li>
                                <li><h2 class="d-inline-block">Client: {{$newsFeed->project->client}}</h2></li>
                                <li><h2 class="d-inline-block">Location: {{$newsFeed->project->location}}</h2></li>
                                <li><h2 class="d-inline-block">Source: {{$newsFeed->source}}</h2></li>
                                <li><p class="d-inline-block">Description: {{$newsFeed->description}}</p></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
   @endsection
