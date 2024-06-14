<!doctype html>
<html lang="en" data-bs-theme="blue-theme">


<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 16:59:51 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
  <!-- loader-->
  <link href="{{asset('admin/assets/css/pace.min.css')}}" rel="stylesheet">
  <script src="{{asset('admin/assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/metismenu/metisMenu.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/metismenu/mm-vertical.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}">
<!--bootstrap css-->
<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
<!--main css-->
<link href="{{ asset('admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
<link href="{{ asset('admin/sass/main.css') }}" rel="stylesheet">
<link href="{{ asset('admin/sass/dark-theme.css') }}" rel="stylesheet">
<link href="{{ asset('admin/sass/blue-theme.css') }}" rel="stylesheet">
<link href="{{ asset('admin/sass/semi-dark.css') }}" rel="stylesheet">
<link href="{{ asset('admin/sass/bordered-theme.css') }}" rel="stylesheet">
<link href="{{ asset('admin/sass/responsive.css') }}" rel="stylesheet">

</head>

<body>

    @include('admin.layouts.header')

    @yield('content')

    @include('admin.layouts.footer')

  <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/dashboard2.js') }}"></script>
<script src="{{ asset('admin/assets/js/main.js') }}"></script>

<script>
  $(".data-attributes span").peity("donut");
</script>

</body>


<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 17:01:18 GMT -->
</html>