<!DOCTYPE html>
<html lang="en">
  @include ('layouts.partials.head')
  <body>
    <div class="container">
      @include ('layouts.partials.header')
      @yield('content')
      @include ('layouts.partials.footer')
    </div>
  </body>
</html>
