<?php $this->extend('Front/layout/main'); ?>

<?php $this->section('title') ?>
Login
<?php $this->endSection() ?>

<?php $this->section('content') ?>



<div class="container">
  <section class="section">
	<?php if(session('msg')): ?>
	  <article class="message is-<?=session('msg.type')?>">
		<div class="message-header">
		  <p><?=session('msg.title')?></p>
		  <button class="delete" aria-label="delete"></button>
		</div>
		<div class="message-body">
		  <?=session('msg.body')?>
		</div>
	  </article>
	<?php endif; ?>
	<div class="hero-body">
	  <p class="title">
		Ingreso a usuarios
	  </p>
	</div>
	<form action="<?=base_url(route_to('signin'))?>" method="post">
	 
		<div class="field">
		  <p class="control has-icons-left has-icons-right">
			<input class="input" name="email" type="email" value="<?=old('email')?>" placeholder="Email">
			<span class="icon is-small is-left">
		  <i class="fas fa-envelope"></i>
		</span>
			<span class="icon is-small is-right">
		  <i class="fas fa-check"></i>
		</span>
		  </p>
		  <p class="is-danger help"><?=session('errors.email') ?></p>
		</div>
		<div class="field">
		  <p class="control has-icons-left">
			<input class="input" name="password" type="password" value="<?=old('password')?>" placeholder="Password">
			<span class="icon is-small is-left">
		  <i class="fas fa-lock"></i>
		</span>
		  </p>
		  <p class="is-danger help"><?=session('errors.password') ?></p>
		</div>
		<div class="field">
		  <p class="control">
			<button class="button is-success">
			  Login
			</button>
		  </p>
		</div>
	 
	</form>
  </section>
</div>
<?php $this->endSection() ?>
