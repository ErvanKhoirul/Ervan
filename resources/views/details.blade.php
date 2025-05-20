@extends('layouts.user') {{-- atau layout Anda --}}

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Gambar Produk -->
        <div class="col-md-5">
            <img src="{{ asset('storage/foto/' . $produk->foto) }}" alt="{{ $produk->nama_produk }}" class="img-fluid rounded">
        </div>

        <!-- Detail Produk -->
        <div class="col-md-7">
            <h2>{{ $produk->nama_produk }}</h2>
            <h4 class="text-danger">Rp{{ number_format($produk->harga, 0, ',', '.') }}</h4>
            <p><strong>Stok:</strong> {{ $produk->stok }}</p>
            <p><strong>Deskripsi:</strong> {{ $produk->deskripsi }}</p>
            
            <button class="btn btn-primary mt-3">
                <i class="fa fa-shopping-cart"></i> Tambah ke Keranjang
            </button>
        </div>
    </div>
</div>
@endsection
