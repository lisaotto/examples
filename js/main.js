var win = $(window),
	header = $('#header');

function centerHeader() {
	header.css('top', ( win.height() - header.height() ) / 2);
}
centerHeader();
win.resize(centerHeader);