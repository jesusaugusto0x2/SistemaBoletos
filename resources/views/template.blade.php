<!DOCTYPE html>
<html>
	<head>
		@yield('head')
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	</head>
	<body>
		

		<script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
		@yield('body')
	</body>
</html>