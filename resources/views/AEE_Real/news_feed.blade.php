@extends('AEE_Real.layouts.master-layouts')
   @section('content')
        <!-- slider Area Start-->
    <div class="slider-area ">
        <br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>News Feed</h2>
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
                        @foreach ($newsFeeds as $newsFeed)
                        <article class="blog_item">
                            <div class="blog_item_img">
                               <img class="img-fluid " src="{{asset('storage/'.$newsFeed->project->image)}}"  alt="Card image cap">
                                <a href="#" class="blog_item_date">
                                    <h3>{{ date('j', strtotime($newsFeed->created_at))}}</h3>
                                    <p>{{ date('F', strtotime($newsFeed->created_at))}}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <h2 class="d-inline-block">{{$newsFeed->newsHeader}}</h2>
                                <p>{{$newsFeed->description}}</p>
                                <ul class="blog-info-link">
                                    <li><a href="https://twitter.com/share"><i class="fab fa-twitter"></i> Tweet</a></li>
                                <li><a href="/single_feed_view/{{$newsFeed->id}}"><i class="fa fa-book-reader"></i> Read More</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
   @endsection
