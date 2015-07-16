		<div id='footer'>
			
		</div>
	</div>
</body>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/aceeditor/ace.js" type="text/javascript" charset="utf-8"></script>
<script src='<?php bloginfo('template_url'); ?>/js/main.js'></script>
<script>
	var editor = ace.edit("incodeArea");
	editor.setTheme("ace/theme/monokai");
	
	editor = ace.edit("outcodeArea");
	editor.setTheme("ace/theme/monokai");
	editor.setReadOnly(true);
	editor.renderer.setShowGutter(false); 
	
</script>

</html>