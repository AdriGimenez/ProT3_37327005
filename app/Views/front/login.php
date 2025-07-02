<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

<!-- Formulario login centrado -->
<div class="d-flex justify-content-center align-items-center" style="min-height: 90vh;">
  <div class="login-box text-center col-10 col-sm-8 col-md-6 col-lg-4">
    <h2 class="mb-4 text-dark">Iniciar sesión</h2>
    <form>
      <div class="mb-3 text-start">
        <label for="correo" class="form-label">Correo</label>
        <input type="email" class="form-control" id="correo" placeholder="Correo" required>
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
      </div>
      <div class="text-center mt-4">
        <button type="submit" class="btn btn-success rounded-0 mx-2">Iniciar sesión</button>
        <button type="reset" class="btn btn-danger rounded-0 mx-2">Cancelar</button>
      </div>
    </form>

    <div class="mt-4">
      <p>¿Aún no se registró? <a href="<?= base_url('registro') ?>">Registrarse aquí</a></p>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
