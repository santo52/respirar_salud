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

function resizeLogo(){
	let $logo = $('#logo-header');
	let width = $logo.width() / 2;
	$logo.css('margin-left', '-' + width + 'px');
	
	if(!$logo.hasClass('scale')){
		$logo.addClass('scale');
	}
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

function addHeaderColor(){
	var $Header = $('.Header');
	if($('body,html').width() >= 1024){
		var scroll = $(window).scrollTop();
		var height = $Header.height();
	
		if(scroll > height && !$Header.hasClass('white')){
			$Header.addClass('white');
		} else if(scroll <= height) {
			$Header.removeClass('white');
		}
	} else {
		$Header.removeClass('white');
	}
}

function changeCallTitle(message : string){
	$('#Call').find('.Call-Title').html(message);
}