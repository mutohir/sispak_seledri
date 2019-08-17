@extends('template.template')

	@section('main')

	<h2>Daftar Gejala Penyakit</h2>
	@if(!empty($daftar_gejala_penyakit))
	<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">Kode Gejala</th>
				<th class="text-center">Nama Gejala</th>
				<th class="text-center">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 0; ?>
			@foreach($daftar_gejala_penyakit as $gejala)
			<?php $no++; ?>
			<tr>
				<td width="10">{{ $no }}</td>
				<td width="120">{{ $gejala->kd_gejala }}</td>
				<td width="120">{{ $gejala->nm_gejala }}</td>
				<td width="200" class="text-center">
					<div class="box-button">	
					{{ link_to('gejala_penyakit/' . $gejala->id, 'Detail', ['class'=>'btn btn-sm btn-success']) }}
					</div>
					<div class="box-button">
					{{ link_to('gejala_penyakit/' . $gejala->id . '/edit', 'Edit', ['class'=>'btn btn-sm btn-warning']) }}
					</div>
					<div class="box-button">
					{!! Form::open(['method'=>'DELETE', 'action'=>['GejalaPenyakitController@destroy', $gejala->id]]) !!}
					{!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger']) !!}
					{!! Form::Close() !!}
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	
	@else
	<p>Daftar gejala tidak ada.</p>
	@endif
	
	<div class="bottom-nav">
		<div>
			<a href="{{ url('gejala_penyakit/create') }}" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Gejala</a>
		</div>
	</div>

	@stop
	
	@section('footer')
		@include('template.footer');
	@stop