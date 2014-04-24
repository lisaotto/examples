        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= $url; ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?= $url; ?>/js/plugins.js"></script>
        <script src="<?= $url; ?>/js/main.js"></script>

		<?php if ($title === 'Page Not Found') { ?>
			<script>
	        (function($){
	            var win = $(window),
	                projects = $('#projects'),
	                container = projects.find('.error'),
	                content = $('.404-content');
	            function center404() {
	                projects.height('auto');
	                if (win.height() > projects.height()) {
	                    projects.height(win.height());
	                }
	                if (projects.height() > content.height() + 2 * Math.round(parseInt( container.css('margin-top'), 10))) {
	                    content.css({
	                        top: (projects.height() - content.height()) / 2
	                    });
	                } else {
	                    content.css({ top: 0 });
	                }
	            }
	            center404();
	            win.on('load resize', center404);
	        })(jQuery);
	        </script>
		<?php } ?>

    </body>
</html>