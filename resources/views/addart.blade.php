@extends('template')
@section('main')
<div class="container">
  <form class="" action="{{url('artikel')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Judul</label>
      <input type="text" name="judul" class="form-control" value="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Foto</label>
      <input type="file" name="foto" class="form-control" value="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Isi</label>
      <textarea name="isi" class="form-control" rows="8" cols="80"></textarea>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Tanggal</label>
      <input type="date" name="tanggal" class="form-control" value="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Kategori</label>
      <select class="form-control" name="kategori_id">
        @foreach($kategori as $k)
        <option value="{{$k->id}}">{{$k->nama}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Petugas</label>
      <input type="text" disabled class="form-control" value="{{Auth::user()->name}}">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
@endsection
