<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tentang Kami - Electro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts & Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
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
            <li class="active">Tentang Kami</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- ABOUT SECTION -->
<div class="section">
    <div class="container">
        <div class="row">
            <!-- About Us Section -->
        
            <!-- Image -->
            <div class="col-md-6">
                <img src="{{ asset('user/img/about.jpg') }}" alt="Tentang Kami" class="img-fluid rounded" style="max-width: 600px; width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">>
            </div>
            <!-- /Image -->

            <!-- Info -->
            <div class="col-md-6">
                <h2>Tentang Electro</h2>
                <p>
                    Electro adalah toko elektronik terpercaya yang menyediakan berbagai produk berkualitas, dari gadget hingga peralatan rumah tangga. 
                    Kami telah melayani pelanggan di seluruh Indonesia sejak 2020 dan terus berkomitmen memberikan layanan terbaik.
                </p>
                <ul>
                    <li><strong>Alamat:</strong> Jl. Teknologi No. 88, Bandung</li>
                    <li><strong>Email:</strong> support@electro.id</li>
                    <li><strong>Telepon:</strong> +62 895-3035-2825</li>
                </ul>
                <p>
                    Kepuasan pelanggan adalah prioritas utama kami. Terima kasih telah mempercayai Electro!
                </p>
            </div>
            <!-- /Info -->
        </div>
    </div>
</div>

<!-- /ABOUT SECTION -->

<!-- JS Plugins -->
<script src="{{ asset('user/js/jquery.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
</body>
</html>
