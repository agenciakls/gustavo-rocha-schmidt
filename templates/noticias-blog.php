<main class="container section-archive my-3">
	<div class="row list-posts">
		<div class="col-md-7">
			<?php 
					if (have_posts()) {
						while (have_posts()) {
							the_post();
							?>
							<div class="single-post">
								<a href="<?php the_permalink(); ?>">
									<div class="content">
										<?php
										if (has_post_thumbnail()) { ?><img src="<?php echo get_the_post_thumbnail_url($post, 'medium_large') ?>" class="post-thumbnail img-fluid w-100" alt=""><?php }
										?>
										<div class="text">
											<h2><?php the_title(); ?></h2>
											<h3><?php echo get_the_date(); ?></h3>
											<h3><?php foreach (get_the_category() as $singleCategory) {
												echo var_dump($singleCategory);
											} ?></h3>
											<p><?php echo get_the_excerpt(); ?></p>
											<!-- <span class="view-more">Ver Mais </span> -->
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
			<?php get_template_part('templates/aside', 'coluna'); ?>
		</div>
	</div>
	<div class="row">
		<?php echo paginateList(); ?>
	</div>
</main>