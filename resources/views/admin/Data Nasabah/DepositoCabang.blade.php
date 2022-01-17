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
                        <th>Atas Nama</th>
                        <th>No Rekening</th>
                        <th>Mata Uang</th>
                        <th>Jangka Waktu</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deposito as $element)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                            @if ($element->atas_nama == null)
                            {{$element->identitas_nasabah->nama}}
                            @else
                            {{$element->atas_nama}}
                            @endif
                            </td>
                            <td>{{$element->no_rekening_pemilik}}</td>
                            <td>{{$element->mata_uang}}</td>
                            <td>{{$element->jangka_waktu}}</td>
                            <th>
                                <a href="{{ url('viewDeposito/'.$element->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i> See More</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
