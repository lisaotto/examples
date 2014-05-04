		    <div class="nolink-box" data-toggle="body" data-toggle-class="teasers-open"></div>
		</main>

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

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-9215814-15', 'lisaotto.co');
		  ga('send', 'pageview');

		</script>

    </body>
</html>