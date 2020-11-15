@extends('AEE_Clear.layouts.master-layouts')
   @section('content')
        <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>project details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- project_details start-->
    <section class="project_details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project_details_img">
                        <img src={{asset("assets/AEE_Clear/img/project_details.png")}} alt="#">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project_details_text">
                        <h2>Project Description</h2>
                        <p>Morning stars his air won't brought be lesser. That he and him given saying
                            gathering morning firmament great can't so, also creeping seas you'll so from
                            he two man god tree years Midst called fowl midst air whose female. Morning
                            stars his air won't brought be lesser. That he and him given saying gather
                            mornin firmament great can't so, also creeping seas you so from he </p>
                        <p>Morning stars his air won't brought be lesser. That he and him given saying
                            gathering morning firmament great can't so, also creeping seas you'll so from
                            he two man god tree years Midst called fowl midst air whose female. Morning
                            stars his air won't brought be lesser. That he and him given saying gather
                            mornin firmament great can't so, also creeping seas you so from he morning
                            stars his air won't brought be lesser. That he and him given saying gathering
                            morning firmament great can't so, also creeping seas you'll so from he two man
                            god tree years Midst called fowl midst air day whose female. </p>
                        <p>Morning stars his air won't brought be lesser. That he and him given saying
                            gathering morning firmament great can't so, also creeping seas you'll so
                            from he two man god tree years Midst called fowl midst air whose female.
                            Morning stars his air won't brought be lesser. That he and </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project_details_sidebar">
                        <h4>Client details</h4>
                        <p><i class="ti-user"></i>Client: <span>Adam Ghilcrist</span> </p>
                        <p><i class="ti-user"></i>Category: <span>Interior Design</span> </p>
                        <p><i class="ti-user"></i>Starts on:: <span>20 May 2018</span> </p>
                        <p><i class="ti-user"></i>Ends on: <span>30 May 2019</span> </p>
                        <p><i class="ti-user"></i>Location: <span>New York</span> </p>
                        <p><i class="ti-user"></i>Architect: <span>Jhon Piter</span> </p>
                        <p><i class="ti-user"></i>View project: <span>www.colorlib.com</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project_details end-->

    <!-- project details gallery start-->
    <section class="project_gallery padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>gallery</h2>
                    <div class="grid gallery">
                        <div class="grid-sizer"></div>
                        <div class="grid-item big_weight">
                            <a href={{asset("assets/AEE_Clear/img/gallery/gallery_1.png")}} class="">
                                <div class="project_img">
                                    <img src={{asset("assets/AEE_Clear/img/gallery/gallery_1.png")}} alt="">
                                </div>
                            </a>
                        </div>
                        <div class="grid-item">
                            <a href={{asset("assets/AEE_Clear/img/gallery/gallery_2.png")}} class="">
                                <div class="project_img">
                                    <img src={{asset("assets/AEE_Clear/img/gallery/gallery_2.png")}} alt="">
                                </div>
                            </a>
                        </div>
                        <div class="grid-item">
                            <a href={{asset("assets/AEE_Clear/img/gallery/gallery_3.png")}} class="">
                                <div class="project_img">
                                    <img src={{asset("assets/AEE_Clear/img/gallery/gallery_3.png")}} alt="">
                                </div>
                            </a>
                        </div>
                        <div class="grid-item">
                            <a href={{asset("assets/AEE_Clear/img/gallery/gallery_4.png")}} class="">
                                <div class="project_img">
                                    <img src={{asset("assets/AEE_Clear/img/gallery/gallery_4.png")}} alt="">
                                </div>
                            </a>
                        </div>
                        <div class="grid-item">
                            <a href={{asset("assets/AEE_Clear/img/gallery/gallery_5.png")}} class="">
                                <div class="project_img">
                                    <img src={{asset("assets/AEE_Clear/img/gallery/gallery_5.png")}} alt="">
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- project details gallery start-->
   @endsection
