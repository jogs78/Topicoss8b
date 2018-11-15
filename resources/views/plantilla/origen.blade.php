<!DOCTYPE html>
<html lang="en">
<head>
	
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">


	<script src="/jquery.js"></script>
	<script src="/popper.min.js" ></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	@yield('js')
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
</head>
<body>
<div class="content">

@include('plantilla.navegacion')

@yield('contenido')
</div>    
    
</body>
</html>
