<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registrar usuario</title>
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

<!-- Formulario centrado -->
<div class="d-flex justify-content-center align-items-center" style="min-height: 90vh;">
  <div class="card border border-secondary rounded-3 p-4" style="width: 400px;">
    <h2 class="text-center text-dark mb-4 p-2 bg-secondary-subtle">Registrar usuario</h2>
    <form>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Nombre" />
      </div>
      <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" placeholder="Apellido" />
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Email</label>
        <input type="email" class="form-control" id="correo" placeholder="correo@algo.com" />
      </div>
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" placeholder="Usuario" />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Contraseña (mínimo 5 caracteres)" />
      </div>
      <div class="d-flex justify-content-start gap-2 mt-3">
        <button type="submit" class="btn btn-success px-4">Guardar</button>
        <button type="reset" class="btn btn-danger px-4">Cancelar</button>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
