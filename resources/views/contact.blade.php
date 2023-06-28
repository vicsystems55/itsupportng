@extends('layouts.base')

@section('content')
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/77.jpg); background-position: center center;">
        <div class="auto-container">
			<h2>Contact Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact One -->
	<section class="contact-one" style="background-image:url(images/background/map-1.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<div class="sec-title_title">Contact us</div>
						<h2 class="sec-title_heading">Get in touch with <br> <span>Us</span></h2>
					</div>
					<div class="right-box">
						{{-- <div class="sec-title_text">The perfect blend of mature processes, flexible delivery <br> models, effective project management.</div> --}}
					</div>
				</div>
			</div>
			<div class="row clearfix">

				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="images/icons/contact-1.png" alt="" /></span>
								<strong>Office address</strong>
								Block 1B, Setraco Quarters, Federal
Housing Authority ,  4th Avenue,  Gwarinpa,  Abuja
FCT.

							</div>
						</div>

						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="images/icons/contact-2.png" alt="" /></span>
								<strong>Telephone number</strong>
								09025553091 <br> 08033114571
							</div>
						</div>

						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="images/icons/contact-3.png" alt="" /></span>
								<strong>Mail address</strong>
								info@itsupportng. com <br>
ekejiuba 57 @ yahoo. com

							</div>
						</div>

					</div>
				</div>

				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Contact Form -->
						<div class="contact-form">
							<form method="post" action="https://html.themexriver.com/it-firm/sendemail.php" id="contact-form">
								<div class="row clearfix">

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<label>Name (required)</label>
										<input type="text" name="username" placeholder="Your name*" required="">
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<label>Email adress (required)</label>
										<input type="text" name="email" placeholder="Email" required="">
									</div>

									<div class="col-lg-6 col-md-12 col-sm-12 form-group">
										<label>Phone (optional)</label>
										<input type="text" name="phone" placeholder="Phone" required="">
									</div>

									<div class="col-lg-6 col-md-12 col-sm-12 form-group">
										<label>Subject (required)</label>
										<input type="text" name="subject" placeholder="Subject" required="">
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<label>Your message</label>
										<textarea class="" name="message" placeholder="Your text here..."></textarea>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<button class="btn-style-seven theme-btn">
											<span class="btn-wrap">
												<span class="text-one">Send message</span>
												<span class="text-two">Send message</span>
											</span>
										</button>
									</div>

								</div>
							</form>
						</div>
						<!-- End Comment Form -->

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Contact One -->
	<!-- Map One -->
	<section class="map-one">
		<div class="map-outer">
			<iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Block%201B,%20Setraco%20Quarters,%20Federal%20Housing%20Authority%20,%20%204th%20Avenue,%20%20Gwarinpa,%20%20Abuja%20FCT.+(Itsupport%20Nigeria%20Limited)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" allowfullscreen=""></iframe>
		</div>
	</section>
	<!-- End Map One -->

	<!-- CTA One -->
	<section class="cta-one">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<h3 class="cta-one_heading">Looking for the Best IT Business Solutions?</h3>
					<div class="cta-one_text"></div>
				</div>
				<div class="right-box">
					<a class="cta-one_btn theme-btn" href="/about-us">get a quote</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->


@endsection
