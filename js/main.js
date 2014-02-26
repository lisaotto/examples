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