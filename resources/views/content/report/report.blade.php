@extends('layouts.base')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>Report</h3>
      </div>
      <div class="col-sm-6">
        <ol class="float-sm-right">
            <button class="btn btn-secondary">Cetak</button>
        </ol>
      </div>
    </div>
</div>
<div class="card" style="max-width: 540px;">
	<div class="row no-gutters">
		<div class="col-md-8">
			<div class="card-body">
				<h5>Nama</h5>
				<p class="card-text">Tutorial cara membuat card vertikal.</p>
				<p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p>
			</div>
		</div>
	</div>
</div>
<br>
<div class="card card-primary">
    <div class="card-body p-0">
      <table class="table">
        <thead>
          <tr>
            <th>Hari, Tanggal</th>
            <th>Nama</th>
            <th>Absen Masuk</th>
            <th>Absen Pulang</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tbody>
      </table>
    </div>
@endsection
