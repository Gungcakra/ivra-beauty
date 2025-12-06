<!-- Mobile Menu -->
<header class="mobile-menu d-lg-none mini-scrollbar">
    <div class="container g-0 g-lg-1">
        <nav id="navbar-menu-mobile" class="px-2 px-lg-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a href="index.html" aria-label="Go to Homepage">
                    <img src="{{  asset('guest/assets/images/logo.png') }}" alt="" />
                </a>
                <i class="ph ph-x text-white fs-2 close-menu"></i>
            </div>
            <!-- <div id="brand">COMPANY</div> -->
            <ul class="mb-0 menu">
                @foreach (json_decode(file_get_contents(resource_path('views/layouts/guest/partials/menu.json')), true) as $item)
                <li>
                    <a class="d-flex align-items-center" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                </li>
                @endforeach
            </ul>
            
            @if(Auth::check())
            <a href="{{ route('guest.logout') }}" class="primary-btn max-w-full w-100">Log Out</a>
            @else
            <a href="{{ route('guest.login') }}" class="primary-btn max-w-full w-100">Log In</a>
            @endif
        </nav>
    </div>
</header>
<div class="mobile-menu-overlay d-lg-none"></div>


<!-- Header Start -->
<header id="header" class="header w-100">
    <div class="g-0 g-lg-1">
        <nav id="navbar-menu" class="d-flex justify-content-between align-items-center position-relative nav-menu-area">
            <a href="index.html" aria-label="Go to Homepage">
                <img src="{{  asset('guest/assets/images/logo.png') }}" alt="" />
            </a>

            <!-- <div id="brand">COMPANY</div> -->
            <ul class="mb-0 menu d-none d-lg-flex mini-scrollbar">

                @foreach (json_decode(file_get_contents(resource_path('views/layouts/guest/partials/menu.json')), true) as $item)
                <li>
                    <a class="d-flex align-items-center" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                </li>
                @endforeach
                <li>
                    <a href="services.html" class="primary-btn d-lg-none">Book Now</a>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-1 gap-sm-2 gap-md-3">
                <!-- <button aria-label="open search popup" class="search-popup-btn text-white text-xl"><i class="ph ph-magnifying-glass"></i></button>
                <div class="dropdown cart-dropdown">
                    <button aria-label="open cart dropdown" class="text-white text-xl" data-bs-toggle="dropdown"><i class="ph ph-shopping-cart-simple"></i></button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <p class="cart-title">Cart(3)</p>
                        <div class="cart-item-list">
                            <div class="cart-item">
                                <img src="{{  asset('guest/assets/images/product-5.webp')}}" width="60" height="60" alt="" />
                                <div class="cart-item-content">
                                    <p class="fw-medium fs-6">Cosmetic beauty</p>
                                    <p>1 x $250.00</p>
                                </div>
                                <button class="cart-item-remove"><i class="ph ph-x"></i></button>
                            </div>
                            <div class="cart-item">
                                <img src="{{  asset('guest/assets/images/product-6.webp')}}" width="60" height="60" alt="" />
                                <div class="cart-item-content">
                                    <p class="fw-medium fs-6">Maquillage Cosmetics</p>
                                    <p>1 x $250.00</p>
                                </div>
                                <button class="cart-item-remove"><i class="ph ph-x"></i></button>
                            </div>
                            <div class="cart-item">
                                <img src="{{  asset('guest/assets/images/product-7.webp')}}" width="60" height="60" alt="" />
                                <div class="cart-item-content">
                                    <p class="fw-medium fs-6">Makeup tools</p>
                                    <p>1 x $250.00</p>
                                </div>
                                <button class="cart-item-remove"><i class="ph ph-x"></i></button>
                            </div>
                            <div class="cart-item">
                                <img src="{{  asset('guest/assets/images/product-8.webp')}}" width="60" height="60" alt="" />
                                <div class="cart-item-content">
                                    <p class="fw-medium fs-6">Bottle of perfume</p>
                                    <p>1 x $250.00</p>
                                </div>
                                <button class="cart-item-remove"><i class="ph ph-x"></i></button>
                            </div>
                            <a href="payment.html" class="checkout">Checkout</a>
                        </div>
                    </div>
                </div> -->
            
                @if(Auth::check())
                <a href="{{ route('guest.logout') }}" class="primary-btn d-none d-lg-block playFairFont">Log Out </a>
                @else
                <a href="{{ route('guest.login') }}" class="primary-btn d-none d-lg-block playFairFont">Sign In </a>
                @endif
                <button aria-label="open sidebar" class="show-offcanvas bg-transparent border-0 text-white d-none d-xl-block fs-3">
                    <i class="ph ph-squares-four"></i>
                </button>
                <button class="toggle-menu"><i class="ph ph-list"></i></button>
            </div>
        </nav>
    </div>
</header>
<div class="left-sidebar" tabindex="-1">
    <div class="offcanvas-body d-flex flex-column align-items-center text-center">
        <div class="d-flex justify-content-end w-100 mb-5">
            <button class="bg-transparent text-primary border-0 fs-4 left-sidebar-close" aria-label="Close">
                <i class="ph ph-x"></i>
            </button>
        </div>

        <img src="{{  asset('guest/assets/images/logo.png')}}" alt="" />
        <p class="text-white">Salonix is a conceptual name chosen for a modern and stylish Hair Salons and Hairdressers Website.</p>
        <h5 class="fw-semibold text-white">Gallery</h5>
        <div class="row g-3 gallery" id="gallery">
            <a href="{{  asset('guest/assets/images/showcase-1.webp')}}" class="col-4 glightbox" aria-label="See Original Image">
                <img src="{{  asset('guest/assets/images/showcase-1.webp')}}" width="98" height="98" alt="" />
            </a>
            <a href="{{  asset('guest/assets/images/showcase-2.webp')}}" class="col-4 glightbox" aria-label="See Original Image">
                <img src="{{  asset('guest/assets/images/showcase-2.webp')}}" width="98" height="98" alt="" />
            </a>
            <a href="{{  asset('guest/assets/images/showcase-3.webp')}}" class="col-4 glightbox" aria-label="See Original Image">
                <img src="{{  asset('guest/assets/images/showcase-3.webp')}}" width="98" height="98" alt="" />
            </a>
            <a href="{{  asset('guest/assets/images/showcase-4.webp')}}" class="col-4 glightbox" aria-label="See Original Image">
                <img src="{{  asset('guest/assets/images/showcase-4.webp')}}" width="98" height="98" alt="" />
            </a>
            <a href="{{  asset('guest/assets/images/showcase-5.webp')}}" class="col-4 glightbox" aria-label="See Original Image">
                <img src="{{  asset('guest/assets/images/showcase-1.webp')}}" width="98" height="98" alt="" />
            </a>
            <a href="{{  asset('guest/assets/images/showcase-6.webp')}}" class="col-4 glightbox" aria-label="See Original Image">
                <img src="{{  asset('guest/assets/images/showcase-2.webp')}}" width="98" height="98" alt="" />
            </a>
        </div>
        <h5 class="fw-semibold text-white">Follow</h5>
        <ul class="social-links p-0">
            <li>
                <a aria-label="social link" href="#"><i class="ph ph-facebook-logo"></i></a>
            </li>
            <li>
                <a aria-label="social link" href="#"><i class="ph ph-twitter-logo"></i></a>
            </li>
            <li>
                <a aria-label="social link" href="#"><i class="ph ph-instagram-logo"></i></a>
            </li>
            <li>
                <a aria-label="social link" href="#"><i class="ph ph-linkedin-logo"></i></a>
            </li>
            <li>
                <a aria-label="social link" href="#"><i class="ph ph-twitch-logo"></i></a>
            </li>
        </ul>
    </div>
</div>
<div class="left-sidebar-overlay"></div>
<div class="search-popup">
    <div class="search-popup-inner">
        <span class="close-text">Press Esc to Close</span>
        <button aria-label="close search popup" class="search-popup-close"><i class="ph ph-x"></i></button>
        <form action="#" class="search-form">
            <input type="text" class="effect" placeholder="Type and Hit Enter..." />
            <span class="focus-border"></span>
        </form>
    </div>
</div>
<!-- Header End -->