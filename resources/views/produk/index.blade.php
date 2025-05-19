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
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span><b><i>Data Produk</i></b></span>
                                <a href="{{route('produk.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="table">
                                <table class="table table-responsive">
                                        <thead>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Id Kategori</th>
                                            <th scope="col">Id Merek</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </thead>
                                        <tbody>
                                        @php $no=1; @endphp
                                        @foreach($produk as $data)
                                            <tr>
                                                <td scope="row">{{$no++}}</td>
                                                <td scope="row">{{$data->nama_produk}}</td>
                                                <td scope="row">{{$data->harga}}</td>
                                                <td scope="row">{{$data->stok}}</td>
                                                <td scope="row">{{$data->kategori->nama_kategori}}</td>
												<td scope="row">{{$data->merek->nama_merek}}</td>
                                                <td>
                                                <img src="{{asset('storage/foto/'. $data->foto)}}" alt="" style="width: 50px; height: 50px;">
                                               </td>
                                               <td scope="row">{{$data->deskripsi}}</td>
												<td>
                                                    <form action="{{route('produk.destroy', $data->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('produk.edit', $data->id)}}" class="btn btn-sm btn-success">Edit</a>
                                                    <a href="{{route('produk.show', $data->id)}}" class="btn btn-sm btn-warning">Show</a>
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    @endsection