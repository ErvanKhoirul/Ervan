@extends('layouts.dashboard')
@section('content')
    
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Merk</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <span><b>Data Kategori</b></span>
                                    <a href="{{route('merek.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
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
                                                <th scope="col">Nama Merek</th>
                                                <th scope="col">Aksi</th>
                                            </thead>
                                            <tbody>
                                                @php $no=1; @endphp
                                                @foreach($merek as $data)
                                                <tr>
                                                    <td scope="row">{{$no++}}</td>
                                                    <td scope="row">{{$data->nama_merek}}</td>
                                                    <td>
                                                        <form action="{{route('merek.destroy', $data->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{route('merek.edit', $data->id)}}" class="btn btn-sm btn-success">Edit</a>
                                                            <a href="{{route('merek.show', $data->id)}}" class="btn btn-sm btn-warning">Tampilkan</a>
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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