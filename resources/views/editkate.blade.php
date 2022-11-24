@extends('template')
@section('main')
<div class="container">
  <a href="/kategori" class="btn btn-info mb-3">Kembali</a>
  <form class="" action="{{route('kategori.update', $kategori->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" value="{{$kategori->nama}}">
    </div>
    <button type="submit" class="btn btn-success">Ubah</button>
  </form>
</div>
@endsection
