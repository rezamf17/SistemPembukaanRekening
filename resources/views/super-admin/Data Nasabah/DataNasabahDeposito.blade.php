@extends('layouts.temp')
@section('title')
Data Rekening Deposito
@endsection()
@section('content')
<div class="card">
    <div class="card-header">
        Data Rekening Deposito
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
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
                            <td>{{$element->atas_nama}}</td>
                            <td>{{$element->no_rekening}}</td>
                            <td>{{$element->mata_uang}}</td>
                            <td>{{$element->jangka_waktu}}</td>
                            <th>
                                <a href="{{ url('nasabah/'.$element->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i> See More</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
