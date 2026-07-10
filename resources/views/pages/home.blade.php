@extends('layouts.app')

@section('content')

    <style>
        .gallery-stat {
            padding: 20px;
            margin-bottom: 20px;
        }

        .gallery-stat h3 {
            font-size: 36px;
            font-weight: 700;
            color: #1c1c1c;
            margin-bottom: 5px;
        }

        .gallery-stat span {
            color: #666;
            font-size: 14px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            height: 280px;
        }

        .gallery-large {
            height: 580px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .5s;
        }

        .gallery-item:hover img {
            transform: scale(1.08);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 25px;
            background: linear-gradient(
                to top,
                rgba(0,0,0,0.85),
                rgba(0,0,0,0.15)
            );
            color: #fff;
        }

        .gallery-overlay h4,
        .gallery-overlay h5 {
            color: #fff;
            margin-bottom: 5px;
        }

        .gallery-overlay p {
            margin: 0;
            color: rgba(255,255,255,.85);
            font-size: 14px;
        }

        @media (max-width: 991px) {
            .gallery-large {
                height: 350px;
            }
        }
    </style>

    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider">
			<div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
				<div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
					<ul>	<!-- SLIDE  -->
						@foreach ($sliders as $slide)
						<li data-index="rs-{{ $slide->id }}"
						data-transition="parallaxvertical"
						data-slotamount="default"
						data-hideafterloop="0"
						data-hideslideonmobile="off"
						data-easein="default"
						data-easeout="default"
						data-masterspeed="default"
						data-thumb="{{ $slide->image_url }}"
						data-rotate="0"
						data-fstransition="fade"
						data-fsmasterspeed="1500"
						data-fsslotamount="7"
						data-saveperformance="off"
						data-title="{{ $slide->title }}"
						data-param1="" data-param2=""
						data-param3="" data-param4=""
						data-param5="" data-param6=""
						data-param7="" data-param8=""
						data-param9="" data-param10=""
						data-description="LMLG">
							<!-- MAIN IMAGE -->
							<img src="{{ $slide->image_url }}" alt="{{ $slide->title }}"
								data-bgposition="center center"
								data-bgfit="cover"
								data-bgrepeat="no-repeat"
								data-bgparallax="10"
								class="rev-slidebg"
								data-no-retina />

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper "
								id="slide-{{ $slide->id }}-layer-1"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
								data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-type="shape"
								data-basealign="slide"
								data-responsive_offset="off"
								data-responsive="off"
								data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme"
								id="slide-{{ $slide->id }}-layer-2"
								data-x="['center','center','center','center']"
								data-hoffset="['0','0','0','0']"
								data-y="['top','top','top','top']"
								data-voffset="['250','250','250','240']"
								data-fontsize="['50','50','50','30']"
								data-lineheight="['55','55','55','35']"
								data-width="full"
								data-height="none"
								data-whitespace="normal"
								data-type="text"
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
									{{ $slide->title }}
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption Newspaper-Subtitle   tp-resizeme"
								id="slide-{{ $slide->id }}-layer-3"
								data-x="['center','center','center','center']"
								data-hoffset="['0','0','0','0']"
								data-y="['top','top','top','top']"
								data-voffset="['210','210','210','210']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="text"
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
									{{ $slide->subtitle }}
							</div>

							<!-- LAYER NR. 4 -->
							@if ($slide->button1_label)
							<div class="tp-caption Newspaper-Button rev-btn "
								id="slide-{{ $slide->id }}-layer-5"
								data-x="['center','center','center','center']"
								data-hoffset="['90','80','75','90']"
								data-y="['top','top','top','top']"
								data-voffset="['400','400','400','420']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button"
								data-responsive_offset="on"
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[12,12,12,12]"
								data-paddingright="[30,35,35,15]"
								data-paddingbottom="[12,12,12,12]"
								data-paddingleft="[30,35,35,15]"
								style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;"><a href="{{ $slide->button1_link ?: '#' }}" style="color:inherit;text-decoration:none;display:block;">{{ $slide->button1_label }}</a></div>
							@endif
							@if ($slide->button2_label)
							<div class="tp-caption Newspaper-Button rev-btn"
								id="slide-{{ $slide->id }}-layer-6"
								data-x="['center','center','center','center']"
								data-hoffset="['-90','-80','-75','-90']"
								data-y="['top','top','top','top']"
								data-voffset="['400','400','400','420']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button"
								data-responsive_offset="on"
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[12,12,12,12]"
								data-paddingright="[30,35,35,15]"
								data-paddingbottom="[12,12,12,12]"
								data-paddingleft="[30,35,35,15]"
								style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;"><a href="{{ $slide->button2_link ?: '#' }}" style="color:inherit;text-decoration:none;display:block;">{{ $slide->button2_label }}</a></div>
							@endif
						</li>
						@endforeach
						<!-- SLIDE  -->
					</ul>
				</div><!-- END REVOLUTION SLIDER -->
			</div>
		</div>
        <!-- Main Slider -->
		<div class="content-block">
            
			<!-- Our Services -->
			<div class="section-area content-inner service-info-bx">
                <div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx">
								<div class="action-box">
									<img src="/assets/images/our-services/pic1.jpg" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-child text-primary"></i>
									</div>
									<h5><a href="#">Safe & Inspiring Environment</a></h5>
                                    <small class="d-block">A secure and supportive environment where children learn, play, and thrive.</small>
									<a href="#" class="btn radius-xl">Explore Campus</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx">
								<div class="action-box">
									<img src="/assets/images/our-services/pic2.jpg" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-users text-primary"></i>
									</div>
									<h5><a href="#">Meet Our Teachers</a></h5>
                                    <small class="d-block">Dedicated educators committed to nurturing every child's academic and personal growth.</small>
									<a href="#" class="btn radius-xl">Meet Our Teachers</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="service-bx m-b0">
								<div class="action-box">
									<img src="/assets/images/our-services/pic3.jpg" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-graduation-cap text-primary"></i>
									</div>
									<h5><a href="#">Academic Excellence</a></h5>
                                    <small class="d-block">A well-rounded curriculum designed to build strong foundations for lifelong learning.</small>
									<a href="#" class="btn radius-xl">Our Academics</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Our Services END -->
			
			<!-- Popular Courses -->
			<div class="section-area section-sp2 popular-courses-bx">
                <div class="container">
					<div class="row">
						
                        <div class="col-md-6 heading-bx left">
							<h2 class="title-head">About <span> Our School</span></h2>
                            <h5>Welcome to LMLG Primary School One, Fadeyi- Yaba, Lagos. </h5>
							<p>
                                Lagos Mainland Local Government Primary School One, Fadeyi-Yaba, Lagos (formerly Lagos City Council Primary School (LCC),  stands as a proud symbol of academic foundation, discipline, and community heritage. For decades, our school has nurtured young minds, built character, and produced outstanding individuals contributing positively to society across the world.
							</p>
							<p>
								Today, we celebrate our past, strengthen our present, and build a sustainable future through innovation, alumni collaboration, and educational development.
                            </p>
                            
                            <a href="{{ route('about') }}" class="btn radius-xl">
                                Read More
                            </a>
						</div>
                        <div class="col-md-6 pt-3">
							<img src="/assets/images/our-services/pics4.jpg" alt="">
						</div>

					</div>
					
				</div>
			</div>
			<!-- Popular Courses END -->
			{{--
            <div class="section-area ">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 heading-bx left">
                            <h2 class="title-head">Academic <span> Excellence</span></h2>
                            <h5>Strengthening Foundations for Sustainable Educational Development</h5>

                            <p>
                                Our academic framework is structured to promote intellectual development,
                                critical inquiry, and lifelong learning. Through well-structured classroom
                                delivery, contemporary approaches, and targeted learner support,
                                we ensure that every pupil is equipped with the knowledge, discipline,
                                and competencies required to achieve academic success and contribute meaningfully to society.
                            </p>

                            <ul class="list-check">
                                <li>Learner-Centred and Competency-Based Instructional Approach</li>
                                <li>Highly Qualified and Professionally Certified Teaching Personnel</li>
                                <li>Well-Equipped Learning Facilities and Modern Educational Resources</li>
                                <li>Emphasis on Critical Thinking, Innovation, and Problem-Solving Skills</li>
                            </ul>

                            <a href="#" class="btn radius-xl">
                                Explore Academic Programmes
                            </a>
                        </div>

                        <div class="col-md-6 heading-bx left">
                            <h2 class="title-head">Why Parents <span> Choose Us</span></h2>
                            <h5>Providing a Secure, Enabling, and Conducive Learning Environment</h5>

                            <p>
                                We recognize education as a shared responsibility between the institution and parents,
                                and we remain committed to delivering a system that upholds excellence, discipline,
                                and holistic child development. Our institution has continued to earn the confidence
                                of families through consistent academic performance, strong value systems, and a
                                structured approach to character formation.
                            </p>

                            <ul class="list-check">
                                <li>Safe, Secure, and Conducive Learning Environment</li>
                                <li>Structured Character Development and Leadership Training</li>
                                <li>Dedicated and Professionally Committed Educators</li>
                                <li>Strong School–Parent Partnership for Learner Success</li>
                            </ul>

                            <a href="#" class="btn radius-xl">
                                Proceed with Admission
                            </a>
                        </div>

                    </div>

                </div>

            </div>--}}
			<section class="section-area section-sp2 bg-light">
				<div class="container">
					<div class="heading-bx text-center">
						<h2 class="title-head">Our Legacy <span>, Vision & Mission</span></h2>
						<p>Clear principles guide how we teach, lead, serve, and care for every child.</p>
					</div>
					
					<div class="row g-4">

						<div class="col-lg-4">
							<div class="school-card">
								<div class="mb-3">
									<i class="fa fa-star fa-2x text-primary"></i>
								</div>

								<h4>Our Legacy</h4>

								<p class="mb-0">
									

									Since its establishment in 1961, LMLG Primary School has served as a cradle of learning where generations began their educational journeys. Thousands of pupils have passed through our classrooms, carrying forward values of excellence, integrity, and service.
								</p>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="school-card">
								<div class="mb-3">
									<i class="fa fa-eye fa-2x text-primary"></i>
								</div>

								<h4>Our Vision</h4>

								<p class="mb-0">
									To preserve our heritage while creating modern opportunities that support learning, alumni connection, and institutional growth.
								</p>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="school-card">
								<div class="mb-3">
									<i class="fa fa-bullseye fa-2x text-primary"></i>
								</div>

								<h4>Our Mission</h4>

								<ul class="list-check mb-0">
									<li>Promote educational excellence</li>
									<li>Preserve historical records and alumni connections</li>
									<li>Provide accessible academic documentation</li>
									<li>Encourage community participation and sponsorship</li>
									<li>Support continuous development of school facilities</li>
								</ul>
							</div>
						</div>

					</div>
					
				</div>
			</section>
			{{--
            <div class="section-area bg-gray section-sp1 our-story">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-6 col-md-12 heading-bx">
							<h2 class="m-b10">ALUMNI ASSOCIATION</h2>
							<h5 class="fw4">Building on Legacy. Strengthening the Future.</h5>
							<p>
                               Our Alumni Association represents a strong network of former students who continue to contribute meaningfully to the growth and development of the institution. Through their support, mentorship, and financial contributions, the alumni community plays a vital role in sustaining educational excellence and infrastructural advancement.

                                We acknowledge the enduring commitment of our alumni toward the progress of the school and their continued partnership in shaping future generations.
 
                            </p>
							<a href="#" class="btn">Read More</a>
						</div>
						<div class="col-lg-6 col-md-12 heading-bx p-lr">
							<div class="video-bx">
								<img src="/assets/images/about/pic1.jpg" alt=""/>
								<a href="https://www.youtube.com/watch?v=skQrVF1gQg4" class="popup-youtube video"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="section-area section-sp1 ovpr-dark bg-fix donation-section"
                style="background-image:url(/assets/images/background/bg1.jpg);">

                <div class="container">

                    <div class="row">
                        <div class="col-md-12 text-center text-white">

                            <h2>Support Our Mission</h2>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <h5>
                                        Empowering Future Generations Through Alumni and Community Support
                                    </h5>
                                    <p class="m-b30">
                                        Your generous contribution helps us improve learning facilities,
                                        provide scholarships, support educational programmes, and create
                                        a better future for our students.
                                    </p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>

                            <a href="#" class="btn radius-xl">
                                Make a Donation
                            </a>

                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="row">

                            <div class="col-md-4 col-sm-6">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3><i class="ti-heart"></i> ₦120M+</h3>
                                    </div>
                                    <span class="cours-search-text">
                                        Alumni & Community Donations Received
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3><i class="ti-home"></i> 35+</h3>
                                    </div>
                                    <span class="cours-search-text">
                                        Projects Successfully Funded
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3><i class="ti-medall"></i> 1,200+</h3>
                                    </div>
                                    <span class="cours-search-text">
                                        Students Supported Through Scholarships
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>		
			<div class="section-area section-sp2">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center heading-bx">
							<h2 class="title-head m-b0">Upcoming <span>Events</span></h2>
							<p class="m-b0">Upcoming Education Events To Feed Brain. </p>
						</div>
					</div>
					<div class="row">
					<div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
						<div class="item">
							<div class="event-bx">
								<div class="action-box">
									<img src="/assets/images/event/pic4.jpg" alt="">
								</div>
								<div class="info-bx d-flex">
									<div>
										<div class="event-time">
											<div class="event-date">29</div>
											<div class="event-month">October</div>
										</div>
									</div>
									<div class="event-info">
										<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="event-bx">
								<div class="action-box">
									<img src="/assets/images/event/pic3.jpg" alt="">
								</div>
								<div class="info-bx d-flex">
									<div>
										<div class="event-time">
											<div class="event-date">29</div>
											<div class="event-month">October</div>
										</div>
									</div>
									<div class="event-info">
										<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="event-bx">
								<div class="action-box">
									<img src="/assets/images/event/pic2.jpg" alt="">
								</div>
								<div class="info-bx d-flex">
									<div>
										<div class="event-time">
											<div class="event-date">29</div>
											<div class="event-month">October</div>
										</div>
									</div>
									<div class="event-info">
										<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="text-center">
						<a href="#" class="btn">View All Event</a>
					</div>
				</div>
			</div>
			<!-- Alumni & Community Voices -->
            <div class="section-area section-sp2 bg-fix ovbl-dark" style="background-image:url(/assets/images/background/bg1.jpg);">

                <div class="container">

                    <!-- Section Heading -->
                    <div class="row">
                        <div class="col-md-12 text-white heading-bx left">
                            <h2 class="title-head text-uppercase">
                                Alumni & Community <span>Voices</span>
                            </h2>
                        </div>
                        <div class="col-md-8 text-white heading-bx" style="margin-top: -50px">
                            <p>
                                Hear from parents, alumni, educators, and community stakeholders
                                whose experiences reflect our commitment to academic excellence,
                                character development, and institutional growth.
                            </p>
                        </div>
                    </div>

                    <!-- Testimonials Carousel -->
                    <div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">

                        <!-- Parent -->
                        <div class="item">
                            <div class="testimonial-bx">

                                <div class="testimonial-thumb">
                                    <img src="/assets/images/testimonials/alumni1.jpg" alt="Parent Testimonial">
                                </div>

                                <div class="testimonial-info">
                                    <h5 class="name">Mrs. Adebayo</h5>
                                    <p>- Parent</p>
                                </div>

                                <div class="testimonial-content">
                                    <p>
                                        The school has provided a nurturing and disciplined environment
                                        where my child continues to thrive academically and socially.
                                        The dedication of the teachers and the values instilled in the
                                        pupils give us great confidence in the future of our children.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Alumni -->
                        <div class="item">
                            <div class="testimonial-bx">

                                <div class="testimonial-thumb">
                                    <img src="/assets/images/testimonials/alumni2.jpg" alt="Alumni Testimonial">
                                </div>

                                <div class="testimonial-info">
                                    <h5 class="name">Engr. Olumide Johnson</h5>
                                    <p>- Alumnus, Class of 2004</p>
                                </div>

                                <div class="testimonial-content">
                                    <p>
                                        This institution laid the foundation for my educational journey.
                                        Today, I am proud to support the school through the Alumni
                                        Association, helping to create better opportunities and learning
                                        environments for future generations.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Community Representative -->
                        <div class="item">
                            <div class="testimonial-bx">

                                <div class="testimonial-thumb">
                                    <img src="/assets/images/testimonials/alumni3.jpg" alt="Community Representative">
                                </div>

                                <div class="testimonial-info">
                                    <h5 class="name">Chief Samuel Adeyemi</h5>
                                    <p>- Community Representative</p>
                                </div>

                                <div class="testimonial-content">
                                    <p>
                                        The school remains one of the most important educational
                                        institutions within our community. Its continued growth,
                                        supported by dedicated alumni and stakeholders, has positively
                                        impacted countless families over the years.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Head Teacher -->
                        <div class="item">
                            <div class="testimonial-bx">

                                <div class="testimonial-thumb">
                                    <img src="/assets/images/testimonials/alumni4.jpg" alt="Head Teacher">
                                </div>

                                <div class="testimonial-info">
                                    <h5 class="name">Mrs. Grace Ogunleye</h5>
                                    <p>- Head Teacher</p>
                                </div>

                                <div class="testimonial-content">
                                    <p>
                                        Through the collective support of government, parents,
                                        community leaders, and our distinguished alumni, we continue
                                        to provide quality education while nurturing responsible,
                                        confident, and future-ready learners.
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- Alumni & Community Voices END -->
			<!-- Recent News -->
			<div class="section-area section-sp2">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head">Recent <span>News</span></h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
						</div>
					</div>
					<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
						<div class="item">
							<div class="recent-news">
								<div class="action-box">
									<img src="/assets/images/blog/latest-blog/pic1.jpg" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>Jan 02 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By William</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">This Story Behind Education Will Haunt You Forever.</a></h5>
									<p>Knowing that, you’ve optimised your pages countless amount of times, written tons.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="recent-news">
								<div class="action-box">
									<img src="/assets/images/blog/latest-blog/pic2.jpg" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>Feb 05 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By John</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">What Will Education Be Like In The Next 50 Years?</a></h5>
									<p>As desperate as you are right now, you have done everything you can on your.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>14 Comment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="recent-news">
								<div class="action-box">
									<img src="/assets/images/blog/latest-blog/pic3.jpg" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>April 14 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By George</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">Master The Skills Of Education And Be.</a></h5>
									<p>You will see in the guide all my years of valuable experience together with.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>23 Comment</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Recent News End -->
			--}}

			<!-- Gallery Section -->
			<div class="section-area section-sp2 bg-light">

				<div class="container">

					<!-- Section Title -->
					<div class="section-head text-center">
						<h2 class="title-head">School <span>Gallery</span></h2>
						<h5>Celebrating Excellence, Achievement, and Community Impact</h5>
						<p>
							Explore memorable moments that showcase our commitment to quality education,
							student development, institutional growth, and community engagement.
						</p>
					</div>

					<!-- Statistics -->
					<div class="row text-center m-b50">

						<div class="col-md-3 col-6">
							<div class="gallery-stat">
								<h3>50+</h3>
								<span>Years of Excellence</span>
							</div>
						</div>

						<div class="col-md-3 col-6">
							<div class="gallery-stat">
								<h3>5,000+</h3>
								<span>Alumni Worldwide</span>
							</div>
						</div>

						<div class="col-md-3 col-6">
							<div class="gallery-stat">
								<h3>35+</h3>
								<span>Projects Delivered</span>
							</div>
						</div>

						<div class="col-md-3 col-6">
							<div class="gallery-stat">
								<h3>1,200+</h3>
								<span>Students Supported</span>
							</div>
						</div>

					</div>

					<!-- Featured Images -->
					<div class="row">

						@if ($galleryImages->count() > 0)
							<div class="col-lg-6 mb-4">
								<div class="gallery-item gallery-large">
									<img src="{{ $galleryImages[0]->image_url }}" alt="{{ $galleryImages[0]->title }}">
									<div class="gallery-overlay">
										<h4>{{ $galleryImages[0]->title }}</h4>
										<p>{{ $galleryImages[0]->category_label }}</p>
									</div>
								</div>
							</div>
						@endif

						<div class="col-lg-6">
							<div class="row">
								@foreach ($galleryImages->slice(1, 4) as $image)
									<div class="col-md-6 mb-4">
										<div class="gallery-item">
											<img src="{{ $image->image_url }}" alt="{{ $image->title }}">
											<div class="gallery-overlay">
												<h5>{{ $image->title }}</h5>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>

					</div>

					<!-- Additional Gallery Grid -->
					<div class="row mt-3">

						@foreach ($galleryImages->slice(5, 3) as $image)
							<div class="col-md-4 mb-4">
								<div class="gallery-item">
									<img src="{{ $image->image_url }}" alt="{{ $image->title }}">
									<div class="gallery-overlay">
										<h5>{{ $image->title }}</h5>
									</div>
								</div>
							</div>
						@endforeach

					</div>

					<!-- CTA -->
					<div class="text-center mt-4">
						<h4>Explore More Moments from Our School Community</h4>

						<p class="m-b30">
							Discover the achievements, events, and milestones that continue
							to shape the future of our students and institution.
						</p>

						<a href="{{ route('gallery') }}" class="btn radius-xl">
							View Full Gallery
						</a>
					</div>

				</div>

			</div>
			<!-- Gallery Section END -->

			<!-- Explore Our Website / Legacy Project -->
			<div class="section-area section-sp2">
				<div class="container">
					<div class="row">

						<div class="col-md-6 heading-bx left">
							<h2 class="title-head">Explore <span>Our Website</span></h2>
							<ul class="list-check">
								<li>Learn about our history</li>
								<li>Connect with former classmates</li>
								<li>Request certificates and testimonials</li>
								<li>Support development projects</li>
								<li>Stay updated with school activities</li>
							</ul>
						</div>

						<div class="col-md-6 heading-bx left">
							<h2 class="title-head">Legacy <span>Project Initiative</span></h2>
							<p>
								As part of our ongoing development, the LMLG community is committed
								to building sustainable projects that will positively impact future
								generations through infrastructure improvement and digital transformation.
							</p>
							<p><strong>Together, we are preserving memories and building tomorrow.</strong></p>
						</div>

					</div>
				</div>
			</div>
			<!-- Explore Our Website / Legacy Project END -->
        </div>
		<!-- contact area END -->
    </div>

@endsection


    
