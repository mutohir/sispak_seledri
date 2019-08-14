@extends('template.template')

	@section('main')

	<h2>Daftar Penyakit</h2>
	
	@if(!empty($daftar_penyakit))
	<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">Kode Penyakit</th>
				<th class="text-center">Nama Penyakit</th>
				<th class="text-center">Definisi Penyakit</th>
				<th class="text-center">Solusi Penyakit</th>
				<th class="text-center">Nilai Probabilitas</th>
				<th class="text-center">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 0; ?>
			@foreach($daftar_penyakit as $penyakit)
			<?php $no++; ?>
			<tr>
				<td width="10">{{ $no }}</td>
				<td width="120">{{ $penyakit->kd_penyakit }}</td>
				<td width="120">{{ $penyakit->nm_penyakit }}</td>
				<td width="300">{{ $penyakit->def_penyakit }}</td>
				<td width="300">{{ $penyakit->sol_penyakit }}</td>
				<td width="20">{{ $penyakit->np_penyakit }}</td>
				<td width="125" class="text-center">
					{{ link_to('penyakit/' . $penyakit->id, 'Detail', ['class'=>'btn btn-sm btn-success']) }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	@else
	<p>Daftar Penyakit tidak ada.</p>
	@endif
	
	<div class="bottom-nav">
		<div>
			<a href="{{ url('penyakit/create') }}" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Penyakit</a>
		</div>
	</div>

	@stop
	
	@section('footer')
		<footer id="footer" class="text-center">
			Copyright &copy;2019 <b>Mutohir Amin</b>. All rights Reserved.
		</footer>
	@stop