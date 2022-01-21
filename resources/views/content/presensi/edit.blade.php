@extends('layouts.base')
@section('content')
<form action="{{route('presensi.update', $data->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Presensi</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active">Detail Presensi</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    <div class="card-body">
        <div class="form-group">
            <label for="inputName">Edit presensi</label>
            <p></p>
            <input type="text" name="nama" id="inputName" id="inputName" class="form-control" value="{{$data->nama}}">
            <p></p>
            <button class="btn btn-danger" value="Submit">Submit</button></a>
        </div>
    </div>
</form>
@endsection
