@extends('layouts.base')
@section('content')
<form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Karyawan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/karyawan">karyawan</a></li>
                    <li class="breadcrumb-item active">Tambah karyawan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    <div class="card-body">
        <div class="form-group">
            <label for="inputNumber">NIK</label>
            <input type="number" name="nik" id="inputNumber" class="form-control">
            <p></p>
        </div>
        <div class="form-group">
            <label for="inputName">Nama Lengkap</label>
            <input type="text" name="name" id="inputName" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputAlamat">Alamat</label>
            <input type="text" name="alamat" id="inputAlamat" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputNumber">No HP</label>
            <input type="number" name="no" id="inputNumber" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputName">Email</label>
            <input type="text" name="email" id="inputName" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputName">Department</label>
            <select name="Department" id="lang" size="4">
                <option value="IT">Informatic Technology</option>
                <option value="HR">Human Resource & GA</option>
                <option value="Accounting">Accounting</option>
              </select>
        </div>
        <div class="form-group">
            <label for="inputName">Shift</label>
            <select name="Shift" id="lang" size="4">
                <option value="K1">Kelompok 1</option>
                <option value="K2">Kelompok 2</option>
                <option value="K3">Kelompok 3</option>
              </select>
        </div>
        <div class="form-group">
            <label for="inputName">Ussername</label>
            <input type="text" name="uname" id="inputName" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputNumber">Password</label>
            <input type="number" name="pass" id="inputNumber" class="form-control"> <br><br>
            <p></p>
            <button class="btn btn-danger" value="Submit">Tambah</button></a>
        </div>
    </div>
    </div>
</form>
@endsection
