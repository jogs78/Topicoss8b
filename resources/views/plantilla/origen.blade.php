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
  <a class="navbar-brand" href="#">Navegacion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class=" navbar" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="formulario">Formulario<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mensaje">Mensaje</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ejemplo5">Ejemplo 5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ejemplo6">Ejemplo 6</a>
      </li>
  </div>
</nav>
@yield('contenido')
</div>    
    
</body>
</html>
