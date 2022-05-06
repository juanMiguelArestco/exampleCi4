<section class="hero is-info is-small">
  <div class="hero-head">
	<header class="navbar">
	  <div class="container">
		<div class="navbar-brand">
		  <a class="navbar-item">
			Ejemplo Ci4
		  </a>
		  <span class="navbar-burger" data-target="navbarMenuHeroC">
            <span></span>
            <span></span>
            <span></span>
          </span>
		</div>
		<div id="navbarMenuHeroC" class="navbar-menu">
		  <div class="navbar-end">
			<a class="navbar-item">
				<?= session('email') ?>
			</a>
			<a class="navbar-item" href="<?php echo site_url(base_url(route_to('signout'))) ?>">
			  Cerrar Sesión
			</a>
		  </div>
		</div>
	  </div>
	</header>
  </div>
  <div class="hero-body">
	<div class="container">
	  <p class="title">
		Dashboard
	  </p>
	  <p class="subtitle">
		Gestión de entradas
	  </p>
	</div>
  </div>
  <div class="hero-foot">
	<nav class="tabs is-boxed is-fullwidth">
	  <div class="container">
		<ul>
		  <li class="<?= service('request')->uri->getpath() == 'admin/articulos' ? 'is-active' : '' ?>">
			<a href="<?php echo base_url(route_to('posts')) ?>">Articulos</a>
		  </li>
		  <li class="<?= service('request')->uri->getpath() == '/' ? 'is-active' : '' ?>">
			<a href="<?php echo base_url(route_to('home')) ?>">Categorias</a>
		  </li>
		  <li class="<?= service('request')->uri->getpath() == '/' ? 'is-active' : '' ?>">
			<a href="<?php echo base_url(route_to('home')) ?>">Usuarios</a>
		  </li>
		</ul>
	  </div>
	</nav>
  </div>
</section>
