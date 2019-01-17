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

$.fn.centerBox = function ( type ){
	
	$el = $(this);
	if(type=='horizontal' || type=='vertical' || type=='both'){
		$el.css('position', 'absolute');
	}

	if( type=='horizontal' || type=='both'){
		let width = $el.width();
		$el.css('left', '50%');
		$el.css('margin-left', '-' + (width / 2) + 'px');
	}

	if( type=='vertical' || type=='both'){
		let height = $el.height();
		$el.css('top', '50%');
		$el.css('margin-top', '-' + (top / 2) + 'px');
	}
}

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


function resizeLogo(){
	let $logo = $('#logo-header');
	let width = $logo.width() / 2;
	let height = $logo.height() / 2;
	$logo.css('margin-top', '-' + height + 'px')
		.css('margin-left', '-' + width + 'px');
	
	if(!$logo.hasClass('scale')){
		$logo.addClass('scale');
	}
}

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






function showModal() {
    var modalBackground = $('.modal-background'),
    modal = $('.modal'),
    close = $('#close'),
    open = $('.openModal');
    // open modal
    open.on('click', function(){
		let url = $(this).data('url');
		let iframe = '<iframe src="' + url + '" width="100%" height="100%" style="border:0" allowfullscreen="" frameborder="0"></iframe>';
		modal.find('iframe').replaceWith(iframe);
        modalBackground.toggleClass('closed');
        modal.toggleClass('closed');
    });
    // cancel;
    close.on('click', function(){
        modalBackground.toggleClass('closed');
        modal.toggleClass('closed');
    });
    
}
