;
$=jQuery.noConflict();
console.log('loadparallax');
$.fn.parallax = function ( resistance, mouse ) 
{
	$el = $( this );
	TweenLite.to( $el, 0.2, 
	{
		x : -(( mouse.clientX - (window.innerWidth/2) ) / resistance ),
		y : -(( mouse.clientY - (window.innerHeight/2) ) / resistance )
	});
};


$( document ).mousemove( function( e ) {
    $( '.Slide-Item-Background' ).parallax( -50, e );
	
	let $complement = $( '.Slide-Item .Slide-Item-Complement' );
	$.each($complement, function(i, element){
		var value = (i + 1) * 150;
		$(element).parallax( value, e );
	});
});