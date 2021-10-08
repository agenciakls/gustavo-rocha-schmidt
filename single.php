<?php 
get_header(); 
?>
<main class="section-single">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="content-single">
					<h1><?php echo get_the_title(); ?></h1>
					<p class="text-muted"><small><i class="far fa-clock"></i> <?php echo get_the_date(' d/m/Y H:i '); ?></small> <?php 
					$postType = get_post_type();
					$terms = get_the_terms( $post, $postType );
					$listArray = array();
					
					$count = (is_array($terms)) ? count($terms) : 0; 
					if (has_term($postType, $postType . 'cat') && $count > 0) {
						foreach ($terms as $term) {
							$singleTerm = get_term_link($term->term_id, $postType . 'cat');
							$listArray[] = $term->name;
						}
						?>| <small><i class="fas fa-tag"></i> <?php echo implode(' / ', $listArray); ?></small></p><?php
					}
					if (get_field('link') && $postType == 'livros') { ?><a href="<?php echo get_field('link'); ?>" target="_blank"><button class="button secundary">Comprar</button></a><?php } 
					?>
					<div class="content-text">
						<?php 
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								if (has_post_thumbnail()) {
									?><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="rounded float-md-right w-100 img-fluid my-2"><?php
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