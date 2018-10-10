<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
</nav>
@yield('contenido')
</div>    
    
</body>
</html>
