@extends('layouts.app')

@section('content')
@section('title')
    Exploring Robotics, Coding and 3D printing in Nairobi, Kenya
@endsection
@section('meta_data')
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="Young Savy Engineering Center"/>
<meta property="og:title" content="Exploring Robotics, Coding and 3D printing in Nairobi, Kenya"/>
<meta property="og:description" content="We provide a platform for young people to ignite curiosity and enhance their skills in science, engineering, robotics coding through clearly structured standard based projects where children investigate, model and design solutions."/>
<meta property="og:url" content="{{url('/')}}"/>
<meta property="og:image" content="{{url('display/assets/favicon.png')}}"/>
<meta name="title" content="The Best Robotics and Coding Learning Centre in Nairobi, Kenya and East Africa"/>
<meta name="robots" content="index,follow"/>
<meta name="description" content="We provide a platform for young people to ignite curiosity and enhance their skills in science, engineering, robotics coding through clearly structured standard based projects where children investigate, model and design solutions."/>
<meta name="keywords" content="robotics engineering in kenya, nairobi robotics, artificial intelligence in kenya, robotics courses in kenya">
<meta property="fb:pages" content=""/>
<meta property="fb:app_id" content=""/>
<link rel="canonical" href="{{url('/')}}">
<link rel="shortlink" href="{{url('/')}}" />
<link rel="next" href="{{url('/')}}">
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="twitter:site" content="@YoungSavvyEngCenter">
<meta name="twitter:title" content="Exploring Robotics, Coding and 3D printing in Nairobi, Kenya"/>
<meta name="twitter:description" content="We provide a platform for young people to ignite curiosity and enhance their skills in science, engineering, robotics coding through clearly structured standard based projects where children investigate, model and design solutions.">
<meta name="google-site-verification" content="" />
@endsection
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Banner Section Start -->
        <div id="rs-banner" class="rs-banner style4">
            <div class="container relative">
                <div class="row relative">
                    <div class="col-lg-6 lg-pl-0">
                        <div class="banner-content pb-5">
                            <br>
                            <div class="desc white-color mb-10 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="3000ms">Exploring Science, Engineering and Technology Concepts</div>
{{--                            <div class="desc white-color mb-40 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="3000ms">Cohort One begins April 5th. Register Now</div>--}}
                            <div class="banner-btn wow fadeInUp" data-wow-delay="500ms" data-wow-duration="3000ms">
                                <a class="readon2 banner-style" href="/RoboticsAndProgrammingRegistration">Free Class Registration</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 lg-pl-0">
                        <div class="banner-line-shape js-tilt">
                            <img src="<?php echo url('/'); ?>/images/banner/banner-line.png" alt="Banner Circle Shape">
                        </div>
                        <div class="banner-content pb-5">
                            <h6 class="banner-title white-color wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms">Bringing robotics, coding and 3D printing in the hands of Young Generation. Different Programs for Age(9+) available.</h6>
{{--                            <div class="desc white-color mb-41 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="3000ms"></div>--}}
                        </div>
                        <div class="banner-circle-shape js-tilt">
                            <img src="<?php echo url('/'); ?>/images/banner/banner-circle.png" alt="Banner Circle Shape">
                        </div>
                    </div>
                </div>
                <div class="banner-dots-shape js-tilt">
                    <img src="<?php echo url('/'); ?>/images/banner/banner-dots.png" alt="Banner Dots Shape">
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 pl-60 order-last md-pl-15 md-mb-60">
                        <div class="img-part js-tilt">
                            <img class="" src="<?php echo url('/'); ?>/images/about/about3.png" alt="">
                            <img class="shape top-center animated rotate infinite" src="<?php echo url('/'); ?>/images/about/image-center-circle.png" alt="Cirle Shape Img">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="sub-title primary">About Us</div>
                            <h2 class="title">Placing robotics, coding and 3D Printing at your finger tips</h2>
                            <div class="desc pr-30">We provide a platform for young people to ignite curiosity and enhance their skills in science, engineering and coding
                                through clearly structured standard based projects where children investigate, model and design solutions.</div>
                        </div>
                        <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <a class="readon2" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Courses Section Start -->
        <div id="rs-popular-courses" class="rs-popular-courses style3 course-shape-bg pb-200 md-pb-170 sm-pb-100">
            <div class="container">
                <div class="row y-middle mb-50">
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <div class="sub-title primary">Courses</div>
                            <h2 class="title mb-0">Our Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">

                    <div class="courses-item">
                        <div class="img-part">
                            <img src="<?php echo url('/'); ?>/images/courses/12.png" alt="">
                        </div>
                        <div class="content-part">
                            <span><a class="categories" href="/learning-microwings-atmel">Programming Microwings ATMEL</a></span>
                            <ul class="meta-part">
                                {{--                                <li class="user"><i class="fa fa-user"></i> 204</li>--}}
                                {{--                                <li><span class="price">$55.00</span></li>--}}
                            </ul>
                            <h3 class="title"><a href="/learning-microwings-atmel">Learn Industrial Electrical and Hardware Programming with AVR</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="/learning-microwings-atmel">Apply Now<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="courses-item">
                        <div class="img-part">
                            <img src="<?php echo url('/'); ?>/images/courses/7.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <span><a class="categories" href="/learn-introduction-to-coding-and-Robotics-Age-(9-12)-in-nairobi-kenya">Beginners Robotic and Coding (BRC)</a></span>
                            <ul class="meta-part">
{{--                                <li class="user"><i class="fa fa-user"></i> 204</li>--}}
{{--                                <li><span class="price">$55.00</span></li>--}}
                            </ul>
                            <h3 class="title"><a href="/learn-introduction-to-coding-and-Robotics-Age-(9-12)-in-nairobi-kenya">Introducing to coding and Robotics (Age: 9-12 Years)</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="/learn-introduction-to-coding-and-Robotics-Age-(9-12)-in-nairobi-kenya">Apply Now<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="<?php echo url('/'); ?>/images/courses/8.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <span><a class="categories" href="/learn-introduction-to-programming-and-game-design-in-nairobi-kenya">Computer Programming 101</a></span>
                            <ul class="meta-part">
{{--                                <li class="user"><i class="fa fa-user"></i> 156</li>--}}
{{--                                <li><span class="price">$55.00</span></li>--}}
                            </ul>
                            <h3 class="title"><a href="/learn-introduction-to-programming-and-game-design-in-nairobi-kenya">Introduction to Programming and Game Design.</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="/learn-introduction-to-programming-and-game-design-in-nairobi-kenya">Apply Now<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="<?php echo url('/'); ?>/images/courses/9.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <span><a class="categories" href="/learn-intermediate-Robotics-in-nairobi-kenya">Robotics 101</a></span>
                            <ul class="meta-part">
{{--                                <li class="user"><i class="fa fa-user"></i> 187</li>--}}
{{--                                <li><span class="price">$55.00</span></li>--}}
                            </ul>
                            <h3 class="title"><a href="/learn-intermediate-Robotics-in-nairobi-kenya">Intermediate Robotics and Coding 13-17 Years</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="/learn-intermediate-Robotics-in-nairobi-kenya">Apply Now<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="<?php echo url('/'); ?>/images/courses/10.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <span><a class="categories" href="/learn-advanced-Robotics-in-nairobi-kenya">Robotics 102</a></span>
                            <ul class="meta-part">
{{--                                <li class="user"><i class="fa fa-user"></i> 104</li>--}}
{{--                                <li><span class="price">$55.00</span></li>--}}
                            </ul>
                            <h3 class="title"><a href="/learn-advanced-Robotics-in-nairobi-kenya">Advanced Robotics and Coding 18+ Years</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>

                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="/learn-advanced-Robotics-in-nairobi-kenya">Apply Now<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="<?php echo url('/'); ?>/images/courses/11.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <span><a class="categories" href="/learn-3d-printing-in-nairobi-kenya">3D Printing</a></span>
                            <ul class="meta-part">
{{--                                <li class="user"><i class="fa fa-user"></i> 115</li>--}}
{{--                                <li><span class="price">$55.00</span></li>--}}
                            </ul>
                            <h3 class="title"><a href="/learn-3d-printing-in-nairobi-kenya">Explore and Understand 3D printing technology</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>

                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="/RoboticsAndProgrammingRegistration">Apply Now<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all-btn text-center pt-50 mb-60 md-pt-30 md-mb-30">Start Learning With Our Online Courses. <a class="title-color" href="/robotics-and-coding-courses-in-nairobi-kenya">View All Courses <i class="flaticon-right-arrow ml-5 body-color"></i></a></div>
            </div>
        </div>
        <!-- Popular Courses Section End -->

        <!-- About Section Start -->
        <div class="rs-about video-style pt-120 pb-100 md-pt-90 md-pb-70">
            <div class="container relative">
                <div class="icon-shape js-tilt">
                    <img class="shape" src="<?php echo url('/'); ?>/images/about/icon-shape.png" alt="Icon Shape">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-part media-icon">
                            <img class="video-img" src="<?php echo url('/'); ?>/images/about/about-video-bg2.png" alt="Video Image">
                            <a class="popup-videos" href="">
                                <i class="fa fa-play"></i>
                            </a>
                            <img class="dot-shape js-tilt" src="<?php echo url('/'); ?>/images/about/dot-shape.png" alt="Shape">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content gray-bg">
                            <div class="sec-title mb-46 md-mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="sub-title primary">How We Works</div>
                                <h2 class="title">Develop Your Skills<br>Shine Your Life</h2>
                                <div class="desc pr-30">We provide a platform for young people to ignite curiosity and enhance their skills in science, engineering and
                                    coding through clearly structured standard based projects where children investigate, model and design solutions.</div>
                            </div>
                            <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <a class="readon2" href="/explore-build-program-robots-in-nairobi-kenya">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

{{--        <div class="rs-counter style2-about">--}}
{{--            <div class="container">--}}
{{--                <div class="row couter-area">--}}
{{--                    <div class="col-lg-3 col-md-6 md-mb-30">--}}
{{--                        <div class="counter-item text-center">--}}
{{--                            <h2 class="rs-count">295</h2>--}}
{{--                            <h4 class="title mb-0">Finished Sessions</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 md-mb-30">--}}
{{--                        <div class="counter-item text-center">--}}
{{--                            <h2 class="rs-count plus">452</h2>--}}
{{--                            <h4 class="title mb-0">Enrolled Learners</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 sm-mb-30">--}}
{{--                        <div class="counter-item text-center">--}}
{{--                            <h2 class="rs-count plus">5</h2>--}}
{{--                            <h4 class="title mb-0">Online Instructors</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6">--}}
{{--                        <div class="counter-item text-center">--}}
{{--                            <h2 class="rs-count percent">100</h2>--}}
{{--                            <h4 class="title mb-0">Satisfaction Rate</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- CTA Section Start -->
        <div class="rs-cta">
            <div class="cta-img">
                <img src="<?php echo url('/'); ?>/images/cta/cta-bg.jpg" alt="">
            </div>
            <div class="cta-content text-center">
                <div class="sec-title mb-40 md-mb-20 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <h2 class="title mb-16 md-mb-10 text-info">Admission Open</h2>
{{--                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eius to mod tempor incididunt ut labore et dolore magna aliqua. Ut enims ad minim veniam. Aenean massa. Cum sociis natoque penatibus et magnis.</div>--}}
                </div>
                <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <a class="readon2" href="/robotics-and-coding-courses-in-nairobi-kenya" title="We explore, build, program Robots in Nairobi, Kenya">Apply Now</a>
                </div>
            </div>
        </div>
        <!-- CTA Section End -->
    </div>

    <!-- Main content End -->

@endsection
