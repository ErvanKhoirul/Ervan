@extends('layouts.user')

@section('content')
<div class="container">
    <h3>Hasil pencarian untuk: "{{ $query }}"</h3>

    @if (count($produk) > 0)
        <div class="row">
            @foreach ($produk as $data)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product">
                        <a href="{{ route('detail', $data->id) }}">
                            <div class="product-img">
                                <img src="{{ asset('storage/foto/' . $data->foto) }}" alt="{{ $data->nama_produk }}" style="height: 200px; object-fit: contain;">
                            </div>
                        </a>
                        <div class="product-body">
                            <p class="product-category">Kategori</p>
                            <h3 class="product-name">{{ $data->nama_produk }}</h3>
                            <h4 class="product-price">Rp{{ number_format($data->harga, 0, ',', '.') }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center mt-4">
            <h5 class="text-muted">Produk tidak ditemukan.</h5>
        </div>
    @endif
</div>
@endsection
