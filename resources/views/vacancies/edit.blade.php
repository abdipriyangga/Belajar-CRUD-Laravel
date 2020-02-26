@extends('layouts.master')

@section('content')
<form method="POST" action="{{ url('/vacancies') }}/{{ $vacancies->id }}">
@method('put')
@csrf
  <div class="form-group">
    <label for="lokasiInput">Lokasi</label>
    <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" id="lokasiInput" placeholder="masukkan lokasi" value="{{ $vacancies->lokasi }}">
    @error('lokasi')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="typeInput">Type</label>
    <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="lokasiInput" placeholder="masukkan type" value="{{ $vacancies->type }}">
    @error('type')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="durasiInput">Durasi Pekerjaan</label>
    <input type="text" name="durasi" class="form-control @error('durasi') is-invalid @enderror" id="durasiInput" placeholder="masukkan durasi (hari/minggu/bulan/tahun)" value="{{ $vacancies->durasi }}">
    @error('durasi')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="rentangGajiInput">Rentang Gaji</label>
    <input type="text" name="rentangGaji" class="form-control @error('rentangGaji') is-invalid @enderror" id="rentangGajiInput" placeholder="masukkan rentang gaji" value="{{ $vacancies->rentangGaji }}">
    @error('rentangGaji')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="requirementSkillInput">Requirement Skill</label>
    <input type="text" name="requirementSkill" class="form-control @error('requirementSkill') is-invalid @enderror" id="requirementSkillInput" placeholder="masukkan rquirement skill" value="{{ $vacancies->requirementSkill }}">
    @error('requirementSkill')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class=" btn btn-primary">Ubah Data</button>
</form>
@endsection

