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
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Portfolio</span></p>
	            <h1 class="mb-5 bread">Portfolio</h1>
	          </div>
	        </div>
	      </div>
      </section>
      <!-- END slider -->


      <section class="ftco-section">
	    	<div class="container">
          <div class="row">
		    		<div class="col-md-4">
		    			<div class="row">
			    			<div class="col-md-12 heading-section ftco-animate mb-3">
		              <h2 class="mb-4">Portfolio</h2>
		              <p>Far far away, behind the word mountains, far from the countries Vokalia </p>
		            </div>
	            </div>
		    			<a href="portfolio.html" class="portfolio ftco-animate">
		    				<div class="d-flex icon justify-content-center align-items-center">
		    					<span class="ion-md-search"></span>
		    				</div>
		    				<div class="d-flex heading align-items-end">
		    					<h3>
		    						<span>Residence</span><br>
		    						Work 01
		    					</h3>
		    				</div>
		    				<img src={{asset("assets/AEE_Slider/images/image_3.jpg")}} class="img-fluid" alt="Colorlib Template">
		    			</a>
		    			<a href="portfolio.html" class="portfolio ftco-animate">
			    			<div class="d-flex icon justify-content-center align-items-center">
			    				<span class="ion-md-search"></span>
		    				</div>
		    				<div class="d-flex heading align-items-end">
		    					<h3>
		    						<span>Residence</span><br>
		    						Work 02
		    					</h3>
		    				</div>
		    				<img src={{asset("assets/AEE_Slider/images/image_2.jpg")}} class="img-fluid" alt="Colorlib Template">
		    			</a>
		    			<a href="portfolio.html" class="portfolio ftco-animate">
			    			<div class="d-flex icon justify-content-center align-items-center">
			    				<span class="ion-md-search"></span>
			    			</div>
			    			<div class="d-flex heading align-items-end">
		    					<h3>
		    						<span>Residence</span><br>
		    						Work 03
		    					</h3>
		    				</div>
		    				<img src={{asset("assets/AEE_Slider/images/image_9.jpg")}} class="img-fluid" alt="Colorlib Template">
		    			</a>
		    		</div>
		    		<div class="col-md-8">
		    			<a href="portfolio.html" class="portfolio ftco-animate">
			    			<div class="d-flex icon justify-content-center align-items-center">
			    					<span class="ion-md-search"></span>
			    			</div>
			    			<div class="d-flex heading align-items-end">
		    					<h3>
		    						<span>Residence</span><br>
		    						Work 04
		    					</h3>
		    				</div>
		    				<img src={{asset("assets/AEE_Slider/images/image_1.jpg")}} class="img-fluid" alt="Colorlib Template">
		    			</a>
		    			<div class="row">
		    				<div class="col-md-6">
		    					<a href="portfolio.html" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
				    					<span class="ion-md-search"></span>
				    				</div>
				    				<div class="d-flex heading align-items-end">
				    					<h3>
				    						<span>Residence</span><br>
				    						Work 05
				    					</h3>
				    				</div>
				    				<img src={{asset("assets/AEE_Slider/images/image_5.jpg")}} class="img-fluid" alt="Colorlib Template">
				    			</a>
		    				</div>
		    				<div class="col-md-6">
		    					<a href="portfolio.html" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
				    					<span class="ion-md-search"></span>
				    				</div>
				    				<div class="d-flex heading align-items-end">
				    					<h3>
				    						<span>Residence</span><br>
				    						Work 06
				    					</h3>
				    				</div>
				    				<img src={{asset("assets/AEE_Slider/images/image_6.jpg")}} class="img-fluid" alt="Colorlib Template">
				    			</a>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-md-8">
		    					<a href="portfolio.html" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
				    					<span class="ion-md-search"></span>
				    				</div>
				    				<div class="d-flex heading align-items-end">
				    					<h3>
				    						<span>Residence</span><br>
				    						Work 07
				    					</h3>
				    				</div>
				    				<img src={{asset("assets/AEE_Slider/images/image_7.jpg")}} class="img-fluid" alt="Colorlib Template">
				    			</a>
		    				</div>
		    				<div class="col-md-4">
		    					<a href="portfolio.html" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
			    						<span class="ion-md-search"></span>
			    				  </div>
			    				  <div class="d-flex heading align-items-end">
				    					<h3>
				    						<span>Residence</span><br>
				    						Work 08
				    					</h3>
				    				</div>
				    				<img src={{asset("assets/AEE_Slider/images/image_4.jpg")}} class="img-fluid" alt="Colorlib Template">
				    			</a>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="row mt-5">
	          <div class="col text-center">
	            <div class="block-27">
	              <ul>
	                <li><a href="#">&lt;</a></li>
	                <li class="active"><span>1</span></li>
	                <li><a href="#">2</a></li>
	                <li><a href="#">3</a></li>
	                <li><a href="#">4</a></li>
	                <li><a href="#">5</a></li>
	                <li><a href="#">&gt;</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	    	</div>
	    </section>

 @endsection
