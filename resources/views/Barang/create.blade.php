@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Album</h3>
        <form action="{{ url('/barang') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>ARTIS</label>
                <input type="text" class="form-control" name="produk_name">
            </div>
            <div class="mb-3">
                <label>ALBUM</label>
                <input type="text" class="form-control" name="produk_stok">
            </div>
            <div class="mb-3">
                <label>HARGA</label>
                <input type="text" class="form-control" name="produk_harga">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-info">
            </div>
        </form>
    </div>
@endsection