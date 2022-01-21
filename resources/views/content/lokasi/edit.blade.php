@extends('layouts.base')
@section('content')
    <form action="{{ route('lokasi.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>lokasi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/lokasi">Beranda</a></li>
                        <li class="breadcrumb-item active">Edit lokasi</li>
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
