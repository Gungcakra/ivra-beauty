<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ivra Beauty - Hair, Spa, Nail, Beauty Salons and Cosmetics Multipurpose HTML Template" />
    <title>Ivra Beauty</title>
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

    <!-- Header Start -->
    @include('layouts.guest.partials.navbar')
    <!-- Header End -->

    <!-- back to top -->
    <button class="back-to-top">
        <i class="ph ph-arrow-up"></i>
    </button>

    <!-- Section -->
    {{ $slot }}
    <!-- End Section -->

    @include('layouts.guest.partials.footer')
    <!-- footer one -->
    


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