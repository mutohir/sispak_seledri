@extends('template.template')

	@section('main')
	<div class="penyakit">
		<h2>Tambah Penyakit</h2>
		@include('errors.form_error');
		<div class="row">
			<div class="col-lg-6">
			{!! Form::open(['url' => 'penyakit']) !!}
			{{ csrf_field() }}	
			<div class="form-group">
			{!! Form::label('kd_penyakit', 'Kode Penyakit', ['class'=>'control-label']) !!}
			{!! Form::text('kd_penyakit', null, ['class'=>'form-control','placeholder'=>'Kode Penyakit. Cth: H1']) !!}
			{!! Form::hidden('id', null) !!}
			</div>

			<div class="form-group">
			{!! Form::label('nm_penyakit', 'Nama Penyakit', ['class'=>'control-label']) !!}
			{!! Form::text('nm_penyakit', null, ['class'=>'form-control','placeholder'=>'Nama Penyakit']) !!}
			</div>
				
			<div class="form-group">
			{!! Form::label('def_penyakit', 'Definisi Penyakit', ['class'=>'control-label']) !!}
			{!! Form::textarea('def_penyakit', null, ['class'=>'form-control', 'cols'=>'10', 'rows'=>'5','placeholder'=>'Definisi Penyakit']) !!}
			</div>

			<div class="form-group">
			{!! Form::label('sol_penyakit', 'Solusi Penyakit', ['class'=>'control-label']) !!}
			{!! Form::textarea('sol_penyakit', null, ['class'=>'form-control', 'cols'=>'10', 'rows'=>'5','placeholder'=>'Solusi Penyakit']) !!}
			</div>

			<div class="form-group">
			{!! Form::label('np_penyakit', 'Nilai Probabilitas', ['class'=>'control-label']) !!}
			{!! Form::number('np_penyakit', null, ['class'=>'form-control','placeholder'=>'Cth: 0.7', 'step'=>'0.1', 'max'=>'1']) !!}
			</div>

			<div class="form-group">
			{!! Form::submit('Tambah Penyakit', ['class'=>'btn btn-primary form-control']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	</div>
	</div>
	@stop
	
	@section('footer')
		@include('template.footer');
	@stop