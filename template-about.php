<?php 
/*
Template Name: Sobre
*/
get_header(); 
get_template_part('templates/ads', 'about');
?>
<main class="page-biography section section">
	<div class="container">
		<div class="box-biography">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					?>
					<section class="row">
						<div class="<?php if(has_post_thumbnail()) { echo ' col-md-6'; } else { echo ' col-md-12'; } ?>">
							<div class="heading-title title-section">
								<h3>Gustavo da Rocha Schmidt</h3>
								<hr class="line">
							</div>
							<div class="content-section">
							<?php the_content(); ?>
							</div>
						</div>
						<?php
							if (has_post_thumbnail()) {
								?>
								<div class="col-md-6">
									<div class="about-figure">
										<div class="image-figure img-circle" style="background-image: url('<?php echo get_the_post_thumbnail_url($post, 'full'); ?>');" alt=""></div>
										<img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" class="img-fluid rounded-circle" alt="">
									</div>
								</div>
								<?php
							}
						?>
					</section>
					<?php
				}
			}
			
			?>
		</div>
	</div>
</main>
<?php
get_template_part('templates/about', 'reconhecimento');
get_template_part('templates/about', 'areas');
get_template_part('templates/home', 'linkedin');
get_footer();
?>