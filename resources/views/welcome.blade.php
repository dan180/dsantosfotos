<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <script src="{{ asset('js/core.min.js') }}" defer></script>
        <script src="{{ asset('js/script.js') }}" defer></script>   
        <style>
           
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
           
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>


    <body class="antialiased">


        <div class="ie-panel">
            <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
        </div>
        <div class="preloader">
            <div class="preloader-body">
                <div class="cssload-container"><span></span><span></span><span></span><span></span>
                </div>
            </div>
        </div>

           
           <!-- LOGIN DESATIVADO
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif  
            -->

      
            <div class="page">
                <div id="home">
                    <!-- Page Header-->
                    <header class="section page-header">
                        <!-- RD Navbar-->
                        <div class="rd-navbar-wrap">
                            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                                data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                                data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                                <div class="rd-navbar-main-outer">
                                    <div class="rd-navbar-main">
                                        <!-- RD Navbar Panel-->
                                        <div class="rd-navbar-panel">
                                            <!-- RD Navbar Toggle-->
                                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                            <!-- RD Navbar Brand-->
                                            <div class="rd-navbar-brand">
                                                <a class="brand" href="index.html"><img src="images/logo-default-223x50.png" alt="" width="223" height="50" /></a>
                                            </div>
                                        </div>
                                        <div class="rd-navbar-main-element">
                                            <div class="rd-navbar-nav-wrap">
                                                <!-- RD Navbar Share-->
                                                <div class="rd-navbar-share fl-bigmug-line-share27" data-rd-navbar-toggle=".rd-navbar-share-list">
                                                    <ul class="list-inline rd-navbar-share-list">
                                                        <li class="rd-navbar-share-list-item">
                                                            <a class="icon fa fa-facebook" href="#"></a>
                                                        </li>
                                                        <li class="rd-navbar-share-list-item">
                                                            <a class="icon fa fa-twitter" href="#"></a>
                                                        </li>
                                                        <li class="rd-navbar-share-list-item">
                                                            <a class="icon fa fa-google-plus" href="#"></a>
                                                        </li>
                                                        <li class="rd-navbar-share-list-item">
                                                            <a class="icon fa fa-instagram" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="rd-navbar-nav">
                                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Home</a></li>                                        
                                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#projects">Projects</a></li>
                                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#team">Team</a></li>                                         
                                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Contacts</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </header>
        
                    <!-- Swiper-->
                    <section class="section swiper-container swiper-slider swiper-slider-classic" data-loop="true" data-autoplay="4859" data-simulate-touch="true" data-direction="vertical" data-nav="false">
                        <div class="swiper-wrapper text-center">
                            <div class="swiper-slide" data-slide-bg="images/slider-1-slide-2-1770x742.jpg">
                                <div class="swiper-slide-caption section-md">
                                    <div class="container">
                                        <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Mobile App Development</h1>
                                        <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">Since our establishment, we have been delivering high-quality and sustainable software solutions for corporate purposes of worldwide businesses.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal"
                                            data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide-bg="images/slider-1-slide-4-1770x742.jpg">
                                <div class="swiper-slide-caption section-md">
                                    <div class="container">
                                        <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Experienced Team</h1>
                                        <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">We are a team of qualified software developers, aimed at creating unique and powerful tools for your business & everyday life.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp"
                                            data-caption-delay="200">Get in touch</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide-bg="images/slider-1-slide-6-1770x742.jpg">
                                <div class="swiper-slide-caption section-md">
                                    <div class="container">
                                        <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Award-Winning Software</h1>
                                        <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">The software solutions developed by our company have been numerously awarded for usability and innovative features.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp"
                                            data-caption-delay="200">Get in touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper Pagination-->
                        <div class="swiper-pagination__module">
                            <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
                            <div class="swiper-pagination__divider"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </section>
        
                </div>
               
                <!-- Latest Projects-->
                <section class="section section-sm section-fluid bg-default text-center" id="projects">
                    <div class="container-fluid">
                        <h2 class="wow fadeInLeft">Latest Projects</h2>
                        <p class="quote-jean wow fadeInRight" data-wow-delay=".1s">In our portfolio, you can browse the latest products developed for our clients for different corporate purposes. Our qualified team of interface designers and software developers is always ready to create something unique for you.</p>
                        <div class="isotope-filters isotope-filters-horizontal">
                            <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-3" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
                            <ul class="isotope-filters-list" id="isotope-3">
                                <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a></li>
                                <li><a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">mobile Apps</a></li>
                                <li><a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">Custom Software</a></li>
                                <li><a href="#" data-isotope-filter="Type 3" data-isotope-group="gallery">QA & Testing</a></li>
                                <li><a href="#" data-isotope-filter="Type 4" data-isotope-group="gallery">UX and Design</a></li>
                            </ul>
                        </div>
                        <div class="row row-30 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 4">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-classic thumbnail-md">
                                    <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-1-420x350.jpg" alt="" width="420" height="350" />
                                    </div>
                                    <div class="thumbnail-classic-caption">
                                        <div class="thumbnail-classic-title-wrap">
                                            <a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-1-420x350.jpg" alt="" width="420" height="350" /></a>
                                            <h5 class="thumbnail-classic-title"><a href="#">FinStep</a></h5>
                                        </div>
                                        <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 1" data-wow-delay=".1s">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-classic thumbnail-md">
                                    <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-2-420x350.jpg" alt="" width="420" height="350" />
                                    </div>
                                    <div class="thumbnail-classic-caption">
                                        <div class="thumbnail-classic-title-wrap">
                                            <a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-2-420x350.jpg" alt="" width="420" height="350" /></a>
                                            <h5 class="thumbnail-classic-title"><a href="#">Mobile Finance</a></h5>
                                        </div>
                                        <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 2" data-wow-delay=".2s">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-classic thumbnail-md">
                                    <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-3-420x350.jpg" alt="" width="420" height="350" />
                                    </div>
                                    <div class="thumbnail-classic-caption">
                                        <div class="thumbnail-classic-title-wrap">
                                            <a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-3-420x350.jpg" alt="" width="420" height="350" /></a>
                                            <h5 class="thumbnail-classic-title"><a href="#">Q-Manage</a></h5>
                                        </div>
                                        <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 3" data-wow-delay=".3s">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-classic thumbnail-md">
                                    <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-4-420x350.jpg" alt="" width="420" height="350" />
                                    </div>
                                    <div class="thumbnail-classic-caption">
                                        <div class="thumbnail-classic-title-wrap">
                                            <a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-4-420x350.jpg" alt="" width="420" height="350" /></a>
                                            <h5 class="thumbnail-classic-title"><a href="#">WeatherCast</a></h5>
                                        </div>
                                        <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-classic thumbnail-md">
                                    <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-5-420x350.jpg" alt="" width="420" height="350" />
                                    </div>
                                    <div class="thumbnail-classic-caption">
                                        <div class="thumbnail-classic-title-wrap">
                                            <a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-5-420x350.jpg" alt="" width="420" height="350" /></a>
                                            <h5 class="thumbnail-classic-title"><a href="#">Home Calendar</a></h5>
                                        </div>
                                        <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 1" data-wow-delay=".1s">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-classic thumbnail-md">
                                    <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-6-420x350.jpg" alt="" width="420" height="350" />
                                    </div>
                                    <div class="thumbnail-classic-caption">
                                        <div class="thumbnail-classic-title-wrap">
                                            <a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-6-420x350.jpg" alt="" width="420" height="350" /></a>
                                            <h5 class="thumbnail-classic-title"><a href="#">MPlanner</a></h5>
                                        </div>
                                        <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 2" data-wow-delay=".2s">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-classic thumbnail-md">
                                    <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-7-420x350.jpg" alt="" width="420" height="350" />
                                    </div>
                                    <div class="thumbnail-classic-caption">
                                        <div class="thumbnail-classic-title-wrap">
                                            <a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-7-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-7-420x350.jpg" alt="" width="420" height="350" /></a>
                                            <h5 class="thumbnail-classic-title"><a href="#">Alice Messenger</a></h5>
                                        </div>
                                        <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3" data-wow-delay=".3s">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-classic thumbnail-md">
                                    <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-8-420x350.jpg" alt="" width="420" height="350" />
                                    </div>
                                    <div class="thumbnail-classic-caption">
                                        <div class="thumbnail-classic-title-wrap">
                                            <a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-8-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-8-420x350.jpg" alt="" width="420" height="350" /></a>
                                            <h5 class="thumbnail-classic-title"><a href="#">WiseMoney</a></h5>
                                        </div>
                                        <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
        
                <!-- Years of experience-->
                <section class="section section-sm bg-default">
                    <div class="container">
                        <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">
                            <div class="col-md-6 col-lg-5 col-xl-4 text-center">
                                <a class="text-img" href="#">
                                    <div id="particles-js"></div><span class="counter">10</span></a>
                            </div>
                            <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
                                <div class="text-width-extra-small offset-top-lg-24 wow fadeInUp">
                                    <h3 class="title-decoration-lines-left">Years of Experience</h3>
                                    <p class="text-gray-500">RatherApp is a team of highly experienced app designers and developers creating unique software for you.</p><a class="button button-secondary button-pipaluk" href="#">Get in touch</a>
                                </div>
                            </div>
                            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
                                <div class="row justify-content-center border-2-column offset-top-xl-26">
                                    <div class="col-9 col-sm-6">
                                        <div class="counter-amy">
                                            <div class="counter-amy-number"><span class="counter">2</span><span class="symbol">k</span>
                                            </div>
                                            <h6 class="counter-amy-title">apps developed</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-sm-6">
                                        <div class="counter-amy">
                                            <div class="counter-amy-number"><span class="counter">40</span>
                                            </div>
                                            <h6 class="counter-amy-title">Consultants</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-sm-6">
                                        <div class="counter-amy">
                                            <div class="counter-amy-number"><span class="counter">12</span>
                                            </div>
                                            <h6 class="counter-amy-title">Awards won</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-sm-6">
                                        <div class="counter-amy">
                                            <div class="counter-amy-number"><span class="counter">160</span>
                                            </div>
                                            <h6 class="counter-amy-title">Employees</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </section>
        
                <!-- Meet The Team-->
                <section class="section section-sm section-fluid bg-default" id="team">
                    <div class="container-fluid">
                        <h2>Meet The Team</h2>
                        <div class="row row-sm row-30 justify-content-center">
                            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
                                <!-- Team Classic-->
                                <article class="team-classic team-classic-lg">
                                    <a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h4 class="team-classic-name"><a href="#">Ryan Wilson</a></h4>
                                        <p class="team-classic-status">Director of Production</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
                                <!-- Team Classic-->
                                <article class="team-classic team-classic-lg">
                                    <a class="team-classic-figure" href="#"><img src="images/team-12-420x424.jpg" alt="" width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h4 class="team-classic-name"><a href="#">Jill Peterson</a></h4>
                                        <p class="team-classic-status">UI Designer</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
                                <!-- Team Classic-->
                                <article class="team-classic team-classic-lg">
                                    <a class="team-classic-figure" href="#"><img src="images/team-13-420x424.jpg" alt="" width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h4 class="team-classic-name"><a href="#">Sam Robinson</a></h4>
                                        <p class="team-classic-status">Senior Developer</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".3s">
                                <!-- Team Classic-->
                                <article class="team-classic team-classic-lg">
                                    <a class="team-classic-figure" href="#"><img src="images/team-14-420x424.jpg" alt="" width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h4 class="team-classic-name"><a href="#">Mary Lee</a></h4>
                                        <p class="team-classic-status">Software Developer</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
        
               
        
                
        
        
                
        
                <!-- Contact information-->
                <section class="section section-sm bg-default">
                    <div class="container">
                        <div class="row row-30 justify-content-center">
                            <div class="col-sm-8 col-md-6 col-lg-4">
                                <article class="box-contacts">
                                    <div class="box-contacts-body">
                                        <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                                        <div class="box-contacts-decor"></div>
                                        <p class="box-contacts-link"><a href="tel:#">+1 323-913-4688</a></p>
                                        <p class="box-contacts-link"><a href="tel:#">+1 323-888-4554</a></p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-8 col-md-6 col-lg-4">
                                <article class="box-contacts">
                                    <div class="box-contacts-body">
                                        <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                                        <div class="box-contacts-decor"></div>
                                        <p class="box-contacts-link"><a href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-8 col-md-6 col-lg-4">
                                <article class="box-contacts">
                                    <div class="box-contacts-body">
                                        <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                                        <div class="box-contacts-decor"></div>
                                        <p class="box-contacts-link"><a href="mailto:#">mail@demolink.org</a></p>
                                        <p class="box-contacts-link"><a href="mailto:#">info@demolink.org</a></p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
        
                <!-- Contact Form-->
                <section class="section section-sm section-last bg-default text-left" id="contacts">
                    <div class="container">
                        <article class="title-classic">
                            <div class="title-classic-title">
                                <h3>Contato</h3>
                            </div>
                            <div class="title-classic-text">
                                <p>Envie sua mensagem e responderemos o mais breve possível.</p>
                            </div>
                        </article>
                        <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="row row-14 gutters-14">
                                <div class="col-md-4">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                                        <label class="form-label" for="contact-your-name-2">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                                        <label class="form-label" for="contact-email-2">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                                        <label class="form-label" for="contact-phone-2">Phone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message-2">Message</label>
                                        <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
                        </form>
                    </div>
                </section>
        
         
               
        
                <!-- Page Footer-->
                <footer class="section section-fluid footer-minimal context-dark">
                    <div class="bg-gray-15">
                        <div class="container-fluid">
                            <div class="footer-minimal-inset oh">
                                <ul class="footer-list-category-2">
                                    <li><a href="#">UI Design</a></li>
                                    <li><a href="#">Windows/Mac OS Apps</a></li>
                                    <li><a href="#">Android/iOS Apps</a></li>
                                    <li><a href="#">Cloud Solutions</a></li>
                                    <li><a href="#">Customer Support</a></li>
                                </ul>
                            </div>
                            <div class="footer-minimal-bottom-panel text-sm-left">
                                <div class="row row-10 align-items-md-center">
                                    <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                                        <div>
                                            <ul class="list-inline list-inline-sm footer-social-list-2">
                                                <li>
                                                    <a class="icon fa fa-facebook" href="#"></a>
                                                </li>                                                                           
                                                <li>
                                                    <a class="icon fa fa-instagram" href="#"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 order-sm-first">
                                        <!-- Rights-->
                                        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>Daniel Santos</span>
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
        
                <div class="modal fade" id="modalCta" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Contact Us</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact-modal" method="post" action="bat/rd-mailform.php">
                                    <div class="row row-14 gutters-14">
                                        <div class="col-12">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-modal-name" type="text" name="name" data-constraints="@Required">
                                                <label class="form-label" for="contact-modal-name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-modal-email" type="email" name="email" data-constraints="@Email @Required">
                                                <label class="form-label" for="contact-modal-email">E-mail</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-modal-phone" type="text" name="phone" data-constraints="@Numeric">
                                                <label class="form-label" for="contact-modal-phone">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-wrap">
                                                <label class="form-label" for="contact-modal-message">Message</label>
                                                <textarea class="form-input textarea-lg" id="contact-modal-message" name="message" data-constraints="@Required"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Global Mailform Output-->
            <div class="snackbars" id="form-output-global"></div>           

            
        
         <!-- Javascript-->
        
         <!-- coded by Himic-->
    </body>
</html>
