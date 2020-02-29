<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('create') }}">Create</a>
        </li>
      </ul>
    </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>

  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>


  </body>
</html>
