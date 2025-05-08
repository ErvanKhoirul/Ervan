<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            {{-- NAVBAR --}}
            @include('layouts.components.header')
            {{-- /NAVBAR --}}

            {{-- SIDEBAR --}}
            @include('layouts.components.sidebar')
            {{-- /SIDEBAR --}}
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Produk</h1>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                </div>
                <!-- /.row -->
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Menampilkan Produk
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="card-body">
                                <form action="{{route('produk.update',$produk->id)}}" method="POST" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="mb-2">
                                        <label for="">Nama Produk</label>
                                        <input type="text" name="nama_produk" class="form-control" value="{{$produk->nama_produk}}" disabled>
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Harga</label>
                                        <input type="text" name="harga" class="form-control" value="{{ $produk->harga }}" disabled>
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Stok</label>
                                        <input type="text" name="stok" class="form-control" value="{{ $produk->stok }}" disabled>
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Id Kategori</label>
                                        <input type="text" name="id_kategori" class="form-control" value="{{ $produk->id_kategori }}" disabled>
                                    </div>
                                    <div class="mb-2">
                                    <label for="">Foto</label>
                                    <br>
                                   <img src="{{asset('storage/merk/'. $merk->foto)}}" alt="" style="width: 150px; height: 120px;">
                                   </div>
                                   <div class="mb-2">
                                        <label for="">Id Kategori</label>
                                        <input type="text" name="id_kategori" class="form-control" value="{{ $produk->id_kategori }}" disabled>
                                    </div>
                                    <div>
                                    <br>
                                        <a href="{{ route('produk.index') }}" class="btn btn-primary">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
