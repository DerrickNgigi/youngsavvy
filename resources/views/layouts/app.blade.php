<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title> @yield('title')</title>
    @yield('meta_data')
    @yield('optimization')
    <meta name="description" content="Robotics and Coding Organization">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo url('/'); ?>/images/YoungSavvy.png">

    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/off-canvas.css">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/fonts/linea-fonts.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/fonts/flaticon.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/style.css"> <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/responsive.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LL552ZM0R0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LL552ZM0R0');
    </script>
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '245212987068596');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=245212987068596&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body class="home-style4">

<!--Preloader area start here-->
<div id="loader" class="loader">
    <div class="loader-container">
        <div class='loader-icon'>
            <img src="<?php echo url('/'); ?>/images/pre-logoYoungSavvy.png" alt="">
        </div>
    </div>
</div>
<!--Preloader area End here-->

<!--Full width header Start-->
<div class="full-width-header header-style3 modify">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="logo-part hidden-md">
                <a class="light-logo" href="/">
                    <img src="<?php echo url('/'); ?>/images/LogoYoungSavvy.png" alt="">
                </a>
                <a class="small-logo" href="index.html">
                    <img src="<?php echo url('/'); ?>/images/LogoYoungSavvy.png" alt="">
                </a>
            </div>
            <div class="container">
                <div class="responsive-logo">
                    <img src="<?php echo url('/'); ?>/images/LogoYoungSavvy.png" alt="">
                </div>

                <div class="rs-menu-area">
                    <div class="main-menu">
                        <div class="mobile-menu">
                            <a class="rs-menu-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <li><a href="/">Home</a> </li>
                                <li><a href="/explore-build-program-robots-in-nairobi-kenya" title="Placing robotics, coding and 3D Printing at your finger tips in Nairobi, Kenya">About</a> </li>
                                <li><a href="/robotics-and-coding-courses-in-nairobi-kenya">Courses</a> </li>
                                <li><a href="/enquire-about-robotics-coding-and-3D-printing-in-nairobi-kenya">Contact</a> </li>
                                <li class="nav-item d-lg-none "><a class="hidden-xs rs-search" data-target="#login-modal" data-toggle="modal" href=""  >Login</a></li>
                                <li class="nav-item d-lg-none "><a class="hidden-xs rs-search" data-target="#register-modal" data-toggle="modal" href="" >Register</a></li>

                            </ul> <!-- //.nav-menu -->
                        </nav>
                    </div> <!-- //.main-menu -->
                    <div class="expand-btn-inner">
                        <ul>
                            <li class="login-register">
                                <i class="fa fa-sign-in"></i>
                                <a class="hidden-xs rs-search" data-target="#login-modal" data-toggle="modal" href="" >Login</a> /
                                <a class="hidden-xs rs-search" data-target="#register-modal" data-toggle="modal" href="">Register</a>
                            </li>
                            <li class="btn-part">
                                <a class="apply-btn" href="/RoboticsAndProgrammingRegistration">Apply Now</a>
                            </li>
                        </ul>

                        <span><a id="nav-expander" class="nav-expander style5">
                                    <div class="bar">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                    </div>
                                </a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        <!-- Modal Login-->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- My Account Section Start -->
                    <div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
                        <div class="container">
                            <div class="noticed">
                                <div class="main-part">
                                    <div class="method-account">
                                        <h2 class="login">Login</h2>
                                        <form>
                                            <input type="email mb-30" name="text" placeholder="E-mail" required="">
                                            <input type="text" name="text" placeholder="Password" required="">
                                            <button type="submit" class="readon submit-btn">login</button>
                                            <div class="last-password">
                                                <p>Not registered? <a href="#"> Create an account</a></p>
                                                <p>Forgot Password? <a href="#"> Reset</a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- My Account Section End -->

                </div>
            </div>
        </div>
        <!-- Modal Login-->

        <!-- Modal SignUp-->
        <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- My Account Section Start -->
                    <div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
                        <div class="container">
                            <div class="noticed">
                                <div class="main-part">
                                    <div class="method-account">
                                        <h2 class="login">Sign Up</h2>
                                        <form>
                                            <input type="email mb-30" name="text" placeholder="First Name" required="">
                                            <input type="email mb-30" name="text" placeholder="Last Name" required="">
                                            <input type="text" name="text" placeholder="Email" required="">
                                            <input type="email mb-30" name="text" placeholder="Phone Number" required="">
                                            <input type="text" name="text" placeholder="Password" required="">
                                            <input type="email mb-30" name="text" placeholder="Confirm Password" required="">
                                            <button type="submit" class="readon submit-btn">login</button>
                                            <div class="last-password">
                                                <p>Already registered? <a href="#">Login</a></p>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- My Account Section End -->

                </div>
            </div>
        </div>
        <!-- Modal signup-->
        <!-- Canvas Menu start -->
        <nav class="right_menu_togle hidden-md">
            <div class="close-btn">
                        <span id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </span>
            </div>
            <div class="canvas-logo">
                <a href="/"><img src="<?php echo url('/'); ?>/images/LogoYoungSavvy.png" alt="logo"></a>
            </div>
            <div class="offcanvas-text">
                <p>Innovative and Fun learning.</p>
            </div>
            <div class="offcanvas-gallery">
                <div class="gallery-img">
                    <a class="image-popup" href="<?php echo url('/'); ?>/images/gallery/1.jpg"><img src="<?php echo url('/'); ?>/images/gallery/1.jpg" alt=""></a>
                </div>
                <div class="gallery-img">
                    <a class="image-popup" href="<?php echo url('/'); ?>/images/gallery/2.png"><img src="<?php echo url('/'); ?>/images/gallery/2.png" alt=""></a>
                </div>
                <div class="gallery-img">
                    <a class="image-popup" href="<?php echo url('/'); ?>/images/gallery/3.png"><img src="<?php echo url('/'); ?>/images/gallery/3.png" alt=""></a>
                </div>
                <div class="gallery-img">
                    <a class="image-popup" href="<?php echo url('/'); ?>/images/gallery/4.png"><img src="<?php echo url('/'); ?>/images/gallery/4.png" alt=""></a>
                </div>
                <div class="gallery-img">
                    <a class="image-popup" href="<?php echo url('/'); ?>/images/gallery/5.png"><img src="<?php echo url('/'); ?>/images/gallery/5.png" alt=""></a>
                </div>
                <div class="gallery-img">
                    <a class="image-popup" href="<?php echo url('/'); ?>/images/gallery/map.jpg"><img src="<?php echo url('/'); ?>/images/gallery/map.jpg" alt=""></a>
                </div>
            </div>
            <div class="map-img">
                <img src="<?php echo url('/'); ?>/images/gallery/6.png" alt="">
            </div>
            <div class="canvas-contact">
                <ul class="social">
                    <li><a href="https://www.facebook.com/Young-Savvy-Eng-Centre-107688350825340/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/eng_savvy"><i class="fa fa-twitter" target="_blank"></i></a></li>
                    <li><a href="https://www.instagram.com/youngsavvyengcentre/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/68822820/admin/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </nav>
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->
@yield('content')

<!-- Footer Start -->    <!-- Newsletter section start -->
<div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
    <div class="container">
        <div class="newsletter-wrap">
            <div class="row y-middle">
                <div class="col-lg-6 col-md-12 md-mb-30">
                    <div class="content-part">
                        <div class="sec-title">
                            <div class="title-icon md-mb-15">
                                <img src="<?php echo url('/'); ?>/images/newsletter.png" alt="images">
                            </div>
                            <h2 class="title mb-0 white-color">Subscribe to Updates on Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form class="newsletter-form">
                        <input type="email" name="email" placeholder="Enter Your Email" required="">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter section end -->
<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer home9-style main-home">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h3 class="widget-title">Learning Outcomes</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-bulb"></i>
                            <div class="desc">Computational Thinking.</div>

                        </li>
                        <li>
                            <i class="flaticon-bulb"></i>
                            <div class="desc">Prototyping Skills.</div>
                        </li>
                        <li>
                            <i class="flaticon-bulb"></i>
                            <div class="desc">
                                Social-Cohesion and Communication skills.
                            </div>
                        </li>

                        <li>
                            <i class="flaticon-bulb"></i>
                            <div class="desc">
                                Programming skills.
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-bulb"></i>
                            <div class="desc">
                                Digital literacy.
                            </div>
                        </li>
                    </ul>
                    <br>
                    <ul class="footer_social">
                        <li>
                            <a href="https://www.facebook.com/Young-Savvy-Eng-Centre-107688350825340/" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/eng_savvy" target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/youngsavvyengcentre/ " target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/youngsavvyengcentre/ " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h3 class="widget-title">Address</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">SAT Centre Kijenge Road, Off Mombasa Road
                                4th Floor Room 414</div>

                        </li>
                        <li>
                            <i class="flaticon-add-circular-button"></i>
                            <div class="desc">
                                <a href="">PO BOX: 32675-00600 Nairobi</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:(+254)739 410857">0739 410857</a>
                            </div>
                        </li>

                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:info@youngsavvycentre.org">info@youngsavvycentre.org</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                    <h3 class="widget-title">Courses</h3>
                    <ul class="site-map">
                        <li><a href="/robotics-and-coding-courses-in-nairobi-kenya">Courses</a></li>
                        <li><a class="hidden-xs rs-search" data-target="#register-modal" data-toggle="modal" href="">Login/Register</a></li>
                    </ul>
                </div>
                {{--                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">--}}
                {{--                    <h3 class="widget-title">Recent Posts</h3>--}}
                {{--                    <div class="recent-post mb-20">--}}
                {{--                        <div class="post-img">--}}
                {{--                            <img src="assets/images/footer/1.jpg" alt="">--}}
                {{--                        </div>--}}
                {{--                        <div class="post-item">--}}
                {{--                            <div class="post-desc">--}}
                {{--                                <a href="#">University while the lovely valley team work</a>--}}
                {{--                            </div>--}}
                {{--                            <span class="post-date">--}}
                {{--                                        <i class="fa fa-calendar"></i>--}}
                {{--                                        September 20, 2020--}}
                {{--                                    </span>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="recent-post mb-20 md-pb-0">--}}
                {{--                        <div class="post-img">--}}
                {{--                            <img src="assets/images/footer/2.jpg" alt="">--}}
                {{--                        </div>--}}
                {{--                        <div class="post-item">--}}
                {{--                            <div class="post-desc">--}}
                {{--                                <a href="#">High school program starting soon 2021</a>--}}
                {{--                            </div>--}}
                {{--                            <span class="post-date">--}}
                {{--                                       <i class="fa fa-calendar-check-o"></i>--}}
                {{--                                        September 14, 2020--}}
                {{--                                    </span>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-20">
                    <div class="copyright">
                        <p>&copy; 2020 All Rights Reserve</p>
                    </div>
                </div>
                {{--                <div class="col-lg-6 text-right md-text-left">--}}
                {{--                    <ul class="copy-right-menu">--}}
                {{--                        <li><a href="#">Event</a></li>--}}
                {{--                        <li><a href="#">Blog</a></li>--}}
                {{--                        <li><a href="#">Contact</a></li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<!-- Search Modal End -->

<!-- modernizr js -->
<script src="<?php echo url('/'); ?>/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="<?php echo url('/'); ?>/js/jquery.min.js"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script>
<!-- Menu js -->
<script src="<?php echo url('/'); ?>/js/rsmenu-main.js"></script>
<!-- op nav js -->
<script src="<?php echo url('/'); ?>/js/jquery.nav.js"></script>
<!-- owl.carousel js -->
<script src="<?php echo url('/'); ?>/js/owl.carousel.min.js"></script>
<!-- Slick js -->
<script src="<?php echo url('/'); ?>/js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="<?php echo url('/'); ?>/js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="<?php echo url('/'); ?>/js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="<?php echo url('/'); ?>/js/wow.min.js"></script>
<!-- Skill bar js -->
<script src="<?php echo url('/'); ?>/js/skill.bars.jquery.js"></script>
<script src="<?php echo url('/'); ?>/js/jquery.counterup.min.js"></script>
<!-- counter top js -->
<script src="<?php echo url('/'); ?>/js/waypoints.min.js"></script>
<!-- video js -->
<script src="<?php echo url('/'); ?>/js/jquery.mb.YTPlayer.min.js"></script>
<!-- magnific popup js -->
<script src="<?php echo url('/'); ?>/js/jquery.magnific-popup.min.js"></script>
<!-- tilt js -->
<script src="<?php echo url('/'); ?>/js/tilt.jquery.min.js"></script>
<!-- plugins js -->
<script src="<?php echo url('/'); ?>/js/plugins.js"></script>
<!-- contact form js -->
<script src="<?php echo url('/'); ?>/js/contact.form.js"></script>
<!-- main js -->
<script src="<?php echo url('/'); ?>/js/main.js"></script>
<!-- modal js -->
<script src="<?php echo url('/'); ?>/js/modal.js"></script>
</body>
</html>
