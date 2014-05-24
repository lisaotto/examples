(function($){

var win = $(window),
	body = $('body'),
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
body.on('click', '[data-toggle]', toggle);

function toggleGridOverlay() {
	var overlay = $('.gridoverlay');
	overlay.animate({
		opacity: overlay.css('opacity') === '0' ? 1 : 0
	});

	var $this = $(this);
	$this.text( $this.text() === 'VIEW GRID' ? 'HIDE GRID' : 'VIEW GRID' );
}
body.on('click', '.gridbutton', toggleGridOverlay);

// Scroll back up to the top

function scrollUp() {
	$('html, body').animate({
		scrollTop: $('#projects').offset().top
	}, 500);
}
body.on('click', '.backup .title', scrollUp);

// Scroll down for more button
function promptScrollOn() {
	console.log('prompting the user to scroll');
	$('.scroll').addClass('prompting');
}

function promptScrollOff() {
	$('.scroll').removeClass('prompting');
}

function decideWhenToPrompt() {
	if (document.title !== 'Lisa Otto' && document.title !== 'Lisa Otto - Page Not Found') {
		setTimeout(promptScrollOn, 2500);	
	}
}

body.on('click', '.scroll', function() {
	promptScrollOff();
	$('html, body').animate({
		scrollTop: '+=' + (win.height() * 0.75)
	}, 500);
});

decideWhenToPrompt();
win.scroll(promptScrollOff);

// Internal AJAX loading
function loadElements(data) {

	if (loadedFromElement.closest('#projects').length > 0) {
		loadedFromElement.fadeOut();
	}

	promptScrollOff();

	var delay = 500;

	// Fade out and remove current project elements
	var curProjects = $('#projects'),
		curElements = curProjects.children();
	curProjects.height(curProjects.height());
	if (curProjects.find('.fader').length > 0) {
		curProjects.find('.fader').addClass('faded');
	} else {
		curElements.fadeOut(delay);
	}
	setTimeout(function(){
		$('html, body').animate({
			scrollTop: curProjects.offset().top
		}, 1);
		curElements.remove();
	}, delay + 1);

	var $data = $(data),
		url,
		title,
		newProjects;
	
	for ( var i = 0; i < $data.length; i++ ) {
		if ($data[i].tagName === 'HEADER') {
			url = $($data[i]).find('#page-url').html();
		}
		if ($data[i].tagName === 'TITLE') {
			title = $data[i].innerHTML;
		}
		if ($data[i].id === 'projects') {
			newProjects = $($data[i]);
		}
	}

	if ( !!history ) {
		window.history.pushState({}, title, url);
		document.title = title;
	}

	decideWhenToPrompt();

	var newElements = newProjects.children(),
		newReadyElements = newProjects.find('.navigation, .intro'),
		banner = newProjects.find('.banner'),
		newScrollingElements = newElements.not('.banner, .navigation, .intro').find('img, p').not('.icon-arrow-box');
	
	banner.children().addClass('fader faded');
	newReadyElements.addClass('fader faded');
	newScrollingElements.addClass('fader faded');

	setTimeout(function(){

		newElements.appendTo(curProjects);

		setTimeout(function(){
			banner.find('.hgroup').removeClass('faded');
			newReadyElements.removeClass('faded');
		}, 100);

		banner.imagesLoaded()
			.done(function(){
				banner.children().removeClass('faded');
			});

		$('.project-sample').each(function(){
			var $this = $(this);
			setTimeout(function(){
				$this.find('img').removeClass('faded');
			}, $this.index() * delay / 2);
		});

		curProjects.height('auto');
	}, delay + 2);

	win.scroll(function() {
		newScrollingElements.each(function(){
			var $this = $(this);
			if ( win.scrollTop() + win.height() > $this.offset().top + 50 ) {
				// Three columns in a row (or two columns)
				if ( $this.hasClass('onecolumn') && $this.prev('.onecolumn').length > 0 && $this.next('.onecolumn.last').length > 0 || $this.hasClass('halfcolumn') && $this.hasClass('last')) {
					setTimeout(function(){
						$this.removeClass('faded');
					}, 150);
				} else if ( $this.hasClass('last') && $this.prev('.onecolumn').length > 0) {
					setTimeout(function(){
						$this.removeClass('faded');
					}, 300);

				} else {
					$this.removeClass('faded');
				}
			}
		});
	});

	// send a pageview
	ga('send', 'pageview');
}

var loadedFromElement;
function loadPage(e) {
	e.preventDefault();

	loadedFromElement = $(this);

	if (loadedFromElement.hasClass('next') && win.width() < 960) {
		$('html, body').animate({
			scrollTop: $('#projects').offset().top
		}, 500);
	}

	var url = this.href;
	$.ajax({
		url: url,
		success: loadElements
	});
}
if ( !$('html').hasClass('oldie')) {
	body.on('click', '.navigation .next, .project-sample, .back, h1 a', loadPage);
}
}(jQuery));