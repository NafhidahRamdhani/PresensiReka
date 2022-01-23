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
                <input type="text" name="nama" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" name="alamat" id="inputAlamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputNumber">No HP</label>
                <input type="text" name="no" id="inputNumber" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputName">Email</label>
                <input type="text" name="email" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <label>Department</label>
                <select class="form-control" name="department" id="inputName">
                    @foreach ($department as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Shift</label>
                <select class="form-control" name="shift" id="inputName">
                    @foreach ($shift as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        {{-- <option value="{{$data->id}}">{{$data->nama}}</option> --}}
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="inputName">Username</label>
                <input type="text" name="uname" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputNumber">Password</label>
                <input type="password" name="pass" id="inputNumber" class="form-control">
                <p></p>
            </div>
            <div class="form-group">
                <label for="inputGambar">Pilih Foto</label>
                <input type="file" name="file_gambar" accept="image/*"  id="inputGambar" class="form-control"> <br><br>
                <p></p>
            </div>
            <button class="btn btn-danger" value="Submit">Tambah</button></a>
        </div>
    </form>
@endsection
