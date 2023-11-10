<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">

    <!-- MY CSS -->
    <style>
    .navbar-brand{
    font-family: Inter;
    font-size: 20px;
    }

    .nav-link{
    font-family: Inter;
    }
    

    /* HANYA UNTUK DEKSTOP */
    @media (min-width: 992px) { 
      .nav-link{
      font-family: Inter;
      text-transform: uppercase;
      margin-right: 30px;
      }
    }

    .nav-link:hover::after{
      color: blue;
    }

    </style>

    <!-- AKHIR CSS -->

    <title>{{$pagetitle}}</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
  <div class="container">
    <!-- <a class="navbar-brand" href="#">GKI Mojokerto</a> -->
    <a class="navbar-brand" href="/">
      <img src="{{asset('image/unnamed.jpg')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
      GKI Mojokerto
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kebaktian">Kebaktian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/persembahan">Persembahan</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Persembahan</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
    <!-- Akhir Navbar -->

    <!-- Bagian isi dari tiap page -->
    <div class="w-100">
        <h1>{{$maintitle}}</h1>
        <h2>@yield('layout_tagline')</h2>
        @yield('layout_content')
    </div>
    <!-- Akhir isi dari tiap page -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
  </body>
</html>