@extends('template')
@section('main')
<div class="container">
  <a href="/artikel" class="btn btn-info mb-3">Kembali</a>
  <form class="" action="{{route('artikel.update', $artikel->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="" class="form-label">Judul</label>
      <input type="text" name="judul" class="form-control" value="{{$artikel->judul}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Foto</label>
      <input type="file" name="foto" class="form-control" value="{{@old('foto')}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Isi</label>
      <textarea name="isi" class="form-control" rows="8" cols="80">{{$artikel->isi}}</textarea>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Tanggal</label>
      <input type="date" name="tanggal" class="form-control" value="{{$artikel->tanggal}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Kategori</label>
      <select class="form-control" name="kategori_id">
        @foreach($kategori as $k)
        <option value="{{$k->id}}" @if($artikel->kategori_id == $k->id) @selected($artikel->kategori_id == $k->id) @endif>{{$k->nama}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Petugas</label>
      <input type="text" disabled class="form-control" value="{{Auth::user()->name}}">
    </div>
    <button type="submit" class="btn btn-success">Ubah</button>
  </form>
</div>
@endsection
