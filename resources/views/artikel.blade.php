@extends('template')
@section('main')
<div class="container">
  <a href="/artikel/create" class="btn btn-primary">Tambah</a>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Foto</th>
        <th>Isi</th>
        <th>Tanggal</th>
        <th>Kategori</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $artikel)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$artikel->judul}}</td>
        <td> <img src="{{asset('storage/' .$artikel->foto)}}" alt="" width="100px"> </td>
        <td>{{$artikel->isi}}</td>
        <td>{{$artikel->tanggal}}</td>
        <td>{{$artikel->kategori->nama}}</td>
        <td>
          <a href="{{url('artikel/' .$artikel->id. '/edit')}}" class="btn btn-warning">Edit</a>
          <a href="{{url('delart/' .$artikel->id)}}" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
