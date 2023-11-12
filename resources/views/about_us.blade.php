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

            .profile-img {
                object-fit: cover;
                width: 100%;
                height: 100%;
                /* width: auto;
                          height: auto; */
            }
        }
    </style>
    <!-- AKHIR STYLE CSS -->

    <!-- About Section-->
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Tentang Kami</span></h2>
                        <p class="lead fw-light mb-4">GKI (Gereja Kristen Indonesia) Mojokerto</p>
                        <p class="text-muted">Selamat datang di halaman "Tentang Kami" Gereja Kristen Indonesia Mojokerto.
                            Kami didirikan pada tahun 1989 dengan tujuan menjadi komunitas rohani yang berkomitmen untuk melayani dan membangun hubungan
                            dengan Tuhan, serta mendukung satu sama lain dalam perjalanan iman kita.</p>
                        
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Projects Section-->
     <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Visi & Misi</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Visi GKI Mojokerto</h2>
                                    <p>"Menyebarkan Kasih Allah, Membangun Komunitas, dan Membentuk Murid Kristus."</p>
                                </div>
                                <img class="img-fluid" src="{{ asset('image/Gedung Gereja.png') }}" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Misi GKI Mojokerto</h2>
                                    <p>1. Ibadah yang Mendalam: Kami berusaha menciptakan pengalaman ibadah yang mendalam, memungkinkan setiap individu untuk merasakan hadirat Tuhan dan tumbuh dalam hubungan pribadi mereka dengan-Nya.</p>

                                    <p>2. Melayani Dengan Kasih: Kami berkomitmen untuk menjadi tangan dan kaki Yesus di dunia ini dengan melayani sesama dengan kasih dan kepedulian.</p>
                                        
                                    <p>3. Pembinaan Rohani: Kami berupaya membentuk murid-murid Kristus melalui pengajaran Alkitab yang mendalam, persekutuan yang kuat, dan dukungan spiritual.</p>
                                        
                                    <p>4. Membangun Komunitas: Kami menyadari pentingnya kebersamaan dalam perjalanan iman, dan kami berusaha untuk menciptakan komunitas yang mendukung, menguatkan, dan menginspirasi satu sama lain.</p>
                                </div>
                                <img class="img-fluid" src="{{ asset('image/bajempacet.jpg') }}" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-black text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Marilah melayani Tuhan Bersama Kami!</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact_us">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Header-->
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <!-- Header text content-->
                    <div class="text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                            <div class="text-uppercase">Design &middot; Development &middot; Marketing</div>
                        </div>
                    <div class="fs-3 fw-light text-muted">Pujilah Nama Tuhan ✟ Bersama</div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">GKI Mojokerto</span></h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <a class="btn btn-outline-dark btn-lg px-4 py-3 me-sm-3 fs-6 fw-bolder" href="/kebaktian">Let's
                                Join Us</a>
                            <a class="btn btn-outline-dark btn-lg px-4 py-3 fs-6 fw-bolder" href="/persembahan">Help Us
                                Grow</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <!-- Header profile picture-->
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <div class="profile bg-gradient-primary-to-secondary">
                            <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                            <!-- Watch a tutorial on how to do this on YouTube (link)-->
                            <img class="profile-img" src="{{ asset('image/Kebaktian 1.png') }}" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
