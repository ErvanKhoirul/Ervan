@extends('layouts.dashboard')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b><i>Edit Data Nama Kategori</i></b>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('kategori.update',$kategori->id)}}" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="mb-2">
                                            <label for="">Nama Kategori</label>
                                            <input type="text" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}" required>
                                            @error('nama_kategori')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="mb-2">
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