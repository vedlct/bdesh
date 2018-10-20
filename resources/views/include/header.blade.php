<!DOCTYPE html>
<html lang="zxx" class="no-js page-loader-overflow-hidden">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BDesh Foundation, Inc - Helping the Needy</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- FontAwesome -->
    <link href="{{asset('public/css/font-awesome.css')}}" media="screen" rel="stylesheet" type="text/css" />

    <!-- Select 2 -->
    <link href="{{asset('public/css/select2.css')}}" media="screen" rel="stylesheet" type="text/css" />

    <!-- Core CSS -->
    <link href="{{asset('public/css/bootstrap.css')}}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/css/style.css')}}" media="screen" rel="stylesheet" type="text/css" />

    <!-- Animate.css -->
    <link href="{{asset('public/css/animate.css')}}" media="screen" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

    <!-- Modernizr Library -->
    <script src="{{asset('public/js/libs/modernizr-3.6.0.min.js')}}"></script>
</head>

<body itemscope itemtype="http://schema.org/WebPage">

{{--<!-- Google Tag Manager (noscript) --><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=	'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WPWGNL');</script><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPWGNL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager -->--}}

<!-- Page Loader -->
<div id="pageLoader" class="page-loader">
    <div class="preloader-wheel active">
        <div class="spinner-layer">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><!--
            --><div class="gap-patch">
                <div class="circle"></div>
            </div><!--
            --><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<!--/ Page Loader -->

<!-- Header -->
<header id="header" class="header" itemscope itemtype="http://schema.org/WPHeader">
    <!-- Navigation Bar -->

    <nav class="navigation-bar" data-become-sticky="600" data-no-placeholder>
        <div class="container">
            <div class="hamburger"><a href="#"></a></div>

            <div class="navigation-bar-flex">
                <!-- Logo TODO: Use 2 images for normal and sticky navigation, or just text -->
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img class="logo-normal" src="{{asset('public/images/logo.png')}}" alt=""/>
                        <img class="logo-sticky" src="{{asset('public/images/logo.png')}}" alt=""/>
                    </a>
                </div>
                <!--/ Logo -->

                <!-- Dropdown Menu -->
                <ul class="nav-menu clearfix" itemscope itemtype="http://schema.org/SiteNavigationElement">
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('projects')}}">Projects</a></li>
                    <li><a href="{{route('rohingya')}}">Rohingya</a></li>




                    <li class="">
                        <a href="#">Events </a>
                        <ul>
                            <li><a href="{{route('upcomingEvents')}}">Upcoming Events</a></li>
                            <li><a href="{{route('pastevents')}}">Past Events</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="#">Media Archive</a>
                        <ul>
                            <li><a href="{{route('welfare')}}">Children welfare</a></li>
                            <li><a href="{{route('healthgallery')}}">Health care gallery</a></li>
                            <li><a href="{{route('videogallery')}}">Video gallery</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('faqs')}}">Faqs</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
                <!--/ Dropdown Menu -->


            </div>
        </div>
    </nav>

    <!--/ Navigation Bar -->



</header>
<!--/ Header -->