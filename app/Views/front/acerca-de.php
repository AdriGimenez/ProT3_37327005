<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Acerca de - Mi Empresa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets/miestilo.css') ?>">

</head>
<body class="bg-light">
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




  <div class="container py-5">
    <div class="mx-auto p-4 border rounded-3 bg-success-subtle text-dark shadow" style="max-width: 900px;">

      <h1 class="text-center mb-4 text-success-emphasis">Acerca de Nosotros</h1>

      <p class="lead text-center">
        Somos una empresa dedicada a la venta de productos electrónicos de consumo, ofreciendo calidad, garantía y atención 
        personalizada a cada cliente. Nuestro objetivo es mejorar la vida de las personas a través de la tecnología.
      </p>

      <hr class="my-4">

      <h4 class="text-success">Ubicación</h4>
      <p>
        Estamos ubicados en Av. Siempre Viva 1234, Ciudad Autónoma de Buenos Aires, Argentina.
      </p>

      <div class="ratio ratio-16x9 mb-4">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.931091573305!2d-58.38155968477214!3d-34.60368418046051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac4d469ac87%3A0x107c1e9bb6574c09!2sPlaza%20de%20Mayo!5e0!3m2!1ses!2sar!4v1685610123456!5m2!1ses!2sar" 
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <h4 class="text-success">Contacto</h4>
      <p>
        Teléfono: <a href="tel:+541112345678" class="text-decoration-none text-success">+54 11 1234 5678</a><br />
        Email: <a href="mailto:contacto@miempresa.com" class="text-decoration-none text-success">contacto@miempresa.com</a>
      </p>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
