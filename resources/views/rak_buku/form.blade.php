@extends('layouts.app')
@section('title', 'Form Data Rak Buku')
@section('content')
<script>
    $(function () {
        $("#btn-save").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            var formData = {
                nama: $('#nama').val(),
                lokasi: $('#lokasi').val(),
                keterangan: $('#keterangan').val()
            };
            var state = $('#btn-save').val();
            var type = "POST";
            var id = $('#id').val();
            var ajaxurl = '{{ $action }}';
            $.ajax({
                type: type,
                url: ajaxurl,
                data: formData,
                dataType: 'json',
                success: function (data) {
                    var todo = 'Pengiriman Data berhasil'
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    });
</script>

<script>
    $(function () {
        $("#datepicker").datepicker();
    })
</script>
<div class="container">
    
    <h2>{{ $store }} Data Rak Buku</h2>
    <form method="POST" action="{{ $action }}" class="form">
        @csrf
        @if (strtolower($store) == 'ubah')
            @method('PUT')
        @endif
        <input type="hidden" name="id" value="{{ $rak->id }}" />
        <div class="form-group">
            <label for="nama">Nama Rak</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Rak"
                value="{{ $rak->nama }}">
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi"
                value="{{ $rak->lokasi }}">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan"
                value="{{ $rak->keterangan }}">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form-control" id="datepicker" name="tanggal" placeholder="Tanggal"
                value="{{ $rak->tanggal }}">
        </div>

        <button type="submit" class="btn btn-primary">{{ $store }}</button>
        <a href="{{ url('/rak_buku') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection