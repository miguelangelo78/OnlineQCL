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
	var inputCode = ace.edit("incodeArea");
	inputCode.setTheme("ace/theme/monokai");
	inputCode.getSession().setMode("ace/mode/c_cpp");
	inputCode.session.setUseWrapMode(true);
	
	var outCode = ace.edit("outcodeArea");
	outCode.setTheme("ace/theme/monokai");
	outCode.getSession().setMode("ace/mode/c_cpp");
	outCode.session.setUseWrapMode(true);
	outCode.setReadOnly(true);
	outCode.renderer.setShowGutter(false); 
	outCode.renderer.setScrollMargin(20, 20, 20, 20);
	outCode.renderer.setPadding(20);
</script>

</html>