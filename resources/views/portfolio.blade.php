<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Infolio Multi-Purpose themeforest">
    <meta name="description" content="Infolio - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Infolio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&amp;display=swap" rel="stylesheet">

    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('assets/css/satoshi.css') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>



    <!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <div class="cursor"></div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg bord blur">
        <div class="container">

            <!-- Logo -->
            <a class="logo icon-img-100" href="#">
                <img src="{{ asset('assets/imgs/logo-light.png') }}" alt="logo">
            </a>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}"><span class="rolling-text">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('portfolio') }}"><span class="rolling-text">Portfolio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}"><span class="rolling-text">Contact
                                Info</span></a>
                    </li>
                </ul>
            </div>

            <div class="search-form">
                <div class="form-group">
                    <input type="text" name="search" placeholder="Search">
                    <button><span class="pe-7s-search"></span></button>
                </div>
                <div class="search-icon">
                    <span class="pe-7s-search open-search"></span>
                    <span class="pe-7s-close close-search"></span>
                </div>
            </div>
            <div class="topnav">
                <div class="menu-icon cursor-pointer">
                    <span class="icon ti-align-right"></span>
                </div>
            </div>
        </div>
    </nav>

    <div class="hamenu">
        <div class="logo icon-img-100">
            <img src="{{ asset('assets/imgs/logo-light.png') }}" alt="">
        </div>
        <div class="close-menu cursor-pointer ti-close"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="menu-text">
                        <div class="text">
                            <h2>Menu</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="menu-links">
                        <ul class="main-menu rest">
                            <li>
                                <div class="o-hidden">
                                    <a href="{{ url('/') }}" class="link"><span class="fill-text"
                                            data-text="Home">Home</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="o-hidden">
                                    <a href="{{ url('portfolio') }}" class="link"><span class="fill-text"
                                            data-text="Portfolio">Portfolio</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="o-hidden">
                                    <a href="{{ url('contact') }}" class="link"><span class="fill-text"
                                            data-text="Contact Info">Contact Info</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cont-info">
                        <div class="item mb-50">
                            <h6 class="sub-title mb-15 opacity-7">Address</h6>
                            <h5>541 Melville Geek, <br> Palo Alto, CA 94301</h5>
                        </div>
                        <div class="item mb-50">
                            <h6 class="sub-title mb-15 opacity-7">Social Media</h6>
                            <ul class="rest social-text">
                                <li class="mb-10">
                                    <a href="#0" class="hover-this"><span class="hover-anim">Facebook</span></a>
                                </li>
                                <li class="mb-10">
                                    <a href="#0" class="hover-this"><span class="hover-anim">Twitter</span></a>
                                </li>
                                <li class="mb-10">
                                    <a href="#0" class="hover-this"><span class="hover-anim">LinkedIn</span></a>
                                </li>
                                <li>
                                    <a href="#0" class="hover-this"><span class="hover-anim">Instagram</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="item mb-40">
                            <h6 class="sub-title mb-15 opacity-7">Contact Us</h6>
                            <h5><a href="#0">Hello@email.com</a></h5>
                            <h5 class="underline mt-10"><a href="#0">+1 840 841 25 69</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== End Navbar ==================== -->

    <div id="smooth-wrapper">


        <div id="smooth-content">

            <main class="main-bg o-hidden">


                <!-- ==================== Start Header ==================== -->

                <header class="crev-agency-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 left-clumn">
                                <div class="img">
                                    <img src="{{ asset('assets/imgs/intro/02.jpg') }}" alt="">
                                </div>
                                <div>
                                    <h2 class="fz-80">24<span class="fz-40">+</span></h2>
                                    <h6 class="sub-title">Satisfied Clients</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 valign center-clumn">
                                <div>
                                    <div class="caption main-bg">
                                        <h1 class="text-u">Empowering the world, one line of code at a time</h1>
                                    </div>
                                    {{-- <div class="row justify-content-center mt-30">
                                        <div class="col-md-9">
                                            <p>I am a flexible and dedicated engineer known for my quick learning,
                                                adaptability, and ability to deliver complex projects under tight deadlines.
                                                With a proven track record of excellence, I excel in navigating challenges and
                                                exceeding expectations.</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-3 right-clumn">
                                <div class="text-center">
                                    <div class="circle-button">
                                        <a href="https://youtu.be/AzwC6umvd1s" class="vid">
                                            <div class="rotate-circle fz-30 text-u">
                                                <svg class="textcircle" viewBox="0 0 500 500">
                                                    <defs>
                                                        <path id="textcircle"
                                                            d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                                        </path>
                                                    </defs>
                                                    <text>
                                                        <textPath xlink:href="#textcircle" textLength="900">Explore
                                                            More
                                                            -
                                                            Explore More -</textPath>
                                                    </text>
                                                </svg>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-play"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="img">
                                    <img src="{{ asset('assets/imgs/intro/03.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- ==================== End Header ==================== -->



                <!-- ==================== Start intro ==================== -->

                <section class="intro section-padding position-re">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="cont">
                                    <h4 class="d-slideup wow">
                                        <span class="sideup-text">
                                            <span class="up-text">If you’re looking for a website,</span>
                                        </span>
                                        <span class="sideup-text">
                                            <span class="up-text">a web application</span>
                                        </span>
                                        <span class="sideup-text">
                                            <span class="up-text"> or a full-stack developer <span class="underline"><a
                                                        href="page-contact3.html"
                                                        class="main-color"> click here</a></span></span>
                                        </span>
                                    </h4>
                                    <div class="exp mt-80 md-mb15">
                                        <h2 class="fz-70 numb-font">3<span class="fz-40">+</span> <span
                                                class="sub-title main-font opacity-7 ml-15">Years
                                                of Experience</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="text">
                                    <p>I am a flexible and dedicated engineer known for my quick learning,
                                        adaptability, and ability to deliver complex projects under tight deadlines.
                                        With a proven track record of excellence, I excel in navigating challenges and
                                        exceeding expectations.</p>
                                </div>
                                <div class="main-marq o-hidden mt-100">
                                    <div class="slide-har st1">
                                        <div class="box">
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Content Management Systems</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Web Development</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Performance optimization</span>                                               </span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Responsive design</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>SEO</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Content Management Systems</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Web Development</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Performance optimization</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Responsive design</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>SEO</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-overlay">
                        <svg viewBox="0 0 1728 1101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M-43 773.821C160.86 662.526 451.312 637.01 610.111 733.104C768.91 829.197 932.595 1062.9 602.782 1098.75C272.969 1134.6 676.888 25.4306 1852 1"
                                style="stroke-dasharray: 3246.53, 0;"></path>
                        </svg>
                    </div>
                </section>

                <!-- ==================== End intro ==================== -->



                <!-- ==================== Start Services ==================== -->

                <section class="skills-img-crev pb-50">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-4 offset-lg-1 valign">
                                <div class="img md-mb80">
                                    <div class="rotate-butn-vid">
                                        <a href="https://youtu.be/AzwC6umvd1s" class="vid d-flex align-items-center">
                                            <div class="icon">
                                                <i class="fas fa-play main-color"></i>
                                            </div>
                                            <span class="sub-title ml-15">Watch Intro</span>
                                        </a>
                                    </div>
                                    <img src="{{ asset('assets/imgs/intro/04.jpg') }}" alt="" class="radius-30">
                                </div>
                            </div>
                            <div class="col-lg-6 valign">
                                <div class="content full-width">
                                    <div class="sec-head mb-50">
                                        <h6 class="sub-title mb-15 main-color">Why Choose Me</h6>
                                        <h2 class="d-slideup wow">
                                            <span class="sideup-text">
                                                <span class="up-text">Delivering Beyond Expectations,</span>
                                            </span>
                                            <span class="sideup-text">
                                                <span class="up-text">  Your Trusted Partner.</span>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-lg-11">
                                            <div class="text">
                                                <p>Versatile engineer known for quick learning, adaptability,
                                                    and delivering complex projects under tight deadlines.
                                                    Proven track record of excellence and agility in dynamic environments.</p>
                                            </div>
                                            <div class="row mt-50 pt-50 bord-thin-top">
                                                <div class="col-sm-6">
                                                    <div class="item d-flex align-items-center sm-mb30">
                                                        <h2 class="fz-60 line-height-1"><span
                                                                class="numb-count">18</span></h2>
                                                        <span class="sub-title opacity-7 ml-30">Projects <br>
                                                            Completed</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="item d-flex align-items-center">
                                                        <h2 class="fz-60 line-height-1"><span
                                                                class="numb-count">24</span><span class="fz-30">+</span>
                                                        </h2>
                                                        <span class="sub-title opacity-7 ml-30">Customers <br>
                                                            Satisfaction</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Services ==================== -->



                <!-- ==================== Start Services ==================== -->

                <section class="services section-padding">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <h6 class="sub-title main-color mb-25">Our Specialize</h6>
                            <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                                <h2 class="fw-600 d-rotate wow">
                                    <span class="rotate-text">Comprehensive <span class="fw-200">
                                            Services.</span></span>
                                </h2>
                                <div class="ml-auto">
                                    <div class="swiper-arrow-control">
                                        <div class="swiper-button-prev">
                                            <span class="ti-arrow-left"></span>
                                        </div>
                                        <div class="swiper-button-next">
                                            <span class="ti-arrow-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="serv-swiper" data-carousel="swiper" data-loop="true" data-space="30">
                            <div id="content-carousel-container-unq-serv" class="swiper-container"
                                data-swiper="container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item-box radius-15">
                                            <div class="icon mb-40 opacity-5">
                                                <img src="{{ asset('assets/imgs/serv-icons/3.png') }}" alt="">
                                            </div>
                                            <h5 class="mb-15">Content Management Systems</h5>
                                            <p>A user-friendly web applications that allows easy creation, editing, and publishing of digital
                                                content on the web, without requiring coding skills.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item-box radius-15">
                                            <div class="icon mb-40 opacity-5">
                                                <img src="{{ asset('assets/imgs/serv-icons/4.png') }}" alt="">
                                            </div>
                                            <h5 class="mb-15">Web Developments</h5>
                                            <p>As a web developer, I provide professional services for building
                                                and maintaining websites and web applications.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item-box radius-15">
                                            <div class="icon mb-40 opacity-5">
                                                <img src="{{ asset('assets/imgs/serv-icons/5.png') }}" alt="">
                                            </div>
                                            <h5 class="mb-15">Performance optimization</h5>
                                            <p> enhancing the speed and efficiency of websites and web applications to deliver a smoother user experience.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item-box radius-15">
                                            <div class="icon mb-40 opacity-5">
                                                <img src="{{ asset('assets/imgs/serv-icons/6.png') }}" alt="">
                                            </div>
                                            <h5 class="mb-15">Responsive design</h5>
                                            <p>Ensures websites and web applications adapt and respond smoothly to different screen sizes and devices.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item-box radius-15">
                                            <div class="icon mb-40 opacity-5">
                                                <img src="{{ asset('assets/imgs/serv-icons/6.png') }}" alt="">
                                            </div>
                                            <h5 class="mb-15">SEO</h5>
                                            <p>improving a website's visibility and ranking in search engine results pages.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Services ==================== -->



                <!-- ==================== Start Marquee ==================== -->
{{--
                <section>
                    <div class="main-marq xlrg o-hidden">
                        <div class="slide-har st1">
                            <div class="box">
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="box">
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                <!-- ==================== End Marquee ==================== -->



                <!-- ==================== Start Portfolio ==================== -->

                <section class="inter-fixed-text section-padding">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <h6 class="sub-title main-color mb-25">My Portfolio</h6>
                            <div class="bord pt-25 bord-thin-top d-flex justify-content-end">
                                <h2 class="fw-600 d-rotate wow">
                                    <span class="rotate-text">Featured <span class="fw-200">projects</span></span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="container position-re">
                        <div class="links-img">
                            <div class="row">
                                <div class="col-lg-4 items">
                                    <div class="item">
                                        <div class="img" data-tab="tab-1">
                                            <img src="{{ asset('assets/imgs/works/1/1.jpg') }}" alt="">
                                            <a href="project1.html" class="link-overlay"></a>
                                        </div>
                                        <div class="cont">
                                            <span class="tag">Digital Menu</span>
                                            <h2>Kertina Bar & Restaurant</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 items">
                                    <div class="item">
                                        <div class="img" data-tab="tab-2">
                                            <img src="{{ asset('assets/imgs/works/1/2.jpg') }}" alt="">
                                            <a href="project2.html" class="link-overlay"></a>
                                        </div>
                                        <div class="cont">
                                            <span class="tag">Learning Managment System</span>
                                            <h2>Merrise</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 items">
                                    <div class="item">
                                        <div class="img" data-tab="tab-3">
                                            <img src="{{ asset('assets/imgs/works/1/3.jpg') }}" alt="">
                                            <a href="project3.html" class="link-overlay"></a>
                                        </div>
                                        <div class="cont">
                                            <span class="tag">Digital seedling planting site</span>
                                            <h2>Yenegew-Zaf</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="links-text">
                            <ul class="rest">
                                <li id="tab-1">
                                    <span class="tag">Digital Menu</span>
                                    <h2>Kertina Bar & Restaurant</h2>
                                </li>
                                <li id="tab-2">
                                    <span class="tag">Learning Managment System</span>
                                    <h2>Merrise</h2>
                                </li>
                                <li id="tab-3">
                                    <span class="tag">Digital seedling planting site</span>
                                    <h2>Yenegew-Zaf</h2>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="container mt-40">
                        <div class="sec-bottom mt-100">
                            <div class="main-bg d-flex align-items-center">
                                <p>Here are some projects.</p>
                                <a href="portfolio-metro.html" class="butn main-color ml-40 underline">
                                    <span>View All</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Portfolio ==================== -->



                <!-- ==================== Start Testimonials ==================== -->

                <section class="testimonials">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="sec-head">
                                    <h6 class="sub-title main-color mb-15">Testimonials</h6>
                                    <h3 class="fw-600 d-rotate wow">
                                        <span class="rotate-text">What People <span class="fw-200">Say?</span></span>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-8 position-re">
                                <div class="testim-swiper" data-carousel="swiper" data-loop="true" data-space="30">
                                    <div id="content-carousel-container-unq-testim" class="swiper-container"
                                        data-swiper="container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="content">
                                                        <div class="text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="256.721"
                                                                height="208.227" viewBox="0 0 256.721 208.227"
                                                                class="qout-svg">
                                                                <path data-name="Path"
                                                                    d="M-23.723-530.169v97.327H-121.05v-68.7q0-40.076,13.359-73.472T-62.845-639.9l36.259,28.625Q-63.8-570.244-68.57-530.169Zm158.395,0v97.327H37.345v-68.7q0-40.076,13.359-73.472T95.55-639.9l36.259,28.625Q94.6-570.244,89.825-530.169Z"
                                                                    transform="translate(121.55 640.568)" fill="none"
                                                                    stroke="#fff" stroke-width="1" opacity="0.322">
                                                                </path>
                                                            </svg>
                                                            <p class="fz-30">I have been hiring people in this
                                                                space for a number of years
                                                                and I have never seen this level of
                                                                professionalism. It really feels like you are
                                                                working with a team that can get the job
                                                                done.</p>
                                                        </div>
                                                        <div
                                                            class="info d-flex align-items-center pt-40 mt-40 bord-thin-top">
                                                            <div>
                                                                <div class="fit-img circle">
                                                                    <img src="{{ asset('assets/imgs/testim/t1.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="ml-20">
                                                                <h5>Biruk Fekade</h5>
                                                                <span class="sub-title main-color">CTO</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="content">
                                                        <div class="text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="256.721"
                                                                height="208.227" viewBox="0 0 256.721 208.227"
                                                                class="qout-svg">
                                                                <path data-name="Path"
                                                                    d="M-23.723-530.169v97.327H-121.05v-68.7q0-40.076,13.359-73.472T-62.845-639.9l36.259,28.625Q-63.8-570.244-68.57-530.169Zm158.395,0v97.327H37.345v-68.7q0-40.076,13.359-73.472T95.55-639.9l36.259,28.625Q94.6-570.244,89.825-530.169Z"
                                                                    transform="translate(121.55 640.568)" fill="none"
                                                                    stroke="#fff" stroke-width="1" opacity="0.322">
                                                                </path>
                                                            </svg>
                                                            <p class="fz-30">I have been hiring people in this
                                                                space for a number of years
                                                                and I have never seen this level of
                                                                professionalism. It really feels like you are
                                                                working with a team that can get the job
                                                                done.</p>
                                                        </div>
                                                        <div
                                                            class="info d-flex align-items-center pt-40 mt-40 bord-thin-top">
                                                            <div>
                                                                <div class="fit-img circle">
                                                                    <img src="{{ asset('assets/imgs/testim/t2.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="ml-20">
                                                                <h5>Mussie Mengistu</h5>
                                                                <span class="sub-title main-color">Founder &
                                                                    CEO</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-arrow-control control-abslout">
                                    <div class="swiper-button-prev">
                                        <span class="ti-arrow-left"></span>
                                    </div>
                                    <div class="swiper-button-next">
                                        <span class="ti-arrow-right"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-line">
                        <div class="line-overlay">
                            <svg viewBox="0 0 1728 1101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M-43 773.821C160.86 662.526 451.312 637.01 610.111 733.104C768.91 829.197 932.595 1062.9 602.782 1098.75C272.969 1134.6 676.888 25.4306 1852 1"
                                    style="stroke-dasharray: 3246.53, 0;"></path>
                            </svg>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Testimonials ==================== -->


                <!-- ==================== Start clients ==================== -->

                <section class="clients-carso section-padding pt-0 sub-bg">
                    <div class="container">
                        <div class="sec-bottom mb-100">
                            <div class="sub-bg d-flex align-items-center">
                                <h6 class="fz-14 fw-400">More than <span class="fw-600">10+ companies</span>
                                    worldwide</h6>
                            </div>
                        </div>
                        <div class="swiper5" data-carousel="swiper" data-items="5" data-loop="true" data-space="40">
                            <div id="content-carousel-container-unq-clients" class="swiper-container"
                                data-swiper="container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <img src="{{ asset('assets/imgs/brands/b1.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <img src="{{ asset('assets/imgs/brands/b2.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <img src="{{ asset('assets/imgs/brands/b3.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <img src="{{ asset('assets/imgs/brands/b4.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <img src="{{ asset('assets/imgs/brands/b6.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End clients ==================== -->



            </main>


            <!-- ==================== Start Footer ==================== -->

            <footer class="clean-footer crev bg-img" data-background="{{ asset('assets/imgs/header/bg1.jpg') }}"
                data-overlay-dark="10">
                <div class="container pb-40 section-padding ontop">
                    <div class="cal-action pb-50 mb-80 bord-thin-bottom">
                        <h2 class="fz-120 line-height-1 d-rotate wow">
                            <span class="rotate-text"><a href="page-contact3.html">Let’s Contact <span
                                        class="ml-30 fz-70 ti-arrow-top-right"></span></a></span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo icon-img-100">
                                <img src="{{ asset('assets/imgs/logo-light.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="column">
                                <div class="mb-40">
                                    <h6 class="sub-title mb-30">Address</h6>
                                    <h5 class="opacity-8">Ethiopia <br> Addis Ababa</h5>
                                </div>

                                <a href="#0" class="underline">
                                    <span class="fz-22 main-color">+2 593 (390) 59 58</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-1">
                            <div class="column">
                                <h6 class="sub-title mb-30">Useful Links</h6>
                                <ul class="rest fz-14">
                                    <li class="mb-15">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="{{ url('portfolio') }}">Portfolio</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="{{ url('contact') }}">Contact Info</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-30 pb-30 mt-80 bord-thin-top">
                        <div>
                            <ul class="rest d-flex align-items-center">
                                <li class="hover-this cursor-pointer">
                                    <a href="#0" class="hover-anim">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="hover-this cursor-pointer ml-30">
                                    <a href="#0" class="hover-anim">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                                <li class="hover-this cursor-pointer ml-30">
                                    <a href="#0" class="hover-anim">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="hover-this cursor-pointer ml-30">
                                    <a href="#0" class="hover-anim">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="ml-auto">
                            <p class="fz-14">© 2022 Powered by <span class="underline main-color"><a
                                        href="{{ url('contact') }}"
                                        target="_blank">Anduamlak Temesgen</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- ==================== End Footer ==================== -->


        </div>

    </div>










    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.4.0.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/smoother-script.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>

</html>
