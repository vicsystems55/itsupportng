@extends('layouts.base')

@section('content')

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/77.jpg); background-position: center center;">
        <div class="auto-container">
			<h2>Portfolio</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Portfolio</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Projects One -->
	<section class="projects-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<div class="sec-title_title">Work Index!</div>
						<h2 class="sec-title_heading">Few of Our Projects  <br> <span> </span></h2>
					</div>
					<div class="right-box">
						<div class="sec-title_text"></div>
					</div>
				</div>
			</div>
			<!-- MixitUp Galery -->
            <div class="mixitup-gallery">

                <!-- Filter -->
                <div class="projects-one_filters">
                	<ul class="filter-tabs">
                        <li class="active filter py-1" data-role="button" data-filter="all">ALL</li>
                        <li class="active filter py-1" data-role="button" data-filter=".allz">PROCUREMENT</li>

                        <li class="filter py-1" data-role="button" data-filter=".web">DESIGN & PLANNING</li>
                        <li class="filter py-1" data-role="button" data-filter=".cloud">DEPLOYMENT</li>
						<li class="filter py-1" data-role="button" data-filter=".design">MAINTENANCE</li>
						<li class="filter py-1" data-role="button" data-filter=".decommissioning">DECOMMISSIONING</li>
						<li class="filter py-1" data-role="button" data-filter=".outsourcing">HR OUTSOURCING
                        </li>



                    </ul>
                </div>

                <div class="filter-list row clearfix">




                    					<!-- Project One -->
					<div class="project_one mix all allz  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-111.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Telecommunications
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Towers
                                            Radios & Antennas  Computers & Accessories  IT Solutions
                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>


					<!-- Project One -->
					<div class="project_one mix all allz  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-222.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Power
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Hybrid & DG Power Systems  Rectifiers
                                            Batteries

                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>

                    <!-- Project One -->
					<div class="project_one mix all allz  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-333.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Maintenance
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Steel Component
                                            Oil & Gas Equipment  (Valves, Pumps
                                            etc)

                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>



                    <!-- web -->
					<div class="project_one mix all web  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-4444.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Telecommunications
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Network Design & Planning  Telecom Site Design

                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>


					<!-- Project One -->
					<div class="project_one mix all web  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-5555.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Power
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Power Audit & Estimation  Electrical Design & Drawing


                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>

                    <!-- Project One -->
					<div class="project_one mix all web  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-666.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Maintenance
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Mechanical &
                                            Electrical design  Road detailing & design  Building design


                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>


                     <!-- cloud -->
					<div class="project_one mix all cloud  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-777.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Telecommunications
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Site Build
                                            Site Acquisition (SAQ)  Site Upgrade
                                            Fibre Deployment  In Building Solution
                                            VAS (Value Added Service)
                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>


					<!-- Project One -->
					<div class="project_one mix all cloud  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-888.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Power
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Power Solutions Installation  Solar Street Light

                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>

                    <!-- Project One -->
					<div class="project_one mix all cloud  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-999.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Maintenance
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Telecom site build  Residential & Commercial
                                            building construction
                                            School & Hospital  construction
                                            Oil & Gas Infrastructure



                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>


                    <!-- design -->
					<div class="project_one mix all design  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-1010.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Telecommunications
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Active Managed Services  Passive Managed Services  Network Assurance  Network Drive Test &
                                            Optimization
                                            Fibre Maintenance

                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>


					<!-- Project One -->
					<div class="project_one mix all design  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-1111.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Power
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Power Equipment Managed
                                            Services (DG, Batteries,  rectifiers etc.)

                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>

                    <!-- Project One -->
					<div class="project_one mix all design  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-1212.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Maintenance
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Facility Management  Road Maintenance
                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>



                    <!-- decommissionning -->
					<div class="project_one mix all decommissioning  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-1313.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Telecommunications
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">MW (Microwave) & BTS (Base Transceiver Station)

                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>


					<!-- Project One -->
					<div class="project_one mix all decommissioning  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-111.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Power
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Power Solutions


                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>


                    <!-- outsourcing -->
					<div class="project_one mix all outsourcing  col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-1414.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Telecommunications
                                        </a></h5>
									{{-- <div class="project-one_designation">Telecommunications</div> --}}
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-tex h4 text-white">Manpower Supply  Training & Development  VISA & Permit Processing


                                            </div>

									</div>
								</div>

							</div>
						</div>
					</div>















				</div>

				<!-- Button Box -->
				{{-- <div class="projects-one_button-box text-center">
					<a class="btn-style-one theme-btn btn-item" href="#">
						<div class="btn-wrap">
							<span class="text-one">Load more</span>
							<span class="text-two">Load more</span>
						</div>
					</a>
				</div> --}}

			</div>
		</div>
	</section>
	<!-- End Projects One -->



@endsection
