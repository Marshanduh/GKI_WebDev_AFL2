@extends('layouts.template')

@section('layout_content')
    <style>
        .kebaktian {
            padding: 5px;
            margin-bottom: 5px;
        }

        .custom-image {
            width: 100%;
            height: 200px; /* Adjust the height as needed */
            object-fit: cover; /* This ensures the image maintains its aspect ratio */
        }

        .custom-hr {
            border-top: 1px solid #ccc;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        @media (max-width: 767px) {
            .kebaktian {
                padding: 10px;
                margin-bottom: 5px;
            }

            .jumbotron1 {
                flex-direction: column;
            }

            .custom-image {
                height: auto;
            }

            .display-4 {
                font-size: 20px;
                font-weight: 500;
            }

            .lead {
                font-size: 15px;
                margin-bottom: 2px;
            }

            .my-4 {
                margin-top: 5px;
            }

            .capt {
                font-size: small;
                margin-bottom: 2px;
            }

            .btn-primary {
                font-size: 10px;
                padding: 5px 10px;
            }

            .custom-hr {
                border-top: 1px solid #ccc;
                margin-top: 5px;
            }
        }
    </style>

    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach ($kebaktians as $key => $kebaktian)
                    <div class="col-md-6 kebaktian">
                        <div class="card shadow">
                            <img src="{{ asset('image/' . $kebaktian->foto_kebaktian) }}" alt="Kebaktian"
                                class="img-fluid custom-image">
                            <div class="card-body">
                                <h1 class="display-4">{{ $kebaktian->nama_ibadah }}</h1>
                                <p class="lead">{{ $kebaktian->hari_pelaksanaan }},
                                    {{ $kebaktian->waktu_ibadah }}</p>
                                <div class="custom-hr"></div>
                                <p class="capt">Lokasi kebaktian dilaksanakan di
                                    {{ $kebaktian->lokasi_kebaktian }}</p>
                                <a class="btn btn-primary btn-lg" href="#" role="button">Lokasi</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
