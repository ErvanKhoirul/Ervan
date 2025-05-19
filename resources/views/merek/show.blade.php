@extends('layouts.dashboard')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Merek</h1>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <b>Menampilkan Data Nama Merek</b>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('merek.update',$merek->id)}}" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="mb-2">
                                            <label for="">Nama Merek</label>
                                            <input type="text" name="nama_merek" class="form-control" value="{{$merek->nama_merek}}" disabled>
                                            @error('nama_merek')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div>
                                        <br>
                                            <a href="{{ route('merek.index') }}" class="btn btn-primary">Kembali</a>
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
