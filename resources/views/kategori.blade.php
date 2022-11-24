@extends('template')
@section('main')
<div class="container">
  <a href="/kategori/create" class="btn btn-primary">Tambah</a>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $kategori)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$kategori->nama}}</td>
        <td>
          <a href="{{url('kategori/' .$kategori->id. '/edit')}}" class="btn btn-warning">Edit</a>
          <a href="{{url('delkate/' .$kategori->id)}}" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
