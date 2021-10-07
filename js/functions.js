document.addEventListener("DOMContentLoaded", function (event) {
	if (document.getElementById('palestras') !== null) {
		new Splide('#palestras', {
			type: 'slide',
			perPage: 3, 
			arrows: false,
			perMove: 1,
		}).mount();
	}
	if (document.getElementById('livros') !== null) {
		new Splide('#livros', {
			type: 'slide',
			perPage: 1,
			arrows: false,
		}).mount();
	}
	if (document.getElementById('artigos') !== null) {
		new Splide('#artigos', {
			type: 'slide',
			perPage: 3,
			arrows: false,
			perMove: 1,
		}).mount();
	}
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
	
	var rollDown = $("#roll-down");
	rollDown.on('click', function () {
		var heightBanner = $(".home-banner").height();
		$(window).scrollTop(heightBanner);
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