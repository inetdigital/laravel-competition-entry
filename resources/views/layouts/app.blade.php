<!DOCTYPE html>
<html lang="en">
  @include ('layouts.partials.head')
  <body class="l-bg-style">
    @include ('layouts.partials.header')
    @yield('content')
    @include ('layouts.partials.footer')
    <!-- Scripts -->
    <script src="/js/app.js"></script>
  </body>
</html>
