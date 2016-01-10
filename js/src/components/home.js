var $ = require('jquery');

function filter() {

	var tags = '#tags li',
		fadeDuration = 300,
		fadeDelay = 200;

	$('body').on('click', tags, function() {

		var $this = $(this),
			tag = $this.text(),
			samples = $('.project-sample'),
			first = true;

		$this.siblings().removeClass('active');

		samples.fadeOut(fadeDuration);
		setTimeout(function() {
			
			// callback fires for every project-sample, so
			// make sure it only happens once!
			if ( first ) {
				if ( !$this.hasClass('active') ) {
					setTimeout(function() {
						samples.filter(function() {
							return $(this).attr('data-tags').split(',').indexOf(tag) > -1;
						}).fadeIn(fadeDuration);
					}, fadeDelay);
				} else {
					setTimeout(function() {
						samples.fadeIn(fadeDuration);
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