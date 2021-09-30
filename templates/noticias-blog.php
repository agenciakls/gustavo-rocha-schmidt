<main class="container section-news my-3">
	<div class="row list-posts">
		<div class="col-md-7">
			<?php 
					if (have_posts()) {
						while (have_posts()) {
							the_post();
							?>
							<div class="single-post">
								<a href="<?php the_permalink(); ?>">
									<div class="content" style="min-height: 340px;">
										<?php
										if (has_post_thumbnail()) { ?><div class="img-default" style="background-image: url('<?php echo the_post_thumbnail_url('medium_large') ?>');"></div><?php } else { ?><div class="img-default"><h3><?php the_title(); ?></h3></div><?php }
										?>
										<div class="text">
											<h3><?php echo get_the_date(); ?></h3>
											<h2><?php the_title(); ?></h2>
											<!-- <h3><?php echo get_the_excerpt(); ?></h3> -->
											<span class="view-more">Ver Mais </span>
										</div>
									</div>
								</a>
							</div>
							<?php 
						}
					}

					?>
		</div>
		<div class="col-md-5">
			
		</div>
	</div>
	<div class="row">
		<?php echo paginateList(); ?>
	</div>
</main>