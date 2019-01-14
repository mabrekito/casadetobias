<!DOCTYPE html>
<html>
	<head>
		<title>@include('inc.title')</title>
		<link rel="stylesheet" href="/css/app.css">
		<link rel="shortcut icon" href="images/small-logo.ico"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">

	</head>
	<body>
		<!--navigation-->
		<header>@include('inc.nav')</header>

		<!--page content-->
		<main class="main-content">
		@if(Request::is('/'))
		@include('inc.banner')
		@include('inc.jumbotron')
		@endif
		@yield('content')
		@yield('inc.test')
		</main>

		<!--footer-->
		<footer>
			@include('inc.footer')
		</footer>
		<div class="overlay" id="modal"></div><script>
		</script>
		@include('inc.jscripts')
	</body>
</html>
