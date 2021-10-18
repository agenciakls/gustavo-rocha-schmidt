<?php 
get_header(); 
?>
<main class="section-single">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="content-single">
					<h1><?php echo get_the_title(); ?></h1>
					<p class="text-muted py-2"><small><i class="far fa-clock"></i> <?php echo get_the_date(' d/m/Y H:i '); ?></small> <?php 
					$postType = get_post_type();
					$terms = get_the_terms( $post, $postType . 'cat' );
					$count = (is_array($terms)) ? count($terms) : 0; 
					if (has_term('', $postType . 'cat') && $count > 0) {
						$listArray = array();
						foreach ($terms as $term) {
							$singleTerm = get_term_link($term->term_id, $postType . 'cat');
							$listArray[] = $term->name;
						}
						?> | <small><i class="fas fa-tag"></i> <?php echo implode(' / ', $listArray) ?></small></h3><?php
					}
					if (get_field('link') && $postType == 'livros') { ?><a href="<?php echo get_field('link'); ?>" target="_blank"><button class="button secundary">Comprar</button></a><?php } 
					?>
					</p>
					<div class="content-text">
						<?php 
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								if (has_post_thumbnail()) {
									?><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="rounded float-md-right w-100 img-fluid my-2"><?php
								}
								if ($postType == 'eventos') {
									$dataHorario = get_field('data_horario');
									$dia = strftime("%d", strtotime($dataHorario));
									$mes = strftime("%b", strtotime($dataHorario));
									$ano = strftime("%Y", strtotime($dataHorario));
									$hora = strftime("%k", strtotime($dataHorario));
									?>
										<div class="detail-eventos my-3 d-flex row align-items-stretch">
											<div class="col-md-2 col-date">
												<div class="box-event">
													<div class="date-day"><?php echo $dia; ?></div>
													<div class="date-month"><?php 
													$mes = strftime("%m", strtotime($dataHorario));
													switch ($mes) {
														case '01': $mes = 'Jan'; break;
														case '02': $mes = 'Fev'; break;
														case '03': $mes = 'Mar'; break;
														case '04': $mes = 'Abr'; break;
														case '05': $mes = 'Mai'; break;
														case '06': $mes = 'Jun'; break;
														case '07': $mes = 'Jul'; break;
														case '08': $mes = 'Ago'; break;
														case '09': $mes = 'Set'; break;
														case '10': $mes = 'Out'; break;
														case '11': $mes = 'Nov'; break;
														case '12': $mes = 'Dez'; break;
													} 
													echo $mes;
													?></div>
													<div class="date-year"><?php echo $ano; ?></div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="box-event">
													<div class="date-hour">
														<i class="far fa-clock"></i> <?php echo $hora; ?>h
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="box-event">
													<div class="content-address">
														<?php echo get_field('endereco'); ?>
													</div>
												</div>
												
											</div>
											<div class="col-md-4">
												<?php if (get_field('link')) { ?><a href="<?php echo get_field('link'); ?>" target="_blank"><div class="box-event inverted spacials">Faça sua inscrição</div></a><?php } ?>
											</div>
										</div>
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