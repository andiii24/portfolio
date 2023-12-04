<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from crowdytheme.com/html/info/info-demo/developer/index-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:38:49 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="INFO HTML5 Template">

  <title>Home - Developer</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.png">


  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/basictable.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
  <link rel="stylesheet" href="style.css">

</head>


<body class="font-heading-estedad light">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="I" class="characters">I</span>
          <span data-text="N" class="characters">N</span>
          <span data-text="F" class="characters">F</span>
          <span data-text="O" class="characters">O</span>
        </div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>

  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">mode</p>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="dark">dark</button>
          <button data-mode="light">light</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Language Support</p>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Layout</p>
        </div>
        <div class="switcher__btn layout-type wc-col-2">
          <button class="active" data-mode="full-width">Full Width</button>
          <button data-mode="box-layout">Box Layout</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Cursor</p>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->

  <!-- Offcanves start -->
  <div class="offcanvas__area">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasOne">
      <button class="offcanvas__close" data-bs-dismiss="offcanvas"><i class="fa-solid fa-xmark"></i></button>
      <div class="offcanvas__body">
        <div class="offcanvas__logo">
          <a href="index.html">
            <img src="assets/imgs/logo/site-logo-light.png" class="show-dark" alt="Offcanvas Logo">
            <img src="assets/imgs/logo/site-logo-dark.png" class="show-light" alt="Offcanvas Logo">
          </a>
          <p>Create live segments and target the right people for messages based on their behaviors.</p>
        </div>
        <div class="offcanvas__menu-area d-block">
          <div class="offcanvas__menu-wrapper"></div>
        </div>
        <div class="offcanvas__gallery">
          <p class="offcanvas__title">gallery</p>
          <div class="gallery__items">
            <div class="gallery__item">
              <a href="#"><img src="{{ asset('assets/imgs/thumb/gallery.jpg') }}" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
            <div class="gallery__item">
              <a href="#"><img src="{{ asset('assets/imgs/thumb/gallery-2.jpg') }}" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
            <div class="gallery__item">
              <a href="#"><img src="{{ asset('assets/imgs/thumb/gallery-3.jpg') }}" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
            <div class="gallery__item">
              <a href="#"><img src="{{ asset('assets/imgs/thumb/gallery-4.jpg') }}" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
            <div class="gallery__item">
              <a href="#"><img src="{{ asset('assets/imgs/thumb/gallery-5.jpg') }}" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
            <div class="gallery__item">
              <a href="#"><img src="{{ asset('assets/imgs/thumb/gallery-6.jpg') }}" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
          </div>
        </div>
        <div class="offcanvas__media">
          <p class="offcanvas__title">Follow</p>
          <ul>
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Offcanves end -->

  <nav class="offcanvas__menu">
    <ul>
      <li><a href="index.html">home</a></li>
      <li><a href="about.html">about</a></li>
      <li class="menu-item-has-children">
        <a href="#">Pages</a>
        <ul class="dp-menu">
          <li><a href="index.html">home dark</a></li>
          <li><a href="index-light.html">home light</a></li>
          <li><a href="about.html">about dark</a></li>
          <li><a href="about-light.html">about light</a></li>
          <li><a href="service.html">service dark</a></li>
          <li><a href="service-light.html">service light</a></li>
          <li><a href="service-details.html">service details dark</a></li>
          <li><a href="service-details-light.html">service details light</a></li>
          <li><a href="blog.html">blog dark</a></li>
          <li><a href="blog-light.html">blog light</a></li>
          <li><a href="blog-details.html">blog details dark</a></li>
          <li><a href="blog-details-light.html">blog details light</a></li>
          <li><a href="contact.html">contact dark</a></li>
          <li><a href="contact-light.html">contact light</a></li>
        </ul>
      </li>
      <li class="menu-item-has-children">
        <a href="#">project</a>
        <ul class="dp-menu">
          <li><a href="portfolio.html">project dark</a></li>
          <li><a href="portfolio-light.html">project light</a></li>
          <li><a href="portfolio-details.html">project details dark</a></li>
          <li><a href="portfolio-details-light.html">project details light</a></li>
        </ul>
      </li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">
        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>

        <!-- Header area start -->
        <header class="header__developer header-absolute">
          <div class="header__inner menu-none">
            <div class="header__logo">
              <a href="index.html">
                <img src="{{ asset('assets/imgs/logo/site-logo-light.png') }}" class="show-dark" alt="Site Logo">
                <img src="{{ asset('assets/imgs/logo/site-logo-dark.png') }}" class="show-light" alt="Site Logo">
              </a>
            </div>
            <div class="header__nav-icon">
              <button class="icon-circle" aria-label="icon-circle" id="open_offcanvas" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasOne">
                <span class="menu-icon-2"><span></span></span>
              </button>
            </div>
          </div>
        </header>
        <!-- Header area end -->

        <main>

          <!-- Hero section start -->
          <section class="developer-hero__area">
            <div class="container g-0 line">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                  <div class="developer-hero__left">

                    <div class="pb-20 cf_typewriter has_fade_anim" data-on-scroll="0">
                      <h1 class="typed_title color-primary">A Web
                        <span id="typed_list">
                          <span>Designer</span>
                          <span>Developer</span>
                          <span>programmer</span>
                        </span>
                        <span id="typed"></span>
                      </h1>
                    </div>

                    <div class="pb-0">
                      <h2 class="developer-hero__title has_text_reveal_anim" data-on-scroll="0" data-delay="0.65">
                        Jackson Clark</h2>
                    </div>

                    <div class="cf_text has_text_move_anim" data-on-scroll="0" data-delay="0.8">
                      <p>Based in Germany</p>
                    </div>

                    <div class="follow_on_social_ml has_fade_anim" data-on-scroll="0" data-delay=".8">
                      <div class="follow_on_social">
                        <h3 class="follow-me">Follow Me</h3>
                        <ul class="hover-zoom">
                          <li><a href="#" aria-label="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                          <li><a href="#" aria-label="social-icon"><i class="fa-brands fa-linkedin"></i></a></li>
                          <li><a href="#" aria-label="social-icon"><i class="fa-brands fa-twitter"></i></a></li>
                          <li><a href="#" aria-label="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                          <li><a href="#" aria-label="social-icon"><i class="fa-brands fa-pinterest-p"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                  <div class="developer-hero__right">
                    <div class="cf_image">
                      <img src="assets/imgs/hero/1.png" alt="Hero image">
                    </div>
                    <div class="developer-hero__info-wrapper">
                      <div class="developer-hero__hello cf_badge has_fade_anim">
                        <div class="say_hello ">
                          <p>Say hello!</p>
                          <a href="mailto:hello@joyamen.com">hello@joyamen.com</a>
                        </div>
                      </div>

                      <div class="developer-hero__experience">
                        <div class="work_process_experience">
                          <div class="work_experience">
                            <h3 class="experience"><span>5+</span> Years of <br>Experiences</h3>
                          </div>
                          <div class="work_process">
                            <a href="https://www.youtube.com/watch?v=PYuPmNFHTog" class="image-link video-popup">
                              <i class="fa-solid fa-play"></i></a>
                            <span>work <br> Process</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <img src="assets/imgs/shape/1.png" alt="Shape Image" class="hero-shape show-dark">
            <img src="assets/imgs/shape/6.png" alt="Shape Image" class="hero-shape show-light">
          </section>
          <!-- Hero section end -->


          <!-- Skill section start -->
          <section class="developer-skill__area">
            <div class="container g-0 line pb-120 pt-130">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper">
                    <div class="pb-20">
                      <h2 class="sec-sub-title has_text_reveal_anim">SKills</h2>
                    </div>
                    <h3 class="sec-title has_text_reveal_anim">My Advantage</h3>
                  </div>
                  <div class="col-xxl-12">
                    <div class="developer-skill__grid-3">
                      <div class="skill__item has_fade_anim" data-fade-from="left" data-delay="0.5">
                        <img src="{{ asset('assets/imgs/skills/icon/1.png') }}" alt="Skill Icon">
                        <h4 class="percentage wc-counter">98%</h4>
                        <h5 class="title">WordPress</h5>
                      </div>
                      <div class="skill__item has_fade_anim" data-fade-from="left" data-delay="0.6">
                        <img src="{{ asset('assets/imgs/skills/icon/2.png') }}" alt="Skill Icon">
                        <h4 class="percentage wc-counter">95%</h4>
                        <h5 class="title">Figma</h5>
                      </div>
                      <div class="skill__item has_fade_anim" data-fade-from="left" data-delay="0.7">
                        <img src="{{ asset('assets/imgs/skills/icon/3.png') }}" alt="Skill Icon">
                        <h4 class="percentage wc-counter">86%</h4>
                        <h5 class="title">Elementor</h5>
                      </div>
                      <div class="skill__item has_fade_anim" data-fade-from="left" data-delay="0.8">
                        <img src="{{ asset('assets/imgs/skills/icon/4.png') }}" alt="Skill Icon">
                        <h4 class="percentage wc-counter">73%</h4>
                        <h5 class="title">SKETCH</h5>
                      </div>
                      <div class="skill__item has_fade_anim" data-fade-from="left" data-delay="0.9">
                        <img src="{{ asset('assets/imgs/skills/icon/5.png') }}" alt="Skill Icon">
                        <h4 class="percentage wc-counter">62%</h4>
                        <h5 class="title">JavaScript</h5>
                      </div>
                      <div class="skill__item has_fade_anim" data-fade-from="left" data-delay="1">
                        <img src="{{ asset('assets/imgs/skills/icon/6.png') }}" alt="Skill Icon">
                        <h4 class="percentage wc-counter">98%</h4>
                        <h5 class="title">HTML & CSS</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Skill section end -->


          <!-- Resume section start -->
          <section class="developer-resume__area">
            <div class="developer-about__top-wrapper">
              <div class="swiper developer-about__slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <h3 class="developer-about__slide">about me</h3>
                  </div>
                  <div class="swiper-slide">
                    <h3 class="developer-about__slide">about me</h3>
                  </div>
                  <div class="swiper-slide">
                    <h3 class="developer-about__slide">about me</h3>
                  </div>
                  <div class="swiper-slide">
                    <h3 class="developer-about__slide">about me</h3>
                  </div>
                </div>
              </div>

              <div class="developer-about__top">
                <div class="container g-0 line">
                  <div class="line-col-3">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>

                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="work_experience-2">
                        <span class="experience text">10<span>+</span></span>
                        <h3 class="experience-title has_text_reveal_anim">years <br> <span>of experience</span></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="developer-resume__content">
              <div class="container g-0 line">
                <div class="line-col-3">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="row">
                  <div class="col-xxl-12">
                    <div class="sec-title-wrapper">
                      <div class="pb-20">
                        <h2 class="sec-sub-title has_char_anim">Resume</h2>
                      </div>
                      <h3 class="sec-title has_text_reveal_anim">My Resume</h3>
                    </div>
                  </div>
                  <div class="col-xxl-12">
                    <div class="developer-resume__tab-wrapper">
                      <div class="developer-resume__tab-menu">
                        <ul>
                          <li class="has_fade_anim" data-fade-from="left" data-delay="0.5"><a href="#" class="active"
                              data-rel="resume-tab-1">about me</a></li>
                          <li class="has_fade_anim" data-fade-from="left" data-delay="0.5"><a href="#"
                              data-rel="resume-tab-2" class="">experience</a></li>
                          <li class="has_fade_anim" data-fade-from="left" data-delay="0.5"><a href="#"
                              data-rel="resume-tab-3" class="">education</a></li>
                          <li class="has_fade_anim" data-fade-from="left" data-delay="0.5"><a href="#"
                              data-rel="resume-tab-4" class="">skills</a></li>
                          <li class="has_fade_anim" data-fade-from="left" data-delay="0.5"><a href="#"
                              data-rel="resume-tab-5" class="">awards</a></li>
                        </ul>
                      </div>

                      <div class="developer-resume__tab-list">
                        <div class="developer-resume-tab-box" id="resume-tab-1" style="display: block;">
                          <div class="developer-about__area">
                            <div class="developer-about__content">
                              <h2 class="developer-about__title has_text_reveal_anim">Product Designer</h2>
                              <div class="cf_text has_text_move_anim">
                                <p>Hi, my name is <strong class="color-white">Michel Halk</strong> and I began using
                                  WordPress when first began. I’ve spent most of my waking hours for the last ten years
                                  designing, programming and operating WordPress sites go beyond with exclusive
                                  designer.
                                </p>
                              </div>
                              <ul class="about__bio has_text_move_anim">
                                <li>Name <span>:</span> <strong>Michel Hakl</strong></li>
                                <li>Nationality <span>:</span> <strong>Germany</strong></li>
                                <li>Phone <span>:</span> <strong>+(2) 870 174 302</strong></li>
                                <li>Email <span>:</span> <strong>info@example.com</strong></li>
                                <li>Experience <span>:</span> <strong>10+ years</strong></li>
                                <li>Freelance <span>:</span> <strong>Available</strong></li>
                                <li>Skype <span>:</span> <strong>michel.halk28</strong></li>
                                <li>Language <span>:</span> <strong>German, ENglish</strong></li>
                              </ul>
                            </div>
                            <div class="developer-about__img cf_image has_fade_anim">
                              <img src="{{ asset('assets/imgs/about/1.png') }}" alt="About Me" class="about-me">
                              <img src="{{ asset('assets/imgs/shape/3.png') }}" alt="Shape Image" class="about-shape-1">
                              <img src="{{ asset('assets/imgs/shape/4.png') }}" alt="Shape Image" class="about-shape-2">
                            </div>
                          </div>
                        </div>

                        <div class="developer-resume-tab-box" id="resume-tab-2">
                          <div class="developer-experience__area">
                            <div class="experience__grid">
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="developer-resume-tab-box" id="resume-tab-3">
                          <div class="developer-experience__area">
                            <div class="experience__grid">
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="developer-resume-tab-box" id="resume-tab-4">
                          <div class="developer-skill__grid">
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="95">Figma</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="80">Adobe XD</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="85">Sketch</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="75">Prototype</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="75">WrodPress</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="75">React JS</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="75">Laravel</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="75">WIrframe</h3>
                            </div>
                          </div>
                        </div>

                        {{-- <div class="developer-resume-tab-box" id="resume-tab-5">
                          <div class="developer-award__area">
                            <div class="developer-award__grid">
                              <div class="award__item">
                                <h2 class="award__date">01 <span>2018</span></h2>
                                <img src="assets/imgs/award/1.png" class="show-dark" alt="Award Image">
                                <img src="assets/imgs/award/w-black.png" class="show-light" alt="Award Image">
                                <h3 class="award__title">02x Developer Award</h3>
                                <h4 class="award__status">Nominee</h4>
                              </div>
                              <div class="award__item">
                                <h2 class="award__date">01 <span>2018</span></h2>
                                <img src="assets/imgs/award/2.png" class="show-dark" alt="Award Image">
                                <img src="assets/imgs/award/webly-black.png" class="show-light" alt="Award Image">
                                <h3 class="award__title">02x Developer Award</h3>
                                <h4 class="award__status">winner</h4>
                              </div>
                              <div class="award__item">
                                <h2 class="award__date">01 <span>2018</span></h2>
                                <img src="assets/imgs/award/3.png" alt="Award Image">
                                <h3 class="award__title">02x Developer Award</h3>
                                <h4 class="award__status">Nominee</h4>
                              </div>
                              <div class="award__item">
                                <h2 class="award__date">01 <span>2018</span></h2>
                                <img src="assets/imgs/award/4.png" class="show-dark" alt="Award Image">
                                <img src="assets/imgs/award/4-dark.png" class="show-light" alt="Award Image">
                                <h3 class="award__title">02x Developer Award</h3>
                                <h4 class="award__status">winner</h4>
                              </div>
                            </div>
                          </div>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- About section end -->


          <!-- Portfolio section end -->
          <section class="developer-portfolio__area">
            <div class="container g-0 line pt-120 pb-60">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <div class="sec-title-wrapper">
                    <div class="pb-15">
                      <h2 class="sec-sub-title has_char_anim">Portfolio</h2>
                    </div>
                    <h3 class="sec-title has_text_reveal_anim">My recent <br> work</h3>
                  </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                  <div class="sec-text-width cf_text has_text_move_anim">
                    <p>My recent works that inform and provoke with creative <span>web & app developer</span> who dream
                      the world better place by creating captivating products.</p>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                  <div class="sec-btn cf_btn_link has_fade_anim">
                    <a href="portfolio.html" class="wc-btn-underline">View more works <span>
                        <i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper developer-portfolio__slider" data-autoplay="true" data-items="3">
              <div class="swiper-wrapper">
                <div class="swiper-slide has_fade_items_anim">
                  <div class="developer-portfolio__slide ">
                    <a href="portfolio-details.html">
                      <img src="{{ asset('assets/imgs/portfolio/1.jpg') }}" alt="Portfolio Image">
                      <h2 class="developer-portfolio__title">Visual identity</h2>
                      <h3 class="developer-portfolio__date">Kollor, 24/02/2018</h3>
                    </a>
                  </div>
                </div>
                <div class="swiper-slide has_fade_items_anim">
                  <div class="developer-portfolio__slide">
                    <a href="portfolio-details.html">
                      <img src="{{ asset('assets/imgs/portfolio/2.jpg') }}" alt="Portfolio Image">
                      <h2 class="developer-portfolio__title">Web Pix Layout</h2>
                      <h3 class="developer-portfolio__date">Kollor, 24/02/2018</h3>
                    </a>
                  </div>
                </div>
                <div class="swiper-slide has_fade_items_anim">
                  <div class="developer-portfolio__slide">
                    <a href="portfolio-details.html">
                      <img src="{{ asset('assets/imgs/portfolio/1.jpg') }}" alt="Portfolio Image">
                      <h2 class="developer-portfolio__title">Animated Motion</h2>
                      <h3 class="developer-portfolio__date">Kollor, 24/02/2018</h3>
                    </a>
                  </div>
                </div>
                <div class="swiper-slide has_fade_items_anim">
                  <div class="developer-portfolio__slide">
                    <a href="portfolio-details.html">
                      <img src="{{ asset('assets/imgs/portfolio/2.jpg') }}" alt="Portfolio Image">
                      <h2 class="developer-portfolio__title">Visual identity</h2>
                      <h3 class="developer-portfolio__date">Kollor, 24/02/2018</h3>
                    </a>
                  </div>
                </div>
                <div class="swiper-slide has_fade_items_anim">
                  <div class="developer-portfolio__slide">
                    <a href="portfolio-details.html">
                      <img src="{{ asset('assets/imgs/portfolio/1.jpg') }}" alt="Portfolio Image">
                      <h2 class="developer-portfolio__title">Animated Motion</h2>
                      <h3 class="developer-portfolio__date">Kollor, 24/02/2018</h3>
                    </a>
                  </div>
                </div>
                <div class="swiper-slide has_fade_items_anim">
                  <div class="developer-portfolio__slide">
                    <a href="portfolio-details.html">
                      <img src="{{ asset('assets/imgs/portfolio/2.jpg') }}" alt="Portfolio Image">
                      <h2 class="developer-portfolio__title">Web Pix Layout</h2>
                      <h3 class="developer-portfolio__date">Kollor, 24/02/2018</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="container line pb-120">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </div>
          </section>
          <!-- Portfolio section start -->


          <!-- Service section start -->
          <section class="developer-service__area">
            <div class="container g-0 line pt-120">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="sec-title-wrapper">
                    <div class="pb-15">
                      <h2 class="sec-sub-title has_char_anim">Service</h2>
                    </div>
                    <h3 class="sec-title has_text_reveal_anim">My Expertise <br> Area</h3>
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="sec-text-width cf_text has_text_move_anim">
                    <p>Creative <strong class="color-white">web & app developer</strong> who dream the world better
                      place
                      creating the most captivating products.</p>
                  </div>
                </div>
              </div>
              <div class="developer-service__grid">
                <div class="developer-service__item cf_expert_card has_fade_anim" data-fade-from="left"
                  data-delay="0.5">
                  <a href="service-details.html">
                    <div class="wcf__iconbox style-7">
                      <h2 class="title">Web <br> Development</h2>
                      <div class="icon">
                        <img src="assets/imgs/service/icon/1.png" alt="Icon">
                      </div>
                      <p class="desc">I offer you electrical repairing services for new construction projects</p>
                    </div>
                  </a>
                </div>

                <div class="developer-service__item cf_expert_card has_fade_anim" data-fade-from="left"
                  data-delay="0.6">
                  <a href="service-details.html">
                    <div class="wcf__iconbox style-7">
                      <h2 class="title">Digital <br> Marketing</h2>
                      <div class="icon">
                        <img src="assets/imgs/service/icon/2.png" alt="Icon">
                      </div>
                      <p class="desc">I offer you electrical repairing services for new construction projects</p>
                    </div>
                  </a>
                </div>

                <div class="developer-service__item cf_expert_card has_fade_anim" data-fade-from="left"
                  data-delay="0.7">
                  <a href="service-details.html">
                    <div class="wcf__iconbox style-7">
                      <h2 class="title">Brand <br> identity</h2>
                      <div class="icon">
                        <img src="assets/imgs/service/icon/3.png" alt="Icon">
                      </div>
                      <p class="desc">I offer you electrical repairing services for new construction projects</p>
                    </div>
                  </a>
                </div>

                <div class="developer-service__item cf_expert_card has_fade_anim" data-fade-from="left"
                  data-delay="0.8">
                  <a href="service-details.html">
                    <div class="wcf__iconbox style-7">
                      <h2 class="title">Interation <br> Design</h2>
                      <div class="icon">
                        <img src="assets/imgs/service/icon/4.png" alt="Icon">
                      </div>
                      <p class="desc">I offer you electrical repairing services for new construction projects</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
          <!-- Service section end -->


          <!-- Testimonial section start -->
          {{-- <section class="developer-testimonial__area">
            <div class="container g-0 line pt-120 pb-120">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper">
                    <div class="pb-20">
                      <h2 class="sec-sub-title has_word_anim">Testimonials</h2>
                    </div>
                    <h3 class="sec-title has_text_reveal_anim">Clents Feedback</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xxl-12">
                  <div class="developer-testimonial__slider-wrapper">
                    <div class="swiper developer-testimonial__slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="developer-testimonial__slide">
                            <div class="cf_image has_fade_anim" data-fade-from="in" data-ease="bounce">
                              <img src="{{ asset('assets/imgs/testimonial/client/1.png') }}" alt="Client Image">
                            </div>

                            <div class="cf_text has_fade_anim">
                              <p>Joya was fantastic with being responsive, professional, knowledgeable, and skilled. He
                                was able to grasp the concept that was intended and helped me decide on clean and
                                beautiful
                                presentation guy. </p>
                            </div>
                            <h3 class="client-name has_char_anim">Mukkher Halk</h3>
                            <h4 class="client-role has_char_anim">CEO, Admand</h4>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="developer-testimonial__slide">
                            <img src="{{ asset('assets/imgs/testimonial/client/1.png') }}" alt="Client Image">
                            <p>Joya was fantastic with being responsive, professional, knowledgeable, and skilled. He
                              was
                              able to grasp the concept that was intended and helped me decide on clean and beautiful
                              presentation guy. </p>
                            <h3 class="client-name">Mukkher Halk</h3>
                            <h4 class="client-role">CEO, Admand</h4>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="developer-testimonial__slide">
                            <img src="{{ asset('assets/imgs/testimonial/client/1.png') }}" alt="Client Image">
                            <p>Joya was fantastic with being responsive, professional, knowledgeable, and skilled. He
                              was
                              able to grasp the concept that was intended and helped me decide on clean and beautiful
                              presentation guy. </p>
                            <h3 class="client-name">Mukkher Halk</h3>
                            <h4 class="client-role">CEO, Admand</h4>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="developer-testimonial__slide">
                            <img src="{{ asset('assets/imgs/testimonial/client/1.png') }}" alt="Client Image">
                            <p>Joya was fantastic with being responsive, professional, knowledgeable, and skilled. He
                              was
                              able to grasp the concept that was intended and helped me decide on clean and beautiful
                              presentation guy. </p>
                            <h3 class="client-name">Mukkher Halk</h3>
                            <h4 class="client-role">CEO, Admand</h4>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="developer-testimonial__slide">
                            <img src="{{ asset('assets/imgs/testimonial/client/1.png') }}" alt="Client Image">
                            <p>Joya was fantastic with being responsive, professional, knowledgeable, and skilled. He
                              was
                              able to grasp the concept that was intended and helped me decide on clean and beautiful
                              presentation guy. </p>
                            <h3 class="client-name">Mukkher Halk</h3>
                            <h4 class="client-role">CEO, Admand</h4>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="btn-swiper btn-prev"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="btn-swiper btn-next"><i class="fa-solid fa-arrow-right"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </section> --}}
          <!-- Testimonial section end -->


          <!-- Brand section start -->
          <section class="developer-brand__area">
            <div class="container g-0 line">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4">
                  <div class="developer-brand-title-width">
                    <h2 class="brand__title-2 has_text_reveal_anim">Worked more than 50 global largest brands</h2>
                  </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8">
                  <div class="developer-brand__width">
                    <div class="swiper brand_logo_slider" data-autoplay="true" data-itemperviwe="5">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="brand__logo">
                            <img src="{{ asset('assets/imgs/brand/1.png') }}" alt="Brand Logo">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="brand__logo">
                            <img src="{{ asset('assets/imgs/brand/2.png') }}" alt="Brand Logo">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="brand__logo">
                            <img src="{{ asset('assets/imgs/brand/3.png') }}" alt="Brand Logo">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="brand__logo">
                            <img src="{{ asset('assets/imgs/brand/4.png') }}" alt="Brand Logo">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="brand__logo">
                            <img src="{{ asset('assets/imgs/brand/5.png') }}" alt="Brand Logo">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="brand__logo">
                            <img src="{{ asset('assets/imgs/brand/4.png') }}" alt="Brand Logo">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Brand section end -->


          <!-- Blog section start -->
          <section class="developer-blog__area">
            <div class="container g-0 line pb-120 pt-120">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper">
                    <div class="pb-20">
                      <h2 class="sec-sub-title has_char_anim">Blog</h2>
                    </div>
                    <h3 class="sec-title has_text_move_anim">Recent Blog</h3>
                  </div>
                </div>
              </div>
              <div class="developer-blog__grid">
                <article class="developer-blog__item blog-img-leftmove fade_dev_blog_items_anim">
                  <a href="blog-details.html"><img src="assets/imgs/blog/1.jpg" alt="Blog Thumbnail"></a>
                  <ul class="developer-blog__meta">
                    <li><a href="#">Ui design</a></li>
                    <li><a href="#">03 May 2019</a></li>
                  </ul>
                  <h4 class="developer-blog__title"><a href="blog-details.html">A Sneak-Peek Inside The Southeast Asian
                      Web
                      Community</a></h4>
                  <a href="blog-details.html" class="developer-blog__link">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
                <article class="developer-blog__item blog-img-leftmove fade_dev_blog_items_anim">
                  <a href="blog-details.html"><img src="assets/imgs/blog/2.jpg" alt="Blog Thumbnail"></a>
                  <ul class="developer-blog__meta">
                    <li><a href="#">Ui design</a></li>
                    <li><a href="#">03 May 2019</a></li>
                  </ul>
                  <h4 class="developer-blog__title"><a href="blog-details.html">Designing The Perfect Feature Comparison
                      Table</a></h4>
                  <a href="blog-details.html" class="developer-blog__link">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
                <article class="developer-blog__item blog-img-leftmove fade_dev_blog_items_anim">
                  <a href="blog-details.html"><img src="assets/imgs/blog/3.jpg" alt="Blog Thumbnail"></a>
                  <ul class="developer-blog__meta">
                    <li><a href="#">Ui design</a></li>
                    <li><a href="#">03 May 2019</a></li>
                  </ul>
                  <h4 class="developer-blog__title"><a href="blog-details.html">Resolving Conflicts Between Designers
                      And Engineers</a>
                  </h4>
                  <a href="blog-details.html" class="developer-blog__link">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
                <article class="developer-blog__item blog-img-leftmove fade_dev_blog_items_anim">
                  <a href="blog-details.html"><img src="assets/imgs/blog/10.jpg" alt="Blog Thumbnail"></a>
                  <ul class="developer-blog__meta">
                    <li><a href="#">Ui design</a></li>
                    <li><a href="#">03 May 2019</a></li>
                  </ul>
                  <h4 class="developer-blog__title"><a href="blog-details.html">Resolving Conflicts Between Designers
                      And Engineers</a>
                  </h4>
                  <a href="blog-details.html" class="developer-blog__link">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>
            </div>
          </section>
          <!-- Blog section end -->

        </main>

        <!-- Footer section start -->
        <footer class="footer__area pb-0">
          <div class="footer__top">
            <div class="container line g-0">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3">
                  <div class="footer__logo">
                    <a href="index.html"><img src="{{ asset('assets/imgs/logo/site-logo-light.png') }}" class="show-dark"
                        alt="Footer Logo"></a>
                    <a href="index.html"><img src="{{ asset('assets/imgs/logo/site-logo-dark.png') }}" class="show-light"
                        alt="Footer Logo"></a>
                  </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-9">
                  <div class="footer__info">
                    <div class="footer__contact">
                      <h3 class="footer__title">Contact</h3>
                      <a href="tel:+(2)871382023" class="footer__link">+(2) 871 382 023</a>
                    </div>
                    <div class="footer__email">
                      <h3 class="footer__title">Email</h3>
                      <a href="mailto:hello@joyamen.com" class="footer__link">hello@joyamen.com</a>
                    </div>
                    <div class="footer__social">
                      <h3 class="footer__title">Follow</h3>
                      <ul class="hover-zoom">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer__btm">
            <div class="container">
              <div class="row">
                <div class="col-xxl-12">
                  <div class="copyright">
                    <p>© 2022 - 2025 | Alrights reserved by <a href="https://crowdyflow.com/">CrowdyFlow</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- Footer section end -->
      </div>
    </div>
  </div>




  <!-- All JS files -->
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/counter.js') }}"></script>
  <script src="{{ asset('assets/js/typed.js') }}"></script>
  <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
  <script src="{{ asset('assets/js/progressbar.js') }}"></script>
  <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
  <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
  <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/beforeafter.jquery-1.0.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/basictable.min.js') }}"></script>
  <script src="{{ asset('assets/js/backToTop.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/error-handling.js') }}"></script>
  <script src="{{ asset('assets/js/offcanvas.js') }}"></script>
  <script src="{{ asset('assets/js/wc-cursor.js') }}"></script>

</body>


<!-- Mirrored from crowdytheme.com/html/info/info-demo/developer/index-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:39:16 GMT -->
</html>