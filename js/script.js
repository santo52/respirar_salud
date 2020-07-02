;
//Events

// var divineSlider = new DivineSlider();

$(document).mousemove(function (e) {
	$('.Slide-Item .Slide-Item-Background').parallax(-50, e);
});

$(window).resize(function (e) {
	resizeLogo();
	// if ($(window).outerWidth() > 1024) {
	// 	$('#Call .Call-Title').show();
	// 	var callustext = $('#callustext').val();
	// 	changeCallTitle(callustext + '!');
	// } else {
	// 	$('#Call .Call-Title').hide();
	// }
});

$(window).scroll(function () {
	addHeaderColor();
});

$(window).on('load', function (e) {
	$('.preload').addClass("hidden");
	$('body').css('overflow', "auto");
	resizeLogo();
});

$(document).ready(function (e) {

	// divineSlider.show();
	// divineSlider.automove();
	showModal();
	addHeaderColor();
	// if ($(window).outerWidth() > 1024) {
	// 	$('#Call .Call-Title').show();
	// 	var callustext = $('#callustext').val();
	// 	changeCallTitle(callustext + '!');
	// } else {
	// 	$('#Call .Call-Title').hide();
	// }

	$('#Main-Menu a').on('click', function (e) {
		var scrolTo = $(this).attr('href').split('#');
		scrolTo = scrolTo[scrolTo.length - 1];
		var $elem = $('#', scrolTo);
		if ($elem.length) {
			e.preventDefault();
			var top = $elem.offset().top - 100;
			$('html, body').animate({ scrollTop: top }, 500, 'swing');
		}
	});

	$('#Call-Head').on('click', function () {
		$('#Call').addClass('show');
	});
	$('#Call-Close').on('click', function () {
		$('#Call').removeClass('show');
	});

	$('#News .Circles .Circle-Item').on('click', function () {
		var position = $(this).index() * (-100);
		var $elementos = $('#News .New');

		$(this).addClass('active').siblings().removeClass('active');
		$elementos.each(function (i, elem) {
			var valor = position + (i * 100);
			$(elem).css('left', valor + '%');
		});

	});

	$('#Contacto-close').on('click', function (e) {
		$('body').css('overflow', 'auto');
		$(this).parents('.Contacto').removeClass('active');
	});


	$('#Contacto-open').on('click', function (e) {
		$('body').css('overflow', 'hidden');
		$('.Contacto').addClass('active');
	});

	$('.Form-Control').on('focus', function (e) {
		$(this).siblings('label').addClass('focused');
	});

	$('.Form-Control').on('focusout', function (e) {
		if ($(this).val() == '') {
			$(this).siblings('label').removeClass('focused');
		}
	});

	$(".Description-Close").on("click", function (e) {
		$(this).parents(".Description").addClass("hide");
		$("#Services-Nav").parents('.Section-Container').height('auto').find("a").removeClass("clicked");
	});

	$('#Main-Menu').on('click', '.Menu-Dropdown, .Menu-Close, li', function (e) {
		if (!$('.Menu-Dropdown').is(':hidden')) {
			$('#Main-Menu.Show-Menu').find('.Menu-Container').slideToggle();
		}
	});

	$('#Services-Nav a').on('click', function (e) {

		var $this = $(this);
		var url = $('#uri_json_temp').val();
		var id = $this.data('id');
		var $description = $this.parents('.Services').find('.Description');
		if ($this.hasClass('clicked')) {
			$this.removeClass('clicked');
			$description.addClass('hide');
		} else {
			$('#Services-Nav').find('a').removeClass('clicked');
			$description.removeClass('hide');
			$this.addClass('clicked');

			$.getJSON(url, function (data) {
				$description.find('.Description-Content').html('<h3 class="text-green" >' + data[id]['title'] + '</h3>' + data[id]['description']);
				if ($('.List').outerWidth() == $('body').outerWidth()) {
					$description.parent().height($description.children('.Descripcion-Control').outerHeight());
				}
				$('html,body').animate({ scrollTop: $('#Services').position().top - 150 }, 500, 'swing');
			});
		}
	});

	$('.Somos-Item').on('click', function (e) {
		var $this = $(this);
		var url = $('#uri_json_temp').val();
		var id = $this.data('id');
		var $description = $this.parents('.Services').find('.Description');
		var $somos = $('.Somos-Container__descripcion');
		$somos.toggleClass('Show-Description');

		//if(!$somos.hasClass('Show-Description')){
		$.getJSON(url, function (data) {
			$('.Somos-Container__descripcion__text-title').html('<h2 class="text-green">' + data[id].title + '</h2>');
			$('.Somos-Container__descripcion__text-paragraph').html(data[id].text);
		});
	});

	$('.Somos-Download').on('click', function (e) {
		e.preventDefault();
		e.stopPropagation();
		var url = $(this).data('url');
		window.open(url, '_blank');
		return false;
	});

	$('.Somos-Container__descripcion__text-close').on('click', function () {
		$('.Somos-Container__descripcion').removeClass('Show-Description');
	});


	$('.owl-carousel').owlCarousel({
		stagePadding: 200,
		loop: true,
		margin: 10,
		nav: false,
		items: 1,
		lazyLoad: true,
		nav: true,
		responsive: {
			0: {
				items: 1,
				stagePadding: 60
			},
			600: {
				items: 1,
				stagePadding: 100
			},
			1000: {
				items: 1,
				stagePadding: 200
			},
			1200: {
				items: 1,
				stagePadding: 250
			},
			1400: {
				items: 1,
				stagePadding: 300
			},
			1600: {
				items: 1,
				stagePadding: 350
			},
			1800: {
				items: 1,
				stagePadding: 400
			}
		}
	});

	$('.muicss-input-file input').on('change', function (e) {
		var fileName = e.target.files[0].name;
		var label = $(this).siblings('label');
		label.text(fileName);
	});

	$('#Tag-Button').on('click', function (e) {
		$(this).siblings('.Tag-Content').slideToggle();
	});

	$('#btn-covid-close').on('click', function() {
		$('#covid').fadeOut();
	});

	$('#divine-slider').rbtSlider({
		height: '100vh',
		dots: true,
		arrows: true,
		auto: 10
	});

});


