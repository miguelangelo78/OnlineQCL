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
qureg qubit[1];

H(qubit);
dump qubit;

H(qubit);
dump qubit;</div>
					<br>
					<button id='runBtn' type='button' class='btn btn-sm btn-success'>Run</button>
				</div>
				<div class='col-md-offset-1 col-md-4'>
					<div id='outcodeArea'>// This is the output</div>
					<button id='clrBtn' type='button' class='btn btn-sm btn-warning'>Clear</button>
				</div>
			</div>
		</div>
	</div>
	
	<div id='exampleTron' class='jumbotron'>
		<div class='container'>
			<h2>Examples</h2>
			<ul style='color: #292929;' class='list-group'>
				<li class='list-group-item'>1. Declare a quantum register with 5 qubits: <pre>
qureg q[5];
dump q; // Output qubit</pre></li>
				<li class='list-group-item'>2. Apply a Hadamard gate: <br>
					<pre>qureg q[5];
H(q);
dump q;</pre>
				</li>
				<li class='list-group-item'>3. Apply a CNot gate: <br>
					<pre>qureg qubit[1];
qureg qubit2[1];
						
CNot(qubit,qubit2);
						
dump qubit;</pre>
				</li>
			</ul>
		</div>
	</div>
	
	<div onclick="javascript:location.href='<?php echo get_site_url()."/signup"; ?>'" id='signTron' class='jumbotron'>
		<div class='container'><h2>Sign up for more</h2><p class='badge' style='background-color:#1B2D4A;font-size: 1em'>Click to register</p></div>
	</div>
	
	<div onclick="javascript:location.href='<?php echo get_site_url()."/github"; ?>'" id='moreTron' class='jumbotron'>
		<div class='container'><h2>Visit the Github repository</h2><p class='badge' style='background-color:#967A3E;font-size: 1em'>Click to visit</p></div>
	</div>
	
	<?php } ?>
	
<?php get_sidebar(); get_footer(); ?>