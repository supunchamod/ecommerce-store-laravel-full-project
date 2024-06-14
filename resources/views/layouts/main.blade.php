<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 15:29:01 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="../assets/images/favicon/5.png" type="image/x-icon">
    <title>Ecommerce store</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">

    <!-- wow css -->
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <!-- Plugin CSS file with desired skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/ion.rangeSlider.min.css') }}">

    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-style.css') }}">

    <!-- Template CSS -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>
</head>

<body class="theme-color-3 dark">


    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
  <!-- Bg overlay Start -->
  <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
     <!-- jQuery -->
     <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>

<!-- Feather Icons -->
<script src="{{ asset('assets/js/feather/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/feather/feather-icon.js') }}"></script>

<!-- Lazyload JS -->
<script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

<!-- Slick JS -->
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick-animation.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-slick-animated.js') }}"></script>
<script src="{{ asset('assets/js/slick/custom_slick.js') }}"></script>

<!-- Range Slider JS -->
<script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>

<!-- Auto Height JS -->
<script src="{{ asset('assets/js/auto-height.js') }}"></script>

<!-- Quantity JS -->
<script src="{{ asset('assets/js/quantity-2.js') }}"></script>

<!-- Fly Cart JS -->
<script src="{{ asset('assets/js/fly-cart.js') }}"></script>

<!-- Timer JS -->
<script src="{{ asset('assets/js/timer1.js') }}"></script>
<script src="{{ asset('assets/js/timer2.js') }}"></script>

<!-- Clipboard JS -->
<script src="{{ asset('assets/js/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/copy-clipboard.js') }}"></script>

<!-- WOW JS -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-wow.js') }}"></script>

<!-- Script JS -->
<script src="{{ asset('assets/js/script.js') }}"></script>


<!-- Theme Setting JS -->
<script src="{{ asset('assets/js/theme-setting.js') }}"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 15:29:49 GMT -->
</html>