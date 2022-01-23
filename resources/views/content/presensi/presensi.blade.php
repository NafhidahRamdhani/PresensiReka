@extends('layouts.base')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>Presensi</h3>
      </div>
      <div class="col-sm-6">
        <ol class="float-sm-right">
           {{-- <a href="{{route('presensi.create')}}"><button class="btn btn-secondary">Tambah</button></a> --}}
        </ol>
      </div>
    </div>
    <div class="card card-info">
        <div class="card-body p-0">
          <table class="table">
            <thead>
              <tr>
                <th>Nama presensi</th>
                <th>Opsi</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $pr)
                <tr>
                    <td>{{$pr->nama}}</td>
                    <td class="text-left py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                            <a href="{{ route('presensi.detail', $pr->id) }}" class="btn btn-info"><i class="fas fa-pencil-alt mr-1"></i></a>
                            <form action="{{ route('presensi.destroy', $pr->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>

                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
