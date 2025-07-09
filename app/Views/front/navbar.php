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
    <ul class="navbar-nav d-flex flex-row me-auto">
      <li class="nav-item">
        <a class="nav-link px-2" href="<?= base_url() ?>">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-2" href='quienes'>Quiénes Somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-2" href='acerca'>Acerca de</a>
      </li>
      <?php if (session()->perfil_id == 1): ?>
      <li class="nav-item">
        <a class="nav-link px-2" href='administracion'>Administracion</a>
      </li>
      <?php endif;?>
      <?php if (session()->perfil_id == 2): ?>
      <li class="nav-item">
        <a class="nav-link px-2" href='catalogo'>Catalogo</a>
      </li>
      <?php endif;?>
    </ul>

    <!-- Botón hamburguesa -->
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapseAll" aria-controls="navbarCollapseAll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if (session()->perfil_id == 1): ?>
    <div class="collapse navbar-collapse text-end" id="navbarCollapseAll">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link px-2 fw-bold" href='panel'>ADMIN: <?php echo session('nombre'); ?> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="<?= base_url('/logout') ?>" tableindex="-1" aria-disabled="true">Cerrar sesión</a>
          </li>
        </ul>
    </div>
    <?php elseif(session()->perfil_id == 2): ?>
      <div class="collapse navbar-collapse text-end" id="navbarCollapseAll">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link px-2 fw-bold" href='panel'>CLIENTE: <?php echo session('nombre'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="<?= base_url('/logout') ?>" tableindex="-1" aria-disabled="true">Cerrar sesión</a>
          </li>
        </ul>
      </div>

    <?php else:?>
      <!-- Clientes no loggeados 
      <a class="navbar-brand" href="#"></a> -->
      <div class="collapse navbar-collapse text-end" id="navbarCollapseAll">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mb-2 mb-lg-0">
            <a class="nav-link" href='registro'>Registrarse</a>
          </li>
          <li class="nav-item mb-2 mb-lg-0">
            <a class="nav-link" href='login'>Login</a>
          </li>
        </ul>
      </div>
    <?php endif;?> 
      <!-- Barra de búsqueda -->
      <form class="d-flex ms-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>

    </div>
  </div>
</nav>
