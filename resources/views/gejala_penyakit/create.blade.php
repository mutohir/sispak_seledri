@extends('template.template')

	@section('main')
	<div class="gejala">
		<h2>Tambah Gejala Penyakit</h2>
		<div class="row">
			<div class="col-lg-6">
			{!! Form::open(['url' => 'gejala_penyakit']) !!}
			{{ csrf_field() }}	
			
			@if($errors->any())
				<div class="form-group {{ $errors->has('kd_gejala') ? 'has-error' : 'has-success' }}">
			@else 
				<div class="form-group">
			@endif
				{!! Form::label('kd_gejala', 'Kode Gejala:', ['class'=>'control-label']) !!}
				{!! Form::text('kd_gejala', null, ['class'=>'form-control','placeholder'=>'Kode Gejala. Cth: E1','required']) !!}
					@if($errors->has('kd_gejala'))
						<span class="help-block">{{ $errors->first('kd_gejala') }}</span>
					@endif
			</div>

			@if($errors->any())
				<div class="form-group {{ $errors->has('nm_gejala') ? 'has-error' : 'has-success' }}">
			@else 
				<div class="form-group">
			@endif
				{!! Form::label('nm_gejala', 'Nama Gejala', ['class'=>'control-label']) !!}
				{!! Form::text('nm_gejala', null, ['class'=>'form-control','placeholder'=>'Nama Gejala','required']) !!}
					@if($errors->has('nm_gejala'))
						<span class="help-block">{{ $errors->first('nm_gejala') }}</span>
					@endif
			</div>

			<div class="form-group">
			{!! Form::submit('Tambah Gejala', ['class'=>'btn btn-primary form-control']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	</div>
	</div>
	@stop
	
	@section('footer')
		@include('template.footer');
	@stop