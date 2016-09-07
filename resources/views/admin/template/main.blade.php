<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Default')| Panel de administracion </title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/js/bootstrap.js') }}">
</head>
<body>
<div class="container">
	@include('admin.template.partials.nav')

	<section>	
		<h1>@yield('title', 'Default')</h1>
	</section>

	<section>
		@include('flash::message')
		@include('admin.template.partials.errors')
		@yield('content')
	</section>


	<script src="{{ asset('plugins/jquery/js/jquery-2.1.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</div>
</body>
</html>