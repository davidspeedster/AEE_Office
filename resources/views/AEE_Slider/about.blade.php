@extends('AEE_Slider.layouts.master-layouts')
@section('content')
<div class="page">
    <div id="colorlib-page">
      <header>
        <div class="colorlib-navbar-brand text-center">
          <a class="colorlib-logo" href="index.html">Tough</a>
        </div>
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
      </header>

      <section class="hero-wrap" style="background-image: url(/assets/AEE_Slider/images/bg_2.jpg);">
      	<div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 ftco-animate text-center">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Abot</span></p>
	            <h1 class="mb-5 bread">About Us</h1>
	          </div>
	        </div>
	      </div>
      </section>
      <!-- END slider -->

      <section class="testimony-section">
	      <div class="container">
	        <div class="row d-md-flex">
	        	<div class="col-md-4 last-order d-md-flex align-items-start heading-section aside-stretch ftco-animate">
	      			<div>
		            <h2 class="mb-4">Clients Says</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia </p>
		          </div>
	          </div>
	        	<div class="col-md-8 first-order ftco-animate">
	            <div class="carousel-testimony owl-carousel">
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url(/assets/AEE_Slider/images/person_1.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	                    <p class="name">Dennis Green</p>
	                    <span class="position">Architect</span>
	                  </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url(/assets/AEE_Slider/images/person_2.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	                    <p class="name">Dennis Green</p>
	                    <span class="position">Architect</span>
	                  </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url(/assets/AEE_Slider/images/person_3.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	                    <p class="name">Dennis Green</p>
	                    <span class="position">Architect</span>
	                  </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url(/assets/AEE_Slider/images/person_3.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	                    <p class="name">Dennis Green</p>
	                    <span class="position">Customer</span>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>

	    <section class="ftco-quote ftco-animate">
	    	<div class="container">
	    		<div class="row d-flex justify-content-end">
	    			<div class="col-md-7 req-quote d-md-flex py-5 align-items-center img" style="background-image: url(/assets/AEE_Slider/images/bg_1.jpg);">
		    			<h3 class=" ml-md-3">Get started</h3>
		    			<p><a href="#" class="btn btn-white py-4 px-4" data-toggle="modal" data-target="#modalRequest">Request a quote</a></p>
	    			</div>
	    		</div>
	    	</div>
	    </section>

	    <section class="ftco-section">
	      <div class="container">
	        <div class="row justify-content-center mb-5 pb-5">
	          <div class="col-md-7 text-center heading-section ftco-animate">
	            <h2 class="mb-4">Our Team</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-4 mb-5 ftco-animate">
	            <div class="block-10">
	              <div class="person-info mb-2">
	                <span class="name">Jacob Smith</span>
	                <span class="position">Architect</span>
	              </div>
	              <img src={{asset("assets/AEE_Slider/images/person_1.jpg")}} alt="" class="img-fluid mb-3">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>
	          </div>
	          <div class="col-md-4 mb-5 ftco-animate">
	            <div class="block-10">
	              <div class="person-info mb-2">
	                <span class="name">Aldin Henderson</span>
	                <span class="position">Ass. Architect</span>
	              </div>
	              <img src={{asset("assets/AEE_Slider/images/person_3.jpg")}} alt="" class="img-fluid mb-3">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>
	          </div>
	          <div class="col-md-4 mb-5 ftco-animate">
	            <div class="block-10">
	              <div class="person-info mb-2">
	                <span class="name">Mark Willis</span>
	                <span class="position">Ass. Architect</span>
	              </div>
	              <img src={{asset("assets/AEE_Slider/images/person_2.jpg")}} alt="" class="img-fluid mb-3">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>
@endsection
