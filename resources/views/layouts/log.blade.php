
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise-new/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 08:54:56 GMT -->
<head>
    <meta charset="UTF-8">
    <title>WorkWise Html Template</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/line-awesome-font-awesome.min.css">
    <link href="{{ asset('assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/responsive.css">
</head>
<body class="sign-in" oncontextmenu="return false;">
<div class="wrapper">
    <div class="sign-in-page">
        <div class="signin-popup">
            <div class="signin-pop">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="cmp-info">
                            <div class="cm-logo">
                                <img src="{{ asset('assets') }}/images/cm-logo.png" alt="">
                                <p>Workwise, is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
                            </div>
                            <img src="{{ asset('assets') }}/images/cm-main-img.png" alt="">
                        </div>
                    </div>

                    @yield('content')
                </div>
            </div>
        </div>
        <!-- <div class="footy-sec">
        <div class="container">
        <ul>
        <li><a href="help-center.html" title="">Help Center</a></li>
        <li><a href="about.html" title="">About</a></li>
        <li><a href="#" title="">Privacy Policy</a></li>
        <li><a href="#" title="">Community Guidelines</a></li>
        <li><a href="#" title="">Cookies Policy</a></li>
        <li><a href="#" title="">Career</a></li>
        <li><a href="forum.html" title="">Forum</a></li>
        <li><a href="#" title="">Language</a></li>
        <li><a href="#" title="">Copyright Policy</a></li>
        </ul>
        <p><img src="images/copy-icon.png" alt="">Copyright 2019</p>
        </div>
        </div> -->
    </div>
</div>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/popper.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/script.js"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 08:55:00 GMT -->
</html>
