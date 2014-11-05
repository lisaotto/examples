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
	promptScrollOff();
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
		scrollTop: $('#content').offset().top
	}, 500);
}
body.on('click', '.backup .title', scrollUp);

// Scroll down for more button
function promptScrollOn() {
	$('.scroll').addClass('prompting');
}

function promptScrollOff() {
	$('.scroll').removeClass('prompting');
}

function decideWhenToPrompt() {
	var url = window.location.href;
	url = url.split('/');
	for ( var i = 0; i < url.length; i++ ) {
		if ( url[i] === 'project' ) {
			setTimeout(promptScrollOn, 2500);
			return;
		}
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

// Return booleans for home page, about page, and just having been on a project page
function isHome() {
	return location.href === 'http://localhost/portfolio/' || location.pathname === '/';
}
function isAbout() {
	return location.href === 'http://localhost/portfolio/about/' || location.pathname === '/about/';
}
function comingFromProject() {
	return document.referrer && document.referrer.indexOf('/project/') >= 0;
}

// click on the work link: if on the work page, should scroll to where the content starts
function scrollToWork(e) {
	e.preventDefault();
	if ( isHome() ) {
		$('html, body').animate({
			scrollTop: $('#content').offset().top
		}, 500);
	} else {
		location.href = this.href;
	}
}

$('#work-link').click(scrollToWork);

// On small screens, for various conditions, should scroll to where content starts
function scrollDown() {
	console.log(document.referrer);
	if ( win.width() < 960 ) {

		if ( isAbout() || ( isHome() && comingFromProject() ) ) {
			$('html, body').animate({
				scrollTop: $('#content').offset().top
			}, 500);
		}
	}
}
scrollDown();

// Internal AJAX loading
function loadElements(data) {

	if (loadedFromElement.closest('#content').length > 0) {
		loadedFromElement.fadeOut();
	}

	promptScrollOff();

	var delay = 500;

	// Fade out and remove current project elements
	var curProjects = $('#content'),
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
		if ($data[i].id === 'content') {
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
			scrollTop: $('#content').offset().top
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

function shouldWeCenter() {
	return body.attr('data-scroll') === 'false';
}

function centerPageContent() {
	if ( shouldWeCenter() ) {
		var content = $('#content'),
			vcenter = $('.vcenter');
        content.height('auto');
        if (win.height() > content.height()) {
            content.height(win.height());
        }
        if (content.height() > vcenter.height() + 2 * Math.round(parseInt( vcenter.parent().css('margin-top'), 10))) {
            vcenter.css({
                top: (content.height() - vcenter.height() - 2 * parseInt( vcenter.parent().css('margin-top'), 10)) / 2
            });
        } else {
            vcenter.css({ top: 0 });
        }
    }
}
centerPageContent();
win.on('load resize', centerPageContent);

}(jQuery));
