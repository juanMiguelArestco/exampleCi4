<section class="hero is-primary">
  <div class="hero-body">
	<p class="title">
	  El blog
	</p>
	<p class="subtitle">
	  Lista de entradas
	</p>
  </div>
  <div class="hero-foot">
	<nav class="tabs is-boxed is-fullwidth">
	  <div class="container">
		<ul>
		  <li class="<?= service('request')->uri->getpath() == '/' ? 'is-active' : ''?>">
			<a href="<?php echo site_url(base_url(route_to('home'))) ?>">Inicio</a>
		  </li>
		  <li class="<?= service('request')->uri->getpath() == 'auth/registro' ? 'is-active' : '' ?>">
			<a href="<?php echo site_url(base_url(route_to('register'))) ?>">Registro</a>
		  </li>
		  <?php if(session()->is_logged): ?>
			<li>
			  <a href="<?php echo site_url(base_url(route_to('posts'))) ?>">Ir al dashboard</a>
			</li>
			<li>
			  <a href="<?php echo site_url(base_url(route_to('signout'))) ?>">Salir</a>
			</li>
		  <?php else: ?>
			<li class="<?= service('request')->uri->getpath() == 'auth/login' ? 'is-active' : '' ?>">
			  <a href="<?php echo site_url(base_url(route_to('login'))) ?>">Ingreso</a>
			</li>
		  <?php endif; ?>
		  
		</ul>
	  </div>
	</nav>
  </div>
</section>
