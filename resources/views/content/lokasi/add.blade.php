@extends('layouts.base')
@section('content')
    <form action="{{ route('lokasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Lokasi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/lokasi">lokasi</a></li>
                        <li class="breadcrumb-item active">Tambah lokasi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <div class="card-body">
            <div class="form-group">
                <label for="inputName">Nama lokasi</label>
                <input type="text" name="nama" id="inputName" class="form-control">
                <p></p>
            </div>
            <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" name="alamat" id="inputAlamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputKoor">Koordinat</label>
                <input type="text" name="koordinat" id="inputKoor" class="form-control"> <br><br>
                <p></p>
                <button class="btn btn-danger" value="Submit">Tambah</button></a>
            </div>
        </div>
        </div>
    </form>
@endsection
