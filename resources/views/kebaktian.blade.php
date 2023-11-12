@extends('layouts.template')

@section('layout_content')
<style>
    .kebaktian {
        padding: 5px; /* Sesuaikan dengan besar jarak yang diinginkan */
        margin-bottom: 5px; /* Sesuaikan dengan besar jarak yang diinginkan */
    }

    .custom-image {

            width: 100%; 
            height: 80%; 
        
    }

</style>

<div class="card">
        <div class="card-body">
            @foreach($kebaktians as $key => $kebaktian)
            <!-- ROW KEBAKTIAN -->
            <div class="row kebaktian">
                <!-- KEBAKTIAN DENGAN URUTAN GENAP -->
                @if($key % 2 == 0)
                <div class="col">
                    <img src="{{asset('image/' . $kebaktian->foto_kebaktian)}}" alt="Kebaktian" class="img-fluid custom-image">
                </div>
                @endif
                <div class="col">
                    <div class="row jumbotron1">
                        <div class="col">
                            <h1 class="display-4">{{$kebaktian->nama_ibadah}}</h1>
                            <p class="lead">{{$kebaktian->hari_pelaksanaan}}, {{$kebaktian->waktu_ibadah}}</p>
                            <hr class="my-4">
                            <p>Lokasi kebaktian dilaksanakan di {{$kebaktian->lokasi_kebaktian}}</p>
                            <a class="btn btn-primary btn-lg" href="#" role="button">Lokasi</a>
                        </div>  
                    </div>
                </div>
                <!-- KEBAKTIAN DENGAN URUTAN GANJIL -->
                @if($key % 2 != 0)
                    <div class="col order-md-2">
                        <img src="{{asset('image/' . $kebaktian->foto_kebaktian)}}" alt="Kebaktian" class="img-fluid custom-image">
                    </div>
                @endif
            </div>
            @endforeach  
            <!-- AKHIR KEBAKTIAN JUMBOTRON  -->
    </div>
</div>
@endsection

