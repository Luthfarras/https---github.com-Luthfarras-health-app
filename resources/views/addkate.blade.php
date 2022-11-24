@extends('template')
@section('main')
<div class="container">
  <form class="" action="{{url('kategori')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" value="">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
@endsection
