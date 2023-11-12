@extends('layouts.template')

@section('layout_content')
    <style>
        .kebaktian {
            padding: 5px;
            margin-bottom: 5px;
        }

        .custom-image {
            width: 100%;
            height: 80%;
        }
        .custom-hr{
                border-top: 1px solid #ccc;
                margin-top: 5px; 
                margin-bottom: 5px; 
            }

        @media (max-width: 767px){
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

            .display-4{
                font-size: 20px;
                font-weight: 500;
            }

            .lead {
                font-size: 15px;
                margin-bottom: 2px;
            }

            .my-4{
                margin-top: 5px;
            }

            .capt{
                font-size: small;
                margin-bottom: 2px;
            }

            .btn-primary{
                font-size: 10px;
                padding: 5px 10px;
            }

            .custom-hr{
                border-top: 1px solid #ccc;
                margin-top: 5px; 
            }
            
        }

    </style>

    <div class="card">
        <div class="card-body">
            @foreach ($kebaktians as $key => $kebaktian)
                <!-- ROW KEBAKTIAN -->
                <div class="row kebaktian">
                    <!-- KEBAKTIAN DENGAN URUTAN GENAP -->
                    @if ($key % 2 == 0)
                        <div class="col">
                            <img src="{{ asset('image/' . $kebaktian->foto_kebaktian) }}" alt="Kebaktian"
                                class="img-fluid custom-image">
                        </div>
                    @endif
                    <div class="col">
                        <div class="row jumbotron1">
                            <div class="col">
                                <h1 class="display-4">{{ $kebaktian->nama_ibadah }}</h1>
                                <p class="lead">{{ $kebaktian->hari_pelaksanaan }}, {{ $kebaktian->waktu_ibadah }}</p>
                                <div class="custom-hr"></div>
                                <p class="capt">Lokasi kebaktian dilaksanakan di {{ $kebaktian->lokasi_kebaktian }}</p>
                                <a class="btn btn-primary btn-lg" href="#" role="button">Lokasi</a>
                            </div>
                        </div>
                    </div>
                    <!-- KEBAKTIAN DENGAN URUTAN GANJIL -->
                    @if ($key % 2 != 0)
                        <div class="col order-md-2">
                            <img src="{{ asset('image/' . $kebaktian->foto_kebaktian) }}" alt="Kebaktian"
                                class="img-fluid custom-image">
                        </div>
                    @endif
                </div>
            @endforeach
            <!-- AKHIR KEBAKTIAN JUMBOTRON  -->
        </div>
    </div>
@endsection
