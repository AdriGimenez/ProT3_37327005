<div class="container mt-2">
	<div class="row justify-content-md-center">
		<div class="col-5">
			<?php if(session()->getFlashdata('msg')):?>
			<div class="alert alert-warning">
				<?= session()->getFlashdata('msg')?>
			</div>
		<?php endif;?>
		<br><br>
			<?php if(session()->perfil_id == 1): ?>
				<div class="text-center">
    				<h4 class="mb-3">¡Bienvenido!</h4>
    					<img src="<?= base_url('assets/img/admin.jpg'); ?>" alt="Admin" height="150px" width="150px" class="mx-auto d-block">
  				</div>
			<?php elseif(session()->perfil_id == 2): ?>
  				<div class="text-center">
    				<h4 class="mb-3">¡Bienvenido!</h4>
    					<img src="<?= base_url('assets/img/cliente.jpg'); ?>" alt="Cliente" height="150px" width="150px" class="mx-auto d-block">
  				</div>
				<?php endif; ?>
				<br><ul class="list-group mt-4">
  				<li class="list-group-item">
  					<strong>Nombre: </strong><?= session('nombre') ?>
  				</li>
  				<li class="list-group-item">
  					<strong>Perfil: </strong> <?= (session('perfil_id') == 1) ? 'Administrador' : 'Cliente' ?>
  				</li>
			</ul>
		</div>
	</div>	
</div>