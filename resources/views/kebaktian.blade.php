@extends('layouts.template')

@section('layout_content')

<table class="table table-striped m-3">
        <tr>
            <!-- <th>No</th> -->
            <th>Ibadah</th>
            <th>Pelaksanaan Ibadah</th>
            <th>Waktu Pelaksanaan </th>
            <th>Lokasi</th>
        </tr>
        @foreach($data_kebaktian as $item)
            <tr>
                <td>{{$item->nama_ibadah}}</td>
                <td>{{$item->hari_pelaksanaan}}</td>
                <td>{{$item->waktu_ibadah}}</td>
                <td>{{$item->lokasi_kebaktian}}</td>
            </tr>
        @endforeach
</table>
@endsection
