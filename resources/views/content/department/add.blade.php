@extends('layouts.base')
@section('content')
<form action="{{route('department.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama" placeholder="Nama Department">
    <input type="submit" value="Submit">
</form>
@endsection
