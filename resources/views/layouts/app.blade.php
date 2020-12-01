<!DOCTYPE html>
<html class="loading"
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  data-textdirection="ltr">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>APPS Antrian</title>
  <link rel="apple-touch-icon" href="{{ url('images/favicon/apple-touch-icon-152x152.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/vendors.min.css') }}">
<link rel="stylesheet" type="text/css"
  href="{{ asset('assets/css/themes/materialize.css') }}">
<link rel="stylesheet" type="text/css"
  href="{{ asset('assets/css/themes/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/layouts/style-horizontal.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/laravel-custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom/custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/page-blog.css') }}">
@livewireStyles
</head>
<body
  class="horizontal-layout page-header-light horizontal-menu 2-columns "
  data-open="click" data-menu="horizontal-menu" data-col="2-columns">

  <!-- BEGIN: Header-->
  @include('layouts.header')

  <!-- BEGIN: SideNav-->
  @include('layouts.aside')

  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">       
      <div class="content-wrapper-before blue-grey lighten-5"></div>
      <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
      <!-- Search for small screen-->
      {{ $slot }}
      </div>
      <div class="content-overlay"></div>
    </div>
  </div>
</div>

  
  <!-- BEGIN: Footer-->
<footer
  class="page-footer footer gradient-shadow  footer-static   footer-dark gradient-45deg-indigo-light-blue">
  <div class="footer-copyright">
    <div class="container">
      <span>&copy; 2019 <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
          target="_blank">www.tanpaspasi.com</a> All rights reserved.
      </span>
      <span class="right hide-on-small-only">
        Design and Developed by <a href="www.tanpaspasi.com">TANPASPASI</a>
      </span>
    </div>
  </div>
</footer>
<script src="{{ asset('assets/js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/search.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-script.js') }}"></script>
<script src="{{ asset('assets/js/scripts/customizer.js') }}"></script>
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
</body>
</html>