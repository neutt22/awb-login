<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>LogIn - @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <ul class="navigation">
          <li class="nav-item"><a href="#">Search</a></li>
          <li class="nav-item"><a href="/">Home</a></li>
          <li class="nav-item"><a href="/login">Login</a></li>
          <li class="nav-item"><a href="/register">Register</a></li>
          <li class="nav-item"><a href="/cart">My Cart</a></li>
          <li class="nav-item"><a href="/explore">Explore</a></li>
          <li class="nav-item"><a href="/about-us">About Us</a></li>
          <li class="nav-item"><a href="/contact-us">Contact Us</a></li>
        </ul>
        <input type="checkbox" id="nav-trigger" class="nav-trigger">
        <div class="mobile-menu">
          <label for="nav-trigger"><img src="img/hamburger.png" alt="menu" /></label>
          <a href="/"><img src="img/logo.png" alt="logo" /></a>
        </div>

        <div class="content">
          <div class="content-cover"></div>
          @include('menu-bar')

          <a href="#" class="scroll-top"></a>

          @yield('contents')

          @include('footer')
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-3.1.0.min.js"><\/script>')</script>
        <script src="js/foundation.min.js"></script>
        <script src="js/main.js"></script>

        @yield('custom-js')

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
