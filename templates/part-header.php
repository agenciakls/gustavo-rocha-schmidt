<header>
	<div class="header-area">
		<div class="header-background<?php if (!is_front_page()) { echo ' front-header'; } ?>"></div>
		<div class="header-main">
			<div class="container-fluid d-flex justify-content-between align-items-center">
				<div class="logo">
					<a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
				</div>
				<div class="header-buttons">
					<div class="header-search search" id="search" tabindex="-1">
						<div class="button-search">
							<i class="fa fa-search"></i></button>
						</div>
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
<nav class="header-bar">
	<?php 
	if (has_nav_menu('menumobile')) {
		wp_nav_menu( 
			array( 
				'theme_location' => 'menumobile', 
				'menu_class' => 'header-menu',
				'menu_id' => 'header-nav',
				'container_class' => 'menu-principal-header', 
				'container_id' => 'menu-principal-header' ,
				'walker' => new OrganizacaoMenuPrincipal()
			) 
		);
	}
	?>
	<div id="pre-socials-container" class="pre-socials-container">
		<ul id="pre-list-ul" class="pre-header-list">
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('radio'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fas fa-broadcast-tower"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('email'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="far fa-envelope"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('facebook'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-facebook"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('instagram'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('youtube'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-youtube"></i>
				</a>
			</li>
		</ul>
	</div>
</nav>
<?php if (is_front_page()) { get_template_part('templates/home', 'banner'); } ?>