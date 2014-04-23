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

var overlay = $('.gridoverlay');
function toggleGridOverlay() {

	overlay.animate({
		opacity: overlay.css('opacity') === '0' ? 1 : 0
	});

	var $this = $(this);
	$this.text( $this.text() === 'VIEW GRID' ? 'HIDE GRID' : 'VIEW GRID' );
}
$('.gridbutton').click(toggleGridOverlay);

// Scroll back up to the top

function scrollUp() {
	$('html, body').animate({
		scrollTop: 0
	}, 500);
}
body.on('click', '.backup .title', scrollUp);


// Internal AJAX loading
function loadElements(data) {
	// Fade out and remove current project elements
	var curProjects = $('#projects'),
		curElements = curProjects.children();
	curProjects.height(curProjects.height());
	curElements.fadeOut(300);
	setTimeout(function(){
		curElements.remove();
	}, 301);

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
		newReadyElements = newElements.find('.banner, .navigation, .intro'),
		newScrollingElements = newElements.not('.banner, .navigation, .intro').find('img, p');
	
	newReadyElements.addClass('fader faded');
	newScrollingElements.addClass('fader faded');
	
	setTimeout(function(){
		newElements.appendTo(curProjects);
		newReadyElements.removeClass('faded');
		newScrollingElements.each(function(){
			var $this = $(this);
			if ($this.parent().hasClass('project-sample')) {
				$this.removeClass('faded');
			}
		});
		curProjects.height('auto');
	}, 302);

	win.scroll(function() {
		newScrollingElements.each(function(){
			var $this = $(this);
			if ( win.scrollTop() + win.height() > $this.offset().top + 100 ) {
				$this.removeClass('faded');
			}
		});
	});
}

function loadPage(e) {
	e.preventDefault();

	if ($(this).hasClass('back')) {
		scrollUp();
	}

	var url = this.href;
	$.ajax({
		url: url,
		success: loadElements
	});
}
body.on('click', '.navigation .next, .project-sample, .back', loadPage);

}(jQuery));