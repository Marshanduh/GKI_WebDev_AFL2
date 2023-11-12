@extends('layouts.template')

@section('layout_content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Persembahan</th>
      <th scope="col">Kode Persembahan</th>
      <th scope="col">Contoh Penulisan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data_persembahan as $item)
    <tr>
      <td>1</th>
      <td>{{$item['nama_persembahan']}}</td>
      <td>{{$item['kode_persembahan']}}</td>
      <td>{{$item['contoh_penulisan_persembahan']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection