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
		
		.text-input:focus {
			box-shadow: 0px 0px 10px #BDBDBD;		
		}
		
		label{
			font-weight: normal;
		}
		
		#editContainer{
			font-size: 1em;
			font-family: "Open Sans", sans-serif;
		}
		
		#editContainer > .jumbotron{
			margin-top: 10px;
			margin-bottom: 10px;
		}
		
		#editTitle{
			margin-top: -30px;
		}
		
		#editContent{
			float: left;
		}
	</style>
	
	<div id='editContainer' class='container'>
		<div class='jumbotron'>
			<div class='row'>
				<div class='col-md-12'>
					<h2 id='editTitle'><?php the_title(); ?></h2>
					<div id='titleBrk'></div>
				</div>
			</div>
			<div clasS='row'>
				<div class='col-md-offset-4 col-md-4'>
					<div id='editContent'><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	</div>
	
<?php }else echo "<p>No content found :/</p>"; get_footer();?>