var $ = require('jquery');

function init() {
	
	var tags = '#tags li';

	$('body').on('click', tags, function() {

		var $this = $(this),
			tag = $this.text(),
			samples = $('.project-sample');

		$this.siblings().removeClass('active');

		// reset
		samples.removeClass('active inactive');

		if ( !$this.hasClass('active') ) {
			samples.filter(function() {
				return $(this).attr('data-tags').split(',').indexOf(tag) > -1;
			}).addClass('active');
			samples.filter(function() {
				return $(this).attr('data-tags').split(',').indexOf(tag) === -1;
			}).addClass('inactive');
		}

		$this.toggleClass('active');
	});
}

module.exports = {
	init: init
};