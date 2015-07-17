<?php get_header(); 
	if(have_posts())
		while(have_posts()){ the_post(); ?>
	
	<article id='pageContainer' class='text-center jumbotron post page'>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</article>
	
<?php }else echo "<p>No content found :/</p>"; get_footer();?>