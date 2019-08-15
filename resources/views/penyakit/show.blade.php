@extends('template.template')

	@section('main')

	<h2>Detail Penyakit</h2>
	
	<div class="row">
		<div class="col-lg-6">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Kode Penyakit</th>
				<td>{{ $penyakit->kd_penyakit }}</td>
			</tr>
			<tr>
				<th>Nama Penyakit</th>
				<td>{{ $penyakit->nm_penyakit }}</td>
			</tr>
			<tr>
				<th>Definisi Penyakit</th>
				<td>{{ $penyakit->def_penyakit }}</td>
			</tr>
			<tr>
				<th>Solusi Penyakit</th>
				<td>{{ $penyakit->sol_penyakit }}</td>
			</tr>
			<tr>
				<th>Nilai Probabilitas</th>
				<td>{{ $penyakit->np_penyakit }}</td>
			</tr>
	</table>
	<a href="{{ url('penyakit') }}" class="btn btn-default">&laquo; Kembali</a>
	</div>
	</div>
	@stop
	
	@section('footer')
		@include('template.footer');
	@stop