<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    </head>
    <body>
        <header>
            <!-- El header debe de tener los enlaces a: -->
                    
                    <!-- Inventario
                    Busqueda
                    Faltantes
                    Agregar o Actualizar  -->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="../../views/home.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link navbar-light" href="#">Inventario </a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-light" href="#">Busqueda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-light" href="#">Faltantes</a>
      </li>

    </ul>
  </div>
    <form class="form-inline ml-5" method="get" action="../controls/queries/controlByName.php" >
        <input class="form-control mr-sm-2" type="search" id="btnProductName" name="name"  placeholder="Buscar por nombre" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Buscar </button>
    </form>
</nav>

        </header>
        <div class="container-fluid">
          <div class="row">

