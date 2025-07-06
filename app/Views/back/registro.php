<?= view('front/head_view') ?>
<?= view('front/navbar') ?>

<!-- Formulario centrado -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 mx-auto bg-white p-4 rounded shadow">
      <h2 class="text-center text-dark mb-4 p-2">Registrar usuario</h2>
      <hr class="titulo-hr">
      <?php $validation = \Config\Services::validation(); ?>
      <form method="post" action="<?= base_url('/enviar-form') ?>">
        <?=csrf_field();?>
        <?=csrf_field();?>
        <?php if(!empty (session()->getFlashdata('fail'))):?>
          <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
          <?php endif?>
          <?php if(!empty (session()->getFlashdata('success'))):?>
          <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
          <?php endif?>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input name="nombre" type="text" class="form-control"  id="nombre" placeholder="Nombre" />
          <?php if($validation->getError('nombre')) {?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('nombre'); ?>
          </div>
          <?php }?>
        </div>

        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido" />
          <?php if($validation->getError('apellido')) {?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('apellido'); ?>
          </div>
          <?php }?>
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="correo" placeholder="Correo@algo.com" />
          <?php if($validation->getError('email')) {?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('email'); ?>
          </div>
          <?php }?>
        </div>

        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario</label>
          <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Usuario" />
          <?php if($validation->getError('usuario')) {?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('usuario'); ?>
          </div>
          <?php }?>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Contraseña (mínimo 5 caracteres)" />
          <?php if($validation->getError('password')) {?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('password'); ?>
          </div>
          <?php }?>
        </div>

        <div class="d-flex justify-content-center gap-2 mt-3">
          <button type="submit" class="btn btn-success px-4">Guardar</button>
          <button type="reset" class="btn btn-danger px-4">Cancelar</button>
        </div>
      </form>
      <div class="mt-5 text-center">
        <p>¿Ya se registró? <a href="<?= base_url('login') ?>">Inicie sesión Aquí</a></p>
      </div>
    </div>
  </div>
</div>


<?= view('front/footer_view') ?>