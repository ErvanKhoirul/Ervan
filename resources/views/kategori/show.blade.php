@extends('layouts.dashboard')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kategori</h1>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <b>Menampilkan Data Nama Kategori</b>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('kategori.update',$kategori->id)}}" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="mb-2">
                                            <label for="">Nama Kategori</label>
                                            <input type="text" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}" disabled>
                                            @error('nama_kategori')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div>
                                        <br>
                                            <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kembali</a>
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
