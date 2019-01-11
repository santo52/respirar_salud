;
//Funcions 

$=jQuery.noConflict();
$.fn.parallax = function ( resistance, mouse ) 
{
	$el = $( this );
	TweenLite.to( $el, 0.2, 
	{
		x : -(( mouse.clientX - (window.innerWidth/2) ) / resistance ),
		y : -(( mouse.clientY - (window.innerHeight/2) ) / resistance )
	});
};


function showSliders(){
	let $slide = $('.Slide-Container');
	$slide.each(function(i, elem){
		
		let $thisSlide = $(elem).children('.Slide');
		let $thisSlideItem = $thisSlide.children('.Slide-Item');
		let count = $thisSlideItem.length;

		if(count == 0){
			$slide.eq(i).remove();
		} else {

			$thisSlideItem
			.css('width', (100 / count) + '%')
			.eq(0).addClass('active');

			$thisSlide	
			.css('width', (count * 100) + '%')
			.data('items', count)
			.data('position', 1);

			if(count > 1 ){
				
				var $circles = $(elem).children('.Circles');
				for(var i = 0; i < count; i++){
					var active = i == 0 ? 'active' : '';
					$circles.append('<div class="Circle-Item ' + active + '" data-position="' + (i+1) + '" ></div>');
				}

			} else {
				$(elem).children('.Icon, .Circles').remove();
			}
		}
	});
}

function automoveSliders(){
	var $sliders = $('.Slide-Container');
	return $sliders.map(function(i, elem){
		let milliseconds = $sliders.eq(i).data('time') || 4000;
		return setInterval(function(){
			let $Slide = $(elem).children('.Slide');
			let position = $Slide.data('position') + 1;
			moveSlider($Slide, position);
		}, milliseconds);
	});
}

//Events

$( document ).mousemove( function( e ) {
    $( '.Slide-Item-Background' ).parallax( -50, e );
	let $complement = $( '.Slide-Item .Slide-Item-Complement' );
	$.each($complement, function(i, element){
		var value = (i + 1) * 150;
		$(element).parallax( value, e );
	});
});


function moveSlider($Slide, position = null){
	
	let count = $Slide.data('items');

	if(position == 0){
		position = count;
	} else if(position > count) {
		position = 1;
	}


	let currentPosition = (position-1);

	$Slide
	.data('position', position)
	.css('left', '-' + (currentPosition*100) + '%')
	.children('.Slide-Item')
	.removeClass('active')
	.eq(currentPosition).addClass('active');

	
	$Slide.siblings('.Circles').children('.Circle-Item')
	.removeClass('active')
	.eq(currentPosition).addClass('active');

}



$(document).ready(function(e){
	
	showSliders();
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

});



