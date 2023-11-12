

@extends('layouts.template')

@section('layout_content')


<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
                <tr>
                    <th>Nama Persembahan</th>
                    <th>Kode Persembahan</th>
                    <th>Contoh Penulisan</th>
                    
                    <th class="w-1"></th>
                </tr>
            </thead>
            <tbody>
               {{-- // ['nama_persembahan','kode_persembahan','contoh_penulisan_persembahan']; --}}
                @foreach($persembahans as $persembahan)
                <tr>
                    <td>{{$persembahan->nama_persembahan}}</td>
                    <td>{{$persembahan->kode_persembahan}}</td>
                    <td>{{$persembahan->contoh_penulisan_persembahan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection