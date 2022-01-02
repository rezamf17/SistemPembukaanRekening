@extends('layouts.temp')
@section('title')
Kelola Data Akun 
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        Kelola Data Akun
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#modalSaya" title="Tambah Data Akun">
        <i class="fa fa-plus"></i>
        </button>
 
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Kantor Cabang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $element)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$element->name}}</td>
                            <td>{{$element->email}}</td>
                            <td>{{$element->role}}</td>
                            <td>{{$element->cabang->nama_cabang}}</td>
                            <th>
                                <a href="{{ url('KelolaAkun/'.$element->id.'/edit') }}" class="btn btn-success btn-circle" title="Edit Data Akun"><i class="fa fa-edit"></i></a>
                                <a href="#" title="Hapus Data" class="btn btn-danger btn-circle delete" data-id="{{$element->id}}"><i class="fa fa-trash"></i></a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Contoh Modal -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel">Tambah Data Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('KelolaAkun') }}" method="post" accept-charset="utf-8">
            @csrf
        <label>Nama</label>
            <input type="text" name="name" class="form-control">
        <label>Email</label>
            <input type="email" name="email" class="form-control">
        <label>Level</label>
            <select name="role" class="form-control">
                <option value="">Silahkan Pilih Level User</option>
                <option value="admin">Admin</option>
                <option value="super_admin">Super Admin</option> 
            </select>
        <label>Kantor Cabang</label>
            <select name="id_cabang" class="form-control">
              <option value="">Pilih Kantor Cabang</option>
              <option value="1">Arcamanik</option>
              <option value="2">Cianjur</option>
              <option value="3">Garut</option>
              <option value="4">Jatiwangi</option>
              <option value="5">Kopo</option>
              <option value="6">Majalaya</option>
              <option value="7">Rancaekek</option>
            </select>
        <label>Password</label>
            <input type="password" name="password" class="form-control">
        <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>
@include('sweetalert::alert')
@endsection

