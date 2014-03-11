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

}(jQuery));