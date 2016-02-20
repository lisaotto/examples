var $ = require('jquery');

function filter() {

	var tags = '#tags li',
		samples = $('.project-sample'),
		container = $('.home-container'),
		fadeDuration = 300,
		fadeDelay = 200;

	$('body').on('click', tags, function() {

		var $this = $(this),
			tag = $this.text(),
			first = true;

		$this.siblings().removeClass('active');

		samples.fadeOut(fadeDuration);

		setTimeout(function() {

			samples.detach();
			
			// callback fires for every project-sample, so
			// make sure it only happens once!
			if ( first ) {
				if ( !$this.hasClass('active') ) {
					setTimeout(function() {
						samples.filter(function() {
							return $(this).attr('data-tags').split(',').indexOf(tag) > -1;
						}).appendTo(container).fadeIn(fadeDuration);
					}, fadeDelay);
				} else {
					setTimeout(function() {
						samples.appendTo(container).fadeIn(fadeDuration);
					}, fadeDelay);
				}

				$this.toggleClass('active');
			}

			first = false;
		}, fadeDuration + 10);
	});
}

function init() {
	filter();
}

module.exports = {
	init: init
};