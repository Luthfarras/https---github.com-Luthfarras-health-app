@extends('template')
@section('main')
<div class="container">
  <a href="/user" class="btn btn-info mb-3">Kembali</a>
  <form class="" action="{{route('user.update', $user->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="" class="form-label">Nama</label>
      <input type="text" name="name" class="form-control" value="{{$user->name}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input type="text" name="email" class="form-control" value="{{$user->email}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" value="">
      <p class="text-warning">Kosongi jika tidak mengganti password</p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Role</label>
      <select class="form-control" name="role">
        <option value="admin" @if($user->role == 'admin') @selected($user->role == 'admin') @endif>Admin</option>
        <option value="editor" @if($user->role == 'editor') @selected($user->role == 'editor') @endif>Editor</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Ubah</button>
  </form>
</div>
@endsection
