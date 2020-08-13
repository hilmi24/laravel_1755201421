@extends('layouts.app')
@section('title', 'Halaman Skripsi')
@section('bread1', 'Skripsi')
@section('bread2', 'Data')
@section('content')
    <h3>Form Skripsi</h3>

    @include('layouts.alert')

    <form action="{{ route('skripsi.update', $id_skripsi->id)}}" method ="POST">
    @csrf
    @method('PUT')

    <div class="form-group row">
        <label for="id" class="col-sm-12">ID</label>
        <div class="col-sm-3">
        <input type="text" name="id" class="form-control" id="id" placeholder=" ID " value="{{ $skripsi->id }}" readonly>
        @error('id')<small id="id" class="form-text text-danger">{{ $message}}</small>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="id" class="col-sm-12">NIM</label>
        <div class="col-sm-5">
        <input type="text" name="nim" class="form-control" id="nim" placeholder="Nim Tidak Boleh Kosong" value="{{ $skripsi->nim }}">
        @error('nim')<small id="nim" class="form-text text-danger">{{ $message}}</small>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="id" class="col-sm-12">Nama Mahasiswa</label>
        <div class="col-sm-3">
        <select name="nama_mahasiswa" id="nama_mahasiswa" class="form-control">
        @foreach($skripsi as $item)
        <option value="{{ $item->id_skripsi }}" {{ ($skripsi->skripsi==$item->id_skripsi) ? 'selected' : '' }} >{{ $item->id_skripsi }}</option>
        @endforeach
        </select>
        <small id="nama" class="form-text text-muted"></small>
        </div>
    </div>
    <div class="form-group row">
    <label for="id" class="col-sm-12">Judul</label>
        <div class="col-sm-8">
        <textarea name="judul" class="form-control" id="judul">{{ $skripsi->judul }}</textarea>
        <small id="judul" class="form-text text-muted"></small>
    </div>
    </div>
    <div class="form-group row">
    <label for="id" class="col-sm-12">Tempat Penelitian</label>
        <div class="col-sm-8">
        <textarea name="tempat_penelitian" class="form-control" id="tempat_penelitian">{{ $skripsi->tempat_penelitian }}</textarea>
        <small id="tempat_penelitian" class="form-text text-muted"></small>
    </div>
    </div>
    <div class="form-group row">
    <label for="id" class="col-sm-12">Alamat</label>
        <div class="col-sm-8">
        <textarea name="alamat" class="form-control" id="alamat">{{ $skripsi->alamat }}</textarea>
        <small id="alamat" class="form-text text-muted"></small>
    </div>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
    <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
    </form>
    @endsection
    