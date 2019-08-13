<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">Sispak-Seledri</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">

					@if (!empty($halaman) && $halaman == 'beranda')
					<li class="active"><a href="{{ url('/') }}">Beranda
					<span class="sr-only">(current)</span></a></li>
					@else
					<li><a href="{{ url('/') }}">Beranda</a>
					</li>
					@endif

					@if (!empty($halaman) && $halaman == 'tentang')
					<li class="active"><a href="{{ url('tentang') }}">Tentang
					<span class="sr-only">(current)</span></a></li>
					@else
					<li><a href="{{ url('tentang') }}">Tentang</a>
					</li>
					@endif

					@if (!empty($halaman) && $halaman == 'penyakit')
					<li class="active"><a href="{{ url('penyakit') }}">Penyakit 
					<span class="sr-only">(current)</span></a></li>
					@else
					<li><a href="{{ url('penyakit') }}">Penyakit</a>
					</li>
					@endif
				</ul>
				
				
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
