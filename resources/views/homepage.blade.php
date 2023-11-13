@extends('layouts.template')

@section('layout_content')
    <!-- AWAL STYLE CSS -->
    <style>
      @media (min-width: 992px) {
          .c-item {
              object-fit: cover;
              height: 500px;
              width: 100%;
          }

          .c-img {
              object-fit: cover;
              width: 100%;
              height: 100%;
          }
      }

      @media (max-width: 767px) {
          .carousel-caption {
              padding: 20px;
          }

          .carousel-caption h1 {
              font-size: 24px;
          }

          .carousel-caption p {
              font-size: 14px;
          }
      }

      .service-time-card {
          height: 100%;
      }

      .service-time-card h5 {
          font-size: 18px;
      }

      .service-time-card p {
          font-size: 14px;
      }

  </style>
    <!-- AKHIR STYLE CSS -->

    <div id="hero-carousel" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="hero-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="{{ asset('image/Kebaktian 1.png') }}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption mt-5 d-none d-md-block">
                    <p class="mt-3">--GKI MOJOKERTO--</p>
                    <h1>"Sebab di mana dua atau tiga orang berkumpul dalam nama-Ku, disitu Aku ada di tengah-tengah mereka"
                    </h1>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="{{ asset('image/Kebaktian 2.png') }}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p class="mt-3">--GKI MOJOKERTO--</p>
                    <h1>"Seorang sahabat menaruh kasih setiap waktu, dan menjadi seorang saudara dalam kesukaran."</h1>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="{{ asset('image/Natal 1.png') }}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p class="mt-3">--GKI MOJOKERTO--</p>
                    <h1>"Biarkan semua yang kamu lakukan didasari dengan cinta."</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="py-5 bg-black text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">About Us</h2>
                <p>Amsal 17:17 berbunyi seperti ini, “Seorang sahabat menaruh kasih setiap waktu, dan menjadi seorang
                    saudara dalam kesukaran.”</p>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="/about_us">Learn More</a>
            </div>
        </div>
    </section>

    

    <section class="py-5 bg-white text-black">
      <div class="container">
          <div class="row text-center">
            <h2 class="display-4 fw-bolder mb-4">Service Time</h2>
                
                
              @php $counter = 0; @endphp
              @foreach ($kebaktians as $kebaktian)
                  @if ($counter < 3)
                      <div class="col-4 mb-4">
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">{{ $kebaktian->nama_ibadah }}</h5>
                                  <p class="card-text">{{ $kebaktian->hari_pelaksanaan }}</p>
                              </div>
                          </div>
                      </div>
                      @php $counter++; @endphp
                  @endif
              @endforeach
              <a class="btn btn-outline-dark px-5 py-3 fs-6 fw-bolder" href="/kebaktian">Learn More</a>
          </div>
      </div>
  </section>
  
@endsection
