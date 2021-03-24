@extends('layouts.app')
@section('content')
@section('title')
    Robotics and Programming Boot Camp Registration.
@endsection
@section('meta-data')
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Young Savy Engineering Center" />
    <meta property="og:title" content=" Robotics and Programming Demo" />
    <meta property="og:description"
          content="This is a Robotics and Programming Registration page for Robotics, Programming. and Electronics April Holiday Course." />
    <meta property="og:url" content="{{ url('/RoboticsAndProgrammingRegistration') }}" />
    <meta property="og:image" content="{{ url('display/assets/favicon.png') }}" />
    <meta name="title" content="Robotics and Programming Boot Camp Registration." />
    <meta name="robots" content="index,follow" />
    <meta name="description" content="Robotics and Programming Boot Camp Registration." />
    <meta name="keywords"
          content="robotics engineering in kenya, nairobi robotics, artificial intelligence in kenya, programming in kenya, 3D printing in kenya, coding in kenya, robotics courses in kenya">
    <meta property="fb:pages" content="" />
    <meta property="fb:app_id" content="" />
    <link rel="canonical" href="{{ url('/l/RoboticsAndProgrammingRegistration') }}">
    <link rel="shortlink" href="{{ url('/RoboticsAndProgrammingRegistration') }}" />
    <link rel="next" href="{{ url('/RoboticsAndProgrammingRegistration') }}">
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="twitter:site" content="@YoungSavvyEngCenter">
    <meta name="twitter:title" content="Exploring Robotics, Coding and 3D printing in Nairobi, Kenya" />
    <meta name="twitter:description"
          content="We provide a platform for young people to ignite curiosity and enhance their skills in science, engineering, robotics coding through clearly structured standard based projects where children investigate, model and design solutions.">
    <meta name="google-site-verification" content="" />
@endsection
@section('optimization')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Course",
            "name": "Introduction Robotics",
            "description": "Beginner Robotics and Coding Course in Nairobi Kenya.",
            "provider": {
                "@type": "Organization",
                "name": "Young Savvy Engineering Center",
                "sameAs": "{{ url('/learn-introduction-to-coding-and-Robotics-Age-(9-12)-in-nairobi-kenya') }}"
            }
        }

    </script>
@endsection
<!-- Main content Start -->
<div class="main-content">
    <div class="contact-page-section pt-10 pb-10 md-pt-10 md-pb-10">
            <div class="row">
                <div class="col-lg-12 pl-30 lg-pl-15">
                    <div class="rs-quick-contact new-style">

                            <h1 style="text-align: center" class="title mb-0">Free Virtual BootCamp Demo</h1>
                        <div class="inner-part mb-00">
                            <div class="blog-img mb-00">
                                <img src="<?php echo url('/'); ?>/images/breadcrumbs/6.jpg" alt="Breadcrumbs Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pl-30 lg-pl-15">
                    <div class="rs-quick-contact new-style">
                        <div class="inner-part">
                            <h2 style="text-align: center" class="title mb-15">Register for the Virtual BootCamp</h2>
                            <p>Join our robotics and coding boot camp Demo on Saturday 27th from 10:00AM-11:30AM to learn more and get started with robotics and coding. The boot camp training is targeted for kids and students (8-17years) where fun building and programming age friendly projects happens with lots of learning experience.

                                Registration: The virtual boot camp Demo is free for all registered participants. Once you have registered, you will receive a confirmation email with a link to join the session
                            </p>
                            <div id="googleForm" style="margin-left: auto; margin-right: auto; text-align: center">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdaGf2MwDGJsyp-Bxd17JQGC29mZKHFczwsL5mXAQYQlS3Cng/viewform?embedded=true" width="100%" height="1500" frameborder="0" marginheight="auto" marginwidth="auto">Loading…</iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        <!-- Contact Section End -->
            <!-- Blog Section End -->

@endsection
