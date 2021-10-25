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
	if (!isset($_COOKIE['cookie_accepted'])) {
		?>
		<section id="cookie-alert" class="active">
			<div class="container">
				<div class="row">
					<div class="col-md-9 column-text">
						<p>Utilizamos cookies em nosso site para personalizar e melhorar sua experiência conosco, oferecendo conteúdos personalizados para você. Ao clicar em aceitar você concorda com nossa <a href="<?php echo get_page_link(40938); ?>"><strong>Política de Privacidade</strong></a>.</p>
					</div>
					<div class="col-md-3 column-button">
						<button id="validate-continue" class="button white cookie-save">Continuar</button>
					</div>
				</div>
			</div>
		</section>
		<script>
			$("#validate-continue").on('click', function () { 
				$.post(search_object.location, {
					action: 'cookie',
					make: 'save'
				}, function (storeReturn) {
					$("#cookie-alert").remove();
				});
				return false;
			});
		</script>
		<?php
	}
	?>
	<div class="box-back-top" id="box-back-top">
		<i class="fas fa-arrow-up"></i>
	</div>
	<script>
		$(document).ready(function () {
			var myModal = new bootstrap.Modal(document.getElementById('searchModal'), { keyboard: false });
			$('#search-action').on('click', function () {myModal.show() });
			
			
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/splide.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/vertical-timeline.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions.js?v=1.1.19"></script>
	<script>
		window.addEventListener('scroll', function(e) {
			const target = document.querySelectorAll('.img-banner-full');
			var index = 0, length = target.length;
			for (index; index < length; index++) {
				var pos = window.pageYOffset * target[index].dataset.rate;

				if(target[index].dataset.direction === 'vertical') {
					target[index].style.transform = 'translate3d(0px,'+pos+'px, 0px)';
				} else {
					var posX = window.pageYOffset * target[index].dataset.ratex;
					var posY = window.pageYOffset * target[index].dataset.ratey;
					
					target[index].style.transform = 'translate3d('+posX+'px, '+posY+'px, 0px)';
				}
			}
		});
	</script>
	<?php wp_footer(); ?>
</body>
</html>