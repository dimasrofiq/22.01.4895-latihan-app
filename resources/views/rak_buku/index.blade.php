@extends('layouts.app')
@section('title', 'Daftar Rak Buku')
@section('content')
    <h2>Daftar Rak Buku</h2>
    <div class="send_bt">
        <a href="{{ url('rak_buku/create') }}">Tambah</a>
    </div>
    <table class="table">
        <thead>
            <tr><th scope="col">No.</th><th scope="col">ID</th><th scope="col">Nama Rak</th>
                <th scope="col">Lokasi</th><th scope="col">Keterangan</th><th scope="col">Aksi</th></tr>
        </thead>
        <tbody>
            @php $i = 1; @endphp
            @foreach ($rak as $r)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->nama }}</td>
                    <td>{{ $r->lokasi }}</td>
                    <td>{{ $r->keterangan }}</td>
                    <td>
                        <a href="rak_buku/{{ $r->id }}/edit" class="btn btn-primary">Edit</a>
                        <a href="rak_buku/{{ $r->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @php $i++; @endphp
            @endforeach
        </tbody>
    </table>
@endsection
