<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
      body {
        font-family: 'Nunito';
        background-color:#F0F8FF;
      }

      .schoolnamelogo{
        text-align:center;
      }

      .rounded{
        width:470px;
        height:300px;
      }

      .btn {
        width:300px;
        margin-left: auto;
        margin-right: auto;
      }

      .container {
        text-align:center;
      }
    </style>
  </head>

  <div class="schoolnamelogo">
    <img src='/svg/logo.svg' alt='logo' style="width:80px;height:80px;">
    <h1>Millenium University</h1>
    <h3>Faculty Portal for Guardian's Contact Information</h3>
      <div class="websitename py-3">
        <img src="/svg/stud.jpg" class="rounded float-left" alt="Millenium University">
        <img src="/svg/bg.jpg" class="rounded float-center" alt="Millenium University">
        <img src="/svg/stud2.jpg" class="rounded float-right" alt="Millenium University">
      </div>
  </div>

  <body class="body">
    <div class="container py-3">
      @if (Route::has('login'))
        <div>
          @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline"><button type="button" class="btn btn-info btn-lg btn-block">Home</button></a>
          @else
              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"><button type="button" class="btn btn-info btn-lg btn-block">Login</button></a>
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"><button type="button" class="btn btn-info btn-lg btn-block">Register</button></a>
              @endif
          @endauth
        </div>
    </div>
      @endif
  </body>

  <footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">
    <div class="row copyright">
      <div class="col-md-12 text-center" style="position: absolute; bottom: 5px;">
        <hr>
        <p>
          <small class="block">&copy; 2021 | All Rights Reserved.</small>
          <small class="block">Millenium University</small>
        </p>
      </div>
    </div>
  </footer>

</html>
