@extends('layouts.app')
@section('title','Prodi page')
@section('bread1','Program studi')
@section('bread2','Data')
@section('content')
    <h3> Master data Program Studi </h3>
    <table class="table table-striped" id="mhs-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode prodi</th>
                <th>Nama prodi</th>
                <th>kaprodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_prodi as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->kode_prodi }}</td>
                <td>{{ $item->nama_prodi }}</td>
                <td>{{ $item->kaprodi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection