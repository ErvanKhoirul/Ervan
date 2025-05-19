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
                <!-- /.row -->
                <div class="row">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <b>Tambah Data Produk</b>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('produk.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="">Nama Produk</label>
                                            <input type="text" name="nama_produk" class="form-control @error('email') is-invalid @enderror" required>
                                            @error('nama_produk')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                        <label>Harga</label>
                                            <input type="number" class="form-control" name="harga">
                                       </div>
                                        <div class="form-group">
                                        <label>Stok</label>
                                            <input type="number" class="form-control" name="stok">
                                      </div>
                                       <div class="form-group">   
                                        <label>Id Kategori</label>
                                            <select class="form-control" name="id_kategori">
                                            @foreach($kategori as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
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
                                        <div>
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    @endsection
