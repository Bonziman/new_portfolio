<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experienced graphic designer in Casablanca, Morocco. Specialized in logo design, branding, web design, and print materials. Elevate your brand with creative & impactful visuals.">
    <title>@yield('title')</title>
      <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('css/vendor/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/jquery.fancybox.min.css')}}">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="unslate_co--site-wrap">

    <div class="unslate_co--site-inner">
    <div class="lines-wrap">
        <div class="lines-inner">
          <div class="lines"></div>
        </div>
      </div>
      <!-- END lines -->
    <!-- importing the header -->
    @include('./layouts/header')

    <!-- including the content -->
    @yield('content')
</div>
    <!-- importing the footer -->
    @include('./layouts/footer')
</div>
<!-- Loader -->
<div id="unslate_co--overlayer"></div>
  <div class="site-loader-wrap">
  <div data-glitch="Loading..." class="glitch">Loading...</div>
  </div>

    <script src="{{asset('js/scripts-dist.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>