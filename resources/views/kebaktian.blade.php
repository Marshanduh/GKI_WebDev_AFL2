@extends('layouts.template')

@section('layout_content')
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>Ibadah</th>
                        <th>Pelaksanaan Ibadah</th>
                        <th>Waktu Pelaksanaan</th>
                        <th>Lokasi</th>
                        <th class="w-1"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- // ['nama_ibadah','hari_pelaksanaan','waktu_ibadah', 'lokasi_kebaktian']; --}}
                    @foreach($kebaktians as $kebaktian)
                    <tr>
                        <td>{{$kebaktian->nama_ibadah}}</td>
                        <td>{{$kebaktian->hari_pelaksanaan}}</td>
                        <td>{{$kebaktian->waktu_ibadah}}</td>
                        <td>{{$kebaktian->lokasi_kebaktian}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



    {{-- <table class="table table-striped m-3">
        <tr>
            <!-- <th>No</th> -->
            <th>Ibadah</th>
            <th>Pelaksanaan Ibadah</th>
            <th>Waktu Pelaksanaan </th>
            <th>Lokasi</th>
        </tr>
        @foreach ($data_kebaktian as $item)
            <tr>
                <td>{{$item->nama_ibadah}}</td>
                <td>{{$item->hari_pelaksanaan}}</td>
                <td>{{$item->waktu_ibadah}}</td>
                <td>{{$item->lokasi_kebaktian}}</td>
            </tr>
        @endforeach
</table> --}}
@endsection
