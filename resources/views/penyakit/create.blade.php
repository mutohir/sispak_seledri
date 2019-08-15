@extends('template.template')

	@section('main')
	<div class="penyakit">
		<h2>Tambah Penyakit</h2>
		<div class="row">
			<div class="col-lg-6">
			{!! Form::open(['url' => 'penyakit']) !!}
			{{ csrf_field() }}	
			
			@if($errors->any())
				<div class="form-group {{ $errors->has('kd_penyakit') ? 'has-error' : 'has-success' }}">
			@else 
				<div class="form-group">
			@endif
				{!! Form::label('kd_penyakit', 'Kode Penyakit :', ['class'=>'control-label']) !!}
				{!! Form::text('kd_penyakit', null, ['class'=>'form-control','placeholder'=>'Kode Penyakit. Cth: H1']) !!}
				{!! Form::hidden('id', null) !!}
					@if($errors->has('kd_penyakit'))
						<span class="help-block">{{ $errors->first('kd_penyakit') }}</span>
					@endif
			</div>

			@if($errors->any())
				<div class="form-group {{ $errors->has('nm_penyakit') ? 'has-error' : 'has-success' }}">
			@else 
				<div class="form-group">
			@endif
				{!! Form::label('nm_penyakit', 'Nama Penyakit', ['class'=>'control-label']) !!}
				{!! Form::text('nm_penyakit', null, ['class'=>'form-control','placeholder'=>'Nama Penyakit']) !!}
					@if($errors->has('nm_penyakit'))
						<span class="help-block">{{ $errors->first('nm_penyakit') }}</span>
					@endif
			</div>
				
			@if($errors->any())
				<div class="form-group {{ $errors->has('def_penyakit') ? 'has-error' : 'has-success' }}">
			@else 
				<div class="form-group">
			@endif
			{!! Form::label('def_penyakit', 'Definisi Penyakit', ['class'=>'control-label']) !!}
			{!! Form::textarea('def_penyakit', null, ['class'=>'form-control', 'cols'=>'10', 'rows'=>'5','placeholder'=>'Definisi Penyakit']) !!}
				@if($errors->has('def_penyakit'))
					<span class="help-block">{{ $errors->first('def_penyakit') }}</span>
				@endif
			</div>

			@if($errors->any())
				<div class="form-group {{ $errors->has('sol_penyakit') ? 'has-error' : 'has-success' }}">
			@else 
				<div class="form-group">
			@endif
			{!! Form::label('sol_penyakit', 'Solusi Penyakit', ['class'=>'control-label']) !!}
			{!! Form::textarea('sol_penyakit', null, ['class'=>'form-control', 'cols'=>'10', 'rows'=>'5','placeholder'=>'Solusi Penyakit']) !!}
				@if($errors->has('sol_penyakit'))
					<span class="help-block">{{ $errors->first('sol_penyakit') }}</span>
				@endif
			</div>

			@if($errors->any())
				<div class="form-group {{ $errors->has('np_penyakit') ? 'has-error' : 'has-success' }}">
			@else 
				<div class="form-group">
			@endif
			{!! Form::label('np_penyakit', 'Nilai Probabilitas', ['class'=>'control-label']) !!}
			{!! Form::number('np_penyakit', null, ['class'=>'form-control','placeholder'=>'Cth: 0.7', 'step'=>'0.1', 'max'=>'1']) !!}
				@if($errors->has('np_penyakit'))
					<span class="help-block">{{ $errors->first('np_penyakit') }}</span>
				@endif
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