<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Sispak-Seledri</title>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>
	<body>
		<div class="container">
		@include('template.navbar')
		@yield('main');
		</div>
		@yield('footer');

		<!-- jQuery -->
		<script src="{{ asset('js/jquery.min.js')}}"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	</body>
</html>