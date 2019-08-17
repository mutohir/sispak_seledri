@extends('template.template')

	@section('main')

	<h2>Detail Gejala Penyakit</h2>
	
	<div class="row">
		<div class="col-lg-6">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Kode Penyakit</th>
				<td>{{ $gejala_penyakit->kd_gejala }}</td>
			</tr>
			<tr>
				<th>Nama Penyakit</th>
				<td>{{ $gejala_penyakit->nm_gejala }}</td>
			</tr>
	</table>
	<a href="{{ url('penyakit') }}" class="btn btn-default">&laquo; Kembali</a>
	</div>
	</div>
	@stop
	
	@section('footer')
		@include('template.footer');
	@stop