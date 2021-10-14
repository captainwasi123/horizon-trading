<!DOCTYPE html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Sign In | {{env('APP_NAME')}} </title>
    <meta property="og:title" content="Sign In">
    <meta name="author" content="{{env('APP_NAME')}}">
    <!-- Favicons -->
    <meta name="theme-color" content="#3063A0"><!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/stylesheets/custom.css">
  </head>
  <body>
    <main class="auth">
      <header id="auth-header" class="auth-header">
        <img src="{{URL::to('/assets/images/horizon.png')}}" width="200px" style="margin-bottom: 10px;">
        <br>
        <h1>
          Sign In
        </h1>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
      </header><!-- form -->
      <form class="auth-form" method="post">
        @csrf
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" class="form-control" placeholder="Username" name="username" required autofocus> <label for="inputUser">Username</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required> <label for="inputPassword">Password</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
        </div><!-- /.form-group -->
      </form><!-- /.auth-form -->
      <!-- copyright -->
      <footer class="auth-footer"> © 2021 All Rights Reserved. <a href="https://www.horizonproperties.pk">Horizon Properties</a>
      </footer>
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="{{URL::to('/')}}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="{{URL::to('/')}}/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="{{URL::to('/')}}/assets/vendor/particles.js/particles.js"></script>
  </body>

</html>