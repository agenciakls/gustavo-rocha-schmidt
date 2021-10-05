document.addEventListener("DOMContentLoaded", function (event) {
	new Splide('#palestras', {
		type: 'loop',
		perPage: 3,
		focus: 'center',
		arrows: false,
	}).mount();
	new Splide('#livros', {
		type: 'fade',
		perPage: 1,
		focus: 'center',
		arrows: false,
	}).mount();
	new Splide('#artigos', {
		type: 'loop',
		perPage: 3,
		focus: 'center',
		arrows: false,
	}).mount();
});
$(document).ready(function () {

	$("#validate-continue").on('click', function () {
		$.post(search_object.location, {
			action: 'cookie',
			make: 'save'
		}, function (storeReturn) {
			$("#cookie-alert").remove();
		});
		return false;
	});

	function toggleMenu() {
		$(".hamburger").toggleClass('is-active');
		$("nav").toggleClass('active');
	}
	$(".hamburger").click(function () {
		toggleMenu();
	});
	$(window).on('resize', function () {
		var width = $(this).width();
		if (width > 768) { $(".hamburger").removeClass('is-active'); $("nav").removeClass('active'); }
	});

	var boxBackTop = $("#box-back-top");
	boxBackTop.fadeOut(0);
	$(window).scroll(function () {
		var positionCurrent = $(window).scrollTop();
		if (positionCurrent < 500) { boxBackTop.fadeOut(300); }
		else { boxBackTop.fadeIn(300); }
	});

	boxBackTop.on('click', function () {
		$("html, body").animate({ scrollTop: 0 }, 300);
	});

	var scrollTop = 0;
	$(window).scroll(function () {
		if (scrollTop == 0) {
			scrollTop = 1;
			var positionCurrent = $(window).scrollTop();
			var headerArea = $('.header-area');
			var headerBar = $('.header-bar');
			if (positionCurrent > 50) { headerArea.addClass('fixed'); headerBar.addClass('fixed'); }
			else { headerArea.removeClass('fixed'); headerBar.removeClass('fixed'); }
			scrollTop = 0;
		}
	});


	var $doc = $('html, body');
	$('.link-app').click(function () {
		var tamanhoHeader = $("header").height();
		$doc.stop().animate({
			scrollTop: $($.attr(this, 'href')).offset().top - tamanhoHeader - 50
		}, 500);
		return false;
	});
});