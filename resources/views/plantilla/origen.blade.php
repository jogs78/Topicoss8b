<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="/bootstrap/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	@yield('js')
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
</head>
<body>
<div class="content">



<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a href="/usuarios">TODOS LOS USUARIOS</a>-
<a href="/carros">TODOS LOS CARROS</a>-
<a href="/formulario">Formulario</a>-
<a href="/contacto">Contacto</a>-
<a href="/mensaje">Mensaje</a>-
<a href="/ejemplo5">Ejemplo 5</a>-
<a href="/ejemplo6">Ejemplo 6</a>-
OTROS
</nav>


@yield('contenido')
</div>    
    
</body>
</html>
