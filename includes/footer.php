		    <button class="scroll">Scroll<span class="icon-arrow"></span></button>
		</main>

		<?php if ($dev) { ?>
	        <script src="<?= $url; ?>/js/min/script.js"></script>
	    <?php } else { ?>
		    <script src="<?= $url; ?>/js/min/script.min.js"></script>
	    <?php } ?>

    </body>
</html>