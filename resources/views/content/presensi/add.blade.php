@extends('layouts.base')
@section('content')
    <form action="{{ route('presensi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                <label for="inputName">Presensi</label>
                <input type="text" name="namapresensi" id="inputName" class="form-control">
                <p></p>
                <button class="btn btn-danger" value="Submit">Submit</button></a>
            </div>
        </div>
        </div>
    </form>
@endsection
