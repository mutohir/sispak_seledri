@extends('template.template')

	@section('main')
	<div class="gejala">
		<h2>Edit Gejala Penyakit</h2>
		<div class="row">
			<div class="col-lg-6">
			{!! Form::open(['url' => 'gejala_penyakit/'. $gejala_penyakit->id, 'method' => 'PATCH']) !!}
			{{ csrf_field() }}	

			<div class="form-group">
			{!! Form::label('kd_gejala', 'Kode gejala :', ['class'=>'control-label']) !!}
			{!! Form::text('kd_gejala', $gejala_penyakit->kd_gejala, ['class'=>'form-control','placeholder'=>'Kode Gejala. Cth: E1', 'required']) !!}
			{!! Form::hidden('id', $gejala_penyakit->id) !!}
			</div>

			<div class="form-group">
			{!! Form::label('nm_gejala', 'Nama Gejala :', ['class'=>'control-label', ]) !!}
			{!! Form::text('nm_gejala', $gejala_penyakit->nm_gejala, ['class'=>'form-control','placeholder'=>'Nama Gejala', 'required']) !!}
			</div>

			<div class="form-group">
			{!! Form::submit('Update Gejala', ['class'=>'btn btn-primary form-control']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	</div>
	</div>
	@stop
	
	@section('footer')
		@include('template.footer');
	@stop