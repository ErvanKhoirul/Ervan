<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
</head>
<body>
<header>
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +0895-3035-2825</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> ervanlee1945@gmail.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> Bandung</a></li>
            </ul>
            <ul class="header-links pull-right">

                <li><a href="#"><i class="fa fa-user-o"></i> My account</a></li>
            </ul>
        </div>
    </div>

    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <img src="{{ asset('user/img/logo.png') }}" alt="Logo" class="product-center-img">
                        </a>
                    </div>
                </div>
                <form action="{{ route('search') }}" method="GET" class="d-flex mb-4">
                    <input type="text" name="query" class="form-control me-2" placeholder="Cari produk...">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
                
                
                </div>
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <div class="dropdown">
                           
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <div class="product-widget">
                                        <div class="product-body"></div>
                                    </div>
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{ asset('user/img/product02.png') }}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">Headset</a></h3>
                                            <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="cart-summary">
                                    <small>3 Item(s) selected</small>
                                    <h5>SUBTOTAL: $2940.00</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="#">View Cart</a>
                                    <a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<nav id="navigation">
    <div class="container">
        <div id="responsive-nav">
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{ route('beranda') }}">Beranda</a></li>
                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="section">
    <div class="container">
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
                            <h3 class="product-name">
                                <a href="{{ route('detail', $data->id) }}">{{ $data->nama_produk }}</a>
                            </h3>
                            <h4 class="product-price">Rp{{ number_format($data->harga, 0, ',', '.') }}</h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<footer id="footer">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i> Bandung</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> +0895-3035-2825</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> ervanlee1945@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Categories</h3>
                        <ul class="footer-links">
                            <li><a href="#">Hot deals</a></li>
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Smartphones</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Information</h3>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Service</h3>
                        <ul class="footer-links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom-footer" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-payments">
                        <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                    </ul>
                    <span class="copyright">
                        &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Template by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('user/js/jquery.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/slick.min.js') }}"></script>
<script src="{{ asset('user/js/nouislider.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('user/js/startmin.js') }}"></script>
</body>
</html>