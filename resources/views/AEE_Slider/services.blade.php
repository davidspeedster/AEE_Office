@extends('AEE_Slider.layouts.master-layouts')
@section('content')
<div class="page">
    <nav id="colorlib-main-nav" class="border" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url(/assets/AEE_Slider/images/bg_2.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.html" class="logo">Tough</a></h1>
              <ul>
                <li><a href="index.html"><span><small>01</small>Home</span></a></li>
                <li><a href="about.html"><span><small>02</small>About</span></a></li>
                <li class="active"><a href="services.html"><span><small>03</small>Services</span></a></li>
                <li><a href="pricing.html"><span><small>04</small>Pricing</span></a></li>
                <li><a href="portfolio.html"><span><small>05</small>Portfolio</span></a></li>
                <li><a href="blog.html"><span><small>06</small>Blog</span></a></li>
                <li><a href="contact.html"><span><small>07</small>Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

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
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
	            <h1 class="mb-5 bread">Services</h1>
	          </div>
	        </div>
	      </div>
      </section>
      <!-- END slider -->


      <section class="ftco-services">
	      <div class="container">
	        <div class="row no-gutters">
	          <div class="col-md-5 ftco-animate py-5 nav-link-wrap aside-stretch">
	            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	            	<h3 class="ml-3">Services</h3>
	              <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-house-plans"></span> Interior</a>

	              <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3 flaticon-ideas"></span> Concept</a>

	              <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness" role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span class="mr-3 flaticon-modern-house"></span> Residential</a>

	              <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3 flaticon-skyline"></span> Hospitality</a>
	            </div>
	          </div>
	          <div class="col-md-7 ftco-animate p-4 p-md-5 d-flex align-items-center">

	            <div class="tab-content pl-md-5" id="v-pills-tabContent">

	              <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
	                <span class="icon mb-3 d-block flaticon-house-plans"></span>
	                <h2 class="mb-4">Interior Design</h2>
	                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
	                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	              </div>

	              <div class="tab-pane fade py-5" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
	                <span class="icon mb-3 d-block flaticon-ideas"></span>
	                <h2 class="mb-4">Concept Design</h2>
	                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
	                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	              </div>

	              <div class="tab-pane fade py-5" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">
	                <span class="icon mb-3 d-block flaticon-modern-house"></span>
	                <h2 class="mb-4">Residential Design</h2>
	                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
	                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	              </div>

	              <div class="tab-pane fade py-5" id="v-pills-reception" role="tabpanel" aria-labelledby="v-pills-reception-tab">
	                <span class="icon mb-3 d-block flaticon-skyline"></span>
	                <h2 class="mb-4">Hospitality Design</h2>
	                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
	                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
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
	            <h2 class="mb-4">How it works</h2>
	          </div>
	        </div>
	    		<div class="row">
	    			<div class="col-md-4 ftco-animate">
	    				<div class="services">
	    					<h3><span>01.</span> Analyzing</h3>
	    					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
	    				</div>
	    			</div>
	    			<div class="col-md-4 ftco-animate">
	    				<div class="services">
	    					<h3><span>02.</span> Planning</h3>
	    					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
	    				</div>
	    			</div>
	    			<div class="col-md-4 ftco-animate">
	    				<div class="services">
	    					<h3><span>03.</span> Developing</h3>
	    					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>
@endsection
