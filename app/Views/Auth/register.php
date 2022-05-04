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
	<div class="field">
	  <label class="label">Nombre:</label>
	  <div class="control">
		<input class="input" name="name" type="text" placeholder="Nombre(s)">
	  </div>
	</div>
	<div class="field">
	  <label class="label">Apellido:</label>
	  <div class="control">
		<input class="input" name="surname" type="text" placeholder="Apellido(s)">
	  </div>
	</div>
	<div class="field">
	  <label class="label">Email</label>
	  <div class="control">
		<input class="input" name="email" type="email" placeholder="Dirección de email" >
	  </div>
	</div>

	<div class="field">
	  <label class="label">Tu país:</label>
	  <div class="control">
		<div class="select">
		  <select name="id_country">
			<option disabled selected>Selecciona un país</option>
			<?php foreach ($countries as $v):  ?>
				<option value="<?= $v->id_country?>"><?= $v->name?></option>
			<?php endforeach; ?>
		  </select>
		</div>
	  </div>
	</div>

	<div class="field">
	  <label class="label">Contraseña:</label>
	  <div class="control">
		<input class="input" name="password" type="password" placeholder="contraseña">
	  </div>
	</div>

	<div class="field">
	  <label class="label">Confirmación de contraseña:</label>
	  <div class="control">
		<input class="input" name="c-password" type="password" placeholder="repite tu contraseña">
	  </div>
	</div>
	
	<div class="field is-grouped">
	  <div class="control">
		<button class="button is-primary">Registrarse</button>
	  </div>
	</div>
  </div>

</section>



<?php $this->endSection(); ?>
