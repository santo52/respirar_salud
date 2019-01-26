;
//Events

var divineSlider = new DivineSlider();



$( document ).mousemove( function( e ) {
	$( '.Slide-Item .Slide-Item-Background' ).parallax( -50 , e );
});

$(window).resize(function(e){
	resizeLogo();
	if($(window).outerWidth() > 1024){
		changeCallTitle('Llamanos ya!');
	} else {
		changeCallTitle('Linea de atención');
	}
});

$(window).scroll(function() {
	addHeaderColor();
});

$(window).on('load', function(e){
	setTimeout(function(){
		$('.preload').addClass("hidden");
		$('body').css('overflow', "auto");
		resizeLogo();	
	}, 500);
});

$(document).ready(function(e){
	
	divineSlider.show();
	divineSlider.automove();
	showModal();
	addHeaderColor();
	if($(window).outerWidth() > 1024){

		changeCallTitle('Llamanos ya!');
	} else {
		changeCallTitle('Linea de atención');
	}

	$('#Main-Menu a').on('click', function(e){
		var scrolTo = $(this).data('scroll-to');
		var $elem = $('#' + scrolTo);
		if($elem.length){
			e.preventDefault();
			var top = $elem.offset().top - 100;
			$('html, body').animate({scrollTop: top}, 500, 'swing');
		}
	});

	$('#News .Circles .Circle-Item').on('click', function(){
		var position = $(this).index() * (-100);
		var $elementos = $('#News .New');
		
		$(this).addClass('active').siblings().removeClass('active');
		$elementos.each(function(i, elem){
			var valor = position + (i*100);
			$(elem).css('left', valor + '%');
		});

	});

	$('#Contacto-close').on('click', function(e){
		$('body').css('overflow', 'auto');
		$(this).parents('.Contacto').removeClass('active');
	});


	$('#Contacto-open').on('click', function(e){
		$('body').css('overflow', 'hidden');
		$('.Contacto').addClass('active');
	});

	$('.Form-Control').on('focus', function(e){
		$(this).siblings('label').addClass('focused');
	});

	$('#Call').on('mouseenter', function(){
		changeCallTitle('Línea de atención');
	}).on('mouseleave', function(){
		if($(window).outerWidth() > 1024){
			changeCallTitle('Llamanos ya!');
		}
	});

	$('.Form-Control').on('focusout', function(e){
		if($(this).val() == ''){
			$(this).siblings('label').removeClass('focused');
		}
	});

	$(".Description-Close").on("click",function(e){
		$(this).parents(".Description").addClass("hide");
		$("#Services-Nav").find("a").removeClass("clicked");
	});

	$('#Main-Menu').on('click', '.Menu-Dropdown, .Menu-Close, li', function(e){
		$('#Main-Menu').find('ul').slideToggle();
	});

	$('#Services-Nav a').on('click', function(e){
		var $this = $(this);
		var url = $('#uri_json_temp').val();
		var id = $this.data('id');
		var $description = $this.parents('.Services').find('.Description');
		if($this.hasClass('clicked')){
			$this.removeClass('clicked');
			$description.addClass('hide');
		} else {
			$('#Services-Nav').find('a').removeClass('clicked');
			$description.removeClass('hide');
			$this.addClass('clicked');

			$.getJSON(url, function(data){
				$description.find('.Description-Content').html('<h3 class="text-green" >' + data[id]['title'] + '</h3>' + data[id]['description']);
				$description.parent().height($description.children('.Descripcion-Control').outerHeight());
			});
		}
	});

});


