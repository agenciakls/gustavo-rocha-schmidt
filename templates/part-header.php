<header <?php if (is_front_page()) { echo ' class="home-bar"'; } ?>>
	<div class="header-area">
		<div class="header-background <?php if (!is_front_page()) { echo ' front-header'; } ?>"></div>
		<div class="header-main">
			<div class="container-fluid d-flex justify-content-between align-items-center">
				<div class="logo">
					<a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
				</div>
				<div class="header-buttons">
					<div class="header-search search" id="search-action" tabindex="-1">
						<div class="button-search">
							<img src="<?php bloginfo('template_url'); ?>/img/icons/icon-feather-search.svg" alt="">
						</div>
					</div>
					<div class="separator">
						<img src="<?php bloginfo('template_url'); ?>/img/icons/separator.svg" alt="">
					</div>
					<div class="nav-button">
						<div class="hamburger hamburger--squeeze">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="modal fade search-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="box-search">
					<div class="content-search">
						<h3>Pesquisar em Aulas e Palestras</h3>
						<div class="form-search">
							<form action="http://localhost/agenciakls/gustavo" method="GET">
								<input type="search" name="s" value="" placeholder="Digite sua pesquisa" class="form-control">
								<button type="submit" class="button-search"><img src="http://localhost/agenciakls/gustavo/wp-content/themes/gustavo/img/icons/icon-feather-search.svg" alt=""></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="header-bar">
	<?php
	if (has_nav_menu('menumobile')) {
		wp_nav_menu(
			array(
				'theme_location' => 'menumobile',
				'menu_class' => 'header-menu',
				'menu_id' => 'header-nav',
				'container_class' => 'menu-principal-header',
				'container_id' => 'menu-principal-header',
				'walker' => new OrganizacaoMenuPrincipal()
			)
		);
	}
	?>
	<div id="pre-socials-container" class="pre-socials-container">
		<ul id="pre-list-ul" class="pre-header-list">
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('twitter'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-twitter"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('linkedin'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-linkedin"></i>
				</a>
			</li>
		</ul>
	</div>
</nav>
<?php if (is_front_page()) {
	get_template_part('templates/home', 'banner');
} ?>