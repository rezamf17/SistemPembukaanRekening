@extends('layouts.temp')
@section('title')
Edit Data Akun 
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        Edit Data Akun
    </div>
    <div class="card-body">
        <form action="{{ url('KelolaAkun/'.$user->id) }}" method="post" accept-charset="utf-8">
            @csrf
            @method('put')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="form-group">
        <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}">
        </div>
        <div class="form-group">
        <label>Level</label>
            <select name="role" class="form-control">
                <option value="">Silahkan Pilih Level User</option>
                <option value="admin" {{$user->role == 'admin'? 'selected' : ''}}>Admin</option>
                <option value="super_admin" {{$user->role == 'super_admin'? 'selected' : ''}}>Super Admin</option> 
            </select>
        </div>
        <div class="form-group">
        <label>Kantor Cabang</label>
            <select name="id_cabang" class="form-control">
              <option value="">Pilih Kantor Cabang</option>
              <option value="1" {{$user->id_cabang == '1'? 'selected' : ''}}>Arcamanik</option>
              <option value="2" {{$user->id_cabang == '2'? 'selected' : ''}}>Cianjur</option>
              <option value="3" {{$user->id_cabang == '3'? 'selected' : ''}}>Garut</option>
              <option value="4" {{$user->id_cabang == '4'? 'selected' : ''}}>Jatiwangi</option>
              <option value="5" {{$user->id_cabang == '5'? 'selected' : ''}}>Kopo</option>
              <option value="6" {{$user->id_cabang == '6'? 'selected' : ''}}>Majalaya</option>
              <option value="7" {{$user->id_cabang == '7'? 'selected' : ''}}>Rancaekek</option>
            </select>
        </div>
        <div class="form-group">
            <label>Password</label>
                <input type="password" name="password" class="form-control">
                <i>*kosongkan password apabila tidak diganti</i>
            
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
        <a href="{{ url('KelolaAkun') }}" title="Kembali" class="btn btn-default">Kembali</a>
        </form>
    </div>
@include('sweetalert::alert')
@endsection

