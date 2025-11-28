<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Salonix - Hair, Spa, Nail, Beauty Salons and Cosmetics Multipurpose HTML Template" />
    <title>Salonix - Hair, Spa, Nail, Beauty Salons and Cosmetics Multipurpose HTML Template</title>
    <link rel="shortcut icon" href="{{  asset('guest/assets/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="stylesheet" href="{{  asset('guest/assets/fonts/phosphor-icons/style.css') }}" as="font" />
    <link rel="stylesheet" href="{{  asset('guest/assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('guest/assets/css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('guest/assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{  asset('guest/assets/css/nice-select2.css') }}" />
    <link rel="stylesheet" href="{{  asset('guest/assets/css/glightbox.min.css') }}" />
    <link href="{{  asset('guest/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Header -->

    <!-- Header -->
     
    <!-- back to top -->
    <button class="back-to-top">
        <i class="ph ph-arrow-up"></i>
    </button>

    <!-- Banner section -->
    <section id="banner" class="banner space-header">
        <div class="banner-img">
            <img src="{{  asset('guest/assets/images/home1-banner.webp')}}" loading="lazy" alt="" />
        </div>
        <div class="bg-shadow"></div>
        <div class="banner-down-arrow">
            <i class="ph ph-arrow-down"></i>
        </div>
        <div class="side-text flex-column align-items-center gap-5">
            <h3 class="vertical dmSansFont">Your Hair, Your Style</h3>
        </div>
        <div class="line"></div>
        <div class="line two"></div>
        <div class="line three"></div>
        <div class="container">
            <div class="row banner-content z-2">
                <span class="hero-sub-heading">Transform Your Style Today</span>
                <div class="col-12">
                    <h2 class="hero-text mb-0">Creating Styles,</h2>
                </div>
                <div class="col-12">
                    <h2 class="hero-text">Inspiring Smiles</h2>
                </div>
                <div class="col-12 col-md-6">
                    <p>We believe every strand tells a story, and we're here to help you tell yours with elegance and style.</p>
                </div>
                <div class="col-12">
                    <div class="col-12 col-md-6">
                        <div class="d-flex justify-content-between align-items-center gap-2 search-box">
                            <input type="text" placeholder="Search here..." />
                            <button aria-label="search button" class="search-button">
                                <i class="ph ph-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About section start -->
    <section id="about" class="about">
        <h2 class="vertical dmSansFont">About us</h2>
        <div class="counter-wrapper position-relative z-3">
            <div class="container counter">
                <div class="row g-3 text-center counter-inner">
                    <div class="col-sm-6 col-lg-3 d-flex flex-column align-items-center z-1">
                        <p class="display-3 mb-0 text-n700"><span id="odometer1" class="odometer" data-count="25"></span>+</p>
                        <span>Years of experiences</span>
                    </div>
                    <div class="col-sm-6 col-lg-3 d-flex flex-column align-items-center z-1">
                        <p class="display-3 mb-0 text-n700"><span id="odometer2" class="odometer" data-count="150"></span>+</p>
                        <span>Unique Services</span>
                    </div>
                    <div class="col-sm-6 col-lg-3 d-flex flex-column align-items-center z-1">
                        <p class="display-3 mb-0 text-n700"><span id="odometer3" data-count="50" class="odometer"></span>+</p>
                        <span>Expert Stylists</span>
                    </div>
                    <div class="col-sm-6 col-lg-3 d-flex flex-column align-items-center z-1 full-width">
                        <p class="display-3 mb-0 text-n700"><span id="odometer4" data-count="10" class="odometer"></span>k+</p>
                        <span>Happy Clients</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{  asset('guest/assets/images/about-1.webp')}}" class="about-img" alt="" />
                    </div>
                    <div class="col-lg-6 z-2 position-relative">
                        <div class="line"></div>
                        <div class="line two"></div>
                        <div class="line three"></div>
                        <div class="about-content">
                            <span class="sub-heading fade_up_anim">Our Story, Your Style</span>
                            <h2 class="fade_up_anim mb-3">Transforming Hair Style Empowering Beauty</h2>
                            <p class="pb-lg-3 mb-3 fade_up_anim" data-delay=".3">We believe beauty is more than skin deep—it’s a reflection of your inner confidence and individuality, one style at a time.</p>
                            <ul class="team-feature">
                                <li><i class="ph ph-check-circle"></i> <span>Personalized Styling</span></li>
                                <li><i class="ph ph-check-circle"></i> <span>Flexible Booking Options </span></li>
                                <li><i class="ph ph-check-circle"></i> <span>Satisfaction Guarantee </span></li>
                            </ul>
                            <a href="services.html" class="primary-btn playFairFont">See All Services <i class="ph ph-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->

    <!-- services section start -->
    <section class="services" id="services">
        <div class="left-text d-none d-xxl-block">
            <h2 class="vertical-white dmSansFont">services</h2>
        </div>

        <div class="container">
            <div class="row align-items-center g-3 gx-xl-4 section-title justify-content-between">
                <div class="col-lg-6">
                    <span class="sub-heading fade_up_anim">What We Offer</span>
                    <h2 class="mb-3 fade_up_anim text-uppercase">Explore Our Wide Range of Premium Services</h2>
                </div>
                <div class="col-lg-5">
                    <p class="fade_up_anim" data-delay=".3">We’re dedicated to transforming your hair into a masterpiece. Our expert stylists offer a wide range of services tailored.</p>
                    <p class="fade_up_anim second" data-delay=".3">Whether you're looking for a quick touch-up or a complete makeover, Salonix is here to deliver an experience.</p>
                </div>
            </div>
            <div class="service-card-area row">
                <div class="service-card col-sm-6 col-lg-3">
                    <img src="{{  asset('guest/assets/images/service-1.png')}}" width="72" height="72" alt="" />
                    <h4>Haircuts &amp; Styling</h4>
                    <p>Perfect precision cuts and styling tailored to your face shape</p>
                    <div class="d-flex align-items-center">
                        <div class="readmore">
                            <a href="service-details.html" class="playFairFont">Read More</a>
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="service-card col-sm-6 col-lg-3">
                    <img src="{{  asset('guest/assets/images/service-2.png')}}" width="72" height="72" alt="" />
                    <h4>Hair Coloring</h4>
                    <p>From natural hues to vibrant shades, our color experts</p>
                    <div class="d-flex align-items-center">
                        <div class="readmore">
                            <a href="service-details.html" class="playFairFont">Read More</a>
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="service-card col-sm-6 col-lg-3">
                    <img src="{{  asset('guest/assets/images/service-3.png')}}" width="72" height="72" alt="" />
                    <h4>Balayage &amp; Ombre</h4>
                    <p>Achieve a sun-kissed, blended color effect with our balayage</p>
                    <div class="d-flex align-items-center">
                        <div class="readmore">
                            <a href="service-details.html" class="playFairFont">Read More</a>
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="service-card col-sm-6 col-lg-3">
                    <img src="{{  asset('guest/assets/images/service-4.png')}}" width="72" height="72" alt="" />
                    <h4>Blowouts</h4>
                    <p>Get that salon-fresh, voluminous look with our professional</p>
                    <div class="d-flex align-items-center">
                        <div class="readmore">
                            <a href="service-details.html" class="playFairFont">Read More</a>
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="service-card col-sm-6 col-lg-3">
                    <img src="{{  asset('guest/assets/images/service-5.png')}}" width="72" height="72" alt="" />
                    <h4>Keratin Treatments</h4>
                    <p>Smooth, straighten, and shine with our keratin hair treatment.</p>
                    <div class="d-flex align-items-center">
                        <div class="readmore">
                            <a href="service-details.html" class="playFairFont">Read More</a>
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="service-card col-sm-6 col-lg-3">
                    <img src="{{  asset('guest/assets/images/service-6.png')}}" width="72" height="72" alt="" />
                    <h4>Scalp Treatments</h4>
                    <p>Rejuvenate your scalp and promote healthy hair growth</p>
                    <div class="d-flex align-items-center">
                        <div class="readmore">
                            <a href="service-details.html" class="playFairFont">Read More</a>
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="service-card col-sm-6 col-lg-3">
                    <img src="{{  asset('guest/assets/images/service-7.png')}}" width="72" height="72" alt="" />
                    <h4>Deep Conditioning</h4>
                    <p>Revitalize and hydrate your hair with our intense conditioning.</p>
                    <div class="d-flex align-items-center">
                        <div class="readmore">
                            <a href="service-details.html" class="playFairFont">Read More</a>
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="service-card col-sm-6 col-lg-3">
                    <img src="{{  asset('guest/assets/images/service-8.png')}}" width="72" height="72" alt="" />
                    <h4>Kids’ Haircuts</h4>
                    <p>Gentle, fun, and stylish haircuts for your little ones.</p>
                    <div class="d-flex align-items-center">
                        <div class="readmore">
                            <a href="service-details.html" class="playFairFont">Read More</a>
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4 pt-xl-3">
                <a href="services.html" class="outline-btn playFairFont secondary">all services <i class="ph ph-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- service section end -->

    <!-- why choose section start -->
    <section class="whychoose">
        <div class="side-text d-none d-xl-flex flex-column align-items-center gap-5">
            <h2 class="vertical dmSansFont">why choose</h2>
        </div>
        <div class="line"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 position-relative">
                    <div class="reveal reveal--right">
                        <div class="whychoose-card">
                            <span class="sub-heading fade_up_anim">Why Choose Salonix?</span>
                            <h2 class="pb-1 fade_up_anim text-uppercase">Building Trust, One Strand at a Time</h2>
                            <p class="mb-4 fade_up_anim" data-delay=".3">We believe your hair deserves nothing but the best. That’s why we offer an unparalleled salon experience, combining expert stylists, premium products, and a personalized approach.</p>
                            <ul class="why-list fade_up_anim" data-delay=".6">
                                <li>• Expert Stylists</li>
                                <li>• Premium Products</li>
                                <li>• Personalized Services</li>
                                <li>• Client-Centric Approach</li>
                            </ul>
                            <a class="primary-btn" href="services-two.html">Show Services <i class="ph ph-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="d-none col-lg-2 col-xl-3 d-lg-block position-relative">
                    <div class="about-line-2"></div>
                    <div class="about-line-3"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose section end -->

    <!-- Pricing Section Start  -->
    <section class="pricing-section">
        <div class="right-text d-none d-xl-block">
            <h2 class="vertical dmSansFont">Pricing List</h2>
        </div>

        <div class="container">
            <div class="row align-items-center g-3 gx-xl-4 section-title justify-content-center align-items-center">
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column text-center">
                    <span class="sub-heading fade_up_anim">Our Service Pricing</span>
                    <h2 class="mb-3 fade_up_anim text-uppercase">Pricing That Works for You</h2>
                    <p class="fade_up_anim" data-delay=".3">We believe in delivering premium salon experiences at prices that suit your budget. Our pricing structure is transparent, competitive.</p>
                </div>
            </div>
            <div class="pricing-list-area row">
                <div class="col-lg-6 d-flex flex-column left-side-pricing">
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Basic Haircut</p>
                            <div class="dashed-line"></div>
                            <p class="price">$30.00</p>
                        </div>
                        <p class="pt-1">Precision cuts for everyday elegance.</p>
                    </div>
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Styling &amp; Blow Dry</p>
                            <div class="dashed-line"></div>
                            <p class="price">$40.00</p>
                        </div>
                        <p class="pt-1">Perfectly polished and styled hair.</p>
                    </div>
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Hair Coloring</p>
                            <div class="dashed-line"></div>
                            <p class="price">$25.00</p>
                        </div>
                        <p class="pt-1">From natural hues to vibrant shades, our color experts</p>
                    </div>
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Root Touch-Up</p>
                            <div class="dashed-line"></div>
                            <p class="price">$25.00</p>
                        </div>
                        <p class="pt-1">Seamless color for growing roots.</p>
                    </div>
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Full Hair Color</p>
                            <div class="dashed-line"></div>
                            <p class="price">$25.00</p>
                        </div>
                        <p class="pt-1">Perfectly polished and styled hair.</p>
                    </div>
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Balayage</p>
                            <div class="dashed-line"></div>
                            <p class="price">$25.00</p>
                        </div>
                        <p class="pt-1">Natural, sun-kissed highlights.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column right-side-pricing">
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Basic Haircut</p>
                            <div class="dashed-line"></div>
                            <p class="price">$30.00</p>
                        </div>
                        <p class="pt-1">Precision cuts for everyday elegance.</p>
                    </div>
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Styling &amp; Blow Dry</p>
                            <div class="dashed-line"></div>
                            <p class="price">$40.00</p>
                        </div>
                        <p class="pt-1">Perfectly polished and styled hair.</p>
                    </div>
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Hair Coloring</p>
                            <div class="dashed-line"></div>
                            <p class="price">$25.00</p>
                        </div>
                        <p class="pt-1">From natural hues to vibrant shades, our color experts</p>
                    </div>
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Root Touch-Up</p>
                            <div class="dashed-line"></div>
                            <p class="price">$25.00</p>
                        </div>
                        <p class="pt-1">Seamless color for growing roots.</p>
                    </div>
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Full Hair Color</p>
                            <div class="dashed-line"></div>
                            <p class="price">$25.00</p>
                        </div>
                        <p class="pt-1">Perfectly polished and styled hair.</p>
                    </div>
                    <div class="item">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <p class="name">Balayage</p>
                            <div class="dashed-line"></div>
                            <p class="price">$25.00</p>
                        </div>
                        <p class="pt-1">Natural, sun-kissed highlights.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center mt-4 pt-xl-3">
                <a href="#" class="outline-btn secondary playFairFont">see all price <i class="ph ph-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- experts section start -->
    <section class="services experts" id="experts">
        <div class="left-text d-none d-xl-block">
            <h2 class="vertical dmSansFont">expert team</h2>
        </div>

        <div class="container">
            <div class="row align-items-end g-4 section-title">
                <div class="col-lg-6">
                    <span class="sub-heading fade_up_anim">Our Service Pricing</span>
                    <h2 class="mb-3 fade_up_anim text-white text-uppercase">Talented, Experienced, Trusted</h2>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <p class="fade_up_anim text-white" data-delay=".3">We take pride in our team of talented, passionate, and experienced professionals.</p>
                </div>
            </div>
            <div class="swiper expertSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="expert-card">
                            <div class="img-box">
                                <img src="{{  asset('guest/assets/images/expert-1.webp')}}" class="img-fluid" alt="expert image" width="352" height="306" />
                                <div class="social">
                                    <ul class="links mb-0">
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-facebook-logo"></i></a>
                                        </li>
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-twitter-logo"></i></a>
                                        </li>
                                    </ul>
                                    <button aria-label="show social links" class="social-btn z-2"><i class="ph ph-plus"></i></button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between card-footer align-items-end">
                                <div>
                                    <h5 class="fw-semibold text-white">Darrell Steward</h5>
                                    <p class="mb-0 text-white">Senior Hair Stylist</p>
                                </div>
                                <div class="number text-white">01</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="expert-card">
                            <div class="img-box">
                                <img src="{{  asset('guest/assets/images/expert-2.webp')}}" class="img-fluid" alt="expert image" width="352" height="306" />
                                <div class="social">
                                    <ul class="links mb-0">
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-facebook-logo"></i></a>
                                        </li>
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-twitter-logo"></i></a>
                                        </li>
                                    </ul>
                                    <button aria-label="show social links" class="social-btn z-2"><i class="ph ph-plus"></i></button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between card-footer align-items-end">
                                <div>
                                    <h5 class="fw-semibold text-white">Floyd Miles</h5>
                                    <p class="mb-0 text-white">Senior Hair Stylist</p>
                                </div>
                                <div class="number text-white">02</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="expert-card">
                            <div class="img-box">
                                <img src="{{  asset('guest/assets/images/expert-3.webp')}}" class="img-fluid" alt="expert image" width="352" height="306" />
                                <div class="social">
                                    <ul class="links mb-0">
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-facebook-logo"></i></a>
                                        </li>
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-twitter-logo"></i></a>
                                        </li>
                                    </ul>
                                    <button aria-label="show social links" class="social-btn z-2"><i class="ph ph-plus"></i></button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between card-footer align-items-end">
                                <div>
                                    <h5 class="fw-semibold text-white">Bessie Cooper</h5>
                                    <p class="mb-0 text-white">Senior Hair Stylist</p>
                                </div>
                                <div class="number text-white">03</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="expert-card">
                            <div class="img-box">
                                <img src="{{  asset('guest/assets/images/expert-1.webp')}}" class="img-fluid" alt="expert image" width="352" height="306" />
                                <div class="social">
                                    <ul class="links mb-0">
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-facebook-logo"></i></a>
                                        </li>
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-twitter-logo"></i></a>
                                        </li>
                                    </ul>
                                    <button aria-label="show social links" class="social-btn z-2"><i class="ph ph-plus"></i></button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between card-footer align-items-end">
                                <div>
                                    <h5 class="fw-semibold text-white">Bessie Cooper</h5>
                                    <p class="mb-0 text-white">Senior Hair Stylist</p>
                                </div>
                                <div class="number text-white">04</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="expert-card">
                            <div class="img-box">
                                <img src="{{  asset('guest/assets/images/expert-2.webp')}}" class="img-fluid" alt="expert image" width="352" height="306" />
                                <div class="social">
                                    <ul class="links mb-0">
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-facebook-logo"></i></a>
                                        </li>
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-twitter-logo"></i></a>
                                        </li>
                                    </ul>
                                    <button aria-label="show social links" class="social-btn z-2"><i class="ph ph-plus"></i></button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between card-footer align-items-end">
                                <div>
                                    <h5 class="fw-semibold text-white">Darrell Steward</h5>
                                    <p class="mb-0 text-white">Senior Hair Stylist</p>
                                </div>
                                <div class="number text-white">05</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="expert-card">
                            <div class="img-box">
                                <img src="{{  asset('guest/assets/images/expert-3.webp')}}" class="img-fluid" alt="expert image" width="352" height="306" />
                                <div class="social">
                                    <ul class="links mb-0">
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-facebook-logo"></i></a>
                                        </li>
                                        <li>
                                            <a aria-label="social link" href="#"><i class="ph ph-twitter-logo"></i></a>
                                        </li>
                                    </ul>
                                    <button aria-label="show social links" class="social-btn z-2"><i class="ph ph-plus"></i></button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between card-footer align-items-end">
                                <div>
                                    <h5 class="fw-semibold text-white">Bessie Cooper</h5>
                                    <p class="mb-0 text-white">Senior Hair Stylist</p>
                                </div>
                                <div class="number text-white">06</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="d-flex justify-content-center col-12">
                    <div class="btns">
                        <button class="expert-prev"><i class="ph ph-arrow-left"></i></button>
                        <button class="expert-next"><i class="ph ph-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- expert section end -->

    <!-- Showcase Gallery Start -->
    <section class="gallery pt-120 pb-120 position-relative">
        <div class="right-text d-none d-xl-block">
            <h2 class="vertical dmSansFont">Gallery</h2>
        </div>

        <div class="container">
            <div class="section-title">
                <span class="sub-heading fade_up_anim">Showcase Creativity</span>
                <h2 class="mb-2 mb-xl-3 fade_up_anim text-uppercase">Highlights of Our Expertise</h2>
                <p class="fade_up_anim" data-delay=".3">We believe every hairstyle is a masterpiece, crafted with passion and precision. Our gallery showcases the stunning transformations.</p>
            </div>
            <div class="row g-2 g-md-3 g-xl-4">
                <div class="col-sm-4">
                    <a aria-label="See Original Image" href="{{  asset('guest/assets/images/project-showcase-1.webp')}}" class="project-card glightbox">
                        <img src="{{  asset('guest/assets/images/project-showcase-1.webp')}}" width="416" height="768" alt="" />
                        <div class="info d-flex justify-content-center align-items-center">
                            <div class="d-flex justify-content-end">
                                <div class="plus-icon">
                                    <i class="ph ph-plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-8">
                    <div class="row g-2 g-md-3 g-xl-4">
                        <div class="col-12">
                            <a aria-label="See Original Image" href="{{  asset('guest/assets/images/project-showcase-2.webp')}}" class="project-card glightbox">
                                <img src="{{  asset('guest/assets/images/project-showcase-2.webp')}}" width="856" height="372" class="object-fit-cover" alt="" />
                                <div class="info d-flex justify-content-center align-items-center">
                                    <div class="d-flex justify-content-end">
                                        <div class="plus-icon">
                                            <i class="ph ph-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a aria-label="See Original Image" href="{{  asset('guest/assets/images/project-showcase-3.webp')}}" class="project-card glightbox">
                                <img src="{{  asset('guest/assets/images/project-showcase-3.webp')}}" width="416" height="372" alt="" />
                                <div class="info d-flex justify-content-center align-items-center">
                                    <div class="d-flex justify-content-end">
                                        <div class="plus-icon">
                                            <i class="ph ph-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a aria-label="See Original Image" href="{{  asset('guest/assets/images/project-showcase-4.webp')}}" class="project-card glightbox">
                                <img src="{{  asset('guest/assets/images/project-showcase-4.webp')}}" width="416" height="372" alt="" />
                                <div class="info d-flex justify-content-center align-items-center">
                                    <div class="d-flex justify-content-end">
                                        <div class="plus-icon">
                                            <i class="ph ph-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center mt-4 pt-xl-3">
                <a href="#" class="outline-btn secondary playFairFont">see all images <i class="ph ph-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- Showcase Gallery End -->

    <!-- testimonials section start -->
    <section class="testimonial bg_left pt-120 pb-120" style="background-image: url(guest/assets/images/client-bg-1.webp)">
        <div class="right-text">
            <h2 class="vertical dmSansFont">testimonial</h2>
        </div>
        <div class="line"></div>
        <div class="line two"></div>
        <div class="line three"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-10 col-xl-9 col-xxl-8">
                    <div class="reveal reveal--left reveal--overlay">
                        <div class="testimonial-inner">
                            <span class="sub-heading fade_up_anim">What Our Clients Say</span>
                            <h2 class="fade_up_anim text-uppercase">Clients' Success Stories</h2>
                            <p class="mb-4 mb-lg-5 pb-lg-2 fade_up_anim" data-delay=".3">We pride ourselves on delivering exceptional hair care and unforgettable experiences. But don't just take our word for it—hear from the people who matter most.</p>
                            <div class="swiper clientSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            <div class="text-primary d-flex gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.4,16.4,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65A8,8,0,0,0,128,181.1V32c.24,0,.27.08.35.26L153,91.86a8,8,0,0,0,6.75,4.92l63.91,5.16c.16,0,.25,0,.34.29S224,102.63,223.84,102.73Z" />
                                                </svg>
                                            </div>
                                            <p class="mt-3 pb-2 mb-3 mb-lg-4">I had the privilege of working with Salonix from Salonix on a complex business litigation case. Their professionalism, attention to detail, and strategic approach.</p>
                                            <div class="d-flex gap-3 align-items-center">
                                                <img width="60" height="60" src="{{  asset('guest/assets/images/client-1.png')}}" alt="" />
                                                <div>
                                                    <h5 class="mb-1">Kende Attila</h5>
                                                    <span>Software Tester</span>
                                                </div>
                                            </div>
                                            <img class="quote" src="{{  asset('guest/assets/images/quote.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            <div class="text-primary d-flex gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.4,16.4,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65A8,8,0,0,0,128,181.1V32c.24,0,.27.08.35.26L153,91.86a8,8,0,0,0,6.75,4.92l63.91,5.16c.16,0,.25,0,.34.29S224,102.63,223.84,102.73Z" />
                                                </svg>
                                            </div>
                                            <p class="mt-3 pb-2 mb-3 mb-lg-4">I had the privilege of working with Salonix from Salonix on a complex business litigation case. Their professionalism, attention to detail, and strategic approach.</p>
                                            <div class="d-flex gap-3 align-items-center">
                                                <img width="60" height="60" src="{{  asset('guest/assets/images/client-1.png')}}" alt="" />
                                                <div>
                                                    <h5 class="mb-1">Kende Attila</h5>
                                                    <span>Software Tester</span>
                                                </div>
                                            </div>
                                            <img class="quote" src="{{  asset('guest/assets/images/quote.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            <div class="text-primary d-flex gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.4,16.4,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65A8,8,0,0,0,128,181.1V32c.24,0,.27.08.35.26L153,91.86a8,8,0,0,0,6.75,4.92l63.91,5.16c.16,0,.25,0,.34.29S224,102.63,223.84,102.73Z" />
                                                </svg>
                                            </div>
                                            <p class="mt-3 pb-2 mb-3 mb-lg-4">I had the privilege of working with Salonix from Salonix on a complex business litigation case. Their professionalism, attention to detail, and strategic approach.</p>
                                            <div class="d-flex gap-3 align-items-center">
                                                <img width="60" height="60" src="{{  asset('guest/assets/images/client-1.png')}}" alt="" />
                                                <div>
                                                    <h5 class="mb-1">Kende Attila</h5>
                                                    <span>Software Tester</span>
                                                </div>
                                            </div>
                                            <img class="quote" src="{{  asset('guest/assets/images/quote.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            <div class="text-primary d-flex gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        fill="currentColor"
                                                        d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.4,16.4,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65A8,8,0,0,0,128,181.1V32c.24,0,.27.08.35.26L153,91.86a8,8,0,0,0,6.75,4.92l63.91,5.16c.16,0,.25,0,.34.29S224,102.63,223.84,102.73Z" />
                                                </svg>
                                            </div>
                                            <p class="mt-3 pb-2 mb-3 mb-lg-4">I had the privilege of working with Salonix from Salonix on a complex business litigation case. Their professionalism, attention to detail, and strategic approach.</p>
                                            <div class="d-flex gap-3 align-items-center">
                                                <img width="60" height="60" src="{{  asset('guest/assets/images/client-1.png')}}" alt="" />
                                                <div>
                                                    <h5 class="mb-1">Kende Attila</h5>
                                                    <span>Software Tester</span>
                                                </div>
                                            </div>
                                            <img class="quote" src="{{  asset('guest/assets/images/quote.png')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btns-client">
                                <button class="client-prev"><i class="ph ph-arrow-left"></i></button>
                                <button class="client-next"><i class="ph ph-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonail section end -->

    <!-- Faq section start -->
    <section class="faq faq-home">
        <div class="left-text d-none d-xl-block">
            <h2 class="vertical dmSansFont">Faqs</h2>
        </div>
        <div class="line-right"></div>
        <div class="container overflow-x-hidden">
            <div class="row g-3 g-xxl-4 g-3xl-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-line-2"></div>
                    <span class="sub-heading fade_up_anim">Quick Answers for You</span>
                    <h2 class="fade_up_anim text-uppercase">Find the Answers You Need</h2>
                    <p class="mb-3 mb-xl-4 pb-2 fade_up_anim" data-delay=".3">we understand that seeking legal representation can raise various questions. Below are some of the most frequently asked questions to help</p>
                    <div class="accordion d-flex flex-column gap-3 gap-lg-4" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">What services do you offer?</button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absolutely! Our expert stylists will consult with you to find the perfect look that suits your preferences and features.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Do I need to book an appointment?</button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absolutely! Our expert stylists will consult with you to find the perfect look that suits your preferences and features.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Can you help me decide on a new hairstyle?</button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absolutely! Our expert stylists will consult with you to find the perfect look that suits your preferences and features.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How can I book an appointment?</button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absolutely! Our expert stylists will consult with you to find the perfect look that suits your preferences and features.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What products do you use?</button>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absolutely! Our expert stylists will consult with you to find the perfect look that suits your preferences and features.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-5 offset-xxl-1">
                    <div>
                        <form id="contact-form">
                            <span class="sub-heading fade_up_anim">Reserve Your Glow</span>
                            <h3 class="fade_up_anim">Book Your Visit</h3>
                            <div class="row g-3 g-lg-4">
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input class="salonix-input" name="user_name" type="text" id="name" placeholder="Enter Your Name..." required />
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input class="salonix-input" name="user_email" type="email" id="email" placeholder="Enter Your Email..." required />
                                </div>
                                <div class="col-md-6">
                                    <label for="date">Date</label>
                                    <input class="salonix-input" name="date" type="date" id="date" placeholder="Enter Your Phone..." required />
                                </div>
                                <div class="col-md-6">
                                    <label for="country">Service</label>
                                    <select name="user_country" id="country">
                                        <option value="">Select Service</option>
                                        <option value="hair_cutting">Hair Cutting</option>
                                        <option value="spa">Spa</option>
                                        <option value="hair_styling">Hair Styling</option>
                                        <option value="makeup">Makeup</option>
                                        <option value="massage">Massage</option>
                                        <option value="threading">Threading</option>
                                        <option value="nail_art">Nail Art</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message">Message</label>
                                    <textarea placeholder="Enter Your Message..." name="message" id="message" class="salonix-input" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="primary-btn" id="submit-btn">Send Message <i class="ph ph-arrow-up-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq section End -->

    <!-- Brand Slider Start -->
    <div class="brand-slider overflow-x-hidden">
        <div class="container-fluid">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5 left-col">
                    <p class="mb-0 ms-lg-2 px-3 px-xl-0">We have worked with major brands worldwide___</p>
                </div>
                <div class="col-lg-7">
                    <div class="swiper brand-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-1.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-2.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-3.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-4.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-5.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-6.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-3.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-4.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-1.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-2.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-3.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-4.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-5.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-2.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-6.png')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{  asset('guest/assets/images/company-4.png')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Slider End -->

    <!-- footer one -->
    <footer class="footer footer-two white-left position-relative">
        <div class="position-relative overflow-x-hidden">
            <div class="footer-two-inner content">
                <div class="row g-3 g-lg-0">
                    <div class="col-md-4 col-xl-3">
                        <div class="footer-card px-2 fade_up_anim">
                            <a href="index.html" aria-label="Go to Home">
                                <img src="{{  asset('guest/assets/images/logo-black.png')}}" class="img-fluid mb-4" alt="" />
                            </a>
                            <p class="mb-4 pb-lg-3 text-n500">Welcome to Salonix, where legal expertise meets personalized service. We are a team of highly skilled attorneys dedicated to providing</p>
                            <ul class="social-link two">
                                <li>
                                    <a aria-label="social link" href="#"><i class="ph ph-facebook-logo"></i></a>
                                </li>
                                <li>
                                    <a aria-label="social link" href="#"><i class="ph ph-instagram-logo"></i></a>
                                </li>
                                <li>
                                    <a aria-label="social link" href="#"><i class="ph ph-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a aria-label="social link" href="#"><i class="ph ph-twitter-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-9">
                        <div class="navigate-part">
                            <div class="top">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="d-flex flex-lg-column pt-3 justify-content-lg-center align-items-center gap-2 align-items-lg-start h-100 opening-hour">
                                            <img src="{{  asset('guest/assets/images/clock-icon.png')}}" class="img-fluid" alt="" />
                                            <h2 class="text-uppercase pt-3">Opening Hour</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row h-100">
                                            <div class="col-lg-6 d-flex justify-content-lg-center border-left-right">
                                                <div class="ps-2 ps-lg-0">
                                                    <p>Saturday to Thursday</p>
                                                    <p class="time">09:30 AM - 20:30 PM</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 d-flex align-items-center justify-content-lg-center pb-4 pb-lg-0">
                                                <div class="">
                                                    <p>Friday</p>
                                                    <p class="time">02:30 AM - 19:00 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 g-lg-0 bottom">
                                <div class="col-6 col-xl-2 fade_up_anim">
                                    <h4 class="mb-4 text-n500 text-uppercase">Quick Link</h4>
                                    <ul class="navigation-links">
                                        <li>
                                            <a href="index.html"> Home</a>
                                        </li>
                                        <li>
                                            <a href="about-us.html"> About Us</a>
                                        </li>
                                        <li>
                                            <a href="services.html"> Service</a>
                                        </li>
                                        <li>
                                            <a href="blog-standard.html"> Blog</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html"> Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 col-xl-2 fade_up_anim">
                                    <h4 class="mb-4 text-n500 text-uppercase">Shop</h4>
                                    <ul class="navigation-links">
                                        <li>
                                            <a href="products.html"> Products</a>
                                        </li>
                                        <li>
                                            <a href="product-details.html"> Product Details</a>
                                        </li>
                                        <li>
                                            <a href="cart.html"> Cart</a>
                                        </li>
                                        <li>
                                            <a href="billing.html"> Billing</a>
                                        </li>
                                        <li>
                                            <a href="payment.html"> Payment</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-xl-3 fade_up_anim" data-delay=".2">
                                    <div class="flex-grow-1">
                                        <h4 class="pb-3 text-n500 text-uppercase">Contact</h4>
                                        <ul class="contact-two mb-0">
                                            <li class="contact-item">
                                                <div class="contact-icon">
                                                    <i class="ph ph-phone-call"></i>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <a href="tel:(808)555-0111">(808) 555-0111,</a>
                                                    <a href="tel:(808)555-0111">(302) 555-0107</a>
                                                </div>
                                            </li>
                                            <li class="contact-item">
                                                <div class="contact-icon">
                                                    <i class="ph ph-envelope-open"></i>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <a href="https://pixner.net/cdn-cgi/l/email-protection#b3daddd5dcf3d6cbd2dec3dfd69dd0dcde"><span class="__cf_email__" data-cfemail="ea83848c85aa8f928b879a868fc4898587">[email&#160;protected]</span>,</a>
                                                    <a href="https://pixner.net/cdn-cgi/l/email-protection#f69f989099b6938e979b869a93d895999b"><span class="__cf_email__" data-cfemail="5f363139301f3a273e322f333a713c3032">[email&#160;protected]</span></a>
                                                </div>
                                            </li>
                                            <li class="contact-item">
                                                <div class="contact-icon">
                                                    <i class="ph ph-map-pin"></i>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <p>3605 Parker Rd.</p>
                                                    <p>3890 Poplar Dr.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-5 fade_up_anim" data-delay=".4">
                                    <div class="">
                                        <h4 class="mb-4 text-n500 text-uppercase">newsletter</h4>
                                    </div>
                                    <p>Subscribe to our newsletter for the latest updates</p>
                                    <div class="">
                                        <div class="d-flex justify-content-end pt-4">
                                            <form class="two">
                                                <input type="email" class="ps-2" placeholder="Your Email..." required />
                                                <button aria-label="subscribe button"><i class="ph ph-paper-plane-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-two d-flex flex-wrap gap-3 align-items-center justify-content-between px-3">
                    <p>Copyright © <a href="index.html" class="text-secondary fw-semibold">Salonix</a> <span id="year"></span>. All rights reserved.</p>
                    <ul class="list-unstyled d-flex flex-wrap align-items-center mb-0 ps-0 gap-2">
                        <li><a href="#">Privacy Policy</a></li>
                        <li class="text-sm d-none d-sm-block">•</li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- js scripts -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{  asset('guest/assets/js/plugins/email.min.js')}}"></script>
    <script src="{{  asset('guest/assets/js/plugins/swiper.min.js')}}"></script>
    <script src="{{  asset('guest/assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{  asset('guest/assets/js/plugins/jquery.min.js')}}"></script>
    <script src="{{  asset('guest/assets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{  asset('guest/assets/js/plugins/odometer.js')}}"></script>
    <script src="{{  asset('guest/assets/js/plugins/nice-select2.js')}}"></script>
    <script src="{{  asset('guest/assets/js/plugins/glightbox.min.js')}}"></script>
    <script src="{{  asset('guest/assets/js/email.js')}}"></script>
    <script src="{{  asset('guest/assets/js/plugins/gsap.min.js')}}"></script>
    <script src="{{  asset('guest/assets/js/plugins/scrollTrigger.min.js')}}"></script>
    <script src="{{  asset('guest/assets/js/app.js')}}"></script>
    <script defer src="{{  asset('guest/assets/js/index.js')}}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"6e6444122ed94892b6dff27396bb5627","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin=" anonymous"></script>
</body>

</html>