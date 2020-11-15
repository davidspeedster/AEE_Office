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
                                    <h2 class="bradcaump-title">Login & Register</h2>
                                    <nav class="bradcaump-inner">
                                      <a class="breadcrumb-item" href="index.html">Home</a>
                                      <span class="brd-separetor">-</span>
                                      <span class="breadcrumb-item active">Login & Register</span>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->
            <!-- Start Login Register Area -->
            <div class="htc__login__register bg__white ptb--150">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul class="login__register__menu" role="tablist">
                                <li role="presentation" class="login active"><a href="#login" role="tab" data-toggle="tab">Login</a></li>
                                <li role="presentation" class="register"><a href="#register" role="tab" data-toggle="tab">Register</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Start Login Register Content -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="htc__login__register__wrap">
                                <!-- Start Single Content -->
                                <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                                    <form class="login" method="post">
                                        <input type="text" placeholder="User Name*">
                                        <input type="password" placeholder="Password*">
                                    </form>
                                    <div class="tabs__checkbox">
                                        <input type="checkbox">
                                        <span> Remember me</span>
                                        <span class="forget"><a href="#">Forget Pasword?</a></span>
                                    </div>
                                    <div class="htc__login__btn mt--30">
                                        <a href="#">Login</a>
                                    </div>
                                    <div class="htc__social__connect">
                                        <h2>Or Login With</h2>
                                        <ul class="htc__soaial__list">
                                            <li><a class="bg--twitter" href="#" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>

                                            <li><a class="bg--instagram" href="#" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>

                                            <li><a class="bg--facebook" href="#" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>

                                            <li><a class="bg--googleplus" href="#" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Content -->
                                <!-- Start Single Content -->
                                <div id="register" role="tabpanel" class="single__tabs__panel tab-pane fade">
                                    <form class="login" method="post">
                                        <input type="text" placeholder="Name*">
                                        <input type="email" placeholder="Email*">
                                        <input type="password" placeholder="Password*">
                                    </form>
                                    <div class="tabs__checkbox">
                                        <input type="checkbox">
                                        <span> Remember me</span>
                                    </div>
                                    <div class="htc__login__btn">
                                        <a href="#">register</a>
                                    </div>
                                    <div class="htc__social__connect">
                                        <h2>Or Login With</h2>
                                        <ul class="htc__soaial__list">
                                            <li><a class="bg--twitter" href="#" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a class="bg--instagram" href="#" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a class="bg--facebook" href="#" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a class="bg--googleplus" href="#" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Content -->
                            </div>
                        </div>
                    </div>
                    <!-- End Login Register Content -->
                </div>
            </div>
            <!-- End Login Register Area -->
@endsection
