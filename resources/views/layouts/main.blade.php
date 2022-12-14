<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
     <nav class="navbar navbar-expand-lg bg-dark">
          <div class="container">
               <a class="navbar-brand text-light" href="#">Wikrama Shop</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
          <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="{{route('indexProduct')}}">Home</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('createProduct')}}">Add</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link text-light btn btn-secondary" href="{{route('logout')}}">Logout</a>
               </li>
               </ul>
               </div>
               </div>
     </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>