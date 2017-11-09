<!DOCTYPE html>
<html>
<head>
	<title>@yield('tittle', 'Default') | Panel de control</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	<div class="container">

		@include('admin.template.partials/nav')
		
		<main>
		
			<div class="jumbotron">
				<h3>@yield('title', 'Default')</h3>
			</div>
			<div >
				@yield('contenido')
			</div>

		</main>
		<footer class="jumbotron">
			<p>&copy;Alberto Merino Peñas</p>
		</footer>
	</div>

	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>