<!DOCTYPE html>
<html lang="zxx">  
    
<!-- Mirrored from rstheme.com/products/html/braintech/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 22:06:11 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Creative Soft Limited</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/fav.png') }}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/fonts/flaticon.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css') }}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/off-canvas.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/rsmenu-main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/rs-spacing.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}">
    </head>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>
        <!--Preloader area End here--> 
     
		<!-- Main content Start -->
        <div class="main-content">
            
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header style3 header-transparent">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area style2 modify1">
                       <div class="container">
                           <div class="row y-middle">
                               <div class="col-lg-8">
                                   <div class="topbar-contact">
                                      <ul>
                                          <li>
                                              <i class="flaticon-email"></i>
                                              <a href="mailto:{{ $pageSetting->company_email }}">{{ $pageSetting->company_email }}</a>
                                          </li>
                                          <li>
                                              <i class="flaticon-call"></i>
                                              <a href="tel:++1(990)999–5554"> {{ $pageSetting->company_contact }}</a>
                                          </li>
                                          <li>
                                              <i class="flaticon-location"></i>
                                             {{$pageSetting->company_address}}
                                          </li>
                                      </ul>
                                   </div>
                               </div>
                               <div class="col-lg-4 text-right">
                                   <div class="toolbar-sl-share">
                                       <ul>
                                            <li class="opening"> <em><i class="flaticon-clock"></i> {{ $pageSetting->working_hour_start }}-{{ $pageSetting->working_hour_end }}</em> </li>
                                            <li><a href="{{ $footerSetting->facebook_url }}" target="__blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{ $footerSetting->twitter_url }}" target="__blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="{{ $footerSetting->pinterest_url }}" target="__blank"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="{{ $footerSetting->instagram_url }}" target="__blank"><i class="fa fa-instagram"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                    <!-- Topbar Area End -->
                    
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="logo-part">
                                        <a href="{{ url('/') }}">
                                            <img class="normal-logo" src="{{ asset('frontend/assets/images/logo-light.png') }}" alt="logo">  
                                            <img class="sticky-logo" src="{{ asset('/logo') }}/{{ $pageSetting->logo }}" alt="logo">
                                        </a>
                                    </div>
                                    <div class="mobile-menu">
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-right">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu pr-70 lg-pr-50 md-pr-0">
                                                <ul class="nav-menu">
                                                    <li class="rs-mega-menu"> <a href="{{ url('/') }}">Home</a>
                                                        {{-- <ul class="mega-menu"> 
                                                            <li class="mega-menu-container">
                                                                <div class="mega-menu-innner">
                                                                    <div class="single-megamenu">
                                                                        <ul class="sub-menu">
                                                                            <li class="menu-title">Home Multipage</li>
                                                                            <li><a href="index.html">Main Demo</a></li>
                                                                            <li><a href="index2.html">Digital Agency 01</a></li>
                                                                            <li class="active"><a href="index3.html">IT Solution 01</a></li>
                                                                            <li><a href="index4.html">Digital Agency 02</a></li>
                                                                            <li><a href="index5.html">Software Solution</a></li>
                                                                            <li><a href="index6.html">Data Analysis</a></li>
                                                                            <li class="last-item"><a href="index7.html">IT Solution 02</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="single-megamenu">
                                                                        <ul class="sub-menu">
                                                                            <li class="menu-title">Home Multipage</li>
                                                                            <li><a href="index8.html">Gadgets Repairs</a></li>
                                                                            <li><a href="index9.html">Application Testing</a></li>
                                                                            <li><a href="index10.html">IT Solution 03</a></li>
                                                                            <li><a href="index11.html">Digital Agency Dark</a></li>
                                                                            <li><a href="index12.html">Web Design Agency</a></li>
                                                                            <li><a href="index13.html">Branding Agency</a></li>
                                                                            <li class="last-item"><a href="index14.html">Technology Agency</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="single-megamenu">
                                                                        <ul class="sub-menu">
                                                                            <li class="menu-title">Home Onepage</li>
                                                                            <li><a href="onepage1.html">Main Demo</a></li>
                                                                            <li><a href="onepage2.html">Digital Agency 01</a></li>
                                                                            <li><a href="onepage3.html">IT Solution 01</a></li>
                                                                            <li><a href="onepage4.html">Digital Agency 02</a></li>
                                                                            <li><a href="onepage5.html">Software Solution</a></li>
                                                                            <li><a href="onepage6.html">Data Analysis</a></li>
                                                                            <li class="last-item"><a href="onepage7.html">IT Solution 02</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="single-megamenu">
                                                                        <ul class="sub-menu">
                                                                            <li class="menu-title">Home Onepage</li>
                                                                            <li><a href="onepage8.html">Gadgets Repairs</a></li>
                                                                            <li><a href="onepage9.html">Application Testing</a></li>
                                                                            <li><a href="onepage10.html">IT Solution 03</a></li>
                                                                            <li><a href="onepage11.html">Digital Agency Dark</a></li>
                                                                            <li><a href="onepage12.html">Web Design Agency</a></li>
                                                                            <li><a href="onepage13.html">Branding Agency</a></li>
                                                                            <li class="last-item"><a href="onepage14.html">Technology Agency</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul> <!-- //.mega-menu -->   --}}
                                                    </li>
                                                    <li>
                                                        <a href="#about_section">About</a>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#service_section">Services</a>
                                                        <ul class="sub-menu">
                                                            @forelse ($services as $service)
                                                            <li><a href="#service_section">{{ $service->name}}</a></li>
                                                            @empty
                                                                <p>no service found</p>
                                                            @endforelse 
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#our_team_section">Our Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="#our_project_section">Our Project</a>
                                                    </li>
                                                    {{-- <li class="menu-item-has-children">
                                                        <a href="#">Pages</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item-has-children">
                                                                <a href="#">Services</a>
                                                                <ul class="sub-menu">
                                                                   @forelse ($services as $service)
                                                                   <li><a href="#">{{ $service->name}}</a></li>
                                                                   @empty
                                                                       <p>no service found</p>
                                                                   @endforelse 
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children">
                                                               <a href="#">Our Team</a>
                                                            </li> 
                                                            <li class="menu-item-has-children">
                                                               <a href="#">Single Team</a>
                                                            </li>
                                                            <li class="menu-item-has-children">
                                                               <a href="#">Case Studies</a>
                                                                <ul class="sub-menu">
                                                                   <li><a href="c#">Case Studies Style 1</a></li>
                                                                   <li><a href="#">Case Studies Style 2</a></li>
                                                                   <li><a href="#">Case Studies Style 3</a></li>
                                                                   <li><a href="#">Case Studies Style 4</a></li>
                                                                   <li><a href="#">Case Studies Style 5</a></li>
                                                                   <li><a href="#">Case Studies Style 6</a></li>
                                                                   <li><a href="#">Case Studies Style 7</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children">
                                                                <a href="#">Shop</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="#">Shop</a></li>
                                                                    <li><a href="#">Shop Single</a></li>
                                                                    <li><a href="#">Cart</a></li>
                                                                    <li><a href="#">Checkout</a></li>
                                                                    <li><a href="#">My Account</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children">
                                                               <a href="#">Pricing</a>
                                                            </li>
                                                            <li class="menu-item-has-children">
                                                               <a href="#">Faq</a>
                                                            </li>
                                                            <li>
                                                               <a href="#">404</a>
                                                            </li>
                                                        </ul>
                                                    </li> --}}
                                                    <li class="menu-item-has-children">
                                                       <a href="#rs-blog">Blog</a>
                                                       <ul class="sub-menu">
                                                           <li><a href="#rs-blog">Blog</a> </li>
                                                           <li><a href="#rs-blog">Blog Details</a></li>
                                                       </ul>
                                                    </li>
                                                    <li>
                                                       <a href="#contact_section">Contact</a>
                                                    </li>
                                                </ul> <!-- //.nav-menu -->
                                            </nav>                                        
                                        </div> <!-- //.main-menu -->
                                        <div class="expand-btn-inner hidden-md">
                                            <ul>
                                                <li class="sidebarmenu-search">
                                                    <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                        <i class="flaticon-search"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End --> 
                </header>
                <!--Header End-->
                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn"><span id="nav-close" class="text-center"><i class="fa fa-close"></i></span></div>
                    <div class="canvas-logo">
                        <a href="{{ url('/') }}"><img src="assets/images/logo-dark.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English.</p>
                    </div>
                    <div class="canvas-contact">
                        <h5 class="canvas-contact-title">Contact Info</h5>
                        <ul class="contact">
                            <li><i class="fa fa-globe"></i>Middle Badda, Dhaka, BD</li>
                            <li><i class="fa fa-phone"></i>+123445789</li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
                            <li><i class="fa fa-clock-o"></i>10:00 AM - 11:30 PM</li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </div>
            <!--Full width header End-->
         
            <!-- Banner Section Start -->
            <div class="rs-banner style2 pt-120 pb-120 md-pt-0 md-pb-0">
                <div class="container">
                    <div class="banner-content">
                       <div class="sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">{{ $pageSetting->banner_title }}</div>
                       <h1 class="title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"> {{ $pageSetting->banner_heading }}</h1>
                        <h2 class=" title-small wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            {{ $pageSetting->banner_bief }}
                        </h2> 
                        <div class="btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon buy-now get-in" href="#contact_section">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->
      
            <!-- Services Section Start -->
            <div class="rs-services main-home style2 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Solutions</span>
                        <h2 class="title title2">
                           Over 2+ Years IT & Technology Solutions Includes
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 md-mb-30">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="{{ asset('frontend/assets/images/services/style1/1.png') }}" alt="">                                      
                                   </div>
                               </div>
                               <div class="shape-part">
                                   <img class="move-y" src="{{ asset('frontend/assets/images/services/shape.png') }}" alt="">
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="#">IT Management</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                         Quisque placerat vitae lacus ut scelerisque fusce text used luctus odio ac nibh luctus, in porttitor data vitae.
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-4 md-mb-30">
                           <div class="services-item active">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="{{ asset('frontend/assets/images/services/style1/2.png') }}" alt="">  
                                   </div>
                               </div>
                               <div class="shape-part">
                                   <img class="move-y" src="{{ asset('frontend/assets/images/services/shape.png') }}" alt="">
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="#">Cloud Services</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                         Quisque placerat vitae lacus ut scelerisque fusce text used luctus odio ac nibh luctus, in porttitor data vitae.
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-4">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="{{ asset('frontend/assets/images/services/style1/3.png') }}" alt="">  
                                   </div>
                               </div>
                               <div class="shape-part">
                                   <img class="move-y" src="{{ asset('frontend/assets/images/services/shape.png') }}" alt="">
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="#">Data Security</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                            Quisque placerat vitae lacus ut scelerisque fusce text used luctus odio ac nibh luctus, in porttitor data vitae.
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- About Section Start -->
            <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80" id="about_section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 md-mb-30">
                            <div class="rs-animation-shape">
                                <div class="images">
                                   <img src="{{ asset('/') }}{{ $about->image->url }}" alt=""> 
                                </div>
                                <div class="middle-image2">
                                   <img class="dance" src="{{ asset('frontend/assets/images/about/effect-1.png') }}" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-60 md-pl-15">
                            <div class="contact-wrap">
                                <div class="sec-title mb-30">
                                    <div class="sub-text style-bg">About Us</div>
                                    <h2 class="title pb-38">
                                        {{ $about->heading }}
                                    </h2>
                                    {{-- <div class="desc pb-35">
                                       Over 25 years working in IT services developing software applications and mobile apps for clients all over the world.
                                    </div> --}}
                                    <p class="margin-0 pb-15">
                                      {{ $about->content }}
                                    </p>
                                </div>
                                <div class="btn-part">
                                    <a class="readon learn-more" href="#">Learn-More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-image">
                        <img class="top dance" src="{{ asset('frontend/assets/images/about/dotted-3.png') }}" alt="">
                        <img class="bottom dance" src="{{ asset('frontend/assets/images/about/shape3.png') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Services Section Start -->
            <div class="rs-services style2 pt-120 pb-120 md-pt-80 md-pb-80" id="service_section">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Services</span>
                        <h2 class="title">
                           We Are Offering All Kinds of IT Solutions Services
                        </h2>
                    </div>
                    <div class="row">
                        @forelse ($services as  $service)
                        <div class="col-lg-4 col-md-6 mb-25">
                            <div class="flip-box-inner">
                                 <div class="flip-box-wrap">
                                     <div class="front-part">
                                        <div class="front-content-part">
                                             <div class="front-icon-part">
                                                 <div class="icon-part">
                                                     <img src="{{ asset('/') }}{{ $service->image->url }}" alt="{{ $service->image_url }}"> 
                                                 </div>
                                             </div>
                                             <div class="front-title-part">
                                                 <h3 class="title"><a href="software-development.html">{{ $service->name }}</a></h3>
                                             </div>
                                             <div class="front-desc-part">
                                                 <p>
                                                     {{ $service->content }}
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="back-front">
                                         <div class="back-front-content">
                                             <div class="back-title-part">
                                                 <h3 class="back-title"><a href="software-development.html">{{ $service->name }}</a></h3>
                                             </div>
                                             <div class="back-desc-part">
                                                 <p class="back-desc">{{ $service->content }}</p>
                                             </div>
                                             <div class="back-btn-part">
                                                 <a class="readon view-more" href="#">Get In Touch</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div> 
                         </div>
                        @empty
                        <h1 style="margin:auto;text-align:center">No Service Found!</h1>    
                        @endforelse
                       
                    </div>
                </div>
                <div class="shape-animation">
                    <div class="shape-part">
                        <img class="dance" src="{{ asset('frontend/assets/images/services/s2.png') }}" alt="images">
                    </div>
                </div>
            </div>
            <!-- Services Section End -->
         
            <!-- Team Section Start -->
            <div class="rs-team pt-120 pb-120 md-pt-80 md-pb-80 xs-pb-54" id="our_team_section"> 
                <div class="sec-title2 text-center mb-30">
                    <span class="sub-text style-bg white-color">Team</span>
                    <h2 class="title white-color">
                        Expert IT Consultants
                    </h2>
                </div>               
                <div class="container">
                    <div class="container"> 
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                            @forelse ($team_mumbers as $team_mumber)
                            <div class="team-item-wrap">
                                <div class="team-wrap">
                                    <div class="image-inner">
                                        <a href="#"><img src="{{ asset('/') }}{{ $team_mumber->image->url }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h4 class="person-name"><a href="single-team.html">{{ $team_mumber->name }}</a></h4>
                                    <span class="designation">{{ $team_mumber->designation->name }}</span>
                                    <ul class="team-social">
                                        <li><a href="{{ $team_mumber->facebook_url }}"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ $team_mumber->instagram_url }}"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="{{ $team_mumber->twitter_url }}"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{ $team_mumber->pinterest_url }}"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            @empty
                             <h1 style="text-align:center;margin:auto">No Team Mumbers Found!</h1>   
                            @endforelse
                            
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Team Section End -->

            <!-- Process Section Start -->
            <div class="rs-process style2 pt-120 pb-120 md-pt-80 md-pb-73">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Process</span>
                        <h2 class="title title2">
                           Our Working Process
                        </h2>
                    </div>
                    <div class="row">
                        @forelse ($working_process as $item)
                        <div class="col-lg-3 col-sm-6 md-mb-50">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img">
                                        <img src="{{ asset('/') }}{{ $item->image->url }}" alt="">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title">{{ $item->title }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h1 style="margin:auto;text-align:center">No Working Process Found</h1>
                        @endforelse
                        
                    </div>
                </div>
            </div>
            <!-- Process Section End -->

           

            <!-- Project Section Start -->
            <div class="rs-project bg6 style2 pt-120 pb-120 md-pt-80 md-pb-80" id="our_project_section">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg white-color">Projects</span>
                        <h2 class="title title2 white-color">
                           Our Recent Launched Projects Available into Market
                        </h2>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                        @forelse ($projects as $project)
                        <div class="project-item">
                            <div class="project-img">
                                <a href="#"><img src="{{ $project->image->url }}" alt="images"></a>
                            </div>
                            <div class="project-content ">
                                <div class="vertical-middle">
                                    <div class="vertical-middle-cell">
                                        <h3 class="title"><a href="#">{{ $project->title }}</a></h3>
                                        <span class="category"><a href="#">{{ $project->content }}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h1 style="text-align: center;margin:auto">No Project Found!</h1>
                        @endforelse
                        
                    </div>
                </div>
            </div>
            <!-- Project Section End -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial style3 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Testimonial</span>
                        <h2 class="title title2">
                           What Saying Our Customers
                        </h2>
                    </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="3" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="3" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="1" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="false">
                        @foreach($testimonials as $testimonial)
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="{{ asset('frontend/assets/images/testimonial/main-home/quote-white.png') }}" alt="">{{ $testimonial->quote }}</div>
                            </div>
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="{{ asset('/') }}{{ $testimonial->image->url }}" alt="">
                                </div>
                                <a class="name" href="#">{{ $testimonial->client_name }}</a>
                                <span class="designation">{{ $testimonial->designation }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Counter Section Start -->
            <div class="rs-counter style2 bg5 pt-100 pb-200 md-pt-80 md-pb-80">
               <div class="container">
                   <div class="counter-top-area">
                       <div class="row">
                           <div class="col-lg-3 col-sm-6 md-mb-40">
                               <div class="counter-list md-center">
                                    <div class="count-icon">
                                       <img src="{{ asset('frontend/assets/images/counter/1.png') }}" alt=""> 
                                    </div>
                                   <div class="counter-text">
                                       <div class="count-number">
                                           <span class="rs-count k">{{ $pageSetting->happy_clients }}</span>
                                       </div>
                                       <h3 class="title">Happy Clients</h3>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3 col-sm-6 md-mb-40">
                                <div class="counter-list md-center">
                                    <div class="count-icon">
                                         <img src="{{ asset('frontend/assets/images/counter/2.png') }}" alt=""> 
                                    </div>
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count plus">{{ $pageSetting->experience }}</span>
                                        </div>
                                        <h3 class="title">Years Experience</h3>
                                    </div>
                                </div>
                           </div>
                           <div class="col-lg-3 col-sm-6 xs-mb-40">
                               <div class="counter-list md-center">
                                <div class="count-icon">
                                   <img src="{{ asset('frontend/assets/images/counter/3.png') }}" alt=""> 
                                </div>
                                   <div class="counter-text">
                                       <div class="count-number">
                                           <span class="rs-count plus">{{ $pageSetting->products }}</span>
                                       </div>
                                       <h3 class="title">Products</h3>
                                   </div>
                               </div> 
                           </div>
                           <div class="col-lg-3 col-sm-6">
                               <div class="counter-list md-center">
                                <div class="count-icon">
                                   <img src="{{ asset('frontend/assets/images/counter/4.png') }}" alt=""> 
                                </div>
                                   <div class="counter-text">
                                       <div class="count-number">
                                           <span class="rs-count plus">{{ $pageSetting->team_mumbers }}</span>
                                       </div>
                                       <h3 class="title">Expert Engineers</h3>
                                   </div>
                               </div>
                           </div>
                       </div> 
                   </div>
               </div>
            </div>
            <!-- Counter Section End -->

            <!-- Video Section End -->
            <div class="rs-video-wrap md-pt-80" id="contact_section">
                <div class="container">
                    <div class="row margin-0">
                        <div class="col-lg-6 padding-0">
                            <div class="video-item">
                                <div class="rs-videos">
                                    <div class="animate-border main-home style2">
                                        <a class="popup-border popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="rs-requset">
                                <div class="sec-title2 mb-33">
                                    <span class="sub-text style-bg">Query</span>
                                    <h2 class="title testi-title">
                                       Request Free Consultation
                                    </h2>
                                </div>
                                <div id="form-messages"></div>
                                <form  method="post" action="{{ route('contact.add') }}">
                                    @csrf
                                        <div class="row">
                                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                                @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                
                                            </div> 
                                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                                @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>   
                                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                                @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>   
                                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="website" name="website" placeholder="Your Website" required="">
                                            </div>
                                      
                                            <div class="col-lg-12 mb-35">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                @error('message')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                            <button class="submit" type="submit">Submit Now</button>
                                        </div> 
                                </form> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Video Section End -->

            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog pt-108 pb-120 md-pt-70 md-pb-70">
                <div class="container">  
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text">Blogs</span>
                            <h2 class="title testi-title">
                                Read Our Latest Tips & Tricks
                            </h2>
                        <div class="heading-line">

                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details.html"><img src="{{ asset('frontend/assets/images/blog/main-home/1.jpg') }}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="#">Software Development</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 16 Nov 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Necessity May Give Us Your Best Virtual Court System</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details.html"><img src="{{asset('frontend/assets/images/blog/main-home/2.jpg')}}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="#"> Web Development</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 20 December 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Tech Products That Makes Its Easier to Stay at Home</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details.html"><img src="{{ asset('frontend/assets/images/blog/main-home/3.jpg') }}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="#">It Services</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 22 December 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Open Source Job Report Show More Openings Fewer</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details.html"><img src="{{ asset('frontend/assets/images/blog/main-home/4.jpg') }}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="#">Artifical Intelligence</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 26 December 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Types of Social Proof What its Makes Them Effective</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details.html"><img src="{{ asset('frontend/assets/images/blog/main-home/5.jpg') }}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="#">Digital Technology</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 28 December 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Tech Firms Support Huawei Restriction, Balk at Cost</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details.html"><img src="{{ asset('frontend/assets/images/blog/main-home/6.jpg') }}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-single.html">It Services</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 30 December 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Servo Project Joins The Linux Foundation Fold Desco</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button"><a href="#">Learn More</a></div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <!-- Blog Section End -->

            <!-- Cta section start -->
            <div class="rs-cta style1 bg7 pt-70 pb-70">
                <div class="container">
                    <div class="cta-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-md-12 md-pr-0 pr-148 md-pl-15 md-mb-30 md-center">
                                <div class="title-wrap">
                                    <h2 class="epx-title">Grow Your Business and Build Your Website or Software With us.</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 text-righ">
                                <div class="button-wrapt md-center">
                                    <a class="readon learn-more" href="contact.html">Get In Touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cta section end -->

        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="index.html"><img src="{{ asset('/logo') }}/{{ $pageSetting->logo }}" alt=""></a>
                            </div>
                              <div class="textwidget pb-30"><p>Sedut perspiciatis unde omnis iste natus error sitlutem acc usantium doloremque denounce with illo inventore veritatis</p>
                              </div>
                              <ul class="footer-social md-mb-30">  
                                  <li> 
                                      <a href="{{ $footerSetting->facebook_url }}" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
                                  </li>
                                  <li> 
                                      <a href="{{ $footerSetting->twitter_url }}" target="_blank"><span><i class="fa fa-twitter"></i></span></a> 
                                  </li>

                                  <li> 
                                      <a href="{{ $footerSetting->pinterest_url }}" target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a> 
                                  </li>
                                  <li> 
                                      <a href="{{ $footerSetting->instagram }}" target="_blank"><span><i class="fa fa-instagram"></i></span></a> 
                                  </li>
                                                                           
                              </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                            <h3 class="widget-title">IT Services</h3>
                            <ul class="site-map">
                                @forelse ($services as $service)
                                <li><a href="">{{ $service->name }}</a></li>    
                                @empty
                                <h3>No Service Found!</h3>    
                                @endforelse
                                
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                            <h3 class="widget-title">Contact Info</h3>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">{{ $pageSetting->company_address }}</div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                       <a href="tel:(+880)155-69569">{{ $pageSetting->company_contact }}</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:{{ $pageSetting->company_email }}">{{ $pageSetting->company_email }}</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock-1"></i>
                                    <div class="desc">
                                        Opening Hours: {{ $pageSetting->working_hour_start }} - {{ $pageSetting->working_hour_end }}  
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <h3 class="widget-title">Newsletter</h3>
                            <p class="widget-desc">We denounce with righteous and in and dislike men who are so beguiled and demo realized.</p>
                            <form action="{{ route('newsletter.add') }}" method="post">
                            <p>
                               @csrf
                               <input type="email" name="email" placeholder="Your email address">
                               <em class="paper-plane"><input type="submit" value="Sign up"></em>
                               <i class="flaticon-send"></i>
                            </p>
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                            
                           </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6 text-right md-mb-10 order-last">
                            <ul class="copy-right-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>&copy; 2021 All Rights Reserved. Developed By <a href="{{ $footerSetting->facebook_url }}">Creative Soft LTD</a></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form class="">
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

         <!-- modernizr js -->
        <script src="{{ asset('frontend/assets/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('frontend/assets/js/rsmenu-main.js') }}"></script> 
        <!-- op nav js -->
        <script src="{{ asset('frontend/assets/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('frontend/assets/js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script> 
         <!-- counter top js -->
        <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
        <!-- swiper js -->
        <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>   
        <!-- particles js -->
        <script src="{{ asset('frontend/assets/js/particles.min.js') }}"></script>  
        <!-- magnific popup js -->
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>      
        <!-- plugins js -->
        <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- pointer js -->
        <script src="{{ asset('frontend/assets/js/pointer.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('frontend/assets/js/contact.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        <script>
            @if (Session::has('message'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.success("{{ session('message') }}");
            @endif
    
            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.error("{{ session('error') }}");
            @endif
    
            @if (Session::has('info'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.info("{{ session('info') }}");
            @endif
    
            @if (Session::has('warning'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.warning("{{ session('warning') }}");
            @endif
        </script>
    </body>

<!-- Mirrored from rstheme.com/products/html/braintech/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 22:06:56 GMT -->
</html>