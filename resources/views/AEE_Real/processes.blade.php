@extends('AEE_Real.layouts.master-layouts')
@section('content')
<div class="full-black-bg">
    <div class="page">
        <div class="testimonial-area t-bg testimonial-padding">
            <section class="about-area section-padding2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle section-tittle5 mb-50">
                                    <div class="front-text">
                                        <h4>Processes</h4>
                                    </div>
                                </div>

                                <p>The processes of our quality system are clearly mapped and pertinent key performance indicators assigned according to ISO 9001:2015.

                                    Furthermore, AEE has adapted and is working with the 4 Disciplines of Execution as well as Six Sigma to ensure maximized value to our clients while ensuring job satisfaction for the team.
                                    </p>
                                    <a href="{{$riskPolicy != null ? asset($riskPolicy->name): '#'}}" class="btn btn-primary px-4 py-3"> View our Risk Policy here.</a>
                                    <br><br>
                                    <a href="{{$qualityPolicy != null ? asset($qualityPolicy->name): '#'}}" class="btn btn-primary px-4 py-3"> View our Quality Policy here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
