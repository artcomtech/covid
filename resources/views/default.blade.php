<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>@yield('title') | SIAPM</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="#">
  <meta name="author" content="pustaka digital">
  <meta name="keywords" content="#">
  <meta property="og:type" content="website" />
  <meta property="og:url" content="#" />
  <meta property="og:title" content="@yield('title') | SIAPM" />
  <meta property="og:description" content="#" />
  <meta property="og:image" content="#" />
  <meta property="og:image:type" content="image/webp" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="400" />
  <meta property="og:image:alt" content="#" />

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset(mix('css/main.min.css')) }}">
  @yield('page-style')
</head>
<body class="mdb-skin">
    <div id="mdb-preloader" class="flex-center">
      <div id="preloader-markup">
      </div>
    </div>
    @include('panels.navDefault')
    <main role="main">
      @yield('content')
    </main>
    @include('panels.footerDefault')
    <script src="{{ asset(mix('js/main.min.js')) }}"></script>
    @yield('page-script')
  </body>
</html>
