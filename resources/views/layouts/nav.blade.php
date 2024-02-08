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
