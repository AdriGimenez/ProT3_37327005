<?= view('front/head_view') ?>
<?= view('front/navbar') ?>

<!-- Formulario login centrado -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 mx-auto bg-white p-4 rounded shadow">
    <h2 class="text-center text-dark mb-4">Iniciar sesión</h2>
    <hr class="titulo-hr">

    <!-- Mensaje de Error -->
    <?php if(session()->getFlashdata('msg')):?>
      <div class="alert alert-warning">
        <?= session()->getFlashdata('msg')?>
      </div>
    <?php endif;?>

    <!-- Envio de Formulario -->
      <form method="post" action="<?= base_url('enviarlogin') ?>">
      <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input name ="email" type="email" class="form-control" id="email" placeholder="nombre@correo.com" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="pass" type="password" class="form-control" id="password" placeholder="Contraseña" required>
      </div>

      <div class="text-center mt-4">
        <input type="submit" value="Ingresar" class="btn btn-success">
        <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
      </div>
      </form>

      <div class="mt-5 text-center">
        <p>¿Aún no se registró? <a href="<?= base_url('registro') ?>">Registrarse aquí</a></p>
      </div>
    </div>
  </div>
</div>

<?= view('front/footer_view') ?>

