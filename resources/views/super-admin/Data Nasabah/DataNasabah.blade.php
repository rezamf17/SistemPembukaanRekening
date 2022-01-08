@extends('layouts.temp')
@section('title')
Data Rekening Tabungan
@endsection()
@section('content')
<div class="card">
    <div class="card-header">
        Data Rekening Tabungan
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
                        <th>Status Kependudukan</th>
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
                            <td>{{$element->identitas_nasabah->status_kependudukan}}</td>
                            <th>
                                <a href="{{ url('nasabah/'.$element->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i> See More</a>
                                <a href="#" title="Hapus Data" class="btn btn-danger btn-circle delete-nasabah" data-id="{{$element->id}}" data-nama="{{$element->identitas_nasabah->nama}}"><i class="fa fa-trash"></i></a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
