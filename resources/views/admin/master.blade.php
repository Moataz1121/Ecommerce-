<!doctype html>
<html lang="en">
  @include('admin.partials.head')
  <body class="vertical  light  ">
    <div class="wrapper">
      @include('admin.partials.navbar')
      @include('admin.partials.sidebar')
     @yield('content')

      
      
      
    </div> <!-- .wrapper -->
    @include('admin.partials.scripts')
  </body>
</html>