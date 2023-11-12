@extends('layouts.template')

@section('layout_content')
    {{-- HEADER --}}

    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white bg-black">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">"Berkat yang Berlipat Ganda: Persembahan Anda, Misi Kami"</h1>
                <p class="lead my-3">Persembahan Yang Terbaik Untuk Tuhan, Demi Kelancaran Berjemaat Di GKI Mojokerto</p>
                <p class="lead mb-0"><a class="text-white fw-bold">Amsal 11:25 "Siapa banyak memberi berkat, diberi
                        kelimpahan, siapa memberi minum, ia sendiri akan diberi minum."</a></p>
            </div>
        </div>

        {{-- <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>

                    </div>
                </div>
            </div>
        </div> --}}

        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Transfer Persembahan Melalui QRIS &</h5>
                <h5 class="card-title">Rekening GKI Mojokerto - BCA 050 2211 160</h5>
                <h6 class="card-subtitle mb-2 text-muted">Persembahan dapat ditransfer ke: </h6>
                <p class="card-text">REKENING GKI MOJOKERTO atas nama GKI Mojokerto BCA 050 2211 160</p>
                <p class="card-text">Atau melalui i.saku, dana, gopay, ovo, linkaja, dll.</p>
                <p class="card-text">memakai kode Q-RIS</p>
                <p class="card-text">Dengan catatan, di rekening penerima TIDAK TERCANTUM nama pengirim.</p>
            </div>
        </div>


        <div class="mt-4 row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- Image on the left side -->
                        <div class="col-md-6">
                            <img src="{{ asset('image/QRCodePersembahan.jpeg') }}" alt="Image" class="img-fluid">
                            <p class="small mt-2 text-center">NMID: ID2020048776211A01</p>
                        </div>

                        <!-- Table on the right side -->
                        <div class="col-md-6">
                            <h5 class="font-weight-bold">Kode Persembahan</h5>
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Nama Persembahan</th>
                                        <th>Kode Persembahan</th>
                                        <th>Contoh Penulisan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- // ['nama_persembahan','kode_persembahan','contoh_penulisan_persembahan']; --}}
                                    @foreach ($persembahans as $persembahan)
                                        <tr>
                                            <td>{{ $persembahan->nama_persembahan }}</td>
                                            <td>{{ $persembahan->kode_persembahan }}</td>
                                            <td>{{ $persembahan->contoh_penulisan_persembahan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>





    {{-- <div class="card">
        <div class="table-responsive">
            {{-- <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>Nama Persembahan</th>
                        <th>Kode Persembahan</th>
                        <th>Contoh Penulisan</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- // ['nama_persembahan','kode_persembahan','contoh_penulisan_persembahan']; --}}
            {{-- @foreach ($persembahans as $persembahan)
                        <tr>
                            <td>{{ $persembahan->nama_persembahan }}</td>
                            <td>{{ $persembahan->kode_persembahan }}</td>
                            <td>{{ $persembahan->contoh_penulisan_persembahan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table> --}}
        </div>
    </div>
@endsection
