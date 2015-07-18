<?php get_header(); ?>
	
	<?php if(!is_user_logged_in() || is_user_logged_in()){ ?>
	
	<div id='introTron' class='jumbotron'>
		<h2 id='titleTron' class='text-center'><?php bloginfo('title'); ?></h2>
		<div class='center-block' id='titleBrk'></div>
		<p style='font-size:1em' class='text-center'><?php bloginfo('description'); ?></p>
	</div>
	
	<div id='testWrapper' class='jumbotron'>
		<div id='codeContainer' class='container'>
			<h3 id='giveitatry' class='text-center'>Give it a try!</h3>
			
			<div class='row'>
				<div class='col-md-offset-1 col-md-4'>
					<div id='incodeArea'>// Your code here
qureg a[1];
H(a);
print a;
dump a;</div>
					<br>
					<button id='runBtn' type='button' class='btn btn-sm btn-success'>Run</button>
				</div>
				<div class='col-md-offset-1 col-md-4'>
					<div id='outcodeArea'>This is the output</div>
					<button id='clrBtn' type='button' class='btn btn-sm btn-warning'>Clear</button>
				</div>
			</div>
		</div>
	</div>
	
	<div id='exampleTron' class='jumbotron'>
		<div class='container'><h2>Examples</h2></div>
	</div>
	
	<div id='signTron' class='jumbotron'>
		<div class='container'><h2>Sign up for more</h2></div>
	</div>
	
	<div id='moreTron' class='jumbotron'>
		<div class='container'><h2>Visit the Github repository</h2></div>
	</div>
	
	<?php } ?>
	
<?php get_sidebar(); get_footer(); ?>