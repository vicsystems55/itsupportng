@extends('layouts.base')
@section('content')

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/7.jpg)">
        <div class="auto-container">
			<h2>Service Detail</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Service Detail</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

				<!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">
						<!-- Sidebar Widget -->
						<div class="sidebar-widget category-widget">
							<ul class="cat-list">
								<li class="active"><a href="#">UI/UX & Web Design</a></li>
								<li><a href="#">Cloud Services</a></li>
								<li><a href="#">Software Development</a></li>
								<li><a href="#">Social Media Marketing</a></li>
								<li><a href="#">Delivery Services</a></li>
							</ul>
						</div>

						<!-- Contact Widget -->
						<div class="sidebar-widget contact-widget">
							<div class="widget-content" style="background-image:url(images/background/8.jpg)">
								<div class="title">Contact us now</div>
								<div class="help">If need help!</div>
								<a class="phone" href="tel:+557-3452-234">557-3452-234</a>
								<div class="form">or go to contact form:</div>
								<div class="button-box text-center">
									<a href="#">Let’s start now <span class="fa-solid fa-link fa-fw"></span></a>
								</div>
							</div>
						</div>

					</aside>
				</div>

				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
					<div class="service-detail">
						<div class="inner-box">
							<div class="image">
								<img src="images/resource/service-10.jpg" alt="" />
							</div>
							<h3>UI/UX & Web Design</h3>
							<p>With over a decade of experience, we’ve established ourselves as one of the pioneering agencies in the region. Our small, flexible, agile and design-led structures and processes allow us to be highly responsive and innovative. We’re made of passionate leaders, strategists, managers, developers, animators and designers who work together under one umbrella. We are a digitally-led, full-service creative agency. We combine strategy, marketing, design.</p>
							<div class="row clearfix">

								<!-- Feature Two -->
								<div class="feature-two col-lg-6 col-md-6 col-sm-12">
									<div class="feature-two_inner">
										<div class="feature-two_content">
											<span class="feature-two_icon"><img src="images/icons/feature-6.png" alt="" /></span>
											<h5 class="feature-two_heading">Why <span>It soft?</span></h5>
											<div class="feature-two_text">We're making room for self care today with plan.</div>
										</div>
									</div>
								</div>

								<!-- Feature Two -->
								<div class="feature-two col-lg-6 col-md-6 col-sm-12">
									<div class="feature-two_inner">
										<div class="feature-two_content">
											<span class="feature-two_icon"><img src="images/icons/feature-7.png" alt="" /></span>
											<h5 class="feature-two_heading">Unlimited support</h5>
											<div class="feature-two_text">New range coming in on a weekly basis veg section.</div>
										</div>
									</div>
								</div>

							</div>

							<div class="row clearfix">
								<!-- Column -->
								<div class="column col-lg-6 col-md-6 col-sm-12">
									<div class="image">
										<img src="images/resource/service-11.jpg" alt="" />
									</div>
								</div>
								<!-- Column -->
								<div class="column col-lg-6 col-md-6 col-sm-12">
									<h4>We serve the best work</h4>
									<p>By initiating your project with Fingent, you get a dedicated and skilled team backing you up round-the-clock. All our processes are  the customer oriented, designed to reduce the cost of business operations.</p>
								</div>
							</div>

							<div class="feature-lower_box">
								<div class="row clearfix">

									<!-- Feature Three -->
									<div class="feature-three col-lg-4 col-md-4 col-sm-6">
										<div class="feature-three_inner">
											<span class="feature-three_icon"><img src="images/icons/service-35.png" alt="" /></span>
											Best quality <br> support
										</div>
									</div>

									<!-- Feature Three -->
									<div class="feature-three col-lg-4 col-md-4 col-sm-6">
										<div class="feature-three_inner">
											<span class="feature-three_icon"><img src="images/icons/service-36.png" alt="" /></span>
											Best quality <br> support
										</div>
									</div>

									<!-- Feature Three -->
									<div class="feature-three col-lg-4 col-md-4 col-sm-6">
										<div class="feature-three_inner">
											<span class="feature-three_icon"><img src="images/icons/service-37.png" alt="" /></span>
											Best quality <br> support
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->

	<!-- CTA One -->
	<section class="cta-one">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<h3 class="cta-one_heading">Looking for the Best IT Business Solutions?</h3>
					<div class="cta-one_text">As a app web crawler expert, We will help to organize.</div>
				</div>
				<div class="right-box">
					<a class="cta-one_btn theme-btn" href="contact.html">get a quote</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->

@endsection
