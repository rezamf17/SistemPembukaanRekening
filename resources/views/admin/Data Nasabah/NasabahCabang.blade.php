@extends('layouts.temp')
@section('title')
Data Form Nasabah Cabang {{$user->cabang->nama_cabang}}
@endsection()
@section('content')
<div class="card">
    <div class="card-header">
        Data Nasabah
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Ibu</th>
                        <th>Jenis Simpanan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formulir as $element)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$element->identitas_nasabah->nama}}</td>
                            <td>{{$element->identitas_nasabah->jenis_kelamin}}</td>
                            <td>{{$element->identitas_nasabah->nama_ibu}}</td>
                            <td>{{$element->jenis_simpanan->jenis_simpanan}}</td>
                            <th>
                                <a href="{{ url('viewNasabah/'.$element->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i> See More</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
