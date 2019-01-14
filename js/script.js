;
//Events

$( document ).mousemove( function( e ) {
	
	$( '.Slide-Item .Slide-Item-Background' ).parallax( -50 , e );
	/*let $complement = $( '.Slide-Item .Slide-Item-Complement' );
	$.each($complement, function(i, element){
		$(element).parallax( resistence, e );
	});*/
});

$(window).resize(function(e){
	resizeLogo();
});

$(window).scroll(function() {
	let $Header = $('.Header');
	let $Logo = $('#Logo img');
	let scroll = $(window).scrollTop();
	let height = $Header.height();
	
	if(scroll > height && !$Header.hasClass('white')){
		$Header.addClass('white');
		$Logo.removeClass('hidden');
	} else if(scroll <= height) {
		$Header.removeClass('white');
		$Logo.addClass('hidden');
	}
});


$(document).ready(function(e){
	
	showSliders();
	resizeLogo();
	automoveSliders();

	$('.Slide-Container .Icon').on('click', function(e){
		let $Slide = $(this).siblings('.Slide');
		let position = $Slide.data('position');
		$(this).hasClass('left') ? position-- : position++;
		moveSlider($Slide, position);
	});
	
	$('.Slide-Container .Circles .Circle-Item').on('click', function(e){
		let $Slide = $(this).parent().siblings('.Slide');
		let position = $(this).data('position');
		moveSlider($Slide, position);
	});

	$('#Services-Nav a').on('click', function(e){
		let $this = $(this);
		let url = $('#uri_json_temp').val();
		let id = $this.data('id');
		let $description = $this.parents('.Services').children('.Description');
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


