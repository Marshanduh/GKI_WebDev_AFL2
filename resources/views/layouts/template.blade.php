<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$pagetitle}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg" style="background-color: #9E7BB5;">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="{{asset('image/unnamed.jpg')}}" alt="" width="30" height="24" class="d-inline-block align-text-top text-white">
      GKI Mojokerto
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/kebaktian">Kebaktian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/persembahan">Persembahan</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" href="/project">My Project</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
</body>
</html>