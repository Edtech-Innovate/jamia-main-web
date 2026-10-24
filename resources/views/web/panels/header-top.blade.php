<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title') </title>
  <meta name="author" content="">
  <meta name="description" content="@yield('description')" />
  <link rel="icon" href="https://juaonline.in/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="32x32" href="https://juaonline.in/favicon.png">
  <link rel="canonical" href="{{ URL::current() }}" />
  <meta property="og:title" content="@yield('title')" />
  <meta property="og:description" content="@yield('description')" />
  <meta property="og:image" content="/favicon.png" />
  <meta name="keywords" content="@yield('keywords')">
  <meta name="robots" content="INDEX,FOLLOW">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <!--<link rel="icon" type="image/png" sizes="192x192" href="/website-assets/web/fav.png">-->
  <!--<link rel="icon" type="image/png" sizes="32x32" href="/website-assets/web/fav.png">-->
  <!--<link rel="manifest" href="/website-assets/img/favicons/manifest.html">-->
  <meta name="" content="#ffffff">
  <meta name="" content="/website-assets/web/fav.png">
  <meta name="theme-color" content="#ffffff">
    <!--<link rel="stylesheet" href="/website-assets/css/fontawesome.min.css">-->
  <!--<link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Jost:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet">-->
  <!-- <link rel="stylesheet" href="/website-assets/css/app.min.css">
  <link rel="stylesheet" href="/website-assets/css/bootstrap.rtl.min.css">

  <link rel="stylesheet" href="/website-assets/css/style.css?=4.6">
  <link rel="stylesheet" href="/website-assets/css/magnific-popup.min.css">
  <link rel="stylesheet" href="/website-assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/website-assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/website-assets/css/toastr.min.css"> -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" as="style" crossorigin="anonymous">
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" as="script" crossorigin="anonymous">
<link rel="preload" href="/admin-assets/js/jquery-3.6.0.min.js" as="script" defer>
   <!--<script src="/admin-assets/js/jquery-3.6.0.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
<style>
    .main-menu ul {
        align-items:start !important;
        justify-content:start !important;
    }
    .sub-menu{
        flex-direction:column !important;
    }
    .th-mobile-menu ul li{
        flex-direction:column !important;
    }
    .th-menu-wrapper .th-menu-area{
        max-width:100% !important;
    }
</style>