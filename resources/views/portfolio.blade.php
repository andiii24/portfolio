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
    <link rel="stylesheet" href="assets/css/satoshi.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">

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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Home</span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="home-main.html">Main Home</a>
                            <a class="dropdown-item" href="home-startup-onepage.html">Modern Startup</a>
                            <a class="dropdown-item" href="home-creative-agency.html">Creative Agency</a>
                            <a class="dropdown-item" href="home-modern-agency.html">Modern Agency</a>
                            <a class="dropdown-item" href="home-creative-portfolio.html">Creative Portfolio</a>
                            <a class="dropdown-item" href="home-digital-agency.html">Digital Agency</a>
                            <a class="dropdown-item" href="home-freelancer.html">Freelancer</a>
                            <a class="dropdown-item" href="home-personal-vcard.html">Personal vCard</a>
                            <a class="dropdown-item" href="home-minimal-portfolio.html">Minimal Portfolio</a>
                            <a class="dropdown-item" href="home-asymmetric-portfolio.html">Asymmetric Portfolio</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Portfolio</span></a>
                        <div class="dropdown-menu mega-menu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="clumn mb-80">
                                            <div class="title">
                                                <h6 class="sub-title ls1 pb-20 bord-thin-bottom">Portfolio Type</h6>
                                            </div>
                                            <div class="links row">
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="portfolio-standard.html">Standerd</a>
                                                    <a class="dropdown-item" href="portfolio-gallery.html">Gallery</a>
                                                    <a class="dropdown-item" href="portfolio-metro.html">Metro</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="portfolio-masonry.html">Masonry</a>
                                                    <a class="dropdown-item"
                                                        href="portfolio-caption-cursor.html">Caption
                                                        Cursor</a>
                                                    <a class="dropdown-item" href="portfolio-outline.html">Outline</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="portfolio-parallax.html">Parallax</a>
                                                    <a class="dropdown-item" href="portfolio-sticky.html">Sticky</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="clumn">
                                            <div class="title">
                                                <h6 class="sub-title ls1 pb-20 bord-thin-bottom">Showcases</h6>
                                            </div>
                                            <div class="links row">
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="showcase-fullscreen.html">Parallax
                                                        Slider</a>
                                                    <a class="dropdown-item" href="showcase-carousel.html">Showcase
                                                        Carousel</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="showcase-half-slider.html">Creative
                                                        Slider</a>
                                                    <a class="dropdown-item"
                                                        href="showcase-interactive-full.html">Interactive Full</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item"
                                                        href="showcase-interactive-center.html">Interactive Center</a>
                                                    <a class="dropdown-item"
                                                        href="showcase-interactive-vertical.html">Interactive
                                                        Vertical</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="clumn">
                                            <div class="title">
                                                <h6 class="sub-title ls1 pb-20 bord-thin-bottom">Portfolio Single</h6>
                                            </div>
                                            <div class="links row">
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="project1.html">project1</a>
                                                    <a class="dropdown-item" href="project2.html">project2</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="project3.html">project3</a>
                                                    <a class="dropdown-item" href="project4.html">project4</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="project5.html">project5</a>
                                                    <a class="dropdown-item" href="project6.html">project6</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Pages</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="#0">About Us <i class="fas fa-angle-right icon-arrow"></i></a>
                                <ul class="dropdown-side">
                                    <li><a class="dropdown-item" href="page-about.html">About Us 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="page-about2.html">About Us 2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="page-about3.html">About Us 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-item">
                                <a href="#0">Services <i class="fas fa-angle-right icon-arrow"></i></a>
                                <ul class="dropdown-side">
                                    <li><a class="dropdown-item" href="page-services.html">Services 1</a></li>
                                    <li><a class="dropdown-item" href="page-services2.html">Services 2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="page-services-details.html">Services
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item">
                                <a href="#0">Contact Us <i class="fas fa-angle-right icon-arrow"></i></a>
                                <ul class="dropdown-side">
                                    <li><a class="dropdown-item" href="page-contact.html">Contact Us 1</a></li>
                                    <li><a class="dropdown-item" href="page-contact2.html">Contact Us 2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="page-contact3.html">Contact Us 3</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="page-team.html">Our Team</a></li>
                            <li><a class="dropdown-item" href="page-team-single.html">Team Details</a></li>
                            <li><a class="dropdown-item" href="page-FAQS.html">FAQS</a></li>
                            <li><a class="dropdown-item" href="page-error404.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Blogs</span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="blog-classic.html">Blog Standerd</a>
                            <a class="dropdown-item" href="blog-list.html">Blog List</a>
                            <a class="dropdown-item" href="blog-list2.html">Blog List 2</a>
                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-contact.html"><span class="rolling-text">Contact
                                Us</span></a>
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
                                    <div class="link cursor-pointer dmenu"><span class="fill-text"
                                            data-text="Home">Home</span> <i></i></div>
                                </div>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="home-main.html" class="sub-link">Main Home</a>
                                        </li>
                                        <li>
                                            <a href="home-startup-onepage.html" class="sub-link">Modern Startup</a>
                                        </li>
                                        <li>
                                            <a href="home-creative-agency.html" class="sub-link">Creative Agency</a>
                                        </li>
                                        <li>
                                            <a href="home-modern-agency.html" class="sub-link">Modern Agency</a>
                                        </li>
                                        <li>
                                            <a href="home-creative-portfolio.html" class="sub-link">Creative
                                                Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="home-digital-agency.html" class="sub-link">Digital Agency</a>
                                        </li>
                                        <li>
                                            <a href="home-freelancer.html" class="sub-link">Freelancer</a>
                                        </li>
                                        <li>
                                            <a href="home-personal-vcard.html" class="sub-link">Personal vCard</a>
                                        </li>
                                        <li>
                                            <a href="home-minimal-portfolio.html" class="sub-link">Minimal Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="home-asymmetric-portfolio.html" class="sub-link">Asymmetric
                                                Portfolio</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="o-hidden">
                                    <div class="link cursor-pointer dmenu"><span class="fill-text"
                                            data-text="Pages">Pages</span> <i></i>
                                    </div>
                                </div>
                                <div class="sub-menu no-bord">
                                    <ul>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                        data-text="About Us">About Us</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="page-about.html" class="sub-link">About Us v1</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-about2.html" class="sub-link">About Us v2</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-about3.html" class="sub-link">About Us v3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                        data-text="Services">Services</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="page-services.html" class="sub-link">Services v1</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-services2.html" class="sub-link">Services v2</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-services-details.html" class="sub-link">Services
                                                            Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                        data-text="Contact">Contact</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="page-contact.html" class="sub-link">Contact v1</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-contact2.html" class="sub-link">Contact v2</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-contact3.html" class="sub-link">Contact v3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                        data-text="Team">Team</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="page-team.html" class="sub-link">Our Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-team-single.html" class="sub-link">Team
                                                            Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                        data-text="Others">Others</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="page-FAQS.html" class="sub-link">FAQS</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-error404.html" class="sub-link">Error 404</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="o-hidden">
                                    <div class="link cursor-pointer dmenu"><span class="fill-text"
                                            data-text="Portfolio">Portfolio</span> <i></i>
                                    </div>
                                </div>
                                <div class="sub-menu no-bord">
                                    <ul>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                        data-text="Portfolio Type">Portfolio Type</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="portfolio-standard.html" class="sub-link">Standerd</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-gallery.html" class="sub-link">Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-metro.html" class="sub-link">Metro</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-masonry.html" class="sub-link">Masonry</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-caption-cursor.html" class="sub-link">Caption
                                                            Cursor</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-outline.html" class="sub-link">Outline</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-parallax.html" class="sub-link">Parallax</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-sticky.html" class="sub-link">Sticky</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                        data-text="Showcases">Showcases</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="showcase-fullscreen.html" class="sub-link">Parallax
                                                            Slider</a>
                                                    </li>
                                                    <li>
                                                        <a href="showcase-carousel.html" class="sub-link">Showcase
                                                            Carousel</a>
                                                    </li>
                                                    <li>
                                                        <a href="showcase-half-slider.html" class="sub-link">Creative
                                                            Slider</a>
                                                    </li>
                                                    <li>
                                                        <a href="showcase-interactive-full.html"
                                                            class="sub-link">Interactive
                                                            Full</a>
                                                    </li>
                                                    <li>
                                                        <a href="showcase-interactive-center.html"
                                                            class="sub-link">Interactive
                                                            Center</a>
                                                    </li>
                                                    <li>
                                                        <a href="showcase-interactive-vertical.html"
                                                            class="sub-link">Interactive Vertical</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                        data-text="Portfolio Single">Portfolio Single</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="project1.html" class="sub-link">project1</a>
                                                    </li>
                                                    <li>
                                                        <a href="project2.html" class="sub-link">project2</a>
                                                    </li>
                                                    <li>
                                                        <a href="project3.html" class="sub-link">project3</a>
                                                    </li>
                                                    <li>
                                                        <a href="project4.html" class="sub-link">project4</a>
                                                    </li>
                                                    <li>
                                                        <a href="project5.html" class="sub-link">project5</a>
                                                    </li>
                                                    <li>
                                                        <a href="project6.html" class="sub-link">project6</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="o-hidden">
                                    <div class="link cursor-pointer dmenu"><span class="fill-text"
                                            data-text="Blogs">Blogs</span> <i></i>
                                    </div>
                                </div>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a class="sub-link" href="blog-classic.html">Standard</a>
                                        </li>
                                        <li>
                                            <a class="sub-link" href="blog-list.html">Blog List</a>
                                        </li>
                                        <li>
                                            <a class="sub-link" href="blog-list2.html">Blog List 2</a>
                                        </li>
                                        <li>
                                            <a class="sub-link" href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="o-hidden">
                                    <a href="page-contact3.html" class="link"><span class="fill-text"
                                            data-text="Contact Us">Contact Us</span></a>
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

                <header class="main-header bg-img" data-background="assets/imgs/header/bg1.jpg" data-overlay-dark="8">
                    <div class="container pt-100">
                        <div class="row justify-content-end">
                            <div class="col-lg-6">
                                <div class="text mb-100">
                                    <h4>We are a creative studio that specializes in providing high-quality design and
                                        branding solutions to businesses and individuals.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid ontop">
                        <div class="container">
                            <div class="lg-text">
                                <div class="d-flex">
                                    <h6>BUILIDNG DIGITAL DESIGN</h6>
                                    <h6 class="ml-auto">CREATIVE STUDIO</h6>
                                </div>
                                <h1>Creative Agency</h1>
                            </div>
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/imgs/header/2.jpg') }}" alt="">
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
                                            <span class="up-text">If you’re looking for a specialist to build a</span>
                                        </span>
                                        <span class="sideup-text">
                                            <span class="up-text"> meaningful digital project you can easily</span>
                                        </span>
                                        <span class="sideup-text">
                                            <span class="up-text"> reach us by clicking <span class="underline"><a
                                                        href="page-contact3.html"
                                                        class="main-color">here</a></span></span>
                                        </span>
                                    </h4>
                                    <div class="exp mt-80 md-mb15">
                                        <h2 class="fz-70 numb-font">28 <span
                                                class="sub-title main-font opacity-7 ml-15">Years
                                                of Experience</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="text">
                                    <p>Whether you are a development agency looking to outsource design work, a company
                                        in search of a Product Designer or Product Team, a marketing agency that needs a
                                        landing page, a startup that wants to launch an app, or an enterprise that plans
                                        to rebrand or redesign its website, we welcome any challenge with our arms wide
                                        open.</p>
                                </div>
                                <div class="main-marq o-hidden mt-100">
                                    <div class="slide-har st1">
                                        <div class="box">
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>UI-UX Design</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Web Development</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Digital Marketing</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Digital Product</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Branding Design</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>UI-UX Design</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Web Development</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Digital Marketing</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Digital Product</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Branding Design</span>
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
                                    <img src="{{ asset('') }}assets/imgs/intro/04.jpg" alt="" class="radius-30">
                                </div>
                            </div>
                            <div class="col-lg-6 valign">
                                <div class="content full-width">
                                    <div class="sec-head mb-50">
                                        <h6 class="sub-title mb-15 main-color">Why Choose Us</h6>
                                        <h2 class="d-slideup wow">
                                            <span class="sideup-text">
                                                <span class="up-text">Best creative & modern</span>
                                            </span>
                                            <span class="sideup-text">
                                                <span class="up-text"> digital agency.</span>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-lg-11">
                                            <div class="text">
                                                <p>Taken possession of my entire soul, like
                                                    these sweet
                                                    mornings
                                                    of spring which
                                                    i enjoy with my whole.</p>
                                            </div>
                                            <div class="row mt-50 pt-50 bord-thin-top">
                                                <div class="col-sm-6">
                                                    <div class="item d-flex align-items-center sm-mb30">
                                                        <h2 class="fz-60 line-height-1"><span
                                                                class="numb-count">52</span></h2>
                                                        <span class="sub-title opacity-7 ml-30">Projects <br>
                                                            Completed</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="item d-flex align-items-center">
                                                        <h2 class="fz-60 line-height-1"><span
                                                                class="numb-count">6</span>k<span class="fz-30">+</span>
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
                                                <img src="{{ asset('') }}assets/imgs/serv-icons/3.png" alt="">
                                            </div>
                                            <h5 class="mb-15">Digital Product Design</h5>
                                            <p>Live workshop where we define the main problems and challenges before
                                                building a strategic plan moving forward.</p>
                                            <a href="page-services-details.html" class="rmore mt-30">
                                                <span class="sub-title">Read More</span>
                                                <img src="{{ asset('') }}assets/imgs/arrow-right.png" alt="" class="icon-img-20 ml-5">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item-box radius-15">
                                            <div class="icon mb-40 opacity-5">
                                                <img src="{{ asset('') }}assets/imgs/serv-icons/4.png" alt="">
                                            </div>
                                            <h5 class="mb-15">Web Developments</h5>
                                            <p>Live workshop where we define the main problems and challenges before
                                                building a strategic plan moving forward.</p>
                                            <a href="page-services-details.html" class="rmore mt-30">
                                                <span class="sub-title">Read More</span>
                                                <img src="{{ asset('') }}assets/imgs/arrow-right.png" alt="" class="icon-img-20 ml-5">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item-box radius-15">
                                            <div class="icon mb-40 opacity-5">
                                                <img src="{{ asset('') }}assets/imgs/serv-icons/5.png" alt="">
                                            </div>
                                            <h5 class="mb-15">Branding Design</h5>
                                            <p>Live workshop where we define the main problems and challenges before
                                                building a strategic plan moving forward.</p>
                                            <a href="page-services-details.html" class="rmore mt-30">
                                                <span class="sub-title">Read More</span>
                                                <img src="{{ asset('') }}assets/imgs/arrow-right.png" alt="" class="icon-img-20 ml-5">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item-box radius-15">
                                            <div class="icon mb-40 opacity-5">
                                                <img src="{{ asset('') }}assets/imgs/serv-icons/6.png" alt="">
                                            </div>
                                            <h5 class="mb-15">UI-UX Design</h5>
                                            <p>Live workshop where we define the main problems and challenges before
                                                building a strategic plan moving forward.</p>
                                            <a href="page-services-details.html" class="rmore mt-30">
                                                <span class="sub-title">Read More</span>
                                                <img src="{{ asset('') }}assets/imgs/arrow-right.png" alt="" class="icon-img-20 ml-5">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Services ==================== -->



                <!-- ==================== Start Marquee ==================== -->

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
                </section>

                <!-- ==================== End Marquee ==================== -->



                <!-- ==================== Start Portfolio ==================== -->

                <section class="inter-fixed-text section-padding">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <h6 class="sub-title main-color mb-25">Our Portfolio</h6>
                            <div class="bord pt-25 bord-thin-top d-flex justify-content-end">
                                <h2 class="fw-600 d-rotate wow">
                                    <span class="rotate-text">Our featured <span class="fw-200">projects</span></span>
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
                                            <img src="{{ asset('') }}assets/imgs/works/1/1.jpg" alt="">
                                            <a href="project1.html" class="link-overlay"></a>
                                        </div>
                                        <div class="cont">
                                            <span class="tag">Branding</span>
                                            <h2>Earthmade Aroma</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 items">
                                    <div class="item">
                                        <div class="img" data-tab="tab-2">
                                            <img src="{{ asset('') }}assets/imgs/works/1/2.jpg" alt="">
                                            <a href="project2.html" class="link-overlay"></a>
                                        </div>
                                        <div class="cont">
                                            <span class="tag">Branding</span>
                                            <h2>Blom Air Purifier</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 items">
                                    <div class="item">
                                        <div class="img" data-tab="tab-3">
                                            <img src="{{ asset('') }}assets/imgs/works/1/3.jpg" alt="">
                                            <a href="project3.html" class="link-overlay"></a>
                                        </div>
                                        <div class="cont">
                                            <span class="tag">Branding</span>
                                            <h2>Bank Rebranding</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="links-text">
                            <ul class="rest">
                                <li id="tab-1">
                                    <span class="tag">Branding</span>
                                    <h2>Earthmade Aroma</h2>
                                </li>
                                <li id="tab-2">
                                    <span class="tag">Branding</span>
                                    <h2>Blom Air Purifier</h2>
                                </li>
                                <li id="tab-3">
                                    <span class="tag">Branding</span>
                                    <h2>Bank Rebranding</h2>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="container mt-40">
                        <div class="sec-bottom mt-100">
                            <div class="main-bg d-flex align-items-center">
                                <p>Here are some select projects that showcase.</p>
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
                                                                    <img src="{{ asset('') }}assets/imgs/testim/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="ml-20">
                                                                <h5>Adam Beckley</h5>
                                                                <span class="sub-title main-color">Founder &
                                                                    CEO</span>
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
                                                                    <img src="{{ asset('') }}assets/imgs/testim/t2.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="ml-20">
                                                                <h5>Adam Beckley</h5>
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



                <!-- ==================== Start Team ==================== -->

                <section class="team section-padding">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <h6 class="sub-title main-color mb-25">Our Team</h6>
                            <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                                <h2 class="fw-600 d-rotate wow">
                                    <span class="rotate-text">Meet our <span class="fw-200">legends</span></span>
                                </h2>
                                <div class="ml-auto">
                                    <a href="page-team.html" class="go-more">
                                        <span class="text">Join to us</span>
                                        <span class="icon ti-arrow-top-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="item md-mb50">
                                    <div class="img">
                                        <img src="{{ asset('') }}assets/imgs/team/1.jpg" alt="">
                                        <div class="info">
                                            <span class="fz-12">Web Designer</span>
                                            <h6 class="fz-18">Robert De Niro</h6>
                                        </div>
                                    </div>
                                    <div class="social">
                                        <div class="links">
                                            <a href="#0">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#0">
                                                <i class="fab fa-behance"></i>
                                            </a>
                                            <a href="#0">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item md-mb50">
                                    <div class="img">
                                        <img src="{{ asset('') }}assets/imgs/team/2.jpg" alt="">
                                        <div class="info">
                                            <span class="fz-12">Web Designer</span>
                                            <h6 class="fz-18">Brendan Fraser</h6>
                                        </div>
                                    </div>
                                    <div class="social">
                                        <div class="links">
                                            <a href="#0">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#0">
                                                <i class="fab fa-behance"></i>
                                            </a>
                                            <a href="#0">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item">
                                    <div class="img">
                                        <img src="{{ asset('') }}assets/imgs/team/3.jpg" alt="">
                                        <div class="info">
                                            <span class="fz-12">Web Designer</span>
                                            <h6 class="fz-18">Brendan Fraser</h6>
                                        </div>
                                    </div>
                                    <div class="social">
                                        <div class="links">
                                            <a href="#0">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#0">
                                                <i class="fab fa-behance"></i>
                                            </a>
                                            <a href="#0">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Team ==================== -->



                <!-- ==================== Start Blog ==================== -->

                <section class="blog-list-half section-padding sub-bg">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <h6 class="sub-title main-color mb-25">Our Blog</h6>
                            <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                                <h2 class="fw-600 d-rotate wow">
                                    <span class="rotate-text">Read Latest <span class="fw-200">News</span></span>
                                </h2>
                                <div class="ml-auto">
                                    <a href="blog-list2.html" class="go-more">
                                        <span class="text">View all posts</span>
                                        <span class="icon ti-arrow-top-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item main-bg md-mb50">
                                    <div class="row rest">
                                        <div class="col-lg-6 col-md-5 img rest">
                                            <img src="{{ asset('assets/imgs/blog/b/2.jpg') }}" alt="" class="img-post">
                                            <div class="author d-flex align-items-center">
                                                <div>
                                                    <div class="fit-img icon-img-50 circle">
                                                        <img src="{{ asset('') }}assets/imgs/blog/author.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="ml-15 fz-14">
                                                    <div><span class="opacity-7">Posted by</span><br>UI-ThemeZ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 cont valign">
                                            <div class="full-width">
                                                <div class="tags mb-15">
                                                    <a href="blog-list.html">Marketing</a>
                                                </div>
                                                <h5>
                                                    <a href="blog-details.html">Free advertising for your online
                                                        business.</a>
                                                </h5>
                                                <span class="date fz-12 ls1 text-u opacity-7 mt-80">August 6,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item main-bg">
                                    <div class="row rest">
                                        <div class="col-lg-6 col-md-5 img rest">
                                            <img src="{{ asset('assets/imgs/blog/b/3.jpg') }}" alt="" class="img-post">
                                            <div class="author d-flex align-items-center">
                                                <div>
                                                    <div class="fit-img icon-img-50 circle">
                                                        <img src="{{ asset('') }}assets/imgs/blog/author.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="ml-15 fz-14">
                                                    <div><span class="opacity-7">Posted by</span><br>UI-ThemeZ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 cont valign">
                                            <div class="full-width">
                                                <div class="tags mb-15">
                                                    <a href="blog-list.html">Marketing</a>
                                                    <a href="blog-list.html">Design</a>
                                                </div>
                                                <h5>
                                                    <a href="blog-details.html">Business meeting 2023 in San
                                                        Francisco.</a>
                                                </h5>
                                                <span class="date fz-12 ls1 text-u opacity-7 mt-80">August 6,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Blog ==================== -->



                <!-- ==================== Start clients ==================== -->

                <section class="clients-carso section-padding pt-0 sub-bg">
                    <div class="container">
                        <div class="sec-bottom mb-100">
                            <div class="sub-bg d-flex align-items-center">
                                <h6 class="fz-14 fw-400">More than <span class="fw-600">200+ companies</span>
                                    trusted us
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
                                                <img src="{{ asset('') }}assets/imgs/brands/b1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <img src="{{ asset('') }}assets/imgs/brands/b2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <img src="{{ asset('') }}assets/imgs/brands/b3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <img src="{{ asset('') }}assets/imgs/brands/b4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <img src="{{ asset('') }}assets/imgs/brands/b6.png" alt="">
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

            <footer class="clean-footer crev bg-img" data-background="assets/imgs/header/bg1.jpg"
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
                                <img src="{{ asset('') }}assets/imgs/logo-light.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="column">
                                <div class="mb-40">
                                    <h6 class="sub-title mb-30">Address</h6>
                                    <h5 class="opacity-8">5919 Trussville <br> Crossings Pkwy, Birmingham</h5>
                                </div>

                                <a href="#0" class="underline">
                                    <span class="fz-22 main-color">+2 456 (343) 24 45</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-1">
                            <div class="column">
                                <h6 class="sub-title mb-30">Useful Links</h6>
                                <ul class="rest fz-14">
                                    <li class="mb-15">
                                        <a href="page-about.html">About</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="page-services.html">Services</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="blog-list2.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="page-contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="column">
                                <h6 class="sub-title mb-30">Support</h6>
                                <ul class="rest fz-14">
                                    <li class="mb-15">
                                        <a href="page-FAQS.html">FAQS</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="page-about.html">Term & Conditions</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="page-about.html">Privacy policy</a>
                                    </li>
                                    <li>
                                        <a href="page-about.html">Help</a>
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
                            <p class="fz-14">© 2023 InFolio is Proudly Powered by <span class="underline main-color"><a
                                        href="https://themeforest.net/user/ui-themez"
                                        target="_blank">UI-ThemeZ</a></span>
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
