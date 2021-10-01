<?php 
get_header(); 
?>
<main class="section-single">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="content-single">
					<h1><?php echo get_the_title(); ?></h1>
					<p class="text-muted"><small><i class="fas fa-clock"></i> <strong><?php echo get_the_date(' d/m/Y H:i '); ?></strong></small></p>
					<div class="content-text">
						<?php 
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								if (has_post_thumbnail()) {
									?>
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="rounded float-md-right w-100 img-fluid my-2">
									<?php
								}
								the_content();
							}
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<?php get_template_part('templates/aside', 'coluna'); ?>
			</div>
		</div>
	</div>
</main>
<?php 
get_footer(); 
?>