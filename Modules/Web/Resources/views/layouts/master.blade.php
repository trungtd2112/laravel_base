<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PiraGo | Starter</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('web::layouts.navbar')
  @include('web::layouts.sidebar')
  <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <h3 class="py-3 ml-2">@yield('title')</h3>
        </div>
        @yield('content')
    </section>
  </div>
  @include('web::layouts.footer')
</div>

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
