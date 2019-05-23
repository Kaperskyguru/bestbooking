<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Booking | Book Affordable Flights, Hotels and Cabs</title>

    <!-- Bootstrap -->
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">

    <!-- favicon -->
    <link rel="icon" href="{{ asset('images/logo-sm.png') }}" type="image/png" sizes="16x16">

    <!-- Carousel -->
    <link href="{{ asset('examples/carousel/carousel.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
      <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>
    <!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css' ) }}" media="screen" />
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome-ie7.css' ) }}" media="screen" /><![endif]-->

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fullscreen.css' ) }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/settings.css' ) }}" media="screen" />

    <!-- Picker UI-->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" /> @yield('styles')

</head>

<body id="top" class="@yield('body-style')">

    <!-- Top wrapper -->
    <div class="navbar-wrapper2 navbar-fixed-top">
        <div class="container">
            <div class="navbar mtnav">

                <div class="container offset-3">
                    <!-- Navigation-->
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
                        <a href="{{ route('index') }}" class="navbar-brand"><img src="{{ asset('images/logo.png') }}" alt="Best Booking Logo" class="logo" /></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="" href="{{route('index')}}">Home </a>
                            </li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('hotel-page') }}">Hotels</a></li>
                            <li><a href="{{ route('flight-page') }}">Flights</a></li>
                            <li><a href="{{ route('car-page') }}">Cars</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Accounts<b class="lightcaret mt-2"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('register')}}">register</a></li>
                                    <li><a href="{{route('login')}}">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /Navigation-->
                </div>

            </div>
        </div>
    </div>
    <!-- /Top wrapper -->

    @yield('content')

    <!-- FOOTER -->

    <div class="@yield('footer-style')">
        <div class="container">

            <div class="col-md-3">
                <span class="ftitle">Let's socialize</span>
                <div class="scont">
                    <a href="#" class="social1b"><img src="{{ asset('images/icon-facebook.png') }}" alt="" /></a>
                    <a href="#" class="social2b"><img src="{{ asset('images/icon-twitter.png') }}" alt="" /></a>
                    <a href="#" class="social3b"><img src="{{ asset('images/icon-gplus.png') }}" alt="" /></a>
                    <br/><br/><br/>
                    <img src="{{ asset('images/logosmal.png') }}" alt="" width="180"> <br/> &copy; 2019 | <a href="#">Privacy Policy</a><br/>                    All Rights Reserved
                    <br/> Built With &hearts; By <a href="https://www.techpadi.com.ng">TechPadi</a>.

                </div>
            </div>
            <!-- End of column 1-->

            <div class="col-md-3">
                <span class="ftitle">Travel Specialists</span>
                <br/><br/>
                <ul class="footerlist">
                    <li><a href="#">Golf Vacations</a></li>
                    <li><a href="#">Ski & Snowboarding</a></li>
                    <li><a href="#">Disney Parks Vacations</a></li>
                    <li><a href="#">Disneyland Vacations</a></li>
                    <li><a href="#">Disney World Vacations</a></li>
                    <li><a href="#">Vacations As Advertised</a></li>
                </ul>
            </div>
            <!-- End of column 2-->

            <div class="col-md-3">
                <span class="ftitle">Travel Specialists</span>
                <br/><br/>
                <ul class="footerlist">
                    <li><a href="#">Weddings</a></li>
                    <li><a href="#">Accessible Travel</a></li>
                    <li><a href="#">Disney Parks</a></li>
                    <li><a href="#">Round the World</a></li>
                    <li><a href="#">First Class Flights</a></li>
                </ul>
            </div>
            <!-- End of column 3-->

            <div class="col-md-3 grey">
                <span class="ftitle">Newsletter</span>
                <div class="relative">
                    <input type="email" class="form-control fccustom2" id="exampleInputEmail1" placeholder="Enter email">
                    <button type="submit" class="btn btn-default btncustom">Submit<img src="{{ asset('images/arrow.png') }}" alt=""/></button>
                </div>
                <br/><br/>
                <span class="ftitle">Customer support</span><br/>
                <span class="pnr">+234-807-053-8333</span><br/> office@travel.com
            </div>
            <!-- End of column 4-->
        </div>
    </div>

    <div class="@yield('footer-style-2')">
        <div class="container center">
            <a href="{{ route('index') }}">Home</a> |
            <a href="{{ route('about') }}">About</a> |
            <a href="{{ route('hotel-page') }}">Hotels</a> |
            <a href="{{ route('flight-page') }}">Flights</a> |
            <a href="{{ route('car-page') }}">Cars</a> |
            <a href="{{ route('contact') }}">Contact</a>
            <a href="#top" class="gotop scroll"><img src="{{ asset('images/spacer.png') }}" alt="" /></a>
        </div>
    </div>


    </div>
    <!-- /WRAP -->



    <!-- Javascript -->

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.v2.0.3.js') }}"></script>

    <!-- This page JS -->
    <script src="{{ asset('assets/js/js-index3.js') }}"></script>

    <!-- Custom functions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>

    <!-- Picker UI-->
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <!-- Easing -->
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>

    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Nicescroll  -->
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>

    <!-- CarouFredSel -->
    <script src="{{ asset('assets/js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
    <script src="{{ asset('assets/js/helper-plugins/jquery.touchSwipe.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/helper-plugins/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/helper-plugins/jquery.transit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js') }}"></script>

    <!-- Custom Select -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.customSelect.js' ) }}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>

    @yield('scripts')
</body>

</html>