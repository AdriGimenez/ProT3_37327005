<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Página Principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/miestilo.css') ?>">


</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo"></a>

    <!-- Ítems siempre visibles (pantalla grande y chica) -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row">
      <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Principal</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url('quienes') ?>">Quiénes Somos</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url('acerca') ?>">Acerca de</a></li>
    </ul>

    <!-- Botón hamburguesa para Login y Registro -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#usuariosMenu" aria-controls="usuariosMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú hamburguesa SOLO para login y registro -->
    <div class="collapse navbar-collapse" id="usuariosMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('registro') ?>">Registrarse</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a></li>
      </ul>
    </div>

    <!-- Barra de búsqueda -->
    <form class="d-flex ms-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-light" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<!-- Carrusel -->
<div id="carouselEmpresa" class="carousel slide mt-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/fachada.jpg') ?>" class="d-block w-100 carousel-img" alt="Imagen 1">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/reloj.jpg') ?>" class="d-block w-100 carousel-img" alt="Imagen 2">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/trabajo.jpg') ?>" class="d-block w-100 carousel-img" alt="Imagen 3">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/reunion.jpg') ?>" class="d-block w-100 carousel-img" alt="Imagen 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselEmpresa" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselEmpresa" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Contenido principal -->
<div class="container custom-container mt-4">
  <h2 class="text-center text-success mb-4">Nuestros productos destacados</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="<?= base_url('assets/img/producto1.jpg') ?>" class="card-img-top" alt="Producto 1">
        <div class="card-body">
          <h5 class="card-title">Producto 1</h5>
          <p class="card-text">Descripción breve del producto.</p>
          <a href="#" class="btn btn-success">Ver más</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="<?= base_url('assets/img/producto2.jpg') ?>" class="card-img-top" alt="Producto 2">
        <div class="card-body">
          <h5 class="card-title">Producto 2</h5>
          <p class="card-text">Descripción breve del producto.</p>
          <a href="#" class="btn btn-success">Ver más</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="<?= base_url('assets/img/producto3.jpg') ?>" class="card-img-top" alt="Producto 3">
        <div class="card-body">
          <h5 class="card-title">Producto 3</h5>
          <p class="card-text">Descripción breve del producto.</p>
          <a href="#" class="btn btn-success">Ver más</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Formulario horizontal -->
  <h3 class="text-center text-success mt-5 mb-3">Suscríbete a nuestras novedades</h3>
  <form class="row g-3 align-items-center justify-content-center">
    <div class="col-auto">
      <label for="email" class="col-form-label">Email:</label>
    </div>
    <div class="col-auto">
      <input type="email" id="email" class="form-control" placeholder="ejemplo@correo.com">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-success">Suscribirse</button>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
