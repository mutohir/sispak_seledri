@extends('template.template')

	@section('main')
	<div class="penyakit">
		<h2>Tambah Penyakit</h2>
		<div class="row">
			<div class="col-lg-6">
		{!! Form::open(['url' => 'penyakit']) !!}
		{{ csrf_field() }}	
		<div class="form-group">
		{!! Form::label('kode_penyakit', 'Kode Penyakit', ['class'=>'control-label']) !!}
		{!! Form::text('kode_penyakit', null, ['class'=>'form-control','placeholder'=>'Kode Penyakit. Cth: H1']) !!}
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
		{!! Form::text('np_penyakit', null, ['class'=>'form-control','placeholder'=>'Nilai Probabilitas. Cth: 0.7']) !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Tambah Penyakit', ['class'=>'btn btn-primary form-control']) !!}
		</div>
		<!-- <form action="{{ url('penyakit') }}" method="POST" role="form"> -->
<!-- 			<legend>Tambah Penyakit</legend> -->


				<!-- <label for="">Kode Penyakit</label> -->
				<!-- <input type="hidden" class="form-control" id="" name="id" placeholder="Input field">
				<input type="text" class="form-control" id="" placeholder="Kode Penyakit. Cth: H1" name="kd_penyakit">
			</div>

			<div class="form-group">
				<label for="">Nama Penyakit</label>
				<input type="text" class="form-control" id="" placeholder="Nama Penyakit" name="nm_penyakit">
			</div>

			<div class="form-group">
				<label for="">Definisi Penyakit</label>
				<textarea name="def_penyakit"  class="form-control" id="" cols="10" rows="5" placeholder="Definisi Penyakit"></textarea>
			</div>

			<div class="form-group">
				<label for="">Solusi Penyakit</label>
				<textarea name="sol_penyakit"  class="form-control" id="" cols="10" rows="5" placeholder="Solusi Penyakit"></textarea>
			</div>

			<div class="form-group">
				<label for="">Nilai Probabilitas</label>
				<input type="text" name="np_penyakit" value="" class="form-control" placeholder="Nilai Probabilitas. Cth: 0.6">
			</div>


			<div class="form-group">
				<input type="submit" value="Tambah Penyakit" class="btn btn-primary form-control">
			</div>
 -->
			<!-- <div class="form-group">
				<input type="file" class="form-control" id="" placeholder="Input field" name="sol_penyakit">
			</div> -->
			
			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
		<!-- </form> -->
		{!! Form::close() !!}
	</div>
	</div>
	</div>
	@stop
	
	@section('footer')
		<footer id="footer" class="text-center">
			Copyright &copy;2019 <b>Mutohir Amin</b>. All rights Reserved.
		</footer>
	@stop