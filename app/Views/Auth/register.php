<?php $this->extend('Front/layout/main'); ?>
<?php $this->section('title'); ?>
Registro
<?php $this->endSection(); ?>

<?php $this->section('css') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<section class="hero">
  <div class="hero-body">
	<p class="title">
	  Registro de usuarios.
	</p>
	<p class="subtitle">
	  Ingrese sus datos principales
	</p>
	<?php //session() ?>
	<form action="<?=base_url('auth/store')?>" method="post">
	<div class="field">
	  <label class="label">Nombre:</label>
	  <div class="control">
		<input class="input" name="name" value="<?=old('name')?>" type="text" placeholder="Nombre(s)">
	  </div>
	  <p class="is-danger help"><?=session('errors.name') ?></p>
	</div>
	<div class="field">
	  <label class="label">Apellido:</label>
	  <div class="control">
		<input class="input" name="surname" value="<?=old('surname')?>" type="text" placeholder="Apellido(s)">
	  </div>
	  <p class="is-danger help"><?=session('errors.surname') ?></p>
	</div>
	<div class="field">
	  <label class="label">Email</label>
	  <div class="control">
		<input class="input" name="email" value="<?=old('email')?>" type="email" placeholder="Dirección de email" >
	  </div>
	  <p class="is-danger help"><?=session('errors.email') ?></p>
	</div>

	<div class="field">
	  <label class="label">Tu país:</label>
	  <div class="control">
		<div class="select">
		  <select name="id_country">
			<option disabled selected>Selecciona un país</option>
			<?php foreach ($countries as $v):  ?>
				<option value="<?= $v->id_country?>" <?php if($v->id_country == old('id_country')):?>selected<?php endif ?> ><?= $v->name?></option>
			<?php endforeach; ?>
		  </select>
		</div>
	  </div>
	  <p class="is-danger help"><?=session('errors.id_country') ?></p>
	</div>

	<div class="field">
	  <label class="label">Contraseña:</label>
	  <div class="control">
		<input class="input" name="password" value="<?=old('password')?>" type="password" placeholder="contraseña">
	  </div>
	  <p class="is-danger help"><?=session('errors.password') ?></p>
	</div>

	<div class="field">
	  <label class="label">Confirmación de contraseña:</label>
	  <div class="control">
		<input class="input" name="c-password" value="<?=old('c-password')?>" type="password" placeholder="repite tu contraseña">
	  </div>
	  <p class="is-danger help"><?=session('errors.c-password') ?></p>
	</div>
	
	<div class="field is-grouped">
	  <div class="control">
		<button class="button is-primary">Registrarse</button>
	  </div>
	</div>
	</form>
  </div>

</section>
<?php $this->endSection(); ?>
