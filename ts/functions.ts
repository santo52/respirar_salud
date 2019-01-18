;
//Funcions 
declare let jQuery : any;
declare let TweenLite : any;

$=jQuery.noConflict();
$.fn.parallax = function ( resistance : any, mouse: any ) 
{
	let $el = $( this );
	TweenLite.to( $el, 0.2, 
	{
		x : -(( mouse.clientX - (window.innerWidth/2) ) / resistance ),
		y : -(( mouse.clientY - (window.innerHeight/2) ) / resistance )
	});
};

$.fn.centerBox = function ( type : any ){
	
	let $el = $(this);
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
		$el.css('margin-top', '-' + (height / 2) + 'px');
	}
}


/*
function resizeSliders(){

}

function showSliders(){
	let $slide = $('.Slide-Container');

	$slide.each(function(i, elem){
		let $thisElem = $(elem);
		let visibles = parseInt($thisElem.data('visible')) || 1;
		let continous = $thisElem.data('continous') || false;
		let $thisSlide = $thisElem.children('.Slide');
		let $thisSlideItem = $thisSlide.children('.Slide-Item');
		let count = $thisSlideItem.length / visibles;

		if(count == 0){
			$slide.eq(i).remove();
		} else {

			var i = 1;
			var items = Math.ceil(count);
			if(continous == true){
				items = $thisSlideItem.length;
				let mod = count % visibles;
				if(mod > 0){
					let copyHTML = $thisSlide.html();
					for(; i <= (visibles - mod); i++){
						$thisSlide.append(copyHTML);
					}
				}
			}

			
			$thisSlide	
			.css('width', (count * i * 100) + '%')
			.data('items', items)
			.data('position', 1)
			.children('.Slide-Item')
			.css('width', (100 / (count * i) ) + '%')
			.eq(0).addClass('active');

			if(count > 1 ){
				
				var $circles = $thisElem.children('.Circles');
				for(var i = 0; i < count; i++){
					var active = i == 0 ? 'active' : '';
					$circles.append('<div class="Circle-Item ' + active + '" data-position="' + (i+1) + '" ></div>');
				}

			} else {
				$thisElem.children('.Icon, .Circles').remove();
			}
		}
	});
}

function automoveSliders(){
	var $sliders = $('.Slide-Container');
	return $sliders.map(function(i, elem){
		let milliseconds = parseInt($sliders.eq(i).data('time')) || 4000;
		
		return setInterval(function(){
			let $Slide = $(elem).children('.Slide');
			let position = $Slide.data('position') + 1;
			moveSlider($Slide, position);
		}, milliseconds);
	});
}*/


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
/*
function moveSlider($Slide, position = null){
	
	let count = $Slide.data('items');
	let $parent = $Slide.parent();
	let $children = $Slide.children('.Slide-Item');
	//let visible = $parent.data('visible') || 1;
	let continous = $parent.data('continous') || false;
	
	
	if(continous!=true){
		if(position == 0){
			position = count;
		} else if(position > count) {
			position = 1;
		}
	}

	let currentPosition = (position-1);

	if(continous==false){
		$Slide
		.data('position', position)
		.css('left', '-' + (currentPosition * 100) + '%');

		$children.removeClass('active')
		.eq(currentPosition).addClass('active');

	} else {

		let width = $children.outerWidth();
		$Slide.animate({
			left: '-=' + width + 'px'
		}, 500, function() {
			let x = width * count * (-1);
			if($(this).position().left <= x){
				$(this).css('transition', 'none').css('left', '0');
			}
		});
	}

	
	$Slide.siblings('.Circles').children('.Circle-Item')
	.removeClass('active')
	.eq(currentPosition).addClass('active');

}*/






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
