@extends('template')
@section('main')
<div class="container">
  <div class="row">
    @foreach($data as $artikel)
    <div class="col-4">
      <div class="card mb-5">
        <img src="{{asset('storage/' .$artikel->foto)}}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{$artikel->judul}}</h5>
          <p class="text-secondary">by {{$artikel->user->name}}</p>
          <p> <sub>{{$artikel->tanggal}}</sub> </p>
          <p class="card-text">{{$artikel->isi}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
