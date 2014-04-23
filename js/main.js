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
		newReadyElements = newProjects.find('.banner, .navigation, .intro'),
		newScrollingElements = newElements.not('.banner, .navigation, .intro').find('img, p');
	
	newReadyElements.addClass('fader faded');
	newScrollingElements.addClass('fader faded');

	setTimeout(function(){

		newElements.appendTo(curProjects);

		setTimeout(function(){
			newReadyElements.removeClass('faded');
		}, 100);

		$('.project-sample').each(function(){
			var $this = $(this);
			setTimeout(function(){
				$this.find('img').removeClass('faded');
			}, Math.random() * delay);
		});

		curProjects.height('auto');
	}, delay + 2);

	win.scroll(function() {
		newScrollingElements.each(function(){
			var $this = $(this);
			if ( win.scrollTop() + win.height() > $this.offset().top + 50 ) {
				if ( $this.hasClass('onecolumn') && $this.prev('.onecolumn').length > 0 && $this.next('.onecolumn.last').length > 0) {
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

	var url = this.href;
	$.ajax({
		url: url,
		success: loadElements
	});
}
body.on('click', '.navigation .next, .project-sample, .back', loadPage);

}(jQuery));