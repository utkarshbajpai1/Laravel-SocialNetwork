<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> @yield('title') </title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('stylesheets')
  </head>
  <body>
      @include('templates.partials.navigation')
      @include('templates.partials.alerts')
      <div class="container">
          @yield('content')
      </div>

      <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
      @yield('scripts')
  </body>
</html>
