<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Booking | Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" media="screen">

    <!-- favicon -->
    <link rel="icon" href="{{ asset('images/logo-sm.png') }}" type="image/png" sizes="16x16">

    <!-- Carousel -->
    <link href="{{ asset('examples/carousel/carousel.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
      <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Fonts 
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>	-->
    <!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" media="screen" />
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome-ie7.css') }}" media="screen" /><![endif]-->

    <!-- PIECHART -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.easy-pie-chart.css') }}">

    <!-- Picker UI-->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.v2.0.3.js') }}"></script>





</head>

<body id="top">

    @yield('content')





    <!-- This page JS -->
    <script src="{{ asset('assets/js/js-index.js') }}"></script>
    <script src="{{ asset('assets/js/js-dashboard.js') }}"></script>

    <!-- Sparkline -->
    <script src="{{ asset('assets/js/jquery.sparkline.js') }}"></script>

    <!-- Custom functions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>

    <!-- Counter -->
    <script src="{{ asset('assets/js/counter.js') }}"></script>

    <!-- Picker UI-->
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <!-- Easing -->
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>

    <!-- Nicescroll  -->
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>

    <!-- CarouFredSel -->
    <script src="{{ asset('assets/js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
    <script src="{{ asset('assets/js/helper-plugins/jquery.touchSwipe.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/helper-plugins/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/helper-plugins/jquery.transit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js') }}"></script>

    <!-- Custom Select -->
    <script type='text/javascript' src="{{ asset('assets/js/jquery.customSelect.js') }}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
</body>

</html>