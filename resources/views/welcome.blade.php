<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="shortcut icon" type="image/png" href="{{asset('frontend/img/favicon.png')}}">
    <title>Go-Tank</title>

    <!-- Google font -->
    <link href="{{asset('frontend/css/_ffont-awesome.min.css')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.css')}}" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Header -->
    <header id="home">
        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('{{asset('frontend/img/background1.jpg')}}');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        @include('layouts.partials._fhome')

    </header>
    <!-- /Header -->

    <!-- About -->
        @include('layouts.partials._fabout')
    <!-- /About -->

    <!-- Portfolio -->
        {{-- @include('layouts.partial._fportfolio') --}}
    <!-- /Portfolio -->

    <!-- Service -->
        @include('layouts.partials._fservice')
    <!-- /Service -->


    <!-- Why Choose Us -->
        <!-- Testimonial -->
        @include('layouts.partials._ftestimoni')
        <!-- /Testimonial -->
    <!-- /Why Choose Us -->

    <!-- Pricing -->
        {{-- @include('layouts.partial._fprice') --}}
    <!-- /Pricing -->

    <!-- Team -->
        {{-- @include('layouts.partial._fteam') --}}
    <!-- /Team -->

    <!-- Contact -->
        @include('layouts.partials._fcontact')
    <!-- /Contact -->


    <!-- Footer -->
        @include('layouts.partials._ffooter')
    <!-- /Footer -->

    <!-- Back to top -->
    <div id="back-to-top"></div>
    <!-- /Back to top -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>
