@extends('template')
@section('main')
<div class="container">
  <form class="" action="{{url('user')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nama</label>
      <input type="text" name="name" class="form-control" value="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" value="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" value="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Role</label>
      <select class="form-control" name="role">
        <option value="admin">Admin</option>
        <option value="editor">Editor</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
@endsection
