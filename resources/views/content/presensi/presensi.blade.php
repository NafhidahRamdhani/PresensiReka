@extends('layouts.base')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>Department</h3>
      </div>
      <div class="col-sm-6">
        <ol class="float-sm-right">
            <button class="btn btn-secondary">Tambah</button>
        </ol>
      </div>
    </div>
    <div class="card card-info">
        <div class="card-body p-0">
          <table class="table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Opsi</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>Karyawan 123</td>
                <td class="text-left py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-pencil-alt mr-1"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              <tr>
                <td>Karyawan 112</td>
                <td class="text-left py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-pencil-alt mr-1"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              <tr>
                <td>Karyawan 122</td>
                <td class="text-left py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-pencil-alt mr-1"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
