<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body class="body-container">
<div class="container">
	
	<header class="row">
		@include('includes.header')
	</header>
	
	<div id="main" class="row jng-container">
		
		@yield('content')
		
	</div>
	
	<div class="jng-spacer"></div>
	<footer class="row jng-container">
		@include('includes.footer')
	</footer>
	<div class="jng-spacer"></div>
	
</div>
</body>
</html>