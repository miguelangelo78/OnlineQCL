<?php 
	if(!is_user_logged_in()){
		wp_redirect(home_url()); 
		exit;
	}
?>
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
		
		#logoutContainer{
			font-size: 1em;
			font-family: "Open Sans", sans-serif;
		}
		
		#logoutContainer > .jumbotron{
			margin-top: 10px;
			margin-bottom: 10px;
		}
		
		#editTitle{
			margin-top: -30px;
		}
		
		#logoutContent{
			background: white;
			border-radius: 5px;
			padding: 20px;
			box-shadow: 0px 0px 2px #C9C9C9;
			margin: 10px 0px -20px 0px;
		}
	</style>
	
	<div id='logoutContainer' class='container'>
		<div class='jumbotron'>
			<div class='row'>
				<div class='col-md-12'>
					<h2 id='editTitle'><?php the_title(); ?></h2>
					<div id='titleBrk'></div>
				</div>
			</div>
			<div clasS='row'>
				<div class='col-md-offset-4 col-md-4'>
					<div id='logoutContent'><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	</div>
	
<?php }else echo "<p>No content found :/</p>"; get_footer();?>