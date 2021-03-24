@extends('layouts.app')
@section('content')
@section('content')
    @section('title')
        Enquire about Robotics, Coding and 3D Printing in Nairobi, Kenya
        @endsection

@section('meta_data')
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="Young Savy Engineering Center"/>
<meta property="og:title" content=" Enquire about Robotics, Coding and 3D Printing in Nairobi, Kenya "/>
<meta property="og:description" content="We place robotics, coding and 3D Printing at your finger tips."/>
<meta property="og:url" content="{{url('/enquire-about-robotics-coding-and-3D-printing-in-nairobi-kenya')}}"/>
<meta property="og:image" content="{{url('display/assets/favicon.png')}}"/>
<meta name="title" content="The Best Robotics and Coding Courses in Nairobi, Kenya and East Africa"/>
<meta name="robots" content="index,follow"/>
<meta name="description" content="Reach out to us to know more on engineering, robotics coding through clearly structured standard based projects where children investigate, model and design solutions."/>
<meta name="keywords" content="robotics engineering in kenya, nairobi robotics, artificial intelligence in kenya, programming in kenya, 3D printing in kenya, coding in kenya, robotics courses in kenya">
<meta property="fb:pages" content=""/>
<meta property="fb:app_id" content=""/>
<link rel="canonical" href="{{url('/enquire-about-robotics-coding-and-3D-printing-in-nairobi-kenya')}}">
<link rel="shortlink" href="{{url('/enquire-about-robotics-coding-and-3D-printing-in-nairobi-kenya')}}" />
<link rel="next" href="{{url('/enquire-about-robotics-coding-and-3D-printing-in-nairobi-kenya')}}">
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="twitter:site" content="@YoungSavvyEngCenter">
<meta name="twitter:title" content="Exploring Robotics, Coding and 3D printing in Nairobi, Kenya"/>
<meta name="twitter:description" content="We provide a platform for young people to ignite curiosity and enhance their skills in science, engineering, robotics coding through clearly structured standard based projects where children investigate, model and design solutions.">
<meta name="google-site-verification" content="" />
@endsection

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="<?php echo url('/'); ?>/images/breadcrumbs/6.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color padding">
                <h1 class="page-title">Contact 4</h1>
                <ul>
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Section Start -->
        <div class="contact-page-section pt-120 pb-120 md-pt-90 md-pb-90">
            <div class="container">
                <div class="row contact-address-section">
                    <div class=" col-lg-4 col-md-12 lg-pl-0 md-mb-30">
                        <div class="contact-info contact-address">
                            <div class="icon-part">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="content-part">
                                <h5 class="info-subtitle">Address</h5>
                                <h4 class="info-title">SAT Centre Mombasa Road.
                                   <br> 4th Floor Room 414</h4>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-12 md-mb-30">
                        <div class="contact-info contact-mail">
                            <div class="icon-part">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="content-part">
                                <h5 class="info-subtitle">Email Address</h5>
                                <h4 class="info-title"><a href="mailto:info@youngsavvycentre.org">info@youngsavvycentre.org</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-12 lg-pr-0">
                        <div class="contact-info contact-phone">
                            <div class="icon-part">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <div class="content-part">
                                <h5 class="info-subtitle">Phone Number</h5>
                                <h4 class="info-title"><a href="tel:(+254)739 410857">0739 410857</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 md-mb-30">
                        <div class="contact-map2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.010084264357!2d36.841231369775386!3d-1.324367299999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11939185fd1d%3A0x3e36eb67878c60a6!2sSAT%20CENTRE!5e0!3m2!1sen!2ske!4v1609236320561!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7 pl-30 lg-pl-15">
                        <div class="rs-quick-contact new-style">
                            <div class="inner-part mb-50">
                                <h2 class="title mb-15">Get In Touch</h2>
                                <p>Feel free to reach out to us for any  🤔🤔question🤔🤔 , 😓😓complain😓😓 or 😚😚complement😚😚. Looking forward to hear from you</p>
                            </div>
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post" action="mailer.php">
                                <div class="row">
                                    <div class="col-lg-6 mb-35 col-md-12">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 mb-35 col-md-12">
                                        <input class="from-control" type="text" id="name" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-6 mb-35 col-md-12">
                                        <input class="from-control" type="text" id="name" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-6 mb-35 col-md-12">
                                        <input class="from-control" type="text" id="name" name="subject" placeholder="Subject" required="">
                                    </div>

                                    <div class="col-lg-12 mb-50">
                                        <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="btn-send" type="submit" value="Submit Now">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->

        </div>
    </div>
    <!-- Main content End -->
@endsection
