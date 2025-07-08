<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid d-flex flex-nowrap align-items-center">

    <!-- Logo -->
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
    <?php if (session()->perfil_id == 1): ?>
          <div class="btn btn-secondary active btnUser btn-sm">
            <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
          </div>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse flex-grow-0" id="loginMenu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href='registro'>Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='login'>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/logout') ?>" tableindex="-1" aria-disabled="true">Cerrar sesión</a>
          </li>
      </ul>
    </div>
    <?php elseif(session()->perfil_id == 2): ?>
      <div class="btn btn-info active btnUser btn-sm">
        <a href="">CLIENTE: <?php echo session('nombre'); ?></a>
      </div>
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav d-flex flex-row me-3">
          <li class="nav-item">
            <a class="nav-link px-2" href='quienes'>Quiénes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href='catalogo'>Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/logout') ?>" tableindex="-1" aria-disabled="true">Cerrar sesión</a>
          </li>
        </ul>
      </div>

    <?php else:?>
      <!-- Clientes no loggeados -->
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav d-flex flex-row me-3">
          <li class="nav-item">
            <a class="nav-link px-2" href='quienes'>Quiénes Somos</a>
          </li class="nav-item">
            <a class="nav-link px-2" href='acerca'>Acerca De</a>
          <li class="nav-item">
            <a class="nav-link px-2" href='catalogo'>Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px2" href='registro'>Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px2" href='login'>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/logout') ?>" tableindex="-1" aria-disabled="true">Cerrar sesión</a>
          </li>
        </ul>
      </div>
          <!-- Barra de búsqueda -->
      <form class="d-flex ms-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    <?php endif;?>
    </div>
  </div>
</nav>
