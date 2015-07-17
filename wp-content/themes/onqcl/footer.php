<?php wp_footer(); ?>
	<div id='footer'>
		<p>Copyright &copy; Online QCL</p>	
	</div>
</body>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/aceeditor/ace.js" type="text/javascript" charset="utf-8"></script>
<script src='<?php bloginfo('template_url'); ?>/js/main.js'></script>
<script>
	var editor = ace.edit("incodeArea");
	editor.setTheme("ace/theme/monokai");
	editor.session.setUseWrapMode(true);
	
	editor = ace.edit("outcodeArea");
	editor.setTheme("ace/theme/monokai");
	editor.session.setUseWrapMode(true);
	editor.setReadOnly(true);
	editor.renderer.setShowGutter(false); 
	editor.renderer.setScrollMargin(20, 20, 20, 20);
	editor.renderer.setPadding(20);
</script>

</html>