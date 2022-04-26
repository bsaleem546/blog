<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise-new/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 08:54:39 GMT -->

<head>
    <meta charset="UTF-8">
    <title>WorkWise Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/jquery.range.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/line-awesome-font-awesome.min.css">
    <link href="{{ asset('assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/responsive.css">
</head>
<style>
    .nav-pills.tabs-my .nav-link.active, .nav-pills.tabs-my .show>.nav-link {
        background: #e44d3a;
        color: #fff;
    }
    .nav-pills.tabs-my .nav-link {
        color: #e44d3a;
    }
</style>

<body oncontextmenu="return false;">

<div class="wrapper">
    <header>
        <div class="container">
            <div class="header-data">
                <div class="logo">
                    <a href="index-2.html" title=""><img src="images/logo.png" alt=""></a>
                </div>
                <div class="search-bar">
                    <!-- <form>
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit"><i class="la la-search"></i></button>
                    </form> -->
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="jobs.html" title="">
                                <span><img src="images/icon5.png" alt=""></span>
                                Jobs
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="menu-btn">
                    <a href="#" title=""><i class="fa fa-bars"></i></a>
                </div>

                @auth
                    <div class="user-account">
                        <div class="user-info">
                            <a href="#" title="">{{ Auth::user()->name }}</a>
                            <i class="la la-sort-down"></i>
                        </div>
                        <div class="user-account-settingss">
                            <h3 class="tc">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </h3>
                        </div>
                    </div>
                @else
                    <div class="user-account">
                        <div class="user-info">
                            <a href="{{ route('login') }}" title="">Login</a>
                        </div>
                    </div>
                @endauth


            </div>
        </div>
    </header>
    <div class="search-sec">
        <div class="container">
            <!-- <div class="search-box">
                <form>
                    <input type="text" name="search" placeholder="Search keywords">
                    <button type="submit">Search</button>
                </form>
            </div> -->
        </div>
    </div>
    <main>
        @yield('content')
    </main>
</div>

<footer>
    <div class="footy-sec mn no-margin">
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
            <p><img src="images/copy-icon2.png" alt="">Copyright 2019</p>
            <img class="fl-rgt" src="images/logo2.png" alt="">
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ asset('assets') }}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/popper.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/jquery.range-min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/script.js"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@yield('java')
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 08:54:39 GMT -->

</html>
