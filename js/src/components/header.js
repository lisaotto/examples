var $ = require('jquery'),
	win = $(window),
	html = $('html'),
	header = $('header');

function sizeHeader() {
	header.height( win.height() );
}

function init() {
	sizeHeader();
	html.removeClass('preload');
	win.resize( sizeHeader );
}

module.exports = {
	init: init
};