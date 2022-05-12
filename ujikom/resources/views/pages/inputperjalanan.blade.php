@extends('layouts.master')
@section('section')
<h1>Input Perjalanan</h1>
@endsection
@section('body')
<form method="POST" action="/simpandata">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="tanggal">Tanggal</label>
      <input type="date" max="{{ date('Y-m-d') }}" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" placeholder="Input Tanggal">
      @error('tanggal')
          <div class="invalid-feedback alert alert-danger">
            {{ $message }}
          </div>
        @enderror
    </div>
    <div class="form-group">
      <label for="jam">Jam</label>
      <input type="time" class="form-control @error('jam') is-invalid @enderror" name="jam" id="jam" placeholder="Input jam">
      @error('jam')
          <div class="invalid-feedback alert alert-danger">
            {{ $message }}
          </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="lokasi">Lokasi</label>
        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" id="lokasi" placeholder="Input Lokasi">
        @error('lokasi')
          <div class="invalid-feedback alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="suhu">Suhu</label>
        <input type="number" class="form-control @error('suhu') is-invalid @enderror" name="suhu" id="suhu" placeholder="Input Suhu">
        @error('suhu')
          <div class="invalid-feedback alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </form>
@endsection
