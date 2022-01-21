@extends('layouts.base')
@section('content')
    <form action="{{ route('shift.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Shift</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/shift">Beranda</a></li>
                        <li class="breadcrumb-item active">Edit Shift</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <div class="card-body">
            <div class="form-group">
                <label for="inputName">Kelompok Shift</label>
                <input type="text" name="nama" id="inputName" id="inputName" class="form-control"
                    value="{{ $data->nama }}">
                <p></p>
            <div class="form-group">
                    <label for="inputJam">Jam Masuk</label>
                    <input type="time" name="jam_masuk" id="inputJam" class="form-control">
                </div>
            <div class="form-group">
                    <label for="inputJamKel">Jam Keluar</label>
                    <input type="time" name="jam_keluar" id="inputJamKel" class="form-control"> <br><br>
                    <p></p>
                    <button class="btn btn-danger" value="Submit">Submit</button></a>
                </div>
            </div>
        </div>
    </form>
@endsection
