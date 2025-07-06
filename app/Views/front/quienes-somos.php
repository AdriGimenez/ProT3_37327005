<?= view('front/head_view') ?>
<?= view('front/navbar') ?>

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
          <img src="<?= base_url('assets/img/perfil6.jpg') ?>" class="card-img-top" alt="Daniela Torres">
          <div class="card-body">
            <h5 class="card-title">Daniela Torres</h5>
            <p class="card-text">Diseñadora. Aporta creatividad en cada uno de nuestros productos.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<?= view('front/footer_view') ?>