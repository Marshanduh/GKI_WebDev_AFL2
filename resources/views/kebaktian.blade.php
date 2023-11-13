@extends('layouts.template')

@section('layout_content')
    <style>
        /* Gaya Kebaktian Card */
        body {
            /* margin: 50px; */
        }
        .kebaktian {
            padding: 40px;
            margin-bottom: 10px;
        }

        .card {
            border: none;
            /* transition: transform 0.3s; */
        }

        .card:hover {
            /* transform: scale(1.02); */
        }

        .custom-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .card-body {
            padding: 15px;
        }

        .display-4 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
        }

        .lead {
            font-size: 16px;
            margin-bottom: 10px;
            color: #777;
        }

        .capt {
            font-size: 14px;
            color: #888;
        }

        .btn-primary {
            font-size: 14px;
            padding: 8px 16px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Custom Separator */
        .custom-hr {
            height: 2px;
            background-color: #ddd;
            margin-top: 10px;
            margin-bottom: 10px;
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
                                <a class="btn btn-primary btn-lg" href="https://linktr.ee/gkiMoker" role="button">Lokasi</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
