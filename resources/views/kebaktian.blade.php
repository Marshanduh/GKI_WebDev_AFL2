@extends('layouts.template')

@section('layout_content')

    <div class="card">
        <div class="card-body">
            
            <!-- ROW KEBAKTIAN 1 -->
            <div class="row kebaktian1">
                <div class="col">
                    <img src="{{ asset('image/Kebaktian Fokus.png') }}" alt="Kebaktian1" class="img-fluid">
                </div>
                <div class="col">
                    <div class="row jumbotron1">
                        <div class="col">
                            
                            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                            <hr class="my-4">
                            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                            <a class="btn btn-primary btn-lg" href="#" role="button">Detail Kebaktian</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- AKHIR ROW KEBAKTIAN 1 -->

            <!-- AWAL ROW KEBAKTIAN 2 -->
            <!-- <div class="row kebaktian2">
                <div class="col">
                    <div class="row jumbotron1">
                        <div class="col">
                            <h1 class="display-4">Ibadah Umum Pagi-2</h1>
                            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                            <hr class="my-4">
                            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                            <a class="btn btn-primary btn-lg" href="#" role="button">Detail Kebaktian</a>
                        </div>  
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('image/Kebaktian Fokus.png') }}" alt="Kebaktian1" class="img-fluid">
                </div>
            </div> -->
            <!-- AKHIR ROW KEBAKTIAN 2 -->
            
    </div>
</div>
@endsection
