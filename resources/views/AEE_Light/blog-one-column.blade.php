@extends('AEE_Light.layouts.master-layouts')
@section('content')
        <!-- Body main wrapper start -->
        <div class="wrapper">
            <!-- Start Bradcaump area -->
            <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(/assets/AEE_Light/images/bg/5.jpg) no-repeat scroll center center / cover ;">
                <div class="ht__bradcaump__wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="bradcaump__inner text-center">
                                    <h2 class="bradcaump-title">Blog</h2>
                                    <nav class="bradcaump-inner">
                                      <a class="breadcrumb-item" href="index.html">Home</a>
                                      <span class="brd-separetor">-</span>
                                      <span class="breadcrumb-item active">Blog</span>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->
            <!-- Start Blog Area -->
            <section class="htc__blog__area ptb--150 bg__white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                            <div class="htc__blog__wrap clearfix blog--one">
                                <!-- Start Single Blog -->
                                <div class="blog">
                                    <div class="blog__thumb">
                                        <a href="blog-details.html">
                                            <img src={{asset("/assets/AEE_Light/images/blog/big-images/1.jpg")}} alt="blog image">
                                        </a>
                                        <div class="blog__hover__info">
                                            <ul class="blog__meta">
                                                <li>By : <a href="#">Kalvin</a></li>
                                                <li>20 July</li>
                                                <li><a href="#">Comments 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog__details">
                                        <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, cotur adipiscing elit, sed do eiusmod trole that are bound to ensue trouble that are bound to ensue</a></h2>
                                        <div class="blog__btn">
                                            <a href="blog-details.html">READ MORE<i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
                                <!-- Start Single Blog -->
                                <div class="blog">
                                    <div class="blog__thumb blog__with__vedio">
                                        <a href="blog-details.html">
                                            <img src={{asset("/assets/AEE_Light/images/blog/big-images/2.jpg")}} alt="blog image">
                                        </a>
                                        <div class="blog__video">
                                            <div class="video__inner">
                                                <a class="video__trigger video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                                    <img src={{asset("/assets/AEE_Light/images/icons/play.png")}} alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog__hover__info">
                                            <ul class="blog__meta">
                                                <li>By : <a href="#">Kalvin</a></li>
                                                <li>20 July</li>
                                                <li><a href="#">Comments 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog__details">
                                        <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, cotur adipiscing elit, sed do eiusmod trole that are bound to ensue trouble that are bound to ensue</a></h2>
                                        <div class="blog__btn">
                                            <a href="blog-details.html">READ MORE<i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
                                <!-- Start Single Blog -->
                                <div class="blog">
                                    <div class="blog__thumb">
                                        <div class="blog__activation owl-carousel owl-theme">
                                            <a href="blog-details.html">
                                                <img src={{asset("/assets/AEE_Light/images/blog/big-images/3.jpg")}} alt="blog image">
                                            </a>
                                            <a href="blog-details.html">
                                                <img src={{asset("/assets/AEE_Light/images/blog/big-images/2.jpg")}} alt="blog image">
                                            </a>
                                            <a href="blog-details.html">
                                                <img src={{asset("/assets/AEE_Light/images/blog/big-images/1.jpg")}} alt="blog image">
                                            </a>
                                        </div>

                                        <div class="blog__hover__info">
                                            <ul class="blog__meta">
                                                <li>By : <a href="#">Kalvin</a></li>
                                                <li>20 July</li>
                                                <li><a href="#">Comments 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog__details">
                                        <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, cotur adipiscing elit, sed do eiusmod trole that are bound to ensue trouble that are bound to ensue</a></h2>
                                        <div class="blog__btn">
                                            <a href="blog-details.html">READ MORE<i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="htc__page__sidebar">
                                <!-- Start Single -->
                                <div class="htc__search__area bg__gray">
                                    <h2 class="sidebar__title">SEARCH</h2>
                                    <div class="pro__input__box">
                                        <input type="text" placeholder="Search here...">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <!-- End Single -->
                                <!-- Start Single -->
                                <div class="htc__category bg__gray sidebar__separator">
                                    <h2 class="sidebar__title">CATEGORIES</h2>
                                    <ul class="cat__list">
                                        <li><a href="#">RENOVATION</a></li>
                                        <li><a href="#">ARCHITECTURE</a></li>
                                        <li><a href="#">CONCRETE SUPPLY</a></li>
                                        <li><a href="#">LAMINATE FLOORING</a></li>
                                        <li><a href="#">CONSULTING</a></li>
                                        <li><a href="#">INTERIRO DESIGN</a></li>
                                        <li><a href="#">PROJECT PLANNING</a></li>
                                    </ul>
                                </div>
                                <!-- End Single -->
                                <!-- Start Single -->
                                <div class="htc__broc bg__gray sidebar__separator">
                                    <h2 class="sidebar__title">OUR BROCHURE</h2>
                                    <ul class="brocure__list">
                                        <li><a href="#"><i class="fa fa-file-pdf-o"></i>DOWNLOAD PDF BROCHURE</a></li>
                                        <li><a href="#"><i class="fa fa-wordpress"></i>DOWNLOAD DOC BROCHURE</a></li>
                                    </ul>
                                </div>
                                <!-- End Single -->
                                <!-- Start Single -->
                                <div class="htc__recent__post bg__gray sidebar__separator">
                                    <h2 class="sidebar__title">RECENT POST</h2>
                                    <div class="recent__post__wrap">
                                        <div class="htc__single__post">
                                            <div class="post__thumb">
                                                <a href="blog-details.html"><img src={{asset("/assets/AEE_Light/images/blog/sm-img-2/1.jpg")}} alt="recent post img"></a>
                                            </div>
                                            <div class="post__details">
                                                <h4><a href="blog-details.html">On the other handeou indiion we produce</a></h4>
                                                <div class="post__meta">
                                                    <span>By Kalvin</span>
                                                    <span>20 July</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="htc__single__post">
                                            <div class="post__thumb">
                                                <a href="blog-details.html"><img src={{asset("/assets/AEE_Light/images/blog/sm-img-2/2.jpg")}} alt="recent post img"></a>
                                            </div>
                                            <div class="post__details">
                                                <h4><a href="blog-details.html">On the other handeou indiion we produce</a></h4>
                                                <div class="post__meta">
                                                    <span>By Kalvin</span>
                                                    <span>20 July</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="htc__single__post">
                                            <div class="post__thumb">
                                                <a href="blog-details.html"><img src={{asset("/assets/AEE_Light/images/blog/sm-img-2/3.jpg")}} alt="recent post img"></a>
                                            </div>
                                            <div class="post__details">
                                                <h4><a href="blog-details.html">On the other handeou indiion we produce</a></h4>
                                                <div class="post__meta">
                                                    <span>By Kalvin</span>
                                                    <span>20 July</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single -->
                                <!-- Start Single -->
                                <div class="htc__build__dream bg--1 sidebar__separator">
                                    <div class="build__dream__inner">
                                        <h2>WE BUILD DREEMS</h2>
                                        <div class="build__btn">
                                            <a class="htc__btn" href="contact.html">CONTACT US</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single -->
                                <div class="htc__tag bg__gray sidebar__separator">
                                    <h2 class="sidebar__title">TAGS</h2>
                                    <ul class="tag__list">
                                        <li><a href="#">Construction</a></li>
                                        <li><a href="#">Painting</a></li>
                                        <li><a href="#">Concrete</a></li>
                                        <li><a href="#">Renovation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Blog Area -->

@endsection
