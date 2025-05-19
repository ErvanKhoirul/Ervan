@extends('layouts.dashboard')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Produk</h1>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Produk</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Produk
                        </div>
                        <!-- /.panel-heading -->
                        <div class="card-body">
                            <form action="{{route('produk.update',$produk->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" name="nama_produk" class="form-control" value="{{$produk->nama_produk}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" class="form-control" value="{{$produk->harga}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" name="stok" class="form-control" value="{{$produk->stok}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Id Kategori</label>
                                    <select class="form-control" name="id_kategori">
                                         @foreach($kategori as $data)
                                        <option value="{{ $data->id }}" {{ $data->id == $produk->id_kategori ? 'selected' : '' }}>{{ $data->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">   
                                    <label>Id Merek</label>
                                        <select class="form-control" name="id_merek">
                                        @foreach($merek as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_merek }}</option>
                                        @endforeach
                                        </select>
                                </div>
                                 <div class="mb-2">
                                                <label for="">Tambah Foto</label>
                                                <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror">
                                                @error('produk')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                  </div>
                                  <div class="form-group">
                                    <label>Deskripsi</label>
                                        <input type="text" class="form-control" name="deskripsi">
                                   </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    @endsection