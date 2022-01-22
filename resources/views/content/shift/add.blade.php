@extends('layouts.base')
@section('content')
<form action="{{ route('shift.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Shift</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/shift">Shift</a></li>
                    <li class="breadcrumb-item active">Tambah Shift</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    <div class="card-body">
        <div class="form-group">
            <label for="inputName">Kelompok Shift</label>
            <input type="text" name="nama" id="inputName" class="form-control">
            <p></p>
        </div>
        <div class="form-group">
            <label for="inputJam">Jam Masuk</label>
            <input type="time" name="jam_masuk" id="inputJam" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputJamKel">Jam Pulang</label>
            <input type="time" name="jam_keluar" id="inputJamKel" class="form-control"> <br><br>
            <p></p>
            <button class="btn btn-danger" value="Submit">Tambah</button></a>
        </div>
    </div>
    </div>
</form>
@endsection
