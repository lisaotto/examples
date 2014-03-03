(function($){

var win = $(window),
	header = $('#header, .tab');

function centerHeader() {
	header.each(function(){
		var $this = $(this);
		$this.css('margin-top', ( win.height() - $this.height() ) / 2);
	});
}
centerHeader();
win.resize(centerHeader);

function toggle() {
	$( this.getAttribute('data-toggle') ).toggleClass( this.getAttribute('data-toggle-class') );
}
$('[data-toggle]').click( toggle );

}(jQuery));