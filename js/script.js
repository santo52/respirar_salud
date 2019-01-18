;
//Events

var divineSlider = new DivineSlider();

$( document ).mousemove( function( e ) {
	$( '.Slide-Item .Slide-Item-Background' ).parallax( -50 , e );
});

$(window).resize(function(e){
	resizeLogo();
});

$(window).scroll(function() {
	var $Header = $('.Header');
	var $Logo = $('#Logo');
	var scroll = $(window).scrollTop();
	var height = $Header.height();
	
	if(scroll > height && !$Header.hasClass('white')){
		$Header.addClass('white');
		$('#White-Logo').addClass('hidden');
		$('#Color-Logo').removeClass('hidden');
		
		
	} else if(scroll <= height) {
		$Header.removeClass('white');
		$('#White-Logo').removeClass('hidden');
		$('#Color-Logo').addClass('hidden');
	}
});

$(window).on('load', function(e){
	setTimeout(function(){
		$('.preload').addClass("hidden");
		$('body').css('overflow', "auto");
		divineSlider.automove();
		resizeLogo();	
	}, 500);
});

$(document).ready(function(e){
	
	divineSlider.show();
	showModal();

	$('.Slide-Container .Icon').on('click', function(e){
		var $Slide = $(this).siblings('.Slide');
		var position = $Slide.data('position');
		$(this).hasClass('left') ? position-- : position++;
		divineSlider.move($Slide, position);
	});
	
	$('.Slide-Container .Circles .Circle-Item').on('click', function(e){
		var $Slide = $(this).parent().siblings('.Slide');
		var position = $(this).data('position');
		divineSlider.move($Slide, position);
	});

	$('#Main-Menu a').on('click', function(e){
		var scrolTo = $(this).data('scroll-to');
		var $elem = $('#' + scrolTo);
		if($elem.length){
			e.preventDefault();
			var top = $elem.offset().top - 100;
			$('html, body').animate({scrollTop: top}, 500, 'swing');
		}
	});

	$('#Contacto-close').on('click', function(e){
		$(this).parents('.Contacto').hide();
	});


	$('#Contacto-open').on('click', function(e){
		$('.Contacto').show();
	});

	$('.Form-Control').on('focus', function(e){
		$(this).siblings('label').addClass('focused');
	});



	$('.Form-Control').on('focusout', function(e){
		if($(this).val() == ''){
			$(this).siblings('label').removeClass('focused');
		}
	});

	$('#Services-Nav a').on('click', function(e){
		var $this = $(this);
		var url = $('#uri_json_temp').val();
		var id = $this.data('id');
		var $description = $this.parents('.Services').children('.Description');
		if($this.hasClass('clicked')){
			$this.removeClass('clicked');
			$description.addClass('hide');
		} else {
			$('#Services-Nav').find('a').removeClass('clicked');
			$description.removeClass('hide');
			$this.addClass('clicked');

			$.getJSON(url, function(data){
				$description.html('<h3 class="text-green" >' + data[id]['title'] + '</h3>' + data[id]['description']);
			});
		}
	});

});


