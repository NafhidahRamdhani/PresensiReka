@extends('layouts.base')
@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Lokasi</h3>
            </div>
            <div class="col-sm-6">
                <ol class="float-sm-right">
                    <a href="{{ route('lokasi.create') }}"><button class="btn btn-secondary">Tambah</button>
                </ol>
            </div>
        </div>
        <div class="card card-primary">
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Lokasi</th>
                            <th>Alamat</th>
                            <th>Koordinat</th>
                            <th>Opsi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $loc)
                            <tr>
                                <td>{{ $loc->nama }}</td>
                                <td>{{ $loc->alamat }}</td>
                                <td>{{ $loc->koordinat }}</td>
                                <td class="text-left py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('lokasi.edit', $loc->id) }}" class="btn btn-info"><i
                                                class="fas fa-pencil-alt mr-1"></i></a>
                                        <form action="{{ route('lokasi.destroy', $loc->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
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
