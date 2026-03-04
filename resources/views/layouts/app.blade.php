<!doctype html>
<html lang="en">
  @include('layouts.head')
  <body class="bg-white min-h-screen flex flex-col">
    @include('layouts.navbar')
    <main class="flex-1 overflow-y-auto">
      @yield('content')
    </main>
    @include('layouts.footer')
  </body>
</html>