$(document).ready(function () {
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
		$("html, body").animate({scrollTop: 0}, 300);
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
	var listBrand = function () {
		var widthCurrent = $(window).width();
		if (widthCurrent <= 576) { 	 }
		else {  }
		$('.list-brand').flickity({
			wrapAround: true,
			cellAlign: 'left',
			contain: true,
			autoPlay: true,
			zoom: {
				maxRatio: 2,
			},
		});
	}
	listBrand();
	$('.list-brand img').on('load', function () {
		listBrand();
	});

	var $doc = $('html, body');
	$('.link-app').click(function() {
		var tamanhoHeader = $("header").height();
	    $doc.stop().animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top - tamanhoHeader - 50
	    }, 500);
	    return false;
	});
});