@extends('layouts.master')

@section('content')
<form method="POST" action="{{ url('/skills') }}">
@csrf
  <div class="form-group">
    <label for="bhsPemrogramanInput">Bahasa Pemrograman</label>
    <input type="text" name="bhsPemrograman" class="form-control @error('bhsPemrograman') is-invalid @enderror" id="bhsPemrogramanInput" placeholder="masukkan bahasa pemrograman yang dikuasai" value="{{ old('bhsPemrograman') }}">
    @error('bhsPemrograman')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="frameworkInput">Framework</label>
    <input type="text" name="framework" class="form-control @error('framework') is-invalid @enderror" id="frameworkInput" placeholder="masukkan framework yang dikuasai" value="{{ old('framework') }}">
    @error('framework')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="levelInput">Level</label>
    <input type="text" name="level" class="form-control @error('level') is-invalid @enderror" id="levelInput" placeholder="masukkan level anda" value="{{ old('level') }}">
    @error('level')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="waktuInput">Waktu Penguasaan </label>
    <input type="text" name="waktu" class="form-control @error('waktu') is-invalid @enderror" id="waktuInput" placeholder="masukkan berapa lama anda sudah menguasainya" value="{{ old('waktu') }}">
    @error('waktu')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class=" btn btn-primary">Submit</button>
</form>
@endsection

