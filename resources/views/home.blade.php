<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abdelleh NADIR CRUD_Project</title>
    <link rel="shortcut icon" href="{{ asset('/images/logo.ico')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="{{ asset('/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {font-family: 'Noto Sans', sans-serif;}
    </style>
</head>

<body class="container">
    <div class="row">
        <h1 class="raw text-center text-success bg-light m-3"> Products & Contacts Manager </h1> 
    </div>

    <div class="row">
        <nav class="navbar navbar-light col-11">
            <ul class="m-1 p-2 nav navbar-nav">
                <li class="nav-item active">
                    <a href="{{ url('/products') }}" class="link-secondary"> Products </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ url('/contacts') }}" class="link-secondary"> Contacts </a>
                </li>
            </ul>
        </nav>
        <div class="col-1">
            <img  class="m-1 p-2" src="{{ asset('/images/home.png')}}" alt="App_nadir">
        </div>
        
    </div>

<div>
    <hr>
    <div class="container">
        @yield('stock')
   </div>
</div>
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Abdellah NADIR - 2021 </span>
  </div>
</footer>
</body>
</html>