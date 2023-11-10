@extends('layouts.template')

@section('layout_content')

<!-- AWAL STYLE CSS -->
<style>
  
  @media (min-width: 992px) {
    .c-item{
    object-fit: cover;
    height: 500px;
    width: 100%;
  }

  .c-img{
    object-fit: cover;
    width: 100%;
    height: 100%;
    /* width: auto;
    height: auto; */
  }

  

  }


</style>

<!-- AKHIR STYLE CSS -->

<div id="hero-carousel w-100" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="{{asset('image/Kebaktian 1.png')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption mt-5 d-none d-md-block">
        <p class="mt-3">--GKI MOJOKERTO--</p>
        <h1>"Sebab di mana dua atau tiga orang berkumpul dalam nama-Ku, disitu Aku ada  di tengah-tengah mereka"</h1>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="{{asset('image/Kebaktian 2.png')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <p class="mt-3">--GKI MOJOKERTO--</p>
        <h1>Some representative placeholder content for the second slide.</h1>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="{{asset('image/Natal 1.png')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <p class="mt-3">--GKI MOJOKERTO--</p>
        <h1>Some representative placeholder content for the third slide.</h1>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="hero-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="hero-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@endsection