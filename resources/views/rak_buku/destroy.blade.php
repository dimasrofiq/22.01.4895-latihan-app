@extends('layouts.app')
@section('title', 'Konfirmasi Hapus Data Rak Buku')
@section('content')
<div class="container">
    <h2>Apakah Anda yakin akan menghapus data ini?</h2>
    @isset($rak)
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tr><th>ID</th><td>:</td><td>{{ $rak->id }}</td></tr>
                <tr><th>Nama</th><td>:</td><td>{{ $rak->nama }}</td></tr>
                <tr><th>Lokasi</th><td>:</td><td>{{ $rak->lokasi }}</td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>:</td>
                    <td>{{ $rak->keterangan }}</td>
                </tr>
            </table>
        </div>
    </div>
    @endisset
    <form method="POST" action="{{ url('/rak_buku/' . $rak->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
        <a href="{{ url('/rak_buku') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
