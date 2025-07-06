<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid d-flex flex-nowrap align-items-center">

  <!-- -->
    <a class="navbar-brand me-3" href="#">
      <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="30" height="30"></a>

    <!-- Menú de navegación -->
    <ul class="navbar-nav d-flex flex-row me-3">
      <li class="nav-item">
        <a class="nav-link px-2" href="<?= base_url() ?>">Inicio</a></li>
      <li class="nav-item">
        <a class="nav-link px-2" href="<?= base_url('quienes') ?>">Quiénes Somos</a></li>
      <li class="nav-item">
        <a class="nav-link px-2" href="<?= base_url('acerca') ?>">Acerca de</a></li>
    </ul>

    <!-- Botón hamburguesa -->
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#loginMenu" aria-controls="loginMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Login / Registro-->
    <div class="collapse navbar-collapse flex-grow-0" id="loginMenu">
      <ul class="navbar-nav">

        <?php if ($session->has('nombre')): ?>
          <!-- Usuario logueado -->
          <li class="nav-item">
            <span class="nav-link active">Hola, <?= esc($nombre) ?><?= ($perfil == 1) ? ' (Admin)' : '' ?></span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout') ?>">Cerrar sesión</a>
          </li>
        <?php else: ?>
          <!-- Invitado -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('registro') ?>">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
          </li>
        <?php endif; ?>

      </ul>
    </div>
          <!-- Barra de búsqueda -->
      <form class="d-flex ms-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
  </div>
</nav>
