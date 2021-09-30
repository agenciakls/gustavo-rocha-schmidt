<?php 
/*
Template Name: Sobre
*/
get_header(); 
get_template_part('templates/ads', 'about');
?>
<main class="page-biography section">
	<div class="container">
		<div class="box-biography">
			<section class="row">
				<div class="col-md-6">
					<div class="title-section">
						<h3>
							Gustavo da Rocha Schmidt
						</h3>
						<hr class="line">
					</div>
					<div class="content-section">
					<p>Gustavo da Rocha Schmidt é advogado, sócio de Schmidt, Lourenço & Kingston Advogados Associados, Professor da FGV Direito Rio, Presidente do Centro Brasileiro de Mediação e Arbitragem - CBMA e Procurador do Município do Rio de Janeiro. </p>
					
					<p>É Doutorando em Direito da Regulação pela FGV Direito Rio (2021-2024), Master of Laws pela New York University School of Law (2008), Mestre em Direito da Regulação pela FGV Direito Rio (2016) e Bacharel em Direito pela PUC-Rio (2000). Leciona disciplinas nas áreas de arbitragem e direito público. É o atual Presidente da Revista Brasileira de Alternative Dispute Resolution - RBADR.</p>
					
					<p>É também Presidente da Comissão de Arbitragem dos BRICS, da OAB Federal. Tem experiência nas mais diversas áreas do direito, com ênfase no contencioso cível e empresarial e, ainda, na área de direito público. É autor de inúmeros artigos e dos livros “Arbitragem na Administração Pública” e “Comentários à Lei de Arbitragem”.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="about-figure">
						<div class="image-figure img-circle" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/img/img-about.png);" alt="">
						</div>
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/img-about.png" class="img-fluid rounded-circle" alt="">
					</div>
				</div>
			</section>
		</div>
	</div>
</main>
<?php
get_template_part('templates/about', 'reconhecimento');
get_template_part('templates/about', 'areas');
get_template_part('templates/home', 'linkedin');
get_footer();
?>