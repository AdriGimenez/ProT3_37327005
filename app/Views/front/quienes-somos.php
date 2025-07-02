<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiénes Somos</title>
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
  <div class="container custom-container mt-4">
    <h1 class="text-center titulo-verde mb-4">Quiénes Somos</h1>
    <p class="text-center mb-5">
      Somos una empresa formada por personas comprometidas con el medio ambiente y el servicio de calidad. 
      Nuestro equipo se destaca por su profesionalismo, creatividad y espíritu colaborativo.
    </p>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/perfil1.jpg') ?>" class="card-img-top" alt="María Pérez">
          <div class="card-body">
            <h5 class="card-title">María Pérez</h5>
            <p class="card-text">Fundadora y CEO. Su visión impulsó el nacimiento de la empresa en 2020.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/perfil2.jpg') ?>" class="card-img-top" alt="Carlos Gómez">
          <div class="card-body">
            <h5 class="card-title">Carlos Gómez</h5>
            <p class="card-text">Director de Operaciones. Optimiza cada proceso de la organización.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/perfil3.jpg') ?>" class="card-img-top" alt="Laura Fernández">
          <div class="card-body">
            <h5 class="card-title">Laura Fernández</h5>
            <p class="card-text">Marketing y Comunicación. Da forma a nuestra imagen y mensaje.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/perfil4.jpg') ?>" class="card-img-top" alt="Sofía Ramírez">
          <div class="card-body">
            <h5 class="card-title">Sofía Ramírez</h5>
            <p class="card-text">Atención al cliente. Siempre dispuesta a resolver dudas y consultas.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/perfil5.jpg') ?>" class="card-img-top" alt="Juan López">
          <div class="card-body">
            <h5 class="card-title">Juan López</h5>
            <p class="card-text">Encargado de Logística. Responsable de que todo llegue a tiempo.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('img/perfil6.jpg') ?>" class="card-img-top" alt="Daniela Torres">
          <div class="card-body">
            <h5 class="card-title">Daniela Torres</h5>
            <p class="card-text">Diseñadora. Aporta creatividad en cada uno de nuestros productos.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
