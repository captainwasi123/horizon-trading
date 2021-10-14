<!DOCTYPE html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> @yield('title') | {{env('APP_NAME')}} </title>
    <meta property="og:title" content="@yield('title') | {{env('APP_NAME')}} ">
    <meta name="author" content="Beni Arisandi">
    <!-- FAVICONS -->
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    @include('includes.style')
    @yield('addStyle')
  </head>
  <body>
    <!-- .app -->
    <div class="app">
      @include('includes.header')
      <!-- /.app-header -->
      <!-- .app-aside -->
      @include('includes.sidebar')
      <!-- /.app-aside -->
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          @yield('content')
          <!-- /.page -->
        </div>
        <!-- .app-footer -->
        @include('includes.footer')
        <!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    
    @include('includes.script')
    @yield('addScript')
   
  </body>

</html>