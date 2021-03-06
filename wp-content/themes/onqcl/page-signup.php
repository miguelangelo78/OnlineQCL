<?php get_header(); 
	if(have_posts())
		while(have_posts()){ the_post(); ?>
	
	<style>
		#nav:hover{
			box-shadow: 0px 5px 5px #999999;
			
			background-color: #253E66 !important;
		    transition: background-color 0.5s ease, box-shadow 0.5s ease;
		}
	
		li {
			list-style-type: none;
		}
		
		.text-input, select{
			border-radius: 3px !important;
		}
		
		.text-input {
			width:100% !important;
		}
		
		.text-input:focus {
			box-shadow: 0px 0px 3px #BDBDBD;		
		}
		
		label{
			font-weight: 200;
			line-height: 30px;
			font-size: 0.9em;
			margin-right: 10px;
		}
		
		#loginContainer > .jumbotron{
			margin-top: 10px;
			margin-bottom: 10px;
		}
		
		#editTitle{
			margin-top: -30px;
		}
		
		#loginContent{
			background: white;
			border-radius: 5px;
			padding: 20px;
			box-shadow: 0px 0px 2px #C9C9C9;
			margin: 10px 0px -20px 0px;
			width: 500px;
		}
	</style>
	
	<div id='loginContainer' class='container'>
		<div class='jumbotron'>
			<div class='row'>
				<div class='col-md-12'>
					<h2 id='editTitle'><?php the_title(); ?></h2>
					<div id='titleBrk'></div>
				</div>
			</div>
			<div clasS='row'>
				<div class='col-md-offset-3 col-md-4'>
					<div id='loginContent'><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	</div>

	
<?php }else echo "<p>No content found :/</p>"; get_footer();?>

	<script>
	$(function(){
		$("#register").addClass("btn btn-primary");
	});
	</script>