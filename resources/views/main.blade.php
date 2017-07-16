<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <body>
    <!--default bootstrap nav bar-->
    @include('partials._nav')
  <div class="container">
    @yield('content')
    @include('partials._footer')
  </div> <!-- end of .container--> 
    @include('partials._javascript')
  </body>
</html>