	<?php echo get_template_part('templates/ads', 'footer'); ?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="rodape-copyright">© 2021 - Todos os direitos reservados</div>
				</div>
				<div class="col-md-6">
					<div class="rodape-redes-sociais">
						<div class="text-redes">
							Siga Gustavo Schmidt
						</div>
						<div class="icons-redes">
							<div class="single-redes"><a href="<?php echo infoVar::show('twitter'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></div>
							<div class="single-redes"><a href="<?php echo infoVar::show('linkedin'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php
	if (is_front_page()) {
		?>
		<script>
		$(document).ready(function () {
            function gtag_report_conversion() {
                gtag('create', 'AW-824599583', 'auto');
                gtag('event', 'conversion', { 'send_to': 'AW-824599583/cNbWCMOUzcQBEJ_ImYkD' });
                console.log('Ads');
            }
            function callConversion() {
                gtag_report_conversion();
            }
            $(".form-area").on('submit', function() { callConversion() });
        });
		</script>
		<?php
	}
	if (!isset($_COOKIE['cookie_accepted'])) {
		?>
		<section id="cookie-alert" class="active">
			<div class="container">
				<div class="row">
					<div class="col col-9 column-text">
						<p>Utilizamos cookies em nosso site para personalizar e melhorar sua experiência conosco, oferecendo conteúdos personalizados para você. Ao clicar em aceitar você concorda com nossa <a href="<?php echo get_page_link(40938); ?>"><strong>Política de Privacidade</strong></a>.</p>
					</div>
					<div class="col col-3 column-button">
						<button id="validate-continue" class="button white cookie-save">Continuar</button>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
	?>
	<div class="box-back-top" id="box-back-top">
		<i class="fas fa-arrow-up"></i>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		$(document).ready(function () {
			var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
				keyboard: false
			})
			$('#search-action').on('click', function () {
				myModal.show()
			});
			
		});
	</script>asd
	<script src="<?php bloginfo('template_url'); ?>/js/splide.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/vertical-timeline.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions.js?v=1.1.19"></script>
	</script>
	<?php wp_footer(); ?>
</body>
</html>