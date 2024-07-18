<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <meta name="description" content="Newspaper, Magazine & Blog Theme">

    <meta name="keywords" content="Newspaper,Magazine,Blog,HTML,CSS,Bootstrap,JavaScript">


    <link href="{{ asset('blogs_theme/css/all-stylesheets.css') }}" rel="stylesheet">

    <link href="{{ asset('blogs_theme/css/colors/red.css') }}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>

<!-- HEADER STARTS

    ========================================================================= -->

@include('Client.block.header')

<!-- /. HEADER ENDS

    ========================================================================= -->

<!-- SLIDER STARTS

    ========================================================================= -->

@yield('content')

<!-- CATEGORY GRID STARTS

    ========================================================================= -->

<!-- FOOTER STARTS

    ========================================================================= -->

@include('Client.block.footer')

<!-- /. FOOTER ENDS

    ========================================================================= -->

<!-- TO TOP STARTS

    ========================================================================= -->

<a href="#" class="scrollup">Scroll</a>

<!-- /. TO TOP ENDS

    ========================================================================= -->

<!-- LOAD JQUERY LIBRARY -->

@yield('js')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript" src="{{ asset('blogs_theme/js/jquery-1.12.4/jquery.min.js') }}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="{{ asset('blogs_theme/js/bootstrap.min.js') }}"></script>

<!-- Hover Dropdown Menu -->

<script src="{{ asset('blogs_theme/js/bootstrap-hover/twitter-bootstrap-hover-dropdown.min.js') }}"></script>

<!-- Mean Menu -->

<script src="{{ asset('blogs_theme/js/meanmenu/jquery.meanmenu.js') }}"></script>

<!-- Sticky -->

<script type="text/javascript" src="{{ asset('blogs_theme/js/sticky/jquery.sticky.js') }}"></script>

<!-- SmoothScroll -->

<script type="text/javascript" src="{{ asset('blogs_theme/js/SmoothScroll/SmoothScroll.html') }}"></script>

<!-- Owl Carousel -->

<script type="text/javascript" src="{{ asset('blogs_theme/owl-carousel/owl-carousel/owl.carousel.') }}js"></script>

<!-- Magnific Popup core JS file -->

<script type="text/javascript" src="{{ asset('blogs_theme/js/magnific-popup/jquery.magnific-popup.js') }}"></script>

<!-- REVOLUTION JS FILES -->

<script type="text/javascript" src="{{ asset('blogs_theme/revolution/js/jquery.themepunch.tools.min.js') }}"></script>

<script type="text/javascript"
        src="{{ asset('blogs_theme/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS

    (Load Extensions only on Local File Systems !

    The following part can be removed on Server for On Demand Loading) -->

<script type="text/javascript"
        src="{{ asset('blogs_theme/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>

<script type="text/javascript"
        src="{{ asset('blogs_theme/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>

<script type="text/javascript"
        src="{{ asset('blogs_theme/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>

<script type="text/javascript"
        src="{{ asset('blogs_theme/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>

<script type="text/javascript"
        src="{{ asset('blogs_theme/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>

<script type="text/javascript"
        src="{{ asset('blogs_theme/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>

<script type="text/javascript"
        src="{{ asset('blogs_theme/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>

<script type="text/javascript"
        src="{{ asset('blogs_theme/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>

<script type="text/javascript"
        src="{{ asset('blogs_theme/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('blogs_theme/revolution/js/food-carousel.js') }}"></script>

<!-- AJAX Contact Form -->

<script type="text/javascript" src="{{ asset('blogs_theme/js/contact/contact-form.js') }}"></script>

<!-- Style Switcher -->

<script type="text/javascript" src="{{ asset('blogs_theme/js/styleswitcher/styleswitcher.js') }}"></script>

<!-- FitVids -->

<script type="text/javascript" src="{{ asset('blogs_theme/js/fitvids/jquery.fitvids.js') }}"></script>

<!-- Custom -->

<script type="text/javascript" src="{{ asset('blogs_theme/js/custom/custom.js') }}"></script>

</body>

</html>
