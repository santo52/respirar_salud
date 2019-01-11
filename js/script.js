;

var intervalSliders;

$(document).ready(function(e){
	showSliders();
	intervalSliders = automoveSliders();
});










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
		let $thisSlide = $(elem).data('id-container', i).children('.Slide');
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
		}
	});
}

function automoveSliders(){
	var $sliders = $('.Slide-Container');
	return $sliders.map(function(i, elem){
		let milliseconds = $sliders.eq(i).data('time') || 4000;
		clearInterval(intervalSliders);
		return setInterval(function(){
			moveSlider($sliders.eq(i).find('.right').eq(0));
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


function moveSlider($this){
	
	let count = $this.siblings('.Slide').data('items');
	let position = $this.siblings('.Slide').data('position');
	let idContainer = $this.parent().data('id-container');

	if($this.hasClass('left')){
		position--;
		if(position == 0){
			position = count;
		}
	} else {
		position++;
		if(position > count){
			position = 1;
		}
	}

	let currentPosition = (position-1);
	$this.siblings('.Slide')
	.data('position', position)
	.css('left', '-' + (currentPosition*100) + '%')
	.children('.Slide-Item')
	.removeClass('active')
	.eq(currentPosition).addClass('active');
}


$('.Slide-Container .Icon').on('click', function(e){
	moveSlider($(this));
});
