<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Hair Kulture Academy</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('uassets/images/fav.png')}}" type="image/png">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('uassets/css/slick.css')}}">
    <!--====== Animate css ======-->
	<link rel="stylesheet" href="{{ asset('uassets/css/animate.css')}}">
        <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('uassets/css/nice-select.css')}}">
        <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ asset('uassets/css/jquery.nice-number.min.css')}}">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('uassets/css/magnific-popup.css')}}">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('uassets/css/bootstrap.min.css')}}"> 
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('uassets/css/font-awesome.min.css')}}">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('uassets/css/default.css')}}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('uassets/css/style.css')}}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('uassets/css/responsive.css')}}">
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-contact">
                            <ul>
                                <li><i class="fa fa-envelope"></i><a href="#">info@yourmail.com</a></li>
                                <li><i class="fa fa-phone"></i><span>+0123-456-5678</span></li>
                            </ul>
                        </div> <!-- header contact -->
                    </div>
                    <div class="col-md-6">
                        <div class="header-right d-flex justify-content-end">
                            <div class="social d-flex">
                                <span class="follow-us">Follow Us :</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div> <!-- social -->
                            <div class="login-register">
                                <ul>
                                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </div>
                        </div> <!-- header right -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ url('/')}}">
								<h2>Hair Kulture Academy</h2>
                                {{-- <img src="{{ asset('uassets/images/selar-logo-small.png')}}" style="width:50px; height:50px" alt="Logo"> --}}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="active" href="{{ url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('user.courses')}}">Courses</a>
                                       
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Contact</a>
                                       
                                    </li>
                                </ul>
                            </div>
                            <div class="right-icon text-right">
                                <ul>
                                    {{-- <li><a href="javascript:void(0)" id="search"><i class="fa fa-search"></i></a></li> --}}
                                    <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                                </ul>
                            </div> <!-- right icon -->
                        </nav> <!-- nav -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </header>
    
    <div class="container-fluid py-4">
        
        @yield('content')
    </div>

    @include('layouts.footer')