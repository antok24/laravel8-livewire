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

  <title>User Login | APPS Antrian</title>
  <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon-152x152.png">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon-32x32.png">
  <link rel="apple-touch-icon" href="{{ url('images/favicon/apple-touch-icon-152x152.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/vendors.min.css') }}">
<link rel="stylesheet" type="text/css"
  href="{{ asset('assets/css/themes/materialize.css') }}">
<link rel="stylesheet" type="text/css"
  href="{{ asset('assets/css/themes/style.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/layouts/style-horizontal.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/login.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/laravel-custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom/custom.css') }}">
@livewireStyles
</head>
<!-- END: Head-->

<body
  class="horizontal-layout page-header-light horizontal-menu 2-columns  login-bg "
  data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
  <div class="row">
    <div class="col s12">
      <div class="container">
        <!--  main content -->
        <div id="login-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Sign in</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="email" type="email" name="email" value="{{ old('email') }}">
          <label for="email" class="center-align">Email</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12 l12 ml-2 mt-1">
          <p>
            <label>
              <input type="checkbox" />
              <span>Remember Me</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button
            class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="user-register.html">Register Now!</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          <p class="margin right-align medium-small"><a href="user-forgot-password.html">Forgot password ?</a>
          </p>
        </div>
      </div>
    </form>
  </div>
</div>
      </div>
      
      <div class="content-overlay"></div>
    </div>
  </div>
  <script src="{{ asset('assets/js/vendors.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/js/search.js') }}"></script>
  <script src="{{ asset('assets/js/custom/custom-script.js') }}"></script>
  @livewireScripts
</body>
</html>