@extends('template')
@section('main')
<div class="container">
  <a href="/user/create" class="btn btn-primary">Tambah</a>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Role</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $user)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        <td>
          <a href="{{url('user/' .$user->id. '/edit')}}" class="btn btn-warning">Edit</a>
          <a href="{{url('deluser/' .$user->id)}}" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
