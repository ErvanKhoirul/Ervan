<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Detail - Electro</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
</head>
<body>



<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Beranda</a></li>
            <li><a href="#">Produk</a></li>
            <li class="active">{{ $produk->nama_produk }}</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- PRODUCT DETAIL SECTION -->
<div class="section">
    <div class="container">
        <div class="row">
            <!-- Product Image -->
            <div class="col-md-5">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="{{ asset('storage/foto/' . $produk->foto) }}" alt="{{ $produk->nama_produk }}">
                    </div>
                </div>
            </div>
            <!-- /Product Image -->

            <!-- Product Info -->
            <div class="col-md-7">
                <div class="product-details">
                    <h2 class="product-name">{{ $produk->nama_produk }}</h2>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <a class="review-link" href="#">10 Review(s)</a>
                    </div>
                    <div>
                        <h3 class="product-price">Rp{{ number_format($produk->harga, 0, ',', '.') }}</h3>
                        <span class="product-available">In Stock</span>
                    </div>
                    <p>{{ $produk->deskripsi }}</p>
                    <a href="https://wa.me/6289530352825?text=Halo,%20saya%20mau%20beli%20produk%20{{ urlencode($produk->nama_produk) }}" 
                        target="_blank" 
                        class="btn btn-success mt-3" 
                        style="display: inline-flex; align-items: center;">
                         <img src="https://img.icons8.com/ios-filled/24/ffffff/whatsapp.png" style="margin-right: 8px;" alt="WA Logo"/>
                         Pesan di WhatsApp
                     </a>
                     <!-- Customer Reviews -->
<div class="section mt-5">
    <h3>Ulasan Pembeli</h3>
    <div class="review">
        <strong>Andi</strong>
        <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>Produk sangat bagus dan sesuai deskripsi!</p>
    </div>
    <hr>
    <div class="review">
        <strong>Siti</strong>
        <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <p>Pengiriman cepat dan barang berkualitas. Recomended!</p>
    </div>
</div>

                    <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Kembali</a>
            </div>
            <!-- /Product Info -->
        </div>
    </div>
</div>
<!-- /PRODUCT DETAIL SECTION -->



<!-- JS Plugins -->
<script src="{{ asset('user/js/jquery.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('user/js/main.js') }}"></script>
</body>
</html>
