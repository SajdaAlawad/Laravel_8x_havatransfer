<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="@yield('format-detection')" />
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <meta name="viewport" content="@yield('viewport')">
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.ico">
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('assets') }}/booking/css/booking.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/camera.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/form.css">
    <script src="{{ asset('assets') }}/js/jquery.js"></script>
    <script src="{{ asset('assets') }}/js/jquery-migrate-1.2.1.js"></script>
    <script src="{{ asset('assets') }}/js/script.js"></script>
    <script src="{{ asset('assets') }}/js/superfish.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.ui.totop.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.equalheights.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.mobilemenu.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.js"></script>
    <script src="{{ asset('assets') }}/js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="{{ asset('assets') }}/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="{{ asset('assets') }}/booking/js/booking.js"></script>
    <script>
        $(document).ready(function(){
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false ,
                minHeight: '444',
                thumbnails: false,
                height: '48.375%',
                caption: true,
                navigation: true,
                fx: 'mosaic'
            });
            /*carousel*/
            var owl=$("#owl");
            owl.owlCarousel({
                items : 2, //10 items above 1000px browser width
                itemsDesktop : [995,2], //5 items between 1000px and 901px
                itemsDesktopSmall : [767, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation : true,
                pagination : false
            });
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets') }}/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="{{ asset('assets') }}/css/ie.css">
    <![endif]-->
    @yield('css')
    @yield('headerjs')
</head>


<body class="page1" id="top">
@include('home._header')

<div class="content">
    @yield('content')
</div>

@include('home._footer')
<script>
    $(function (){
        $('#bookingForm').bookingForm({
            ownerEmail: '#'
        });
    })
    $(function() {
        $('#bookingForm input, #bookingForm textarea').placeholder();
    });
</script>
</body>
</html>
