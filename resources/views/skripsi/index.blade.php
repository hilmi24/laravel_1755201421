@extends('layouts.app')
@section("title",'Halaman Skripsi')
@section("bread1",'Skripsi')
@section("bread2",'Daftar')

@section('content')
    <h2> Daftar Skripsi </h2>
    <p><a href="/skripsi/create" class="btn btn-success btn-sm">Tambah</a></p>
    @include('layouts.alert')
    
    <table class="table table-striped" id="skripsi-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Judul</th>
                <th>Tempat Penelitian</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
        $(function () {
            $('#skripsi-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('skripsi_list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'id_skripsi', name: 'id_skripsi'},
                    {data: 'nim', name: 'nim'},
                    {data: 'nama_mahasiswa', name: 'nama_mahasiswa' },
                    {data: 'judul', name: 'judul'},
                    {data: 'tempat_penelitian', name: 'tempat_penelitian'},
                    {data: 'alamat', name: 'alamat' },
                    {data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });

        });
    </script>

@endsection