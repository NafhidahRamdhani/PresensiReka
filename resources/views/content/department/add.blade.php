@extends('layouts.base')
@section('content')
    <form action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Department</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active">Department</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <div class="card-body">
            <div class="form-group">
                <label for="inputName">Nama Department</label>
                <input type="text" name="namaDepartment" id="inputName" class="form-control">
                <p></p>
                <button class="btn btn-danger" value="Submit">Submit</button></a>
            </div>
        </div>
        </div>
    </form>
@endsection
