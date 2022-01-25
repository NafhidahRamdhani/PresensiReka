@extends('layouts.base')
@section('content')
    <script src="{{ asset('js/jam.js') }}"></script>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Presensi Masuk</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Presensi Masuk</li>
                </ol>
            </div>

            <body>

                <style>
                    h1,
                    h2,
                    p,
                    a {
                        font-family: sans-serif;
                        font-weight: 500;
                    }

                    .jam-digital {
                        overflow: hidden;
                        width: 500px;
                        margin: 30px auto;
                        border: 5px solid #efefef;
                    }

                    .kotak {
                        float: left;
                        width: 110px;
                        height: 100px;
                        background-color: #377dd8;
                    }

                    .jam-digital p {
                        color: #fff;
                        font-size: 36px;
                        text-align: center;
                        margin-top: 30px;
                    }

                </style>

                <div class="jam-digital" style="width: 340px; height:110px">
                    <div class="kotak">
                        <p id="jam"></p>
                    </div>
                    <div class="kotak">
                        <p id="menit"></p>
                    </div>
                    <div class="kotak">
                        <p id="detik"></p>
                    </div>
                </div>

                <script>
                    window.setTimeout("waktu()", 1000);

                    function waktu() {
                        var waktu = new Date();
                        setTimeout("waktu()", 1000);
                        document.getElementById("jam").innerHTML = waktu.getHours();
                        document.getElementById("menit").innerHTML = waktu.getMinutes();
                        document.getElementById("detik").innerHTML = waktu.getSeconds();
                    }
                </script>

            </body>
        </div>
        <div class="form-group">
            <button type='button' class='btn btn-primary center-block' value="Submit">Klik Untuk Presensi Masuk</button></a>
        </div>
    </div>
@endsection
