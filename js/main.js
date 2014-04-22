(function($){

var win = $(window),
	headerContainer = $('header'),
	header = $('#header'),
	tab = $('.tab');

function headerThings() {

	headerContainer.height( win.height() );

}
headerThings();
win.resize( headerThings );

function toggle() {
	$( this.getAttribute('data-toggle') ).toggleClass( this.getAttribute('data-toggle-class') );
}
$('[data-toggle]').click( toggle );

var overlay = $('.gridoverlay');
function toggleGridOverlay() {

	console.log(overlay.css('opacity'));

	overlay.animate({
		opacity: overlay.css('opacity') === '0' ? 1 : 0
	});

	var $this = $(this);
	$this.text( $this.text() === 'VIEW GRID' ? 'HIDE GRID' : 'VIEW GRID' );
}
$('.gridbutton').click(toggleGridOverlay);

}(jQuery));