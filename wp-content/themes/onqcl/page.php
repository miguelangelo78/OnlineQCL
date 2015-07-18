<?php get_header(); 
	if(have_posts())
		while(have_posts()){ the_post(); ?>
	
	<style>
		#page_container{
			font-family: "Open Sans";
			background: white;
			margin: 10px 0 10px 0;
			padding-top: 20px;
		}
		#nav:hover{
			box-shadow: 0px 5px 5px #999999;
			
			background-color: #253E66 !important;
		    transition: background-color 0.5s ease, box-shadow 0.5s ease;
		}
	</style>
	
	<div class='container'>
		<div id='page_container' class='jumbotron post page'>
			<h2 class='text-center'><?php the_title(); ?></h2>
			<div class='center-block' id='titleBrk'></div>
			<?php the_content(); ?>
		</div>
	</div>
<?php }else echo "<p>No content found :/</p>"; get_footer();?>