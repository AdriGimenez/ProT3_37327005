<?= view('front/head_view') ?>
<?= view('front/navbar') ?>

<!-- Carrusel -->
<div id="carouselExampleAutoplaying" class="carousel slide mt-4" data-bs-ride="carousel">
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
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
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

<?= view('front/footer_view') ?>
