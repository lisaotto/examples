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
$('[data-toggle]').click( toggle );

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
		scrollTop: 0
	}, 500);
}
body.on('click', '.backup .title', scrollUp);

// Internal AJAX loading
function loadElements(data) {

	loadedFromElement.fadeOut();

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
		if (loadedFromElement.hasClass('back') || loadedFromElement.hasClass('project-sample')) {
			$('html, body').animate({
				scrollTop: 0
			}, 1);
		}
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

	if ( !!history ) window.history.pushState({}, title, url);

	var newElements = newProjects.children(),
		newReadyElements = newProjects.find('.navigation, .intro'),
		banner = newProjects.find('.banner'),
		newScrollingElements = newElements.not('.banner, .navigation, .intro').find('img, p').not('.icon-arrow-box');
	
	banner.addClass('fader faded');
	newReadyElements.addClass('fader faded');
	newScrollingElements.addClass('fader faded');

	setTimeout(function(){

		newElements.appendTo(curProjects);

		setTimeout(function(){
			newReadyElements.removeClass('faded');
		}, 100);

		banner.imagesLoaded()
			.done(function(){
				banner.removeClass('faded');
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
body.on('click', '.navigation .next, .project-sample, .back', loadPage);

}(jQuery));