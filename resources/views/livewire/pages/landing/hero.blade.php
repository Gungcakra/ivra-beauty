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