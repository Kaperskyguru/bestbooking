<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Booking | Register</title>

    <!-- Bootstrap -->
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">

    <!-- favicon -->
    <link rel="icon" href="{{ asset('images/logo-sm.png') }}" type="image/png" sizes="16x16">

    <!-- Animo css-->
    <link href="{{ asset('plugins/animo/animate%2banimo.css') }}" rel="stylesheet" media="screen">

    <link href="{{ asset('examples/carousel/carousel.css') }}" rel="stylesheet">


    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>
    <!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" media="screen" /> @yield('styles')


</head>

<body>
    @yield('content')

    

    <!-- Load jQuery -->
    <script src="{{ asset('assets/js/jquery.v2.0.3.js') }}"></script>

    <!-- Javascript  -->
    <script src="{{ asset('assets/js/initialize-loginpage.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
    <!-- Load Animo -->
    <script src="{{ asset('plugins/animo/animo.js') }}"></script>
    <script>
        function errorMessage() {
            $('.login-wrap').animo({
                animation: 'tada'
            });
        }
    </script>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    @yield('scripts')
</body>

</html>