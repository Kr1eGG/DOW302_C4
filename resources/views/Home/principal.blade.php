<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d24bea0f94.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/principal.css')}}">
    <title>Principal</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark"  data-bs-theme="dark">
        <div class="container-fluid">
            <i class="fa-solid fa-palette"></i>
          <a class="navbar-brand fa-solid fa-palette" href="#"> Only Arts</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Descubrir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Perfiles</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                    Lolreg
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Mi Cuenta</a></li>
                  <li><a class="dropdown-item" href="{{route('home.index')}}">Cerrar Sesión</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
      <!-- CONTENIDO PRINCIPAL -->
      <section id="contenido">
        <div class="cuadricula text-center fw-bold">Contenido 1</div>
        <div class="cuadricula text-center fw-bold">Contenido 2</div>
        <div class="cuadricula text-center fw-bold">Contenido 3</div>
        <div class="cuadricula text-center fw-bold">Contenido 4</div>
        <div class="cuadricula text-center fw-bold">Contenido 5</div>
        <div class="cuadricula text-center fw-bold">Contenido 6</div>
        <div class="cuadricula text-center fw-bold">Contenido 7</div>
        <div class="cuadricula text-center fw-bold">Contenido 8</div>
        <div class="cuadricula text-center fw-bold">Contenido 9</div>
      </section>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
