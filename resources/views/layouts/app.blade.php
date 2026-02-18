<!doctype html>
<html lang="en">
  @include('layouts.head')
  <body class="bg-white">
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
  </body>
</html>