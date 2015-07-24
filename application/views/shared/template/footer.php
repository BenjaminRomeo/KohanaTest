	<footer>
    	<div id='contact'>
            <cite> <?= __('creator')?> : Benjamin ROMÉO </cite>
            <address> <?= __('contact')?> : <a href="mailto:benjiplop@hotmail.fr"> benjiplop@hotmail.fr</a></address>
        </div>
    </footer>
    </body>
    <script>
	var _gaq=[['_setAccount','<?php echo Kohana::$config->load('site.GA') ?>'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
    <?php
    	foreach($scripts as $file => $type)
		{ 
			echo HTML::script($file, array('media' => $type)), ""; 
		}  
	?>
</html>